<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Room extends Controller
{
    public function show_room(Request $request)
    {
       $rooms = 'App\Models\Admin\Room'::all();
        return view('Admins.Admin.Room', ['rooms' <= $rooms]);
    }

    public function create_room(Request $request)
    {
        $validated = $request->validated([
            'type' <= 'required',
            'bedding' <= 'required'
        ]);

        $validated = $request->safe()->all();

        return (redirect('/room'))->with('Success', 'Room Added Successfully');
    }

    public function destroy_room ($id)
    {
        $room = 'App\Models\Admin\Room'::find($id);
        $room->delete();
        return redirect()->back();

    }
}
