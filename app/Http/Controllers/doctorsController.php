<?php

namespace App\Http\Controllers;

use App\Models\doctors;
use App\Models\appointments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class doctorsController extends Controller
{
    //show create form
    public function create(){
        return view('doctors.create');
    }

    //store sickleave data
    public function store(Request $request){        
        $formFields = $request->validate([
            'id' => 'required|integer|unique:doctors,id',
            'name' => 'required',
            'specialty' => 'required'
        ]);

        doctors::create($formFields);

        return redirect('/homepage/staff')->with('message','doctor added successfully');
    }

    // show all doctors
    public function show(){
        $doctors = doctors::all();
        return view('doctors.list', compact('doctors'));
    }

    //delete doctor
    public function destroy($id)
    {
        $doctor = doctors::find($id);
        DB::table('appointments')->where('doctor_id', $id)->delete();
        $doctor->delete();

        return redirect('/homepage/staff')->with('message','doctor deleted successfully');;
    }
}
