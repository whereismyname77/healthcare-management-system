<?php

namespace App\Http\Controllers;

use App\Models\prescription;
use Illuminate\Http\Request;

class prescriptionController extends Controller
{
    //show create form
    public function create(){
        return view('prescription.create');
    }

     //store prescription
     public function store(Request $request){        
        $formFields = $request->validate([
            'user_id' => 'required|exists:users,id',
            'medicine_name' => 'required',
            'amount' => 'required',
            'strength' => 'nullable',
            'instructions' => 'nullable'
        ]);


        prescription::create($formFields);

        return redirect('/homepage/staff')->with('message','prescription uploaded successfully');
    }

    //show it to user
    public function show($id){

        $prescription = prescription::find($id);

        return view('prescription.info',['prescription' => $prescription]);
    }
}
