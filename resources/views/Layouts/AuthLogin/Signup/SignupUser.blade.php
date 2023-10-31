@extends('Layouts.AuthLogin.AuthEmployeeLogin')
@extends('Layouts.AuthLogin.AuthUserLogin')

<div id="sign_up">
    <h2>Sign Up</h2>

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

        <button type="submit" name="user_signup_submit" class="auth_btn">Sign up</button>

        <div class="footer_line">
            <h6>Already have an account? <span class="page_move_btn" onclick="loginpage()">Log in</span>
            </h6>
        </div>
    </form>
</div>


@if (isset($_POST['user_signup_submit']))
$Username = $_POST['Username'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$CPassword = $_POST['CPassword'];

@if ($Username == "" || $Email == "" || $Password == "")
echo "<script>
    swal({
        title: 'Fill the proper details',
        icon: 'error',
    });
</script>";
@else
@if ($Password == $CPassword)
$sql = "SELECT * FROM signup WHERE Email = '$Email'";
$result = mysqli_query($conn, $sql);

@if ($result->num_rows > 0)
echo "<script>
    swal({
        title: 'Email already exists',
        icon: 'error',
    });
</script>";
@else
$sql = "INSERT INTO signup (Username,Email,Password) VALUES ('$Username', '$Email', '$Password')";
$result = mysqli_query($conn, $sql);

@if ($result)
$_SESSION['usermail'] = $Email;
$Username = "";
$Email = "";
$Password = "";
$CPassword = "";
//header("Location: home");
@else
echo "<script>
    swal({
        title: 'Something went wrong',
        icon: 'error',
    });
</script>";
@endif
@endif
@else
echo "<script>
    swal({
        title: 'Password does not matched',
        icon: 'error',
    });
</script>";
@endif
@endif
@endif
