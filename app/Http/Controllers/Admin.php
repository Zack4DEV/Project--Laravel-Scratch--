<?php

namespace  App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class Admin extends Controller {

public function show_dashboard()
{
$roombookrow = DB::select("SELECT * FROM roombook");
$staffrow = DB::select("SELECT * FROM staff");
$roomrow = DB::select("SELECT * FROM room");

$result = DB::select("SELECT cout,finaltotal FROM payment");

$chart_data = '';
$tot = 0;
foreach ($result as $row) {
$chart_data .= "{ date:'" . $row["cout"] . "', profit:" . $row["finaltotal"] * 10 / 100 . "}, ";
$tot = $tot + $row["finaltotal"] * 10 / 100;
}

$chart_data = substr($chart_data, 0, -2);

return view('Admins.Admin.Show.SDashboard');

}
}
