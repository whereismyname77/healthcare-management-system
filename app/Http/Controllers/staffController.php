<?php

namespace App\Http\Controllers;

use auth;
use App\Models\User;
use App\Models\staff;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class staffController extends Controller
{

    public function index(){
        return view('staff.homepage');
    }

    public function create(){
        return view('staff.register');
    }

    public function store(Request $request){
        $formFields = $request->validate([
            'name' => ['required','min:3'],
            'email' => ['required','email',Rule::unique('staff','email')],
            'password' => 'required|confirmed|min:3'
        ]);

        //hash password
        $formFields['password'] = bcrypt($formFields['password']);

        //create
        $staff = staff::create($formFields);

        //login
       // auth()->login($staff);
        


        return redirect('/login/staff')->with('message','staff account created successfully');
    }

    //logout
    public function logout(Request $request){
       

        auth()->guard('staff')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login/staff')->with('message','you have been loged out');
    }


    //show login form
    public function login(){
        return view('staff.login');
    }

    //authenticate staff
    public function authenticate(Request $request)
{
    $formFields = $request->validate([
        'email' => ['required', 'email'],
        'password' => 'required',
    ]);

    if (auth()->guard('staff')->attempt($formFields)) {
        $request->session()->regenerate();
        return redirect('/homepage/staff')->with('message', 'You have logged in as staff');
    }

    return back()
        ->withInput(['email' => $request->input('email')])
        ->withErrors(['email' => 'Invalid credentials']);
}


public function search(Request $request)
    {
        $query = $request->input('query');
    
        // Perform the search using the query
        $users = User::where('name', 'like', "%$query%")
                     ->orWhere('id', 'like', "%$query%")
                     ->get();
    
        return view('staff.search-results', compact('users', 'query'));
    }




}
