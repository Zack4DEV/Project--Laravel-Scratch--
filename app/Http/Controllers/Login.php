<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller {

        public function create_login(Request $request)
        {
        return view('Layouts.AuthLoginContainer');
        }

}
