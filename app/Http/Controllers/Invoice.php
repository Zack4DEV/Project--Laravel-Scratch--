<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Invoice extends Controller {

    public function show_invoice(Request $request)
    {
        $invoices = 'App\Http\Models\Payment'::all();
        return view('Admins.Admin.Invoice', compact('invoice'));
    }
}
