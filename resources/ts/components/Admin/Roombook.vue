    <script setup lang="ts">
    var detailpanel = global.document.getElementById("guestdetailpanel");

    adduseropen = () => {
      detailpanel.style.display = "flex";
    };
    adduserclose = () => {
      detailpanel.style.display = "none";
    };

    //search bar logic using js
    const searchFun = () => {
      let filter = document.getElementById("search_bar").value.toUpperCase();

      let myTable = document.getElementById("table-data");

      let tr = myTable.getElementsByTagName("tr");

      for (var i = 0; i < tr.length; i++) {
        let td = tr[i].getElementsByTagName("td")[1];

        if (td) {
          let textvalue = td.textContent || td.innerHTML;

          if (textvalue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    };

</script>
<style scoped>
    @import url("https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Anton&family=Cookie&family=Poppins:wght@600&display=swap");
    @import url("https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400&display=swap");

    :root {
      --bg-text-shadow: 0 2px 4px rgb(13 0 77 / 8%), 0 3px 6px rgb(13 0 77 / 8%),
        0 8px 16px rgb(13 0 77 / 8%);
      --bg-box-shadow: 0px 0px 20px 6px rgba(26, 30, 164, 0.31);
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

    body {
      background-color: #ffff;
    }

    * {
      margin: 0;
      padding: 0;
      font-family: "Poppins", sans-serif;
      /* text-shadow: var(--bg-text-shadow); */
    }

    i {
      font-size: 20px;
    }

    .searchsection {
      height: 80px;
      width: 100%;
      display: flex;
      justify-content: space-evenly;
      align-items: center;
      background-color: #0a0d2d;
      position: fixed;
      z-index: 500;
    }

    #search_bar {
      height: 40px;
      width: 80%;
      border: none;
      background-color: rgba(195, 198, 233, 0.714);
      padding-left: 20px;
      border-radius: 30px;
    }
    #adduser {
      /* color: white; */
      height: 40px;
      background-color: rgb(0, 59, 254);
      border: none;
      border-radius: 30px;
      padding: 0 50px;
    }
    #adduser:hover {
      background-color: rgba(0, 17, 255, 0.733);
    }

    .exportexcel {
      height: 40px;
      width: 40px;
      background-color: rgb(47, 255, 47);
      border: none;
      border-radius: 50%;
      /* padding: 0 40px; */
    }

    /* guest panel */

    #guestdetailpanel {
      position: fixed;
      z-index: 1000;
      height: 100%;
      width: 100%;
      display: none;
      /* display: flex; */
      justify-content: center;
      /* align-items: center; */
      background-color: #00000079;
    }

    #guestdetailpanel .guestdetailpanelform {
      height: 620px;
      width: 1170px;
      background-color: #ccdff4;
      border-radius: 10px;
      /* temp */
      position: relative;
      top: 20px;
      animation: guestinfoform 0.3s ease;
    }
    a {
      color: black;
    }

    @keyframes guestinfoform {
      0% {
        transform: translateY(50px);
      }
    }

    .guestdetailpanelform .head {
      /* width: 100%; */
      padding: 0 10px;
      height: 40px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .guestdetailpanelform .head h3 {
      color: #111f49;
      position: relative;
      left: 40%;
      margin-top: 10px;
    }
    .guestdetailpanelform .head i {
      font-size: 25px;
      cursor: pointer;
    }

    .guestdetailpanelform .middle {
      width: 100%;
      height: 500px;
      margin: 10px 0 0 0;
      display: flex;
    }

    .guestdetailpanelform .middle .guestinfo {
      width: 100%;
      background-color: rgba(155, 187, 255, 0.752);
      padding: 20px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    .guestdetailpanelform .middle .reservationinfo {
      width: 100%;
      background-color: rgba(155, 187, 255, 0.752);
      padding: 20px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .line {
      width: 10px;
      height: 100%;
    }

    .guestdetailpanelform .footer {
      height: 50px;
      display: flex;
      justify-content: center;
      margin: 10px;
    }

    .middle .form-controls {
      width: 100%;
      border: none;
      background-color: #d1d7ff;
      padding: 10px;
      margin: 10px 0;
      border-radius: 20px;
    }

    .datesection {
      display: flex;
    }

    .datesection span {
      margin: 5px;
    }

    /* room book table */
    .roombooktable {
      position: absolute;
      color: #0a0d2d;
      margin-top: 80px;
      width: 100%;
      height: 100vh;

      /* padding bottom to add space */
      padding-bottom: 900px;
    }
    .roombooktable thead {
      background-color: #0a0d2d;
      color: white;
      text-align: center;
    }
    .roombooktable tbody {
      text-align: center;
    }

    .action a {
      text-decoration: none;
    }

    .action button {
      display: flex;
      flex-wrap: wrap;
      margin: 5px;
    }
</style>   

<template>
    <?php 
    require(__DIR__.'/resources/views/components/Admin/Roombook.php');
    ?>

    <!-- Admin Roombook-->
  <div id="guestdetailpanel">
    <form action="" method="POST" class="guestdetailpanelform">
        <div class="head">
            <h3>RESERVATION</h3>
            <i class="fa-solid fa-circle-xmark" onclick="adduserclose()"></i>
        </div>
        <div class="middle">
            <div class="guestinfo">
                <h4>Guest information</h4>
                <input class="form-controls" type="text" name="Name" placeholder="Enter Full name" required>
                <input class="form-controls" type="email" name="Email" placeholder="Enter Email" required>
                <select name="Country" class="form-controls" required>
                <option value="' . $value . '"><?php ' . $value . ' ?></option>
                </select>
                <input class="form-controls" type="text" name="Phone" placeholder="Enter Phoneno" required>
            </div>
        <div class="line"></div>

          <div class="reservationinfo">
              <h4>Reservation information</h4>
              <select name="RoomType" class="form-controls">
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
            <div class="footer">
                <button class="btn btn-success" name="guestdetailsubmit">Submit</button>
            </div>
        </div>
    </form>
  </div>

  <!-- Roombook Search -->
    <div class="searchsection">
        <input  type="text" name="search_bar" id="search_bar" placeholder="search..." onkeyup="searchFun()">
        <button class="adduser" id="adduser" onclick="adduseropen()"><i class="fa-solid fa-bookmark"></i>Add</button>
        <form action="/resources/views/Admin/ExportData.blade.php" method="post">
            <button class="exportexcel" id="exportexcel" name="exportexcel" type="submit"><i
                    class="fa-solid fa-file-arrow-down"></i></button>
        </form>
    </div>

    <!-- Roombook Table -->
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

        <tbody>
          <tr>
            <td><?php '.  $id .' ?></td>
            <td><?php '.  $name .' ?></td>
            <td><?php '.  $email .' ?></td>
            <td><?php '.  $country .' ?></td>
            <td><?php '.  $phone .' ?></td>
            <td><?php '.  $roomtype .' ?></td>
            <td><?php '.  $bed .' ?></td>
            <td><?php '.  $noofroom .' ?></td>
            <td><?php '.  $meal .' ?></td>
            <td><?php '.  $cin .' ?></td>
            <td><?php '.  $cout .' ?></td>
            <td><?php '.  $noofdays .' ?></td>
            <td><?php '.  $stat .' ?></td>
            <td class="action">
              <a href="/resources/views/Admin/RoombookConfirm.blade.php?id=<?php '. $id .' ?>"><button class='btn btn-success'>Confirm</button></a>
              <a href="/resources/views/Admin/RoombookEdit.blade.php?id=<?php '. $id .' ?>"><button class="btn btn-primary">Edit</button></a>
              <a href="/resources/views/Admin/RoombookDelete.blade.php?id=<?php '. $id .' ?>"><button class='btn btn-danger'>Delete</button></a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
</template>