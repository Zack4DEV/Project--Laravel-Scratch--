<style>

    #guestdetailpanel {
        display: none;
    }

    #guestdetailpanel .middle {
        height: 450px;
    }
    
    var bookbox = document.getElementById("guestdetailpanel");

    openbookbox = () => {
        bookbox.style.display = "flex";
    }
    closebox = () => {
        bookbox.style.display = "none";
    }

    @import url("https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Anton&family=Cookie&family=Poppins:wght@600&display=swap");

    :root {
      --bg-text-shadow: 0 2px 4px rgb(13 0 77 / 8%), 0 3px 6px rgb(13 0 77 / 8%),
        0 8px 16px rgb(13 0 77 / 8%);
      --bg-box-shadow: 0px 0px 5px 2px rgba(0, 0, 0, 0.621);
    }
    *::-webkit-scrollbar {
      width: 0.4rem;
    }
    *::-webkit-scrollbar-track {
      background: rgb(6, 6, 44);
    }
    *::-webkit-scrollbar-thumb {
      background: #0040ff;
    }

    * {
      margin: 0;
      padding: 0;
      font-family: "Poppins", sans-serif;
      /* text-shadow: var(--bg-text-shadow); */
    }

    nav {
      position: fixed;
      height: 60px;
      width: 100%;
      background-color: rgba(255, 255, 255, 0.279);
      z-index: 200;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0px 100px;
      /* box-shadow: 0px 0px 6px 2px rgba(0, 0, 0, 0.386); */
    }

    nav ul {
      width: 500px;
      display: flex;
      justify-content: space-around;
      align-items: center;
      margin-top: 15px;
      color: black;
    }

    ul li a {
      text-decoration: none;
      color: black;
      cursor: pointer;
    }
    ul li {
      color: black;
      text-decoration: none;
      list-style: none;
      cursor: pointer;
    }

    ul li:hover::after {
      content: "";
      position: absolute;
      display: flex;
      width: 30px;
      height: 3px;
      background-color: black;
      /* display: none; */
      transition: ease 2s;
    }

    ul li a:hover {
      color: black;
    }

    .logo {
      height: 90%;
      display: flex;
      justify-content: center;
    }

    .logo p {
      height: 100%;
      display: flex;
      align-items: center;
      font-size: 30px;
      color: rgb(66, 68, 74);
      text-shadow: var(--bg-text-shadow);
    }

    #firstsection {
      height: 100vh;
      background-color: rgba(175, 175, 222, 0.511);
      width: 100%;
      /* z-index: 2000; */
    }

    #firstsection .carousel-inner {
      display: block;
      width: 100%;
      height: 100vh;
      /* padding: 0 50px; */
    }
    #firstsection .carousel-inner::after {
      content: "";
      position: absolute;
      height: 100vh;
      width: 100%;
      background-color: rgba(178, 170, 236, 0.533);
    }

    #firstsection .carousel-item {
      overflow: hidden;
    }

    #firstsection .carousel-item img {
      width: 100%;
      height: 100vh;
    }

    #firstsection .welcomeline {
      position: absolute;
      display: flex;
      height: 100vh;
      width: 100%;
      justify-content: center;
      align-items: center;
      z-index: 100;
    }

    #firstsection .welcometag {
      font-size: 110px;
      font-weight: bold;
      font-family: "Cookie", cursive;
      letter-spacing: 2px;
      line-height: 100px;
      padding: 5px;
      /* text gradiant */
      background: -webkit-linear-gradient(
        317deg,
        rgba(0, 60, 255, 0.81) 0%,
        rgb(255 0 123) 70%
      );
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    /* secondsection */

    #secondsection {
      height: 100vh;
    }

    #secondsection img {
      /* background-size: cover; */
      height: 100vh;
      width: 100%;
      filter: blur(20px);
      position: absolute;
      /* -webkit-backdrop-filter: blur(30px);  */
      z-index: -2;
    }

    .ourroom {
      position: relative;
      top: 90px;
      height: 400px;
      width: 100%;
      /* background-color: #0040ff; */
    }

    .head {
      text-align: center;
      margin-bottom: 40px;
    }

    .roomselect {
      display: flex;
      height: 100%;
      justify-content: space-evenly;
    }

    .roomselect .roombox {
      height: 100%;
      width: 300px;
      background-color: rgb(8, 8, 48);
      border-radius: 10px;
      overflow: hidden;
      /* margin: 0 20px; */
    }

    .hotelphoto {
      height: 250px;
      width: 100%;
      background-color: aquamarine;
      background-size: cover;
    }

    .h1 {
      background-image: url(../../assets/images/hotel1photo.jpg);
    }
    .h2 {
      background-image: url(../../assets/images/hotel2photo.jpg);
    }
    .h3 {
      background-image: url(../../assets/images/hotel3photo.jpg);
    }
    .h4 {
      background-image: url(../../assets/images/hotel4photo.jpg);
    }

    .roomdata {
      text-align: center;
    }

    .roomdata h2 {
      color: rgb(207, 211, 255);
      font-size: 30px;
    }

    .sevices {
      display: flex;
    }

    .services i {
      color: white;
      margin: 7px;
    }

    .bookbtn {
      margin: 10px;
    }

    /* roombookcss */

    #guestdetailpanel {
      height: 100vh;
      width: 100%;
      background-color: rgba(0, 0, 0, 0.558);
      position: fixed;
      z-index: 10000;
    }

    .logoutbtn {
      height: 20px;
      width: 200px;
      background-color: rgba(216, 19, 19, 0.804);
    }

    #thirdsection {
      height: 80vh;
      width: 100%;
      /* background-color: black; */
    }

    .facility {
      height: 70%;
      width: 100%;
      display: flex;
      justify-content: space-around;
    }

    .facility .box {
      height: 100%;
      width: 310px;
      border: 2px solid white;
      background-color: #0040ff;
    }

    .facility .box h2 {
      text-align: center;
      position: relative;
      top: 80%;
      color: white;
      background-color: #0000005e;
    }

    .box:nth-child(1) {
      background-image: url(../../assets/images/swimingpool.jpg);
      background-size: cover;
    }
    .box:nth-child(2) {
      background-image: url(../../assets/images/food.jpg);
      background-size: cover;
    }
    .box:nth-child(3) {
      background-image: url(../../assets/images/gym.jpg);
      background-size: cover;
    }
    .box:nth-child(4) {
      background-image: url(../../assets/images/spa.jpg);
      background-size: cover;
    }


    #contactus {
      height: 70px;
      width: 100%;
      background-color: black;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0 100px;
    }

    #contactus .social {
      width: 200px;
      display: flex;
      justify-content: space-evenly;
    }

    #contactus i {
      color: white;
      font-size: 25px;
      cursor: pointer;
    }

    #contactus .createdby {
      color: white;
    }

    /* responsive stuff */

    @media (max-width: 30rem) {
      nav {
        justify-content: center;
        position: relative;
        background-color: #96a8f88c;
      }
      nav ul {
        display: none;
      }
      #firstsection {
        height: 50vh;
        text-align: center;
      }
      #firstsection .carousel-inner {
        height: 50vh;
      }
      #firstsection .carousel-inner::after {
        height: 50vh;
      }
      #firstsection .carousel-item img {
        height: 50vh;
      }
      #firstsection .welcomeline {
        height: 50vh;
      }
      #firstsection .welcometag {
        text-align: center;
        font-size: 50px;
        line-height: 60px;
      }
      #secondsection {
        height: auto;
      }
      #secondsection {
        height: 240vh;
      }
      #secondsection img {
        display: none;
      }
      .ourroom {
        top: 30px;
        height: auto;
      }
      .roomselect {
        flex-direction: column;
        align-items: center;
        gap: 20px;
      }
      .roomselect .roombox {
        width: 75%;
      }

      #thirdsection {
        height: 100vh;
      }
      .facility {
        height: 70%;
        flex-wrap: wrap;
      }
      .facility .box {
        margin: 0;
        padding: 0;
        height: 55%;
        width: 50%;
      }

      .facility .box h2 {
        font-size: 18px;
        flex-wrap: wrap;
      }

      #contactus {
        padding: 0 30px;
      }
    }

