<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::orderBy('created_at','desc')->get();
        return view('contacts.index', compact('contacts'));
    }

    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        if(Contact::destroy($id)){
            flash('contact has been deleted successfully')->success();
            return redirect()->route('contacts.index');
        }

        flash('Something went wrong')->error();
        return back();
    }
}
