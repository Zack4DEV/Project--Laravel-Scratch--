<?php

namespace  App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Roombook extends Controller
{

   public function roombook_To()
    {
        $roombookresult = DB::table("roombook")
                        ->select('*')
                        ->get();

        return view('Admins.Admin.Roombook')->with('roombookresult', $roombookresult);
    }

    public function roombook_To_Add(Request $request)
    {

        $id = session('id');
        $sta = session('stat');

        $Name = $request->input('Name');
        $Email = $request->input('Email');
        $Country = $request->input('Country');
        $Phone = $request->input('Phone');
        $Roomtype = $request->input('roomtype');
        $Bed = $request->input('Bed');
        $NoofRoom = $request->input('NoofRoom');
        $Meal = $request->input('Meal');
        $cin = $request->input('cin');
        $cout = $request->input('cout');

        $result = DB::table("roombook")
        ->insert(array(
            'Name' => $Name,
            'Email' => $Email,
            'Country' => $Country,
            'Phone' => $Phone,
            'roomtype' => $Roomtype,
            'Bed' => $Bed,
            'NoofRoom' => $NoofRoom,
            'Meal' => $Meal,
            'cin' => $cin,
            'cout' => $cout,
            'stat' => $sta
        ));

        return redirect()->route('to_roombook')->with('success', 'Room Booked Successfully');

    }

    public function roombook_To_Confirm(Request $request)
    {
        $id = session('id');

        $result = DB::table('roombook')
        ->where('id', $id)
        ->update(['stat' => 'Confirm']);

        return redirect()->route('to_roombook');

    }


    public function roombook_To_Delete(Request $request, $id)
    {
        $id = session('id');

        $deletesql = DB::table('payment')
                   ->where('id', '=', $id)
                   ->delete('*');

        return redirect()->route('to_roombook');
    }

}
