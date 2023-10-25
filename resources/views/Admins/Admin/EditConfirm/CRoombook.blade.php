@php


$sql = "SELECT * FROM roombook;--'";
$re = mysqli_query($conn, $sql);
@while ($row = mysqli_fetch_array($re))
    $id = $row['id'];
    $idRoom = $row['idroom'];
    $Name = $row['Name'];
    $Email = $row['Email'];
    $Country = $row['Country'];
    $Phone = $row['Phone'];
    $Roomtype = $row['roomtype'];
    $Bed = $row['Bed'];
    $NoofRoom = $row['NoofRoom'];
    $Meal = $row['Meal'];
    $cin = $row['cin'];
    $cout = $row['cout'];
    $noofday = $row['nodays'];
    $stat = $row['stat'];
@endwhile


@while ($stat == "NotConfirm")

    $datetime2 = new DateTime("now");
    $datetime1 = date_create($cout);
    @if ($datetime1<$datetime2)
        $st = "Closed";
    @endif else
        $st = "Confirm";
    @endif
    $sql = "UPDATE roombook SET stat = '$st'  WHERE id = '$id';--'";

    $result = mysqli_query($conn, $sql);

    @if ($result)

        $type_of_room = 0;
        @if ($Roomtype == "Superior Room")
            $type_of_room = 3000;
        @elseif ($Roomtype == "Deluxe Room")
            $type_of_room = 2000;
        @elseif ($Roomtype == "Guest House")
            $type_of_room = 1500;
        @elseif ($Roomtype == "Single Room")
            $type_of_room = 1000;
        @endif


        @if ($Bed == "Single")
            $type_of_bed = $type_of_room * 1 / 100;
        @elseif ($Bed == "Double")
            $type_of_bed = $type_of_room * 2 / 100;
        @elseif ($Bed == "Triple")
            $type_of_bed = $type_of_room * 3 / 100;
        @elseif ($Bed == "Quad")
            $type_of_bed = $type_of_room * 4 / 100;
        @endif

        @if ($Meal == "Room only")
            $type_of_meal = $type_of_bed * 0;
        @elseif ($Meal == "Breakfast")
            $type_of_meal = $type_of_bed * 2;
        @elseif ($Meal == "Half Board")
            $type_of_meal = $type_of_bed * 3;
        @elseif ($Meal == "Full Board")
            $type_of_meal = $type_of_bed * 4;
        @endif


        $ttot = $type_of_room * $noofday * $NoofRoom;
        $mepr = $type_of_meal * $noofday;
        $btot = $type_of_bed * $noofday;

        $fintot = $ttot + $mepr + $btot;

        $psql = "INSERT INTO payment VALUES ('$id','$idRoom', '$Name', '$Email', '$Roomtype', '$Bed', '$NoofRoom', '$cin', '$cout', '$noofday', '$ttot', '$btot', '$Meal', '$mepr', '$fintot');--'";

        mysqli_query($conn, $psql);

        header("Location:roombook");
    @endif
@endwhile


// @elseif
//
//     echo "<script>alert('Guest Already Confirmed')</script>";
//     header("Location:roombook");
// @endif
