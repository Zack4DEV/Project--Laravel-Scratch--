<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvoiceShow extends Controller {

    public function show_invoice(Request $request)
    {
        $invoices = 'App\Http\Models\Payment'::all();
        return view('Admins.Admin.Invoice', compact('invoice'));
    }
}
