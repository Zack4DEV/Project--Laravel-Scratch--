<style scoped>
    @import url("https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Anton&family=Cookie&family=Poppins:wght@600&display=swap");
    @import url("https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400&display=swap");

    :root {
      --bg-text-shadow: 0 2px 4px rgb(13 0 77 / 8%), 0 3px 6px rgb(13 0 77 / 8%),
        0 8px 16px rgb(13 0 77 / 8%);
      --bg-box-shadow: 0px 0px 20px 6px rgba(8, 8, 15, 0.31);
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
      /* background-color: #ffff; */
      /* background-image: url(../../image/bg.jpg);
        background-size: cover; */
    }

    * {
      margin: 0;
      padding: 0;
      font-family: "Poppins", sans-serif;
      /* text-shadow: var(--bg-text-shadow); */
    }

    .addstaffsection {
      height: 60px;
      width: 100%;
      background-color: #0a0d2d;
      position: fixed;
      /* display: flex; */
      z-index: 100;
    }

    .addstaffsection form {
      height: 100%;
      display: flex;
      justify-content: space-evenly;
      align-items: center;
    }

    .addstaffsection form label {
      color: white;
    }

    .addstaffsection form select {
      width: 300px;
    }

    .addstaffsection form input {
      width: 300px;
    }

    .staff {
      display: flex;
      position: relative;
      top: 60px;
      height: 85vh;
      overflow-y: scroll;
      justify-content: space-evenly;
      flex-wrap: wrap;
    }
    .staffbox {
      height: 230px;
      width: 230px;
      margin: 20px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      color: #0a0d2d;
      text-shadow: var(--bg-text-shadow);
      border-radius: 10px;
    }

    .staffboxsuperior {
      background-color: #2407fc8e;
    }

    .staffboxdelux {
      background-color: #fa8393c8;
    }

    .staffboguest {
      background-color: #19cf1069;
    }

    .staffboxsingle {
      background-color: #07fcdb8e;
    }
</style>

<template>
  <?php 
  require(__DIRNAME__.'/resources/views/Admin/Staff.blade.php');
  ?> 
  <div class="staff">
    <!-- Staff To Add -->
    <div class="addstaffsection">
    <form action="/resources/views/Admin/Staff.blade.php" method="POST">
        <label for="tstaff">Name :</label>
        <input type="text" name="staffname" class="form-control">

        <label for="bed">Work :</label>
        <select name="staffwork" class="form-control">
            <option value selected></option>
            <option value="Manager">Manager</option>
            <option value="Cook">Cook</option>
            <option value="Helper">Helper</option>
            <option value="cleaner">Cleaner</option>
            <option value="weighter">weighter</option>
        </select>
        <button type="submit" class="btn btn-success" name="addstaff">Add Staff</button>
    </form>
   </div>  
    <div class='staffbox'>
      <div class='text-center no-boder'>
                      <i class='fa fa-users fa-5x'></i>
                      <h3><?php " . $name . " ?></h3>
                      <div class='mb-1'><?php " . $work . " ?></div>
                      <a href="staffdelete.php?id='<?php . $id .  ?>'"><button class='btn btn-danger'>Delete</button></a>
      </div>
      </div>
</div>
</template>    