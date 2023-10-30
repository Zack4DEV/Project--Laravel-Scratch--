<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeLogin extends Controller {

    public function index_employee(Request $request)
    {
        if($request->session()->has('usermail')){
            return redirect('admin/admin');
        }else {
            return view('Layouts.AuthLogin.AuthEmployeeLogin');
        }
    }

}
