<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Invoice extends Controller {

    public function show_invoice(Request $request)
    {
        $invoices = 'App\Http\Models\Payment'::all();
        return view('Admins.Admin.Invoice', compact('invoice'));
    }

    public function check_invoice(){
        $re = DB::select("SELECT * FROM payment");
        return view('Admins.Admin.Invoice', compact('re'));    }
}