</style>

<template>
  <?php 
  require(__DIRNAME__.'/resources/views/User.blade.php'); 
  ?>
<nav>
    <div class="logo">
        <img class="hotellogo" src="../../assets/images/hotellogo.jpg" alt="">
        <p>Hotel</p>
    </div>
    <ul>
        <li><a href="#firstsection">Home</a></li>
        <li><a href="#secondsection">Rooms</a></li>
        <li><a href="#thirdsection">Facilites</a></li>
        <li><a href="#contactus">contact us</a></li>
        <a href=""><button class="btn btn-danger">Logout</button></a>
    </ul>
</nav>
<div id="first_div" class="carousel slide carousel_section" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="carousel-image" src="../../assets/images/__hotel4.jpg">
        </div>
        <div class="carousel-item">
            <img class="carousel-image" src="../../assets/images/__hotel5.jpg">
        </div>
        <div class="carousel-item">
            <img class="carousel-image" src="../../assets/images/__hotel6.jpg">
        </div>

        <div class="welcomeline">
            <h1 class="welcometag">Welcome to Hotel</h1>
        </div>

        <!-- bookbox -->
        <div id="guestdetailpanel">
            <form action="/resources/views/User.blade.php" method="POST" class="guestdetailpanelform">
                <div class="head">
                    <h3>RESERVATION</h3>
                    <i class="fa-solid fa-circle-xmark" onclick="closebox()"></i>
                </div>
                <div class="middle">
                    <div class="guestinfo">
                        <h4>Guest information</h4>
                        <input class="form-controls" type="text" name="Name" placeholder="Enter Full name">
                        <input class="form-controls" type="email" name="Email" placeholder="Enter Email">

                     
                        <select name="Country" class="form-controls">
                            <option value selected>Select your country</option>
                            <option value="' . $value . '">
                              <?php 
                              ' . $value . ' 
                              ?></option>';
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

        </div>

    </div>
