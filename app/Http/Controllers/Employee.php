<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Employee extends Controller
{

    public function up_Login_Employee(Request $request)
    {
        $id = $request->session()->get('empid');
        $Email = $request->input('Emp_Email');
        $Password = $request->input('Emp_Password');

        $employee_result_up = DB::table("emp_login")
                ->select(array(
               'empid' => $id,
               'Emp_Email' => $Email,
               'Emp_Password' => $Password
                ))
          ->get();

        return redirect()->route('admin.to_employee_dashboard')->with('employee_result_up', $employee_result_up);

    }

    public function logout_Employee()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('login_form_welcome');
    }


}
