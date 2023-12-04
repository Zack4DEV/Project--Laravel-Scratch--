<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{ URL::asset('/css/login.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<link rel="stylesheet" href="{{ URL::asset('/css/flash.css') }}">
<title>@yield('Hotel')</title>

<script src="{{ URL::asset('/javascript/auth.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
    </head>
<body>
@section('appsection')
<div id="carouselExampleControls" class="carousel slide carousel_section" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="carousel-image" src="{{ URL::asset('/image/__hotel1.jpg') }}">
        </div>
        <div class="carousel-item">
            <img class="carousel-image" src="{{ URL::asset('/image/__hotel2.jpg') }}">
        </div>
        <div class="carousel-item">
            <img class="carousel-image" src="{{ URL::asset('/image/__hotel3.jpg') }}">
        </div>
    </div>
</div>
<div class="logo">
    <p>Hotel</p>
</div>

            <div class="auth_container">

                <div id="Log_in">
                    <h2>Log In</h2>
                    <br />
                    <span>
                        <div class="role_btn">
                            <div class="btns active">User</div>
                            <div class="btns">Admin</div>
                        </div>
                    </span>
                </div>

                <div id="User_Log_In">

                    <form class="user_login authsection active" id="userlogin" action="route('login_to_welcome')" method="POST">

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
                            <h6>Don't have an account? <span class="page_move_btn" onclick="signuppage()">signup</span>
                            </h6>
                        </div>

                    </form>

                </div>

                <div id="Employee_Log_In">

                    <form class="employee_login authsection" id="employeelogin" action="route('login_to_welcome')" method="POST">
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
            </div>

            <div id="sign_up">
                <h2>Sign Up</h2>

                <form class="user_signup" id="usersignup" action="route('in_signup_user')" method="POST">
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
        </div>
    @endsection
</body>
</html>