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
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(6)
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

      //check if image upload 
      if($request->hasFile('logo')) {
          $formFields['logo'] = $request->file('logo')->store('logos', 'public');
      }

      $formFields['user_id'] = auth()->id();

      Listing::create($formFields); //to create the database
      return redirect('/')->with('message', 'Listing Created successfully!');
    }

        //show edit form
    public function edit(Listing $listing) {
        return view('listings.edit', ['listing' => $listing]);
    }


    //Update Listing Data
    public function update(Request $request, Listing $listing) {

        //make sure logged in user is owner
        if($listing->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

        $formFields = $request->validate([
        'title' => 'required',
        'tags' => 'required',
        'company' => ['required'],
        'location' => 'required',
        'email' => ['required', 'email'],
        'website' => 'required',           
        'description' => 'required',
  ]);

  //check if image upload 
  if($request->hasFile('logo')) {
      $formFields['logo'] = $request->file('logo')->store('logos', 'public');
  }

  $listing->update($formFields); //to create the database
  return back()->with('message', 'Listing Updated successfully!');
}


   //DELETE Listing
   public function destroy(Listing $listing) {
    //make sure logged in user is owner
    if($listing->user_id != auth()->id()) {
        abort(403, 'Unauthorized Action');
    }
        $listing->delete();
        return redirect('/')->with('message', 'Listing deleted successfully');
   }

   //Manage Listing
   public function manage(){
    return view('listings.manage', ['listings' => auth()->user()->listings()->get()]);
   }
}


