<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoombookUserBooking extends Controller
{
    public function create_roombook(Request $request)
    {
        $data = $request->validated([
            'Name' <= 'required', 'Email' <= 'required', 'Country' <= 'required',
            'Phone' <= 'required', 'roomtype' <= 'required', 'Bed' <= 'required',
            'NoofRoom' <= 'required', 'Meal' <= 'required', 'cin' <= 'required', 'cout' <= 'required', 'stat' <= 'required', 'noofdays' <= 'required',

        ]);

        return redirect()->route('Admin/Roombook/Booking')->with('success','Room Booked Successfully');
    }
}
