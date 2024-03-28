<!-- None Laravel Controllers -->
@php

$countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");

foreach ($countries as $key):
    $value = $key;
endforeach;

$id = $_GET['id'];

$sql = $conn->query("SELECT * FROM roombook WHERE id = '$id'");
$sql->execute();
$re = $sql->fetchAll();
foreach ($re as $row):
    $Name = $row['Name'];
    $Email = $row['Email'];
    $Country = $row['Country'];
    $Phone = $row['Phone'];
    $cin = $row['cin'];
    $cout = $row['cout'];
    $noofday = $row['nodays'];
    $stat = $row['stat'];
endforeach
if (isset($_POST['guestdetailedit'])) {
    //$EditId = $_SESSION['id'];
    $EditName = $_POST['Name'];
    $EditEmail = $_POST['Email'];
    $EditCountry = $_POST['Country'];
    $EditPhone = $_POST['Phone'];
    $EditRoomType = $_POST['RoomType'];
    $EditBed = $_POST['Bed'];
    $EditNoofRoom = $_POST['noofroom'];
    $EditMeal = $_POST['Meal'];
    $Editcin = $_POST['cin'];
    $Editcout = $_POST['cout'];

    $sql = $conn->query("UPDATE roombook SET Name = '$EditName',Email = '$EditEmail',Country='$EditCountry',Phone='$EditPhone',RoomType='$EditRoomType',Bed='$EditBed',noofroom='$EditNoofRoom',Meal='$EditMeal',cin='$Editcin',cout='$Editcout',nodays = datediff('$Editcout','$Editcin') WHERE id = '$id'")->execute();

    $type_of_room = 0;
    if ($EditRoomType == "Superior Room") {
        $type_of_room = 3000;
    } elseif ($EditRoomType == "Deluxe Room") {
        $type_of_room = 2000;
    } elseif ($EditRoomType == "Guest House") {
        $type_of_room = 1500;
    } elseif ($EditRoomType == "Single Room") {
        $type_of_room = 1000;
    }


    if ($EditBed == "Single") {
        $type_of_bed = $type_of_room * 1 / 100;
    } elseif ($EditBed == "Double") {
        $type_of_bed = $type_of_room * 2 / 100;
    } elseif ($EditBed == "Triple") {
        $type_of_bed = $type_of_room * 3 / 100;
    } elseif ($EditBed == "Quad") {
        $type_of_bed = $type_of_room * 4 / 100;
    }

    if ($EditMeal == "Room only") {
        $type_of_meal = $type_of_bed * 0;
    } elseif ($EditMeal == "Breakfast") {
        $type_of_meal = $type_of_bed * 2;
    } elseif ($EditMeal == "Half Board") {
        $type_of_meal = $type_of_bed * 3;
    } elseif ($EditMeal == "Full Board") {
        $type_of_meal = $type_of_bed * 4;
    }

    // noofday update

    $psql = $conn->query("SELECT * FROM roombook WHERE id = '$id'");
    $presult = $psql->execute();


    $editttot = $type_of_room*$Editnoofday * $EditNoofRoom;
    $editmepr = $type_of_meal*$Editnoofday;
    $editbtot = $type_of_bed*$Editnoofday;

    $editfintot = $editttot + $editmepr + $editbtot;


    $psql = $conn->query("UPDATE payment SET Name = '$EditName',Email = '$EditEmail',RoomType='$EditRoomType',Bed='$EditBed',noofroom='$EditNoofRoom',Meal='$EditMeal',cin='$Editcin',cout='$Editcout',noofdays = '$Editnoofday',roomtotal = '$editttot',bedtotal = '$editbtot',mealtotal = '$editmepr',finaltotal = '$editfintot' WHERE id = '$id'")->execute();


}

@endphp