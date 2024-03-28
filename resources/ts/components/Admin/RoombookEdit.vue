    <style>
        #editpanel {
            position: fixed;
            z-index: 1000;
            height: 100%;
            width: 100%;
            display: flex;
            justify-content: center;
            /* align-items: center; */
            background-color: #00000079;
        }

        #editpanel .guestdetailpanelform {
            height: 620px;
            width: 1170px;
            background-color: #ccdff4;
            border-radius: 10px;
            /* temp */
            position: relative;
            top: 20px;
            animation: guestinfoform .3s ease;
        }
    </style>

    <script setup lang="ts" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
crossorigin="anonymous">

    </script>
    <template>
    <?php
    require(__DIR__.'/resources/views/Admin/RoombookEdit.blade.php');
        <div id="editpanel">
            <form action="__DIR__.'/resources/views/Admin/RoombookEdit.blade.php'" method="POST" class="guestdetailpanelform">
                <div class="head">
                    <h3>EDIT RESERVATION</h3>
                </div>
                <div class="middle">
                    <div class="guestinfo">
                        <h4>Guest information</h4>
                        <input class="form-controls" type="text" name="Name" placeholder="Enter Full name" value="<?php ' . $Name . ' ?>">
                        <input class="form-controls" type="email" name="Email" placeholder="Enter Email" value="<?php  ' . $Email . ' ?>">
                <select name="Country" class="form-controls">
                            <option value selected>Select your country</option>
                           '<option value="' . $value . '"><?php ' . $value . ' ?></option>'</select>
                        <input class="form-controls" type="text" name="Phone" placeholder="Enter Phoneno" value="<?php echo $Phone ?>">
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
                        <select name="noofroom" class="form-controls">
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
                                <input class="form-controls" name="cin" type="date" value="<?php ' . $cin . ' ?>">
                            </span>
                            <span>
                                <label for="cin"> Check-Out</label>
                                <input class="form-controls" name="cout" type="date" value="<?php ' . $cout . ' ?>">
                            </span>
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <button class="btn btn-success" name="guestdetailedit">Edit</button>
                </div>
            </form>
        </div>

    ?>
    </template>