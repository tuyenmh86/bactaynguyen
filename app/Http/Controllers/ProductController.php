<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Language;
use Auth;
use App\SubSubCategory;
use Session;
use ImageOptimizer;
use Image;
use Illuminate\Support\Facades\Input;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin_products()
    {
        $type = 'In House';
        $products = Product::where('added_by', 'admin')->orderBy('created_at', 'desc')->get();

        return view('products.index', compact('products','type'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function seller_products()
    {
        $type = 'Seller';
        $products = Product::where('added_by', 'seller')->orderBy('created_at', 'desc')->get();
        return view('products.index', compact('products','type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product;
        $product->name = $request->name;
        $product->slug = to_slug($request->name);
        $product->added_by = $request->added_by;

        $product->user_id = Auth::user()->id;
        $product->category_id = $request->category_id;
        $product->provice_id = $request->province;
        $product->district_id = $request->district_id;
        $product->ward_id = $request->ward_id;
        $product->address = $request->address;
        $product->bedroom = $request->bedroom;
        $product->wc = $request->wc;
        $product->dientich = $request->dientich;
        $product->huongdat = $request->huongdat;
        $product->long = $request->long;
        $product->lat = $request->lat;
        //  $product->subcategory_id = $request->subcategory_id;
        //  $product->subsubcategory_id = $request->subsubcategory_id;
        // $product->brand_id = $request->brand_id;
        $photos = array();

        if($request->hasFile('photos')){
            foreach ($request->photos as $key => $photo) {
                $path = 'uploads/products/thumbnail/'.$photo->getClientOriginalName();
                Image::make($photo)->resize(null, 450, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->save('public/'.$path);
                array_push($photos, $path);
            }
            $product->photos = json_encode($photos);
        }

        if($request->hasFile('thumbnail_img')){
            $path = 'uploads/products/thumbnail/'.$request->thumbnail_img->getClientOriginalName();
            Image::make($request->thumbnail_img)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->save('public/'.$path);
            $product->thumbnail_img=$path;
        }

        if($request->hasFile('featured_img')){
            $path = 'uploads/products/featured/'.$request->featured_img->getClientOriginalName();
            Image::make($request->featured_img)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->save('public/'.$path);
            $product->featured_img=$path;
        }

        if($request->hasFile('flash_deal_img')){
//            $product->flash_deal_img = $request->flash_deal_img->store('uploads/products/flash_deal');
            $path = 'uploads/products/featured/'.$request->flash_deal_img->getClientOriginalName();
            Image::make($request->flash_deal_img)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->save('public/'.$path);
            $product->flash_deal_img = $path;
        }

        // $product->unit = $request->unit;
        $product->tags = implode('|',$request->tags);
        $product->description = $request->description;
        $product->video_provider = $request->video_provider;
        $product->video_link = $request->video_link;
        $product->unit_price = $request->unit_price;
        // $product->purchase_price = $request->purchase_price;
        // $product->tax = $request->tax;
        // $product->tax_type = $request->tax_type;
        // $product->discount = $request->discount;
        // $product->discount_type = $request->discount_type;
        // $product->shipping_type = $request->shipping_type;
        // if($request->shipping_type == 'free'){
        //     $product->shipping_cost = 0;
        // }
        // elseif ($request->shipping_type == 'local_pickup') {
        //     $product->shipping_cost = $request->local_pickup_shipping_cost;
        // }
        // elseif ($request->shipping_type == 'flat_rate') {
        //     $product->shipping_cost = $request->flat_shipping_cost;
        // }
        $product->meta_title = $request->meta_title;
        $product->meta_description = $request->meta_description;

        if($request->hasFile('meta_img')){
            $path = 'uploads/products/featured/'.$request->meta_img->getClientOriginalName();
            Image::make($request->meta_img)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->save('public/'.$path);
                $product->meta_img=$path;
        }

        if($request->hasFile('pdf')){
            $file = $request->pdf;
            $product->pdf=$file->move('public/uploads/products/pdf/', $file->getClientOriginalName());
        }

//        $product->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->name)).'-'.str_random(5);

    //     if($request->has('colors_active') && $request->has('colors') && count($request->colors) > 0){
    //         $product->colors = json_encode($request->colors);
    //     }
    //     else {
    //         $colors = array();
    //         $product->colors = json_encode($colors);
    // }

        // $choice_options = array();

        // if($request->has('choice')){
        //     foreach ($request->choice_no as $key => $no) {
        //         $str = 'choice_options_'.$no;
        //         $item['name'] = 'choice_'.$no;
        //         $item['title'] = $request->choice[$key];
        //         $item['options'] = explode(',', implode('|', $request[$str]));
        //         array_push($choice_options, $item);
        //     }
        // }

        // $product->choice_options = json_encode($choice_options);

        // $variations = array();

        //combinations start
        // $options = array();
        // if($request->has('colors_active') && $request->has('colors') && count($request->colors) > 0){
        //     $colors_active = 1;
        //     array_push($options, $request->colors);
        // }

        // if($request->has('choice_no')){
        //     foreach ($request->choice_no as $key => $no) {
        //         $name = 'choice_options_'.$no;
        //         $my_str = implode('|',$request[$name]);
        //         array_push($options, explode(',', $my_str));
        //     }
        // }

        //Generates the combinations of customer choice options
        // $combinations = combinations($options);
        // if(count($combinations[0]) > 0){
        //     $quantity = 0;
        //     foreach ($combinations as $key => $combination){
        //         $str = '';
        //         foreach ($combination as $key => $item){
        //             if($key > 0 ){
        //                 $str .= '-'.str_replace(' ', '', $item);
        //             }
        //             else{
        //                 if($request->has('colors_active') && $request->has('colors') && count($request->colors) > 0){
        //                     $color_name = \App\Color::where('code', $item)->first()->name;
        //                     $str .= $color_name;
        //                 }
        //                 else{
        //                     $str .= str_replace(' ', '', $item);
        //                 }
        //             }
        //         }
        //         $item = array();
        //         $item['price'] = $request['price_'.str_replace('.', '_', $str)];
        //         $item['sku'] = $request['sku_'.str_replace('.', '_', $str)];
        //         $item['qty'] = $request['qty_'.str_replace('.', '_', $str)];
        //         $variations[$str] = $item;
        //         $quantity +=$item['qty'];
        //     }
            
        // }else{
        //     $quantity = $request->quantity;
        // }
        //combinations end

        // $product->variations = json_encode($variations);
        // $product->quantity = $quantity;
        $data = openJSONFile('en');
        $data[$product->name] = $product->name;
        saveJSONFile('en', $data);

        if($product->save()){
            flash(__('Product has been inserted successfully'))->success();
           if(Auth::user()->user_type == 'admin'){
                return redirect()->route('products.admin');
           }
           else{
               return redirect()->route('seller.products');
           }
        }
        else{
            flash(__('Something went wrong'))->error();
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function admin_product_edit($id)
    {
        $product = Product::findOrFail($id);
//        $product = Product::findOrFail(decrypt($id));
        //dd(json_decode($product->price_variations)->choices_0_S_price);
        $tags = json_decode($product->tags);
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories', 'tags'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function seller_product_edit($id)
    {
        $product = Product::findOrFail($id);
        //dd(json_decode($product->price_variations)->choices_0_S_price);
        $tags = json_decode($product->tags);
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->name = $request->name;
        // $product->slug = to_slug($product->name);sss
        $product->category_id = $request->category_id;
        $product->subcategory_id = $request->subcategory_id;
        $product->subsubcategory_id = $request->subsubcategory_id;
        $product->brand_id = $request->brand_id;

        if($request->has('previous_photos')){
            $photos = $request->previous_photos;
        }
        else{
            $photos = array();
        }


        if($request->hasFile('photos')){
            foreach ($request->photos as $key => $photo) {
                $path = 'uploads/products/photos/'.$photo->getClientOriginalName();
                Image::make($photo)->resize(null, 450, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->save('public/'.$path);
                array_push($photos, $path);
            }
        }
        $product->photos = json_encode($photos);

        $product->thumbnail_img = $request->previous_thumbnail_img;

        if($request->hasFile('thumbnail_img')){
            $path = 'uploads/products/thumbnail/'.$request->thumbnail_img->getClientOriginalName();
            Image::make($request->thumbnail_img)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->save('public/'.$path);
            $product->thumbnail_img=$path;
        }

        $product->featured_img = $request->previous_featured_img;
        if($request->hasFile('featured_img')){
            $path = 'uploads/products/featured/'.$request->thumbnail_img->getClientOriginalName();
            Image::make($request->thumbnail_img)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->save('public/'.$path);
            $product->thumbnail_img=$path;
        }


        $product->flash_deal_img = $request->previous_flash_deal_img;
        if($request->hasFile('flash_deal_img')){
            $path = 'uploads/products/flash_deal/'.$request->flash_deal_img->getClientOriginalName();
            Image::make($request->flash_deal_img)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->save('public/'.$path);
            $product->flash_deal_img=$path;
        }
        $product->unit = $request->unit;
        $product->tags = implode('|',$request->tags);
        $product->description = $request->description;
        $product->video_provider = $request->video_provider;
        $product->video_link = $request->video_link;
        $product->unit_price = $request->unit_price;
        $product->purchase_price = $request->purchase_price;
        $product->tax = $request->tax;
        $product->tax_type = $request->tax_type;
        $product->discount = $request->discount;
        $product->shipping_type = $request->shipping_type;
        if($request->shipping_type == 'free'){
            $product->shipping_cost = 0;
        }
        elseif ($request->shipping_type == 'local_pickup') {
            $product->shipping_cost = $request->local_pickup_shipping_cost;
        }
        elseif ($request->shipping_type == 'flat_rate') {
            $product->shipping_cost = $request->flat_shipping_cost;
        }
        $product->discount_type = $request->discount_type;
        $product->meta_title = $request->meta_title;
        $product->meta_description = $request->meta_description;

        $product->meta_img = $request->previous_meta_img;

        if($request->hasFile('meta_img')){
            $path = 'uploads/products/meta/'.$request->meta_img->getClientOriginalName();
            Image::make($request->meta_img)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->save('public/'.$path);
            $product->meta_img=$path;
        }
            if($request->hasFile('pdf')){
                $product->pdf = $request->pdf->store('uploads/products/pdf');
            }

        $product->slug = to_slug($request->name);

        if($request->has('colors_active') && $request->has('colors') && count($request->colors) > 0){
            $product->colors = json_encode($request->colors);
        }
        else {
            $colors = array();
            $product->colors = json_encode($colors);
        }

        $choice_options = array();

        if($request->has('choice')){
            foreach ($request->choice_no as $key => $no) {
                $str = 'choice_options_'.$no;
                $item['name'] = 'choice_'.$no;
                $item['title'] = $request->choice[$key];
                $item['options'] = explode(',', implode('|', $request[$str]));
                array_push($choice_options, $item);
            }
        }

        $product->choice_options = json_encode($choice_options);

        foreach (Language::all() as $key => $language) {
            $data = openJSONFile($language->code);
            unset($data[$product->name]);
            $data[$request->name] = "";
            saveJSONFile($language->code, $data);
        }

        $variations = array();

        //combinations start
        $options = array();
        if($request->has('colors_active') && $request->has('colors') && count($request->colors) > 0){
            $colors_active = 1;
            array_push($options, $request->colors);
        }

        if($request->has('choice_no')){
            foreach ($request->choice_no as $key => $no) {
                $name = 'choice_options_'.$no;
                $my_str = implode('|',$request[$name]);
                array_push($options, explode(',', $my_str));
            }
        }

        $combinations = combinations($options);
        if(count($combinations[0]) > 0){
            foreach ($combinations as $key => $combination){
                $str = '';
                foreach ($combination as $key => $item){
                    if($key > 0 ){
                        $str .= '-'.str_replace(' ', '', $item);
                    }
                    else{
                        if($request->has('colors_active') && $request->has('colors') && count($request->colors) > 0){
                            $color_name = \App\Color::where('code', $item)->first()->name;
                            $str .= $color_name;
                        }
                        else{
                            $str .= str_replace(' ', '', $item);
                        }
                    }
                }
                $item = array();
                $item['price'] = $request['price_'.str_replace('.', '_', $str)];
                $item['sku'] = $request['sku_'.str_replace('.', '_', $str)];
                $item['discount'] = $request['discount_'.str_replace('.', '_', $str)];
                $item['qty'] = $request['qty_'.str_replace('.', '_', $str)];
                $variations[$str] = $item;

            }
        }
        //combinations end

        $product->variations = json_encode($variations);

        if($product->save()){
            flash(__('Product has been updated successfully'))->success();
            if(Auth::user()->user_type == 'admin'){
                return redirect()->route('products.admin');
            }
            else{
                return redirect()->route('seller.products');
            }
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
        $product = Product::findOrFail($id);
        if(Product::destroy($id)){
            foreach (Language::all() as $key => $language) {
                $data = openJSONFile($language->code);
                unset($data[$product->name]);
                saveJSONFile($language->code, $data);
            }
            if($product->thumbnail_img != null){
//                unlink($product->thumbnail_img);
            }
            if($product->featured_img != null){
//                unlink($product->featured_img);
            }
            if($product->flash_deal_img != null){
//                unlink($product->flash_deal_img);
            }
            foreach (json_decode($product->photos) as $key => $photo) {
//                unlink($photo);
            }
            flash(__('Product has been deleted successfully'))->success();
            if(Auth::user()->user_type == 'admin'){
                return redirect()->route('products.admin');
            }
            else{
                return redirect()->route('seller.products');
            }
        }
        else{
            flash(__('Something went wrong'))->error();
            return back();
        }
    }

    /**
     * Duplicates the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function duplicate($id)
    {
        $product = Product::find($id);
        $product_new = $product->replicate();
//        $product_new->slug = substr($product_new->slug, 0, -5).str_random(5);
        $product_new->slug  = to_slug($product_new->slug).str_random(5);
        if($product_new->save()){
            flash(__('Product has been duplicated successfully'))->success();
            if(Auth::user()->user_type == 'admin'||Auth::user()->user_type == 'staff'){
                return redirect()->route('products.admin');
            }
            else{
                return redirect()->route('seller.products');
            }
        }
        else{
            flash(__('Something went wrong'))->error();
            return back();
        }
    }

    public function get_products_by_subsubcategory(Request $request)
    {
//        $products = Product::where('subsubcategory_id', $request->subsubcategory_id)->get();
        $products = Product::where('category_id', $request->subsubcategory_id)->get();
        return $products;
    }

    public function get_products_by_brand(Request $request)
    {
        $products = Product::where('brand_id', $request->brand_id)->get();
        return view('partials.product_select', compact('products'));
    }

    public function updateTodaysDeal(Request $request)
    {
        $product = Product::findOrFail($request->id);
        $product->todays_deal = $request->status;
        if($product->save()){
            return 1;
        }
        return 0;
    }

    public function updatePublished(Request $request)
    {
        $product = Product::findOrFail($request->id);
        $product->published = $request->status;
        if($product->save()){
            return 1;
        }
        return 0;
    }

    public function updateFeatured(Request $request)
    {
        $product = Product::findOrFail($request->id);
        $product->featured = $request->status;
        if($product->save()){
            return 1;
        }
        return 0;
    }
    public function updateVip1(Request $request)
    {
        $product = Product::findOrFail($request->id);
        $product->vip1 = $request->status;
        if($product->save()){
            return 1;
        }
        return 0;
    }
    public function updateVip2(Request $request)
    {
        $product = Product::findOrFail($request->id);
        $product->vip2 = $request->status;
        if($product->save()){
            return 1;
        }
        return 0;
    }
    
    public function sku_combination(Request $request)
    {
        $options = array();
        if($request->has('colors_active') && $request->has('colors') && count($request->colors) > 0){
            $colors_active = 1;
            array_push($options, $request->colors);
        }
        else {
            $colors_active = 0;
        }

        $unit_price = $request->unit_price;
        $product_name = $request->name;

        if($request->has('choice_no')){
            foreach ($request->choice_no as $key => $no) {
                $name = 'choice_options_'.$no;
                $my_str = implode('|', $request[$name]);
                array_push($options, explode(',', $my_str));
            }
        }

        $combinations = combinations($options);
        return view('partials.sku_combinations', compact('combinations', 'unit_price', 'colors_active', 'product_name'));
    }

    public function sku_combination_edit(Request $request)
    {
        $product = Product::findOrFail($request->id);

        $options = array();
        if($request->has('colors_active') && $request->has('colors') && count($request->colors) > 0){
            $colors_active = 1;
            array_push($options, $request->colors);
        }
        else {
            $colors_active = 0;
        }

        $product_name = $request->name;
        $unit_price = $request->unit_price;

        if($request->has('choice_no')){
            foreach ($request->choice_no as $key => $no) {
                $name = 'choice_options_'.$no;
                $my_str = implode('|', $request[$name]);
                array_push($options, explode(',', $my_str));
            }
        }

        $combinations = combinations($options);
        return view('partials.sku_combinations_edit', compact('combinations', 'unit_price', 'colors_active', 'product_name', 'product'));
    }

}
