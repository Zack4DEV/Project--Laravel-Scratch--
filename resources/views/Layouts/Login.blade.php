@section('loginsection')
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

                <form class="user_login authsection active" id="userlogin" action="" method="POST">
                    @method('POST')

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

                @if ($user_result_up)
                redirect()->route('to_roombook_create_user');
                @else
                echo "<script>
                    swal({
                        title: 'Something went wrong',
                        icon: 'error',
                    });
                </script>";
                @endif

            </div>

            <div id="Employee_Log_In">

                <form class="employee_login authsection" id="employeelogin" action="" method="POST">
                    @method('POST')
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

            @if ($employee_result_up)
            redirect()->route('to_employee_dashboard'');
            @else
            echo "<script>
                swal({
                    title: 'Something went wrong',
                    icon: 'error',
                });
            </script>";
            @endif
        </div>

        <div id="sign_up">
            <h2>Sign Up</h2>

            <form class="user_signup" id="usersignup" action="" method="POST">
                @method('POST')
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

            @if ($Username == "" || $Email == "" || $Password == "")

            echo "<script>
                swal({
                    title: 'Fill the proper details',
                    icon: 'error',
                });
            </script>";

            @elseif ($Password == $CPassword)

            @if ($result_up)
            echo "<script>
                swal({
                    title: 'Email already exists',
                    icon: 'error',
                });
            </script>";
            @endif

            @if ($result_in)
            header("Location: home");
            @else
            echo "<script>
                swal({
                    title: 'Something went wrong',
                    icon: 'error',
                });
            </script>";
            @endif

            @else
            echo "<script>
                swal({
                    title: 'Password does not matched',
                    icon: 'error',
                });
            </script>";
            @endif

        </div>

    </div>
@endsection
