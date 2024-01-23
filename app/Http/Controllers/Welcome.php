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
            'Email' => $request->input('email'),
            'Password' => $request->input('password'),
        ];

        $credentialUsername = $request->input('username');

        if (Auth::attempt($credentials) && Auth::user()->role == 'admin') {
            return redirect()->route('to_employee_dashboard');
        }elseif(Auth::attempt($credentials) && Auth::attempt($credentialUsername )) {
            return redirect()->route('to_roombook_create_home');
        }else {
            return redirect()->route('login_form_welcome');
        }
    }
}

