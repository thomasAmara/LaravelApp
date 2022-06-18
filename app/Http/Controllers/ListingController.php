<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    //show all listing

    public function index() {
        // dd(request('tag'));
        return view('listings.index', [
            // 'listings' => Listing::all()
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->get()
        ]);
    }

      //show single listing
      public function show(Listing $listing) {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

     //show create Form
     public function create(Listing $listing) {
        return view('listings.create', [
            'listing' => $listing
        ]);
    }

       //store Listing Data
       public function store(Request $request) {
            $formFields = $request->validate([
            'title' => 'required',
            'tags' => 'required',
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'email' => ['required', 'email'],
            'website' => 'required',           
            'description' => 'required',
      ]);

      Listing::create($formFields); //to create the database
      return redirect('/')->with('message', 'Listing Created successfully!');
    }
}
