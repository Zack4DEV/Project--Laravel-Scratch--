<?php
include './config.php';
global  $IsAdminEntry ,$IsUserEntry;
if($IsAdminEntry == true){
    header("Location: admin/admin.php");
}else if($IsUserEntry == true){
    header("Location: home.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- aos animation -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- loading bar -->
    <script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script>
    <link rel="stylesheet" href="css/flash.css">
    <title>Hotel</title>
</head>

<body>
    <!--  carousel -->
    <section id="carouselExampleControls" class="carousel slide carousel_section" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="carousel-image" src="./image/__hotel1.jpg">
            </div>
             <div class="carousel-item">
                <img class="carousel-image" src="./image/__hotel2.jpg">
            </div>
          <div class="carousel-item">
                <img class="carousel-image" src="./image/__hotel3.jpg">
            </div>
        </div>
    </section>

    <!-- main section -->
    <section id="auth_section">

        <div class="logo">
            <p>Hotel</p>
        </div>

        <div class="auth_container">
                <div id="Log_in">
                <h2>Log In</h2>
                <br/>
                <span>
                    <div class="role_btn">
                        <div class="btns">Admin</div>
                        <div class="btns active">User</div>
                    </div>
                </span>
                <form class="employee_login authsection" id="employeelogin" action="" method="POST">
                    <div class="form-floating">
                        <input type="email" class="form-control" name="Emp_Email" placeholder=" ">
                        <label for="floatingInput">Email</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" name="Emp_Password" placeholder=" ">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <button type="submit" name="Emp_login_submit" class="auth_btn">Log in</button>
                </form>
                <?php
                if (isset($_POST['Emp_login_submit'])) {
                    $Email = $_POST['Emp_Email'];
                    $Password = $_POST['Emp_Password'];

                    $sqlResultEmployee = $conn->prepare("SELECT * FROM emp_login");
                    $sqlResultEmployee ->execute();
                    $resultEmployee = $sqlResultEmployee->fetchColumn(PDO::FETCH_ASSOC);
                    while($resultEmployee > 0){
                    $IsAdminEntry = true;
                    if (empty($_POST['Emp_login_submit'])) {
                        $_SESSION['usermail'] = $Email;
                        $Email = "";
                        $Password = "";
                        exit;
                  }
                }
                }
                ?>                
                <form class="user_login authsection active" id="userlogin" action="" method="POST">
                <div class="form-floating">
                    <input type="text" class="form-control" name="Username" placeholder=" ">
                    <label for="Username">Username</label>
                </div>
                <div class="form-floating">
                    <input typuser_logine="email" class="form-control" name="Email" placeholder=" ">
                    <label for="Email">Email</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" name="Password" placeholder=" ">
                    <label for="Password">Password</label>
                </div>
                <button type="submit" name="user_login_submit" class="auth_btn">Log in</button>
                <div class="footer_line">
                <h6>Don't have an account?<span class="page_move_btn" onclick="signuppage()">sign up</span></h6>
                </div>
                </form>

                </div>

                <div id="sign_up">
                <h2>SignUp</h2>
                <form class="user_signup" id="usersignup" action="" method="POST">
                   <div class="form-floating">
                     <input type="text" class="form-control" name="Username" placeholder=" ">
                     <label for="Username">Username</label>
                    </div>
                    <div class="form-floating">
                      <input type="email" class="form-control" name="Email" placeholder=" ">
                      <label for="Email">Email</label>
                    </div>
                    <div class="form-floating">
                      <input type="password" class="form-control" name="Password" placeholder=" ">
                      <label for="Password">Password</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" name="CPassword" placeholder=" ">
                        <label for="CPassword">Confirm Password</label>
                    </div>
                    <button type="submit" name="user_signup_submit" class="auth_btn">Sign Up</button>

                    <div class="footer_line">
                        <h6>Already have an account? <span class="page_move_btn" onclick="loginpage()">Log in</span>
                        </h6>
                    </div>
        </form>

                    <?php
                    if (isset($_POST['user_login_submit'])) {
                        $Email = $_POST['Email'];
                        $Password = $_POST['Password'];

                        $sqlResultUser = $conn->prepare("SELECT * FROM signup");
                        $sqlResultUser->execute();
                        $resultUser = $sqlResultUser->fetchColumn(PDO::FETCH_ASSOC);

                        $IsUserEntry = true;

                        if (!empty($_POST['user_login_submit'])) {
                            echo "<script>swal({
                                title: 'Something went wrong',
                                icon: 'error',
                            });
                            </script>";


                        } else {
                            $_SESSION['usermail'] = $Email;
                            $Email = "";
                            $Password = "";
                            exit;
                        }
                    }
                    if (null !== isset($_POST['user_signup_submit'])) {
                            $Username = $_POST['Username'];
                            $Email = $_POST['Email'];
                            $Password = $_POST['Password'];
                            $CPassword = $_POST['CPassword'];

                            if ($Username != "" && $Email != "" && $Password != "") {
                                if ($Password == $CPassword) {
                                    $sqlResultUser = $conn->prepare("SELECT * FROM signup");
                                    $sqlResultUser->execute();
                                    $resultUserSignup = $sqlResultUser->fetchColumn(PDO::FETCH_ASSOC);

                                    if ($resultUserSignup > 0) {
                                        echo "<script>swal({
                                                title: 'Email already exist',
                                                icon: 'error',
                                            });
                                            </script>";
                                    } else {
                                        $sqlResultUser = $conn->prepare("INSERT INTO signup[(Username,Email,Password)] VALUES ('$Username', '$Email', '$Password')");
                                        $sqlResultUser->execute();
                                        $resultUserLogin = $sqlResultUser->fetchColumn(PDO::FETCH_ASSOC);

                                        //$IsUserEntry =true;

                                        if (!empty($_POST['user_login_submit'])) {
                                            echo "<script>swal({
                                                title: 'Something went wrong',
                                                icon: 'error',
                                            });
                                            </script>";


                                        } else {
                                            $_SESSION['usermail'] = $Email;
                                            $Username = "";
                                            $Email = "";
                                            $Password = "";
                                            $CPassword = "";
                                            //exit;
                                        }
                                    }
                                } else {
                                    echo "<script>swal({
                                            title: 'Password does not matched',
                                            icon: 'error',
                                        });
                                        </script>";
                                }
                            }
                        }
                        ?>
                </div>
     </section>
</body>


<script type="module" src="javascript/index.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

<!-- aos animation-->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>

</html>
