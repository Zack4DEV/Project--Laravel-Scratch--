<!-- None Laravel Controllers -->

@php
              $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");

                foreach ($countries as $key => $value):
                    echo '<option value="' . $value . '">' . $value . '</option>';
                    //close your tags!!
                endforeach;
@endphp

@php
$rsql = $conn->query("SELECT * FROM room");
$rsql->execute();
$rre = $rsql->fetchAll(PDO::FETCH_ASSOC);
$r = 0;
$sc = 0;
$gh = 0;
$sr = 0;
$dr = 0;
$cr = 0;
$csc = 0;
$cgh = 0;
$csr = 0;
$cdr = 0;
  foreach ($rre as $rrow ):
    $r = $r + 1;
    $s = $rrow['type'];
    if ($s == "Superior Room") {
        $sc = $sc + 1;
    }
    if ($s == "Guest House") {
        $gh = $gh + 1;
    }
    if ($s == "Single Room") {
        $sr = $sr + 1;
    }
    if ($s == "Deluxe Room") {
        $dr = $dr + 1;
    }
    foreach ($cre as $crow):
        $cr = $cr + 1;
        $cs = $crow['RoomType'];

        if ($cs == "Superior Room") {
            $csc = $csc + 1;
        }

        if ($cs == "Guest House") {
            $cgh = $cgh + 1;
        }
        if ($cs == "Single Room") {
            $csr = $csr + 1;
        }
        if ($cs == "Deluxe Room") {
            $cdr = $cdr + 1;
        }

    $f1 = $sc - $csc;
    if ($f1 <= 0) {
        $f1 = "NO";
    }
    $f2 = $gh - $cgh;
    if ($f2 <= 0) {
        $f2 = "NO";
    }
    $f3 = $sr - $csr;
    if ($f3 <= 0) {
        $f3 = "NO";
    }
    $f4 = $dr - $cdr;
    if ($f4 <= 0) {
        $f4 = "NO";
    }
    $f5 = $r - $cr;
    if ($f5 <= 0) {
        $f5 = "NO";
    }

    endforeach

endforeach
@endphp

@php
      if (isset($_POST['guestdetailsubmit'])) {
      //    $id = $_POST[$_SESSION['id']];
          $Name = $_POST['Name'];
          $Email = $_POST['Email'];
          $Country = $_POST['Country'];
          $Phone = $_POST['Phone'];
          $RoomType = $_POST['RoomType'];
          $Bed = $_POST['Bed'];
          $NoofRoom = $_POST['NoofRoom'];
          $Meal = $_POST['Meal'];
          $cin = $_POST['cin'];
          $cout = $_POST['cout'];

          if ($Name == "" || $Email == "" || $Country == "") {
              echo '<script>swal({
                              title: "Fill the proper details",
                              icon: "error",
                          });
                          </script>';
          } else {
              $sta = "NotConfirm";

        $resultIns = $conn->query("INSERT INTO roombook  VALUES ('$id','$Name','$Email','$Country','$Phone','$RoomType','$Bed','$Meal','$NoofRoom','$cin','$cout',datediff('$cout','$cin'),'$sta')");

              while ($resultIns) {
                  echo '<script>swal({
                                      title: "Reservation successful",
                                      icon: "success",
                                  });
                              </script>';
              } 
          }
      }

@endphp      
    
@php      

$rtsql = $conn->query("SELECT * FROM roombook");
$rtsql->execute();
$roombookresult = $rtsql->fetchAll(PDO::FETCH_ASSOC);
      
foreach($roombookresult as $res):
$id = $res['id']; 
$name = $res['name']; 
$roomtype = $res['roomtype']; 
$bed = $res['bed']; 
$cin = $res['cin']; 
$cout = $res['cout']; 
$noofdays = $res['noofdays']; 
$noofroom = $res['noofroom']; 
$bed = $res['bed']; 
$cin = $res['cin']; 
$bedtotal = $res['bedtotal']; 
$mealtotal = $res['mealtotal']; 
$finaltotal = $res['finaltotal']; 
        if($res['stat'] == "NotConfirm"){
            $statEdit = "Confirm";
            $stat = $statEdit;
        }else {
        echo "";
        }

endforeach