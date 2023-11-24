<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Staff extends Controller
{
    public function staff_To(Request $request)
    {

        $re = DB::table('staff')
            ->select('*')
            ->get();

        return view('Admins.Admin.Staff')->with('re', $re);

    }

    public function staff_Create_To(Request $request)
    {
        $staffname = session('name');
        $staffwork = session('work');

        $addstaff = $request->input('addstaff');

        while($addstaff > 0){

            $result = DB::table("staff")
            ->insert(array(
                'name' => $staffname,
                'work' => $staffwork,
            ));

            $addstaff--;
        }

        return redirect()->route('to_staff');
    }

    public function staff_Delete_To()
    {

        $redeletesql = DB::table('staff')
            ->delete('*');

        return redirect()->route('to_staff');
    }
}
