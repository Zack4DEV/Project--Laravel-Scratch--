@php
$id = session()->get('id');
$re = DB::table("roombook");
->select(array("id","Name","Email","Country","Phone","roomtype","Bed","NoofRoom","Meal","cin","cout","nodays","stat"))
->where('id',"=","$id");
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

$EditName = $Name;
$EditEmail = $Email;
$EditCountry = $Country;
$EditPhone = $Phone;
$Editroomtype = $Roomtype;
$EditBed = $Bed;
$EditNoofRoom = $NoofRoom;
$EditMeal = $Meal;
$Editcin = $cin;
$Editcout = $cout;

$result = DB::table('roombook')'
->update(array(
'Name' => $EditName,
'Email' => $EditEmail,
'Country' => $EditCountry,
'Phone' => $EditPhone,
'roomtype' => $Editroomtype,
'Bed' => $EditBed,
'NoofRoom' => $EditNoofRoom,
'Meal' => $EditMeal,
'cin' => $Editcin,
'cout' => $Editcout,
'nodays' => $Editnoofday,
'stat' => $stat
))
->where('id',"=","$id");

$type_of_room = 0;
@if ($Editroomtype == "Superior Room")
$type_of_room = 3000;
@elseif($Editroomtype == "Deluxe Room")
$type_of_room = 2000;
@elseif($Editroomtype == "Guest House")
$type_of_room = 1500;
@elseif($Editroomtype == "Single Room")
$type_of_room = 1000;
@endif


@if ($EditBed == "Single")
$type_of_bed = $type_of_room * 1 / 100;
@elseif($EditBed == "Double")
$type_of_bed = $type_of_room * 2 / 100;
@elseif($EditBed == "Triple")
$type_of_bed = $type_of_room * 3 / 100;
@elseif($EditBed == "Quad")
$type_of_bed = $type_of_room * 4 / 100;
@endif

@if ($EditMeal == "Room only")
$type_of_meal = $type_of_bed * 0;
@elseif($EditMeal == "Breakfast")
$type_of_meal = $type_of_bed * 2;
@elseif($EditMeal == "Half Board")
$type_of_meal = $type_of_bed * 3;
@elseif($EditMeal == "Full Board")
$type_of_meal = $type_of_bed * 4;
@endif

$presult = DB::table("roombook")
->select(array("nodays"))
->where('id',"=","$id");

@foreach($presult as $prow)

$ndays = DB::table("roombook")
->select(array("nodays"))
->where('id',"=","$id");

$Editnoofday = $prow[$ndays];

$nroom = DB::table("roombook");
->select(array("NoofRoom"))
->where('id',"=","$id);

$EditNoofRoom = $prow[$nroom];

$editttot = $type_of_room * $Editnoofday * $EditNoofRoom;
$editmepr = $type_of_meal * $Editnoofday;
$editbtot = $type_of_bed * $Editnoofday;

$editfintot = $editttot + $editmepr + $editbtot;

$paymentresult = DB::table("roombook")
->update(array(
'tot' => $editfintot
))
->where('id',"=","$id");
@endforeach
