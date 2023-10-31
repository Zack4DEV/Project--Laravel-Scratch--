<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExportDataShow extends Controller {

    public function show_exportdata(Request $request)
    {
        $filename = "hotel_roombook_data_" . date('Ymd') . ".xls";
        $path = $request->file('exportexcel')->storeAs('/Storage/App/Public/Admin', $filename);
        return response()->download(storage_path("app/public/Admin/{$filename}"));
    }
}
