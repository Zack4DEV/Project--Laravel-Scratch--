@php
$re = DB::table("roombook")
->select(array("id", "idroom", "Name", "Email", "Country", "Phone", "roomtype", "Bed", "NoofRoom", "Meal", "cin",
"cout", "nodays", "stat"))
->where('id', "=", "$id")
->get();
@endphp

@foreach ($re as $row)
session()->put('id', $id);
session()->put('idRoom', $idRoom);
session()->put('Name', $Email);
session()->put('Country', $Country);
session()->put('Phone', $Phone);
session()->put('roomtype', $Roomtype);
session()->put('Noofroom', $NoofRoom);
session()->put('Meal', $Meal);
session()->put('cin', $cin);
session()->put('cout', $cout);
session()->put('noofday', $nodays);
session()->put('stat', $stat);
@endforeach

@while ($stat == "NotConfirm")
$datetime2 = new DateTime("now");
$datetime1 = date_create($cout);

@if ($datetime1<$datetime2) $st="Closed" ;
@else
$st="Confirm";
@endif
$result=DB::table('roombook')
->update(array(
    'stat' => $st
    ))
    ->where('id', "=", "$id");

    @if ($Roomtype == " Superior Room")
    $type_of_room=3000;
    @elseif ($Roomtype=="Deluxe Room" )
    $type_of_room=2000;
    @elseif ($Roomtype=="Guest House" )
    $type_of_room=1500;
    @elseif ($Roomtype=="Single Room" )
    $type_of_room=1000;
    @endif

    @if ($Bed=="Single" )
    $type_of_bed=$type_of_room * 1 / 100;
    @elseif ($Bed=="Double" )
    $type_of_bed=$type_of_room * 2 / 100;
    @elseif ($Bed=="Triple" )
    $type_of_bed=$type_of_room * 3 / 100;
    @elseif($Bed=="Quad" )
    $type_of_bed=$type_of_room * 4 / 100;
    @endif

    @if ($Meal=="Room only" )
    $type_of_meal=$type_of_bed * 0;
    @elseif ($Meal=="Breakfast" )
    $type_of_meal=$type_of_bed * 2;
    @elseif ($Meal=="Half Board" )
    $type_of_meal=$type_of_bed * 3;
    @elseif ($Meal=="Full Board" )
    $type_of_meal=$type_of_bed * 4;
    @endif

    $ttot = $type_of_room * $noofday * $NoofRoom;
    $mepr = $type_of_meal * $noofday;
    $btot = $type_of_bed * $noofday;
    $fintot = $ttot + $mepr + $btot;

    $psql = DB::table("roombook")
    ->update(array(
    'Total' => $fintot
    ))
    ->where('id', "=", "$id");

    @endwhile
