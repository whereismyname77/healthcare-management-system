<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\medicalReports;

class medicalReportscontroller extends Controller
{
    public function create(){
        $users = User::all(); // Retrieve a collection of all users
        return view('medicalreports.create', compact('users'));
    }

     //store medical report data
     public function store(Request $request){        
        $formFields = $request->validate([
            'user_id' => 'required|exists:users,id',
            'medicalreport' => 'required'
        ]);

        if($request->hasFile('medicalreport')){
            $formFields['medicalreport'] = $request->file('medicalreport')->store('medicalreports','public');
        }


        medicalReports::create($formFields);

        return redirect('/homepage/staff')->with('message','medical report uploaded successfully');
    }

}
