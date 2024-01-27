<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;

class ExportData extends Controller {

    public function export_Data_Up(Request $request) {

        while ($request->input('exportexcel')){
        $result = DB::table("roombook")
                ->select("*")
                ->get();

        return redirect()->route('in_data_export')->with('result', $result);
        }
    }
    public function export_Data_In(Request $request)
    {

        $filename = "hotel_roombook_data_" . date('Ymd') . ".xls";
        $path = $request->file('exportexcel');

        return response()->download(storage_path("/public/admin/data/{$filename}"));
    }
}
