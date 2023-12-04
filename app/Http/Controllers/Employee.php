<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Employee extends Controller
{

    public function up_Login_Employee(Request $request)
    {
        $id = session('empid');
        $Email = session('Emp_Email');
        $Password = session('Emp_Password');
        $employee_result_up = DB::table("emp_login")
                ->select(array(                ))
          ->get();

        return redirect()->route('to_employee_dashboard')->with('employee_result_up', $employee_result_up);

    }

    public function logout_Employee()
    {
        Auth::guard('admin')->logout();
        return redirectTo('/');
    }


}
