<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Employee extends Controller
{

    public function up_Login_Employee(Request $request)
    {
        $id = session('id');
        $Email = session('email');
        $Password = session('password');
        $employee_result_up = DB::table("emp_login")
          ->select()
          ->get();

        return redirect()->route('to_employee_dashboard')->with('employee_result_up', $employee_result_up);

    }

    public function logout_Employee()
    {
        Auth::guard('admin')->logout();
        return redirectTo('/');
    }


}
