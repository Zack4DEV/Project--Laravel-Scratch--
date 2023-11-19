<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Payment extends Controller {

    public function show_payment(Request $request)
    {
        $payment = 'App\Http\Models\Payment'::all();
        return view('Admins.Admin.Payment', compact('payment'));
    }

    public function destroy_payment(Request $request)
    {
        $id = $request->id;
        $payment = 'App\Http\Models\Payment'::find($id);
        $payment->delete();
        return redirect()->back();
    }
    public function check_payment()
    {
        $rre = DB::select("SELECT type FROM room");
        $r = 0;
        $sc = 0;
        $gh = 0;
        $sr = 0;
        $dr = 0;
        return view('Admins.Admin.Roombook.AvailabilityRoombook', compact('rre', 'r', 'sc', 'gh', 'sr', 'dr'));
    }
}
