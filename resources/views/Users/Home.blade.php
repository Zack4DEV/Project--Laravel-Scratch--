<section id="firstsection" class="carousel slide carousel_section" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="carousel-image" src="./image/__hotel4.jpg">
    </div>
    <div class="carousel-item">
      <img class="carousel-image" src="./image/__hotel5.jpg">
    </div>
    <div class="carousel-item">
      <img class="carousel-image" src="./image/__hotel6.jpg">
    </div>

    <div class="welcomeline">
      <h1 class="welcometag">Welcome to Hotel</h1>
    </div>

    <!-- bookbox -->
    <div id="guestdetailpanel">
      <form action="" method="POST" class="guestdetailpanelform">
        <div class="head">
          <h3>RESERVATION</h3>
          <i class="fa-solid fa-circle-xmark" onclick="closebox()"></i>
        </div>
        <div class="middle">
          <div class="guestinfo">
            <h4>Guest information</h4>
            <input class="form-controls" type="text" name="Name" placeholder="Enter Full name">
            <input class="form-controls" type="email" name="Email" placeholder="Enter Email">

            <?php
            $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
            ?>

            <select name="Country" class="form-controls">
              <option value selected>Select your country</option>
              @foreach ($countries as $key => $value)
              echo '<option value="' . $value . '">' . $value . '</option>';
              //close your tags!!
              @endforeach;

            </select>
            <input class="form-controls" type="text" name="Phone" placeholder="Enter Phoneno">
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

      @if (isset($_POST['guestdetailsubmit']))
      $Name = $_POST['Name'];
      $Email = $_POST['Email'];
      $Country = $_POST['Country'];
      $Phone = $_POST['Phone'];
      $Roomtype = $_POST['roomtype'];
      $Bed = $_POST['Bed'];
      $NoofRoom = $_POST['NoofRoom'];
      $Meal = $_POST['Meal'];
      $cin = $_POST['cin'];
      $cout = $_POST['cout'];

      @if ($Name == "" || $Email == "" || $Country == "")
      echo '<script>
        swal({
          title: "Fill the proper details",
          icon: "error",
        });
      </script>';
      @else
      $sta = "NotConfirm";
      $result = DB::insert("INSERT INTO roombook(Name,Email,Country,Phone,roomtype,Bed,NoofRoom,Meal,cin,cout,stat,nodays) VALUES ('$Name','$Email','$Country','$Phone','$Roomtype','$Bed','$NoofRoom','$Meal','$cin','$cout','$sta',datediff('$cout','$cin'))");


      @if ($result)
      echo '<script>
        swal({
          title: "Reservation successful",
          icon: "success",
        });
      </script>';
      @else
      echo '<script>
        swal({
          title: "Something went wrong",
          icon: "error",
        });
      </script>';
      @endif
      @endif
      @endif
    </div>

  </div>
</section>
