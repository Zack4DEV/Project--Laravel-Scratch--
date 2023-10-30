<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class StaffRoomPaymentRoombookShow extends Controller
{
    /**
     * Summary of index_staffroompaymentroombook
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index_staffroompaymentroombook(Request $request)
    {
        $roombook = 'App\Http\Models\Roombook'::all();
        $payment = 'App\Http\Models\Payment'::all();
        $room = 'App\Http\Models\Room'::all();
        $staff = 'App\Http\Models\Staff'::all();
        return view('Layouts.Admin.StaffRoomPaymentRoombookShow', ['roombook' => $roombook, 'payment' => $payment, 'room' => $room, 'staff' => $staff]);
    }
}
