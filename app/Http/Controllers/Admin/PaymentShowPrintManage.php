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
    public function destroy_roombook(Request $request)
    {
        $roombook = 'App\Http\Models\Roombook'::find($request->id);
        $roombook->delete();
        return redirect('admin/roombook');
    }

}

