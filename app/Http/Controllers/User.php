<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class User extends Controller{

    public function user_Signup_Up(Request $request)
    {
        $id = session('id');
        $Username = session('username');
        $Email = session('email');
        $Password = session('password');
        $CPassword = session('password');

        /**
        $user_result_up = DB::table('signup')
        ->select()
        ->get();
        
        return redirect()->route('in_signup_user')->with('user_result_up', $user_result_up);
        */

    }

    public function user_Signup_In(Request $request)
    {


        $Username = $request->input('username');
        $Email = $request->input('email');
        $Password = $request->input('password');
        //$CPassword = $request->input('CPassword');
        
        $result_in = DB::table("signup")
            ->insert(array(
                'username' => $Username,
                'email' => $Email,
                'password' => $Password,
                 //'CPassword' => $CPassword
            ));

        $request->session()->put('id', $id);
        
        $request->session()->put('username', $Username);
        $request->session()->put('email', $Email);
        $request->session()->put('password', $Password);
        //$request->session()->put('Cpassword', $CPassword);
        
        return redirect()->route('login_from_welcome')->with('result_in', $result_in);
    }



    public function user_Logout()
    {
        Auth::logout();
        return redirect('/');

    }

}
