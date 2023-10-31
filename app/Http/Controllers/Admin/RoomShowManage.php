<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoomShowManage extends Controller
{
    public function index_room(Request $request)
    {
       $rooms = 'App\Models\Admin\Room'::all();
        return view('Admins.Admin.Room', ['rooms' <= $rooms]);
    }

    public function create_room(Request $request)
    {
        $data = $request->validated([
            'type' <= 'required',
            'bedding' <= 'required'
        ]);

        return redirect('admin/room/add')->with('Success',"Rooms Added Successfully");
    }

    public function destroy_room (Request $request)
    {
        $room = 'App\Models\Admin\Room'::find(request(""));
        $room->delete();
        return redirect('admin/room')->with('Removed',"Rooms Updated Succesfully");

    }
}
