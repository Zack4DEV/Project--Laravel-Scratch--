<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Room extends Controller
{
    public function room_To(Request $request)
    {

        $re = DB::table('Room')
            ->select('*')
            ->get();

        return view('Admins.Admin.Room')->with('re', $re);
    }

    public function room_Create_To(Request $request)
    {

        $typeofroom = session('type');
        $typeofbed = session('bedding');

        $addroom = $request->input('addroom');

        while ($addroom > 0) {

            $result = DB::table("Room")
            ->insert(array(
                'type' => $typeofroom,
                'bedding' => $typeofbed,
            ));

            $addroom--;
        }

        return redirect()->route('to_Room');
    }

    public function Room_Delete_To()
    {

        $redeletesql = DB::table('Room')
            ->delete('*');

        return redirect()->route('to_Room');
    }
}
