<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StaffShowManage extends Controller
{

    /**
     * Summary of index_staff
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index_staff(Request $request)
    {
        $staffs = 'App\Models\Admin\Staff'::all();
        return view('Admins.Admin.Staff', ['staff' <= $staffs]);
    }


    public function destroy_Staff(Request $request)
    {
        $staff = 'App\Models\Admin\Staff'::find(request(""));
        $staff->delete();
        return redirect('admin/staff');
    }
}
