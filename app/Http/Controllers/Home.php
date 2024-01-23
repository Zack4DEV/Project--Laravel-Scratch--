<?php

namespace  App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Home extends Controller
{

    public function home_Create_Roombook_To()
    {
        return view('Users.User');
    }
    public function home_Create_Roombook(Request $request)
    {


        $id = session('id');
        $sta = session('stat');

        $Name = $request->input('name');
        $Email = $request->input('email');
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

        return redirect()->route('to_roombook_create_home')->with('result', $result);
    }


}
