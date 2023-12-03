<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Payment extends Controller {

    public function payment_To(Request $request)
    {
        $id = session('id');

        $paymantresult = DB::table("payment")
                    ->select('*')
                    ->where('id', "=", "$id")
                    ->get();

        return view('Admins.Admin.Payment')->with('paymantresult', $paymantresult);
    }

    public function payment_Delete_To(Request $request)
    {
        $id = session('id');

        $deletesql = DB::table('payment')
                ->where('id', '=', $id)
                ->delete('*');

        return redirect()->route('to_payment');
    }

    public function payment_To_Check_Room(Request $request)
    {


        $cre = DB::table("room")
                ->select('*')
    //          ->where('roomtype', "=", "")
                ->count();

        $r = 0;
        $sc = 0;
        $gh = 0;
        $sr = 0;
        $dr = 0;

        return view('Admins.Admin.Roombook', compact('rre', 'r', 'sc', 'gh', 'sr', 'dr'));
    }

}
