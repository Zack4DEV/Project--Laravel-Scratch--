$id = $_GET['id'];

$sql = "SELECT * FROM roombook WHERE id = '$id';--'";
$re = mysqli_query($conn, $sql);
@while ($row = mysqli_fetch_array($re))
$Name = $row['Name'];
$Email = $row['Email'];
$Country = $row['Country'];
$Phone = $row['Phone'];
$cin = $row['cin'];
$cout = $row['cout'];
$noofday = $row['nodays'];
$stat = $row['stat'];
@endwhile

@if (isset($_POST['guestdetailedit']))
$EditName = $_POST['Name'];
$EditEmail = $_POST['Email'];
$EditCountry = $_POST['Country'];
$EditPhone = $_POST['Phone'];
$Editroomtype = $_POST['roomtype'];
$EditBed = $_POST['Bed'];
$EditNoofRoom = $_POST['noofroom'];
$EditMeal = $_POST['Meal'];
$Editcin = $_POST['cin'];
$Editcout = $_POST['cout'];

$sql = "UPDATE roombook SET Name = '$EditName',Email = '$EditEmail',Country='$EditCountry',Phone='$EditPhone',roomtype='$Editroomtype',Bed='$EditBed',noofroom='$EditNoofRoom',Meal='$EditMeal',cin='$Editcin',cout='$Editcout',nodays = dated@iff('$Editcout','$Editcin') WHERE id = '$id';--'";

$result = mysqli_query($conn, $sql);

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

// noofday update
$psql = "SELECT * FROM roombook WHERE id = '$id';--'";
$presult = mysqli_query($conn, $psql);
$prow = mysqli_fetch_array($presult);
$ndays = "SELECT nodays FROM roombook;--'";
$Editnoofday = $prow[$ndays];
$nroom = "SELECT roomtotal FROM roombook;--'";
$EditNoofRoom = $prow[$nroom];

$editttot = $type_of_room * $Editnoofday * $EditNoofRoom;
$editmepr = $type_of_meal * $Editnoofday;
$editbtot = $type_of_bed * $Editnoofday;

$editfintot = $editttot + $editmepr + $editbtot;

$psql = "UPDATE payment SET Name = '$EditName',Email = '$EditEmail',roomtype='$Editroomtype',Bed='$EditBed',noofroom='$EditNoofRoom',Meal='$EditMeal',cin='$Editcin',cout='$Editcout',noofdays = '$Editnoofday',roomtotal = '$editttot',bedtotal = '$editbtot',mealtotal = '$editmepr',finaltotal = '$editfintot' WHERE id = '$id';--'";

$paymentresult = mysqli_query($conn, $psql);

@if ($paymentresult)
header("Location:roombook");
@endif
@endif
