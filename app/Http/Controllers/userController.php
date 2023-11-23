<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class userController extends Controller
{
    //show register/create form
    public function create(){
        return view('users.register');
    }

    //create new user
    public function store(Request $request){
        $formFields = $request->validate([
            'name' => ['required','min:3'],
            'email' => ['required','email',Rule::unique('users','email')],
            'password' => 'required|confirmed|min:3'
        ]);

        //hash password
        $formFields['password'] = bcrypt($formFields['password']);

        //create
        $user =User::create($formFields);

        //login
        auth()->login($user);


        return redirect('/')->with('message','account created successfully');
    }


    //logout
    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message','you have been loged out');
    }

    //show login form
    public function login(){
        return view('users.login');
    }


    //authenticate user
    public function authenticate(Request $request){

        $formFields = $request->validate([
            'email' => ['required','email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)){

            $request->session()->regenerate();
            return redirect('/')->with('message','you have loged in');
        }
        return back()->withErrors(['email' => 'Invalid credentials'])->onlyInput('email');

    }

}
