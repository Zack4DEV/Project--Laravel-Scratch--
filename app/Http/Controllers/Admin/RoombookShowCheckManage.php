<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoombookShowCheckManage extends Controller {
    /**
     * Summary of index_RoombookShowCheckManage
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index_dashboard(Request $request)
    {
        $roombooks_dashboard = 'App\Http\Models\Roombook'::all();
        return view('Admins.Admin.Dashbaord', ['roombook' => $roombooks_dashboard]);
    }

    /**
     * Summary of index_RoombookShowCheckManage
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index_roombook(Request $request)
    {
        $roombooks_roombook = 'App\Http\Models\Roombook'::all();
        return view('Admins.Admin.Roombook', ['roombook' => $roombooks_roombook]);
    }

    public function create_roombook(Request $request)
    {
        $data = $request->validated([
            'Name' <= 'required', 'Email' <= 'required', 'Country' <= 'required',
            'Phone' <= 'required', 'roomtype' <= 'required', 'Bed' <= 'required',
            'NoofRoom' <= 'required', 'Meal' <= 'required', 'cin' <= 'required', 'cout' <= 'required', 'stat' <= 'required', 'noofdays' <= 'required',

        ]);

        return redirect()->route('admin/roombook')->with('success', 'Room Booked Successfully');
    }

    public function destroy_roombook(Request $request)
    {
        $roombook = 'App\Http\Models\Roombook'::find($request->id);
        $roombook->delete();
        return redirect('admin/roombook')->with('Success', "Reservation Removed Successfully");
    }

}
