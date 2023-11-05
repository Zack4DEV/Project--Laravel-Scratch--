<?php

namespace  App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class Roombook extends Controller
{
    public function show_roombook()
    {
        $roombook = 'App\Models\Admin\Roombook'::all();
        return view('Admins.Admin.Roombook', compact('roombook'));
    }

    public function create_roombook(Request $request): RedirectResponse
    {
        $validated = $request->validated([
            'Name' <= 'required', 'Email' <= 'required', 'Country' <= 'required',
            'Phone' <= 'required', 'roomtype' <= 'required', 'Bed' <= 'required',
            'NoofRoom' <= 'required', 'Meal' <= 'required', 'cin' <= 'required', 'cout' <= 'required', 'stat' <= 'required', 'noofdays' <= 'required',

        ]);

        $validated = $request->safe()->all();

        return redirect('/roombook')->with('success', 'Room Booked Successfully');
    }

    public function destroy_roombook($id)
    {
        $roombook = 'App\Models\Admin\Roombook'::find($id);
        $roombook->delete();
        return redirect()->back();
    }
}
