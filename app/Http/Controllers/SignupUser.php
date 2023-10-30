<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class SignupUser extends Controller{

    public function index_user(Request $request)
    {
        $user = new User();
        $user->Username = $request->Username;
        $user->Email = $request->Email;
        $user->Password = $request->Password;
        $user->CPassword = $request->CPassword;
        $user->save();
        return redirect('home');

    }
    public function create_user(Request $request)
    {
        return view('Layouts.AuthLogin.Signup.SignUser');
    }
}
