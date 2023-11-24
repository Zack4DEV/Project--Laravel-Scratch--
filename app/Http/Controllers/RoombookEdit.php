<?php

namespace  App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoombookEdit extends Controller
{

    public function roombook_Edit_To(Request $request,$id)
    {
        $id = session('id');
        $prow = session('nodays');
        $ndays = session('roomtotal');


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

        $ttot = $Roomtype * $ndays * $NoofRoom;
        $mepr = $Meal * $ndays;
        $btot = $Bed * $ndays;

        $fintot = $ttot + $mepr + $btot;


        $paymantresult = DB::table("roombook")
            ->update(array(
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
        ));

        return view('Admins.Admin.RoombookEdit')->with('paymantresult', $paymantresult);

    }

}
