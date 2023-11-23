<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\sickLeaves;
use Illuminate\Http\Request;

class sickLeavesController extends Controller
{
   


    //show create form
    public function create(){
        $users = User::all(); // Retrieve a collection of all users
        return view('sickleaves.create', compact('users'));
    }


    // public function search(Request $request){
    //     $search = $request->input('query');
    //     $users = User::where('name', 'like', '%'.$search.'%')->get();

    //     return view('sickleaves.create', compact('users'));
    // }


    //store sickleave data
    public function store(Request $request){        
        $formFields = $request->validate([
            'user_id' => 'required|exists:users,id',
            'sickleave' => 'required'
        ]);

        if($request->hasFile('sickleave')){
            $formFields['sickleave'] = $request->file('sickleave')->store('sickleaves','public');
        }


        sickLeaves::create($formFields);

        return redirect('/homepage/staff')->with('message','sick leave uploaded successfully');
    }

}