</div>
<div id="second_div">
    <img src="../../assets/images/homeanimatebg.svg">
    <div class="ourroom">
        <h1 class="head">≼ Our room ≽</h1>
        <div class="roomselect">
            <div class="roombox">
                <div class="hotelphoto h1"></div>
                <div class="roomdata">
                    <h2>Superior Room</h2>
                    <div class="services">
                        <i class="fa-solid fa-wifi"></i>
                        <i class="fa-solid fa-burger"></i>
                        <i class="fa-solid fa-spa"></i>
                        <i class="fa-solid fa-dumbbell"></i>
                        <i class="fa-solid fa-person-swimming"></i>
                    </div>
                    <button class="btn btn-primary bookbtn" onclick="openbookbox()">Book</button>
                </div>
            </div>
            <div class="roombox">
                <div class="hotelphoto h2"></div>
                <div class="roomdata">
                    <h2>Delux Room</h2>
                    <div class="services">
                        <i class="fa-solid fa-wifi"></i>
                        <i class="fa-solid fa-burger"></i>
                        <i class="fa-solid fa-spa"></i>
                        <i class="fa-solid fa-dumbbell"></i>
                    </div>
                    <button class="btn btn-primary bookbtn" onclick="openbookbox()">Book</button>
                </div>
            </div>
            <div class="roombox">
                <div class="hotelphoto h3"></div>
                <div class="roomdata">
                    <h2>Guest House</h2>
                    <div class="services">
                        <i class="fa-solid fa-wifi"></i>
                        <i class="fa-solid fa-burger"></i>
                        <i class="fa-solid fa-spa"></i>
                    </div>
                    <button class="btn btn-primary bookbtn" onclick="openbookbox()">Book</button>
                </div>
            </div>
            <div class="roombox">
                <div class="hotelphoto h4"></div>
                <div class="roomdata">
                    <h2>Single Room</h2>
                    <div class="services">
                        <i class="fa-solid fa-wifi"></i>
                        <i class="fa-solid fa-burger"></i>
                    </div>
                    <button class="btn btn-primary bookbtn" onclick="openbookbox()">Book</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="third_div">
    <h1 class="head">≼ Facilities ≽</h1>
    <div class="facility">
        <div class="box">
            <h2>Swiming pool</h2>
        </div>
        <div class="box">
            <h2>Spa</h2>
        </div>
        <div class="box">
            <h2>24*7 Restaurants</h2>
        </div>
        <div class="box">
            <h2>24*7 Gym</h2>
        </div>
        <div class="box">
            <h2>Animation</h2>
        </div>
    </div>
</div>
<div id="contactus_div">
    <div class="social">
        <i class="fa-brands fa-instagram"></i>
        <i class="fa-brands fa-facebook"></i>
        <i class="fa-solid fa-envelope"></i>
    </div>
    <div class="createdby">
        <h5>Hotel</h5>
    </div>
</div>
</template>
