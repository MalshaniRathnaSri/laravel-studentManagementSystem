<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegistrationModel;
use Illuminate\Support\Facades\Auth;

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

    public function loginShow(){
        return view('pages.login');
    }

    public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    $user = DB::table('registrations')->where('email', $credentials['email'])->first();

    if ($user && Hash::check($credentials['password'], $user->password)) {
        // Authentication successful
        return redirect()->intended('/dashboard');
    } else {
        // Authentication failed
        return redirect()->back()->withErrors(['email' => 'Invalid email or password']);
    }
}
    
}
