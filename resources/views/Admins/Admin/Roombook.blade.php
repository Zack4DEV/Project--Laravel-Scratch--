@extends('Admins.Admin.RoombookEdit');
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('Roombook')</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="{{ URL::asset('/admin/css/roombook.css') }}">


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </head>
    <body>

<!-- show_roombook -->

@section('roombook_section')
<div class="roombooktable" class="table-responsive-xl">
    <div class="roombooktable" class="table-responsive-xl">
        <table class="table table-bordered" id="table-data">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Country</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Type of Room</th>
                    <th scope="col">Type of Bed</th>
                    <th scope="col">No of Room</th>
                    <th scope="col">Meal</th>
                    <th scope="col">Check-In</th>
                    <th scope="col">Check-Out</th>
                    <th scope="col">No of Day</th>
                    <th scope="col">Status</th>
                    <th scope="col" class="action">Action</th>
                </tr>
            </thead>

            @foreach ($roombookresult as $res)
            <tbody>
                <tr>
                    <td>
                        {{ $res->id }}
                    </td>
                    <td>
                        {{ $res->Name }}
                    </td>
                    <td>
                        {{ $res->Email }}
                    </td>
                    <td>
                        {{ $res->Country }}
                    </td>
                    <td>
                        {{ $res->Phone }}
                    </td>
                    <td>
                        {{ $res->roomtype }}
                    </td>
                    <td>
                        {{ $res->Bed }}
                    </td>
                    <td>
                        {{ $res->NoofRoom }}
                    </td>
                    <td>
                        {{ $res->Meal }}
                    </td>
                    <td>
                        {{ $res->cin }}
                    </td>
                    <td>
                        {{ $res->cout }}
                    </td>
                    <td>
                        {{ $res->nodays }}
                    </td>
                    <td>
                        {{ $res->stat }}
                    </td>
                    <td class="action">

                        <a href="{{ route('add_to_roombook') }}" class="btn btn-danger">Add</a>
                        @if($roombookresult['stat'] == "Confirm")
                        echo " ";
                        @else
                        <a href="{{ route('confirm_to_roombook') }}" class="btn btn-danger">Confirm</a>
                        @endif
                        <a href="{{ route('delete_to_roombook') }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>


    <!-- search,add,export roombook-->
    <div class="searchsection">
        <input type="text" name="search_bar" id="search_bar" placeholder="search..." onkeyup="searchFun()">
        <button class="adduser" id="adduser" onclick="adduseropen()"><i class="fa-solid fa-bookmark"></i>Add</button>
        <form action="route('in_data_export')" method="post">
            <button class="exportexcel" id="exportexcel" name="exportexcel" type="submit"><i class="fa-solid fa-file-arrow-down"></i></button>
        </form>
    </div>



    <!-- add roombook-->

    <div id="guestdetailpanel">
        <form action="route('add_to_roombook')" method="POST" class="guestdetailpanelform">
            <div class="head">
                <h3>RESERVATION</h3>
                <i class="fa-solid fa-circle-xmark" onclick="adduserclose()"></i>
            </div>
            <div class="middle">
                <div class="guestinfo">
                    <h4>Guest information</h4>
                    <input class="form-controls" type="text" name="Name" placeholder="Enter Full name" required>
                    <input class="form-controls" type="email" name="Email" placeholder="Enter Email" required>
                    @php
                    $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
                    @endphp

                    <select name="Country" class="form-controls" required>
                        <option value selected>Select your country</option>
                        @foreach ($countries as $value)
                        echo '<option value="' . $value . '">' . {{ $value }} . '</option>';
                        @endforeach
                    </select>
                    <input class="form-controls" type="text" name="Phone" placeholder="Enter Phoneno" required>
                </div>

                <div class="line"></div>

                <div class="reservationinfo">
                    <h4>Reservation information</h4>
                    <select name="roomtype" class="form-controls">
                        <option value selected>Type Of Room</option>
                        <option value="Superior Room">SUPERIOR ROOM</option>
                        <option value="Deluxe Room">DELUXE ROOM</option>
                        <option value="Guest House">GUEST HOUSE</option>
                        <option value="Single Room">SINGLE ROOM</option>
                    </select>
                    <select name="Bed" class="form-controls">
                        <option value selected>Bedding Type</option>
                        <option value="Single">Single</option>
                        <option value="Double">Double</option>
                        <option value="Triple">Triple</option>
                        <option value="Quad">Quad</option>
                    </select>
                    <select name="NoofRoom" class="form-controls">
                        <option value selected>No of Room</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                    <select name="Meal" class="form-controls">
                        <option value selected>Meal</option>
                        <option value="Room only">Room only</option>
                        <option value="Breakfast">Breakfast</option>
                        <option value="Half Board">Half Board</option>
                        <option value="Full Board">Full Board</option>
                    </select>
                    <div class="datesection">
                        <span>
                            <label for="cin"> Check-In</label>
                            <input class="form-controls" name="cin" type="date">
                        </span>
                        <span>
                            <label for="cin"> Check-Out</label>
                            <input class="form-controls" name="cout" type="date">
                        </span>
                    </div>
                </div>
            </div>
            <div class="footer">
                <button class="btn btn-success" name="guestdetailsubmit">Submit</button>
            </div>
        </form>
    </div>
    </div>
        
    <!-- calculate finaltotal -->

    @php
    $ttot = $type_of_room * $noofday * $NoofRoom;
    $mepr = $type_of_meal * $noofday;
    $btot = $type_of_bed * $noofday;
    $fintot = $ttot + $mepr + $btot;
    @endphp

    <!-- check availability room from payment-->

    @foreach ($rre as $rrow)
    $r = $r + 1;
    $s = $rrow->type;
    @if($s == "Superior Room")
    $sc = $sc + 1;
    @endif
    @if($s == "Guest House")
    $gh = $gh + 1;
    @endif
    @if($s == "Single Room")
    $sr = $sr + 1;
    @endif
    @if($s == "Deluxe Room")
    $dr = $dr + 1;
    @endif
    @endforeach

    @php
    $cr = 0;
    $csc = 0;
    $cgh = 0;
    $csr = 0;
    $cdr = 0;
    @endphp

    @foreach ($cre as $crow)

    $cr = $cr + 1;
    $cs = $crow->roomtype;

    @if($cs == "Superior Room")
    $csc = $csc + 1;
    $f1 = $sc - $csc;
    @endif

    @if($cs == "Guest House")
    $cgh = $cgh + 1;
    $f2=$gh - $cgh;
    @endif

    @if($cs == "Single Room")
    $csr = $csr + 1;
    $f3=$sr - $csr;
    @endif

    @if($cs == "Deluxe Room")
    $cdr = $cdr + 1;
    $f4=$dr - $cdr;
    @endif

    @php
    $f5=$r - $cr;
    @endphp

    @endforeach

    @endsection
    </body>
</html>