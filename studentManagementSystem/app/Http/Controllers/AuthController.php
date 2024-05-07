<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;


class AuthController extends Controller
{
    public function show(){
        return view('_auth.adminlogin');
    }
    public function AuthLogin(Request $request){
        $remember = !empty($request->remember)?true : false;
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password],$remember))
        {
            return view('_admin.admindashboard');
        }
        else
        {
            return view('_admin.adminsidebar')->with('error','please');
        }

    }
}
