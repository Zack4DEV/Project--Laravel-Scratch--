@extends('Layouts.AuthLogin.AuthEmployeeLogin')
@extends('Layouts.AuthLogin.AuthUserLogin')

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
</div>


@php

$Username = session().get('Username');
$Email = session().get('Email');
$Password = session().get('Password');
$CPassword = session().get('CPassword');

@endphp

@if ($Username == "" || $Email == "" || $Password == "")

echo "<script>
    swal({
        title: 'Fill the proper details',
        icon: 'error',
    });
</script>";

@elseif ($Password == $CPassword)
$result_up = DB::table("signup")
->select(array(
'Username' => $Username,
'Email' => $Email,
'Password' => $Password,
'CPassword' => $CPassword
))
->where('Email', "=", "{{ $Email }}")
->get();

@if ($result_up)
echo "<script>
    swal({
        title: 'Email already exists',
        icon: 'error',
    });
</script>";
@else
$result_in = DB::table("signup")
->insert(array(
'Username' => $Username,
'Email' => $Email,
'Password' => $Password,
'CPassword' => $CPassword
));
@endif

@if ($result_up)
session().put('Username', $Username);
session().put('Email', $Email);
session().put('Password', $Password);
session().put('CPassword', $CPassword);
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
