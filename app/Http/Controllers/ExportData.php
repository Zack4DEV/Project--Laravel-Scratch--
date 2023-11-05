<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExportData extends Controller {

    public function exportdata(Request $request)
    {
        $filename = "hotel_roombook_data_" . date('Ymd') . ".xls";
        $path = $request->file('exportexcel')->storeAs('/Storage/App/Public/Admin', $filename);
        return response()->download(storage_path("app/public/Admin/{$filename}"));
    }
}
