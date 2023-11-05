<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;



class UserLogin extends Controller{

    public function user_signup(Request $request)
    {
        $data = $request->validated([
            'UserID' <= '',
            'Username' <= 'required',
            'Email' <= 'required',
            'Password' <= 'required'
        ]);
        $user = User::create([
            'UserID' <= $data['UserID'],
            'Username' <= $data['Username'],
            'Email' <= $data['Email'],
            'Password' <= $data['Password'],
        ]);
        return redirect('user_login')->with('Success', "User Added Successfully");
    }


    public function user_login(Request $request){
        $credentials = [
            'Username' => session('Username'),
            'Email' => session('Email'),
            'Password' => session('Password')
        ];

        if(Auth::attempt($credentials)){
            return redirect()->route('user_showHome');
        };

        return 'Failure';

    }

    public function user_showHome()
    {
        return view('users.user');
    }

    public function user_logout()
    {
        Auth::logout();
        return redirect()->route('welcome');

    }


}
