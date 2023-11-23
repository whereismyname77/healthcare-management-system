<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\sickLeaves;
use App\Models\appointments;
use App\Models\prescription;
use Illuminate\Http\Request;
use App\Models\medicalReports;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    //show all listings
    public function index(){

        if (auth()->check()){
        $user_id = auth()->user()->id; 

        $appointments = appointments::where('user_id', $user_id)->orderBy('created_at', 'desc')->get();
        $sickleaves = sickLeaves::where('user_id', $user_id)->orderBy('created_at', 'desc')->get();
        $prescriptions = prescription::where('user_id', $user_id)->orderBy('created_at', 'desc')->get();
        $medicalreports = medicalReports::where('user_id', $user_id)->orderBy('created_at', 'desc')->get();

        

        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag','search']))->paginate(6),
            'sickleaves' => $sickleaves,
            'medicalreports' => $medicalreports,
            'appointments' => $appointments,
            'prescriptions' => $prescriptions
            
        ]); }
        return view('listings.index');
    }

    //show single listing
    public function show(Listing $listing){
        return view('listings.show', [
            'listing' => $listing
        ]);
    }


    //show create form
    public function create(){
        return view('listings.create');
    }


    //store listing data
    public function store(Request $request){        
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings','company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required','email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos','public');
        }

        $formFields['user_id'] = auth()->id();


        Listing::create($formFields);

        return redirect('/')->with('message','listing created successfully');
    }
    //show edit form
    public function edit(Listing $listing){
        return view('listings.edit', ['listing' => $listing]);
    }

    //update listing data
    public function update(Request $request, Listing $listing){  
        
        if($listing->user_id != auth()->id()){
            abort(403,"un auth");
        }


        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required'],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required','email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos','public');
        }

        $listing->update($formFields);

        return back()->with('message','listing updated successfully');
    }

    //delete listing
    public function destroy(Listing $listing){ 
        if($listing->user_id != auth()->id()){
            abort(403,"un auth");
        }
        
        $listing->delete();
        return redirect('/')->with('message','Listing deleted successfuly');
    }

    //manage

    public function manage(){
        return view('/listings.manage',['listings' =>
        auth()->user()->listings()->get()]);
    }

}
