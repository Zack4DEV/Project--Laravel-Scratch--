<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
