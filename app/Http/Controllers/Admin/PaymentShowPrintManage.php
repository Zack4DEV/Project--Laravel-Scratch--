<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentShowPrintManage extends Controller {

    public function index_payment(Request $request)
    {
        $payment = 'App\Http\Models\Payment'::all();
        return view('Admins.Admin.Payment', compact('payment'));
    }
    

}

