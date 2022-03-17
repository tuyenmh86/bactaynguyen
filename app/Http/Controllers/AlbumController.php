<?php

namespace App\Http\Controllers;

use App\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index()
    {
        $albums = Album::all();
        return view('album.index', compact('albums'));
    }
    public function create()
    {
        return view('album.create');
    }
    public function store(Request $request)
    {
        $album = new Album;
        $album->name = $request->name;
        $album->alias = seo_slug ($album->name);
        $album->position = $request->position;
        if($album->save()){
            flash(__('Album has been inserted successfully'))->success();
//            if(Auth::user()->user_type == 'admin'){
            return redirect()->route('albums');
//            }
//            else{
//                return redirect()->route('seller.products');
//            }
        }
        else{
            flash(__('Something went wrong'))->error();
            return back();
        }
    }
    public function edit($id)
    {
        $album = Album::findOrFail($id);
        return view('album.edit', compact('album'));

    }
    public function update(Request $request, $id)
    {
        $album = Album::findOrFail($id);
        $album->name = $request->name;
        $album->alias = seo_slug($album->name);
        $album->position = $request->position;
       
        if($album->save()){
            flash(__('Album has been inserted successfully'))->success();
//            if(Auth::user()->user_type == 'admin'){
            return redirect()->route('pages');
//            }
//            else{
//                return redirect()->route('seller.products');
//            }
        }
        else{
            flash(__('Something went wrong'))->error();
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!in_array($id,[1,2,3,5,6,9,10,11])) {
            $album = Album::findOrFail($id);
            if (Album::destroy($id)) {
                flash(__('Product has been deleted successfully'))->success();
                return redirect()->route('pages');

            }
        }
        else{
            flash(__('Something went wrong'))->error();
            return back();
        }
    }

    public function updatePublished(Request $request)
    {
       $album = Album::findOrFail($request->id);
       $album->published = $request->status;
        if($album->save()){
            return 1;
        }
        return 0;
    }
    public function updateFeatured(Request $request)
    {
       $album = Album::findOrFail($request->id);
       $album->featured = $request->status;
        if($album->save()){
            return 1;
        }
        return 0;
    }
}
