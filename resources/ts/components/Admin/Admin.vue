<style>
    .pace {
      -webkit-pointer-events: none;
      pointer-events: none;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    .pace-inactive {
      display: none;
    }

    .pace .pace-progress {
      background: #3620cb;
      position: fixed;
      z-index: 2000;
      top: 0;
      right: 100%;
      width: 100%;
      height: 5px;
    }

    .pace .pace-progress-inner {
      display: block;
      position: absolute;
      right: 0px;
      width: 100px;
      height: 100%;
      opacity: 1;
      -webkit-transform: rotate(3deg) translate(0px, -4px);
      -moz-transform: rotate(3deg) translate(0px, -4px);
      -ms-transform: rotate(3deg) translate(0px, -4px);
      -o-transform: rotate(3deg) translate(0px, -4px);
      transform: rotate(3deg) translate(0px, -4px);
    }

    .pace .pace-activity {
      display: block;
      position: fixed;
      z-index: 2000;
      top: 15px;
      right: 15px;
      width: 14px;
      height: 14px;
      border: solid 2px transparent;
      border-top-color: #3620cb;
      border-left-color: #3620cb;
      border-radius: 10px;
      -webkit-animation: pace-spinner 400ms linear infinite;
      -moz-animation: pace-spinner 400ms linear infinite;
      -ms-animation: pace-spinner 400ms linear infinite;
      -o-animation: pace-spinner 400ms linear infinite;
      animation: pace-spinner 400ms linear infinite;
    }

    @-webkit-keyframes pace-spinner {
      0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
      }
      100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
      }
    }
    @-moz-keyframes pace-spinner {
      0% {
        -moz-transform: rotate(0deg);
        transform: rotate(0deg);
      }
      100% {
        -moz-transform: rotate(360deg);
        transform: rotate(360deg);
      }
    }
    @-o-keyframes pace-spinner {
      0% {
        -o-transform: rotate(0deg);
        transform: rotate(0deg);
      }
      100% {
        -o-transform: rotate(360deg);
        transform: rotate(360deg);
      }
    }
    @-ms-keyframes pace-spinner {
      0% {
        -ms-transform: rotate(0deg);
        transform: rotate(0deg);
      }
      100% {
        -ms-transform: rotate(360deg);
        transform: rotate(360deg);
      }
    }
    @keyframes pace-spinner {
      0% {
        transform: rotate(0deg);
        transform: rotate(0deg);
      }
      100% {
        transform: rotate(360deg);
        transform: rotate(360deg);
      }
    }

    @import url("https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Anton&family=Cookie&family=Poppins:wght@600&display=swap");

    :root {
      --bg-text-shadow: 0 2px 4px rgb(13 0 77 / 8%), 0 3px 6px rgb(13 0 77 / 8%),
        0 8px 16px rgb(13 0 77 / 8%);
      --bg-box-shadow: 0px 0px 20px 6px rgb(0 0 0 / 34%);
    }

    * {
      margin: 0;
      padding: 0;
      font-family: "Poppins", sans-serif;
      /* text-shadow: var(--bg-text-shadow); */
    }
    body {
      height: 100vh;
      overflow: hidden;
    }
    .uppernav {
      height: 50px;
      /* background-color: rgb(78, 94, 112); */
      background-image: linear-gradient(90deg, #70b7e6bc, #0000ffaa);
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 5px 40px;
    }
    .logo {
      height: 90%;
      display: flex;
    }
    .logo .bluebirdlogo {
      height: 100%;
    }
    .logo p {
      height: 100%;
      display: flex;
      align-items: center;
      font-size: 30px;
      color: rgb(8, 17, 44);
      text-shadow: var(--bg-text-shadow);
    }

    .logout button {
      height: 30px;
      width: 100px;
      background-color: rgba(228, 24, 24, 0.789);
      border: none;
      border-radius: 20px;
      color: white;
      cursor: pointer;
    }

    .sidenav {
      position: absolute;
      background-color: #0e1b3d;
      width: 18%;
      height: 100%;
      color: #ffffff;
    }
    ul li {
      display: flex;
      /* justify-content: center; */
      align-items: center;
      padding: 0px 10px;
      height: 50px;
      cursor: pointer;
      margin-bottom: 5px;
    }
    ul li:hover {
      background-color: #141dd498;
    }
    ul li.active {
      background-color: #141dd498;
    }

    .app {
      margin-left: 18%;
    }

    .frames {
      height: 100vh;
      width: 100%;
      display: none;
      border: 1px solid #CCC;

    }
  
    .frames.active {
      display: block;
    }

    /* temp */
    img {
      height: 23px;
    }

    /* responsive stuff */
    #mobileview {
      height: 100vh;
      width: 100%;
      background-color: #ffffff;
      position: absolute;
      z-index: 9999;
      display: none;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
    }

    @media (max-width: 40rem) {
      #mobileview {
        display: flex;
      }
    }
</style>
<script setup lang="ts">
    var btns = document.querySelectorAll(".pagebtn");
    var frames = document.querySelectorAll(".frames");

    var frameActive = function (manual) {
      btns.forEach((btn) => {
        btn.classList.remove("active");
      });
      frames.forEach((slide) => {
        slide.classList.remove("active");
      });

      btns[manual].classList.add("active");
      frames[manual].classList.add("active");
    };

    btns.forEach((btn, i) => {
      btn.addEventListener("click", () => {
        frameActive(i);
      });
    });
  
</script>
<template>
  
<nav class="uppernav">
        <div class="logo">
            <p>Hotel</p>
        </div>
        <div class="logout">
        <a src="/resources/views/Admin/Logout.blade.php" class="btn btn-primary""><button class="btn btn-primary">Logout</button></a>
    </div>
</nav>

<nav class="sidenav">
        <ul>
            <li class="pagebtn active"><img src="/resources/assets/images/icon/dashboard.png">Dashboard</li>
            <li class="pagebtn"><img src="/resources/assets/images/icon/bed.png">Room Booking</li>
            <li class="pagebtn"><img src="/resources/assets/images/icon/wallet.png">Payment</li>
            <li class="pagebtn"><img src="/resources/assets/images/icon//bedroom.png">Rooms</li>
            <li class="pagebtn"><img src="/resources/assets/images/icon/staff.png">Staff</li>
        </ul>
</nav>

  <div class="mainscreen">
      <iframe class="frames frame1 active" src="/resources/views/Admin/Dashboard.blade.php" frameborder="0"></iframe>
      <iframe class="frames frame2" src="/resources/views/Admin/Roombook.blade.php" frameborder="0"></iframe>
      <iframe class="frames frame3" src="/resources/views/AdminPayment.blade.php" frameborder="0"></iframe>
      <iframe class="frames frame4" src="/resources/views/Admin/Room.blade.php" frameborder="0"></iframe>
      <iframe class="frames frame4" src="/resources/views/Admin/Staff.blade.php" frameborder="0"></iframe>
  </div>
  <div id="mobileview">
        <h5>Admin panel doesn't show in mobile view</h4>
</div>

</template>
