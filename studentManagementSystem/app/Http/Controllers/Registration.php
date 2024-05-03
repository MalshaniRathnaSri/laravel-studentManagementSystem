<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegistrationModel;

class Registration extends Controller
{
    public function index(){
        return view('pages.registration');
    }
    
    public function store(Request $request){
        $registrations = new RegistrationModel();
        $registrations->firstName = $request->input('firstName');
        $registrations->lastName = $request->input('lastName');
        $registrations->email = $request->input('email');
        $registrations->password = $request->input('password');
        $registrations->confirmPassword = $request->input('confirmPassword');
        $registrations->address = $request->input('address');
        $registrations->save();
    
        return redirect()->route('registration')->with('success', 'Registration successful');
    }
    
}
