<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Auth;

class Welcome extends Controller
{
    public function welcome_Form_Login(Request $request)
    {
        return view('Layouts.App');
    }

    public function welcome_Login_To(Request $request)
    {
        $credentials = [
            'Email' => $request->input('Email'),
            'Password' => $request->input('Password'),
        ];

        $credentialUsername = $request->input('Username');

        if (Auth::attempt($credentials) && Auth::user()->role == 'admin') {
            return redirect()->route('employee_dashboard_show');
        }elseif(Auth::attempt($credentials) && Auth::attempt($credentialUsername )) {
            return redirect()->route('to_roombook_create_home');
        }else {
            return redirect()->route('in_signup_user');
        }
    }
}

