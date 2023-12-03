<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class User extends Controller{

    public function user_Signup_Up(Request $request)
    {

        $request->session()->put('UserId', $id);

        $Username = $request->input('Username');
        $Email = $request->input('Email');
        $Password = $request->input('Password');
        //$CPassword = $request->input('CPassword');

        $user_result_up = DB::table("signup")
        ->select(array(
            'UserId' <= $id,
            'Username' => $Username,
            'Email' => $Email,
            'Password' => $Password,
            //'CPassword' => $CPassword
        ))
        ->where('UserId', "=", "{{ $id }}")
        ->get();

        return view('Layouts.App')->with('user_result_up', $user_result_up);
    }

    public function user_Signup_In(Request $request)
    {

        $request->session()->put('UserId', $id);

        $Username = $request->input('Username');
        $Email = $request->input('Email');
        $Password = $request->input('Password');
        //$CPassword = $request->input('CPassword');
        $result_in = DB::table("signup")
            ->insert(array(
                'UserId' => $id,
                'Username' => $Username,
                'Email' => $Email,
                'Password' => $Password,
                //'CPassword' => $CPassword
            ));

        return redirect()->route('up_signup_user')->with('result_in', $result_in);
    }



    public function user_Logout()
    {
        Auth::logout();
        return redirect(route('login_to_welcome'));

    }

}
