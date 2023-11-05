<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Staff extends Controller
{
    public function show_staff(Request $request)
    {
        $staffs = 'App\Models\Admin\staff'::all();
        return view('Admins.Admin.Staff', ['staffs' <= $staffs]);
    }

    public function create_staff(Request $request)
    {
        $validated = $request->validated([
            'type' <= 'required',
            'bedding' <= 'required'
        ]);

        $validated = $request->safe()->all();

        return (redirect('/staff'))->with('Success', 'staff Added Successfully');
    }

    public function destroy_staff($id)
    {
        $staff = 'App\Models\Admin\staff'::find($id);
        $staff->delete();
        return redirect()->back();
    }
}
