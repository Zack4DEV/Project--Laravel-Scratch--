<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Invoice extends Controller {

    public function Invoice_To(Request $request)
    {
        $id = session('id');

        $Name = $request->input('name');
        $troom = $request->input('roomtype');
        $bed = $request->input('Bed');
        $nroom = $request->input('noofroom');
        $cin = $request->input('cin');
        $cout = $request->input('cout');
        $meal = $request->input('meal');
        $ttot = $request->input('roomtotal');
        $mepr = $request->input('mealtotal');
        $btot = $request->input('bedtotal');
        $fintot = $request->input('finaltotal');
        $days = $request->input('noofdays');


        if ($troom == "Superior Room") {
            $type_of_room = 320;
        } elseif ($troom == "Deluxe Room") {
            $type_of_room = 220;
        } elseif ($troom == "Guest House") {i
            $type_of_room = 180;
        } elseif ($troom == "Single Room") {
            $type_of_room = 150;
        }

        if ($bed == "Single"
        ) {
            $type_of_bed = $type_of_room * 1 / 100;
        } elseif ($bed == "Double") {
            $type_of_bed = $type_of_room * 2 / 100;
        } elseif ($bed == "Triple") {
            $type_of_bed = $type_of_room * 3 / 100;
        } elseif ($bed == "Quad") {
            $type_of_bed = $type_of_room * 4 / 100;
        }

        $type_of_meal = 0;
        if ($meal == "Room only"
        ) {
            $type_of_meal = $type_of_bed * 0;
        } elseif ($meal == "Breakfast") {
            $type_of_meal = $type_of_bed * 2;
        } elseif ($meal == "Half Board") {
            $type_of_meal = $type_of_bed * 3;
        } elseif ($meal == "Full Board") {
            $type_of_meal = $type_of_bed * 4;
        }

        $re = DB::table("payment")
        ->select("name,roomtype,Bed,noofroom,cin,cout,meal,roomtotal,mealtotal,bedtotal,finaltotal,noofdays")
        ->where("name" <= $Name , "roomtype" <= $troom , "Bed" <= $bed , "noofroom" <= $nroom , "cin" <= $cin , "cout" <= $cout , "meal" <= $meal , "roomtotal" <= $ttot , "mealtotal" <= $mepr , "bedtotal" <= $btot , "finaltotal" <= $fintot , "noofdays" <= $days)
        ->get();

        return View('Admins.Admin.Invoice')
            ->with('id', $id)
            ->with('Name', $name)
            ->with('troom', $troom)
            ->with('bed', $bed)
            ->with('nroom', $nroom)
            ->with('cin', $cin)
            ->with('cout', $cout)
            ->with('meal', $meal)
            ->with('ttot', $ttot)
            ->with('mepr', $mepr)
            ->with('btot', $btot)
            ->with('fintot', $fintot)
            ->with('days', $days);
    }


}
