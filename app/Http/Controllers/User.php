<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class User extends Controller{

    public function user_Signup_Up(Request $request)
    {
        $id = session('UserId');
        $Username = session('Username');
        $Email = session('Email');
        $Password = session('Password');
        $CPassword = session('Cpassword');

        $user_result_up = DB::table("signup")
        ->select(array(        ))
        ->where('UserId', "=", "{{ $id }}")
        ->get();

        return redirect()->route('in_signup_user')->with('user_result_up', $user_result_up);
    }

    public function user_Signup_In(Request $request)
    {


        $Username = $request->input('Username');
        $Email = $request->input('Email');
        $Password = $request->input('Password');
        //$CPassword = $request->input('CPassword');
        
        $result_in = DB::table("signup")
            ->insert(array(
                'Username' => $Username,
                'Email' => $Email,
                'Password' => $Password,
                 //'CPassword' => $CPassword
            ));

        $request->session()->put('UserId', $id);
        
        $request->session()->put('Username', $Username);
        $request->session()->put('Email', $Email);
        $request->session()->put('Password', $Password);
        //$request->session()->put('Cpassword', $CPassword);
        
        return redirect()->route('login_from_welcome')->with('result_in', $result_in);
    }



    public function user_Logout()
    {
        Auth::logout();
        return redirectTo('/');

    }

}
