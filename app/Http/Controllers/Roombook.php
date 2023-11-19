<?php

namespace  App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Roombook extends Controller
{

    public function show_roombook()
    {
        $roombook = 'App\Models\Admin\Roombook'::all();
        return view('Admins.Admin.Roombook', compact('roombook'));
    }
    public function show_roombook_result()
    {
        $roombookresult = DB::select("SELECT * FROM roombook");
        return view('Admins.Admin.Roombook.TableRoombook', compact('roombookresult'));
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

    public function check_roombook()
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
