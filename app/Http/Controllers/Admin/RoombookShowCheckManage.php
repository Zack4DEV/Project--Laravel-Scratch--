<?php

namespace App\Http\Controller\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoombookShowCheckManage extends Controller {
    public function destroy_roombook(Request $request)
    {
        $roombook = 'App\Http\Models\Roombook'::find($request->id);
        $roombook->delete();
        return redirect('admin/roombook');
    }

}
