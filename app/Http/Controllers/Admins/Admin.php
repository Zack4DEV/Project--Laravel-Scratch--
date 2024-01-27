<?php

namespace  App\Http\Controllers\Admins;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;

class Admin extends Controller {

    public function dashboard_Employee_To()
    {
        $chartroom1row = DB::table("roombook")
            ->select('*')
            ->where('roomtype', "=", "Superior Room")
            ->count();

        $chartroom2row = DB::table("roombook")
            ->select('*')
            ->where('roomtype', "=", "Deluxe Room")
            ->count();

        $chartroom3row = DB::table("roombook")
            ->select('*')
            ->where('roomtype', "=", "Guest House")
            ->count();

        $chartroom4row = DB::table("roombook")
            ->select('*')
            ->where('roomtype', "=", "Single Room")
            ->count();

        $roombookrow = DB::table("roombook")
            ->select('*')
            ->count();

        $staffrow = DB::table("staff")
            ->select('*')
            ->count();

        $roomrow = DB::table("room")
            ->select('*')
            ->count();

        return view('Admins.Admin.Dashboard')
            ->with('chartroom1row', $chartroom1row)
            ->with('chartroom2row', $chartroom2row)
            ->with('chartroom3row', $chartroom3row)
            ->with('chartroom4row', $chartroom4row)
            ->with('roombookrow', $roombookrow)
            ->with('staffrow', $staffrow)
            ->with('roomrow', $roomrow);
        }
    public function dashboard_Employee_Edit()
    {
        $result = DB::table('payment')
               ->select('cout', 'finaltotal')
               ->count();

        return redirect()->route('to_employee_dashboard')->with('result', $result);
    }

}
