<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\doctors;
use App\Mail\mytestemail;
use App\Models\appointments;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;


class appointmentsController extends Controller
{
    //show create form
    public function create(){
        $doctors = doctors::all();
        return view('appointments.create', compact('doctors'));
    }

    

    //store appointment
    public function store(Request $request){        
        $formFields = $request->validate([
            'user_id' => 'required|exists:users,id',
            'clinic_number' => 'required',
            'date' => 'required',
            'time' => 'required',
            'doctor_id' => ['required', 'exists:doctors,id', Rule::unique('appointments')
            ->where('date', $request->date)
            ->where('time', $request->time)
            ->ignore($request->appointment_id, 'id')
                         ],
                                    ], [
    'doctor_id.unique' => 'The selected time for this doctor is already taken. Please choose a different time.',
        ]);

        $user= User::find($formFields['user_id']);
        Mail::to($user->email)->send(new mytestemail());
        appointments::create($formFields);

        return redirect('/homepage/staff')->with('message','appointment booked successfully
       patient is notified through email');
    }

    //show delete form
    public function delete(){
        return view('appointments.delete');
    }

    //delete
    public function destroy(Request $request){        
        $formFields = $request->validate([
            'id' => 'required|exists:appointments,id',
        ]);

        DB::table('appointments')->where('id', $formFields)->delete();

        return redirect('/homepage/staff')->with('message','appointment deleted successfully');
    }

    //show for patient
    public function showMe($id){
        $appointment = appointments::find($id);
        $doctorID = $appointment['doctor_id'];
        $doctor = doctors::find($doctorID);
        return view('appointments.info' , ['appointment' => $appointment,
                                            'doctor'     => $doctor        ]);
    }

    //show searh 
    public function searchform(){
        return view('appointments.search');
    }

    //search
    public function search(Request $request)
    {
        $query = $request->input('query');
    
        // Perform the search using the query
        $appointment = appointments::find($query);
        
        if($appointment){
        $userid = $appointment['user_id'];
        $user = User::find($userid); 
        return view('appointments.search', compact('appointment' , 'query' , 'user'));
        }
        return view('appointments.search', compact('appointment' , 'query'));
    }




}
