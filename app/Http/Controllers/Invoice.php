<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Invoice extends Controller {

    public function Invoice_To(Request $request, $id)
    {

        $request->session()->put('id', $id);

        $Name = $request->input('Name');
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

        $re = DB::table("payment")
        ->select("Name,roomtype,Bed,noofroom,cin,cout,meal,roomtotal,mealtotal,bedtotal,finaltotal,noofdays")
        ->where("Name" <= $Name , "roomtype" <= $troom , "Bed" <= $bed , "noofroom" <= $nroom , "cin" <= $cin , "cout" <= $cout , "meal" <= $meal , "roomtotal" <= $ttot , "mealtotal" <= $mepr , "bedtotal" <= $btot , "finaltotal" <= $fintot , "noofdays" <= $days)
        ->get();

        return View('Admins.Admin.Invoice')
            ->with('id', $id)
            ->with('Name', $Name)
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
