@php
$Username = session().get('Username');
$Email = session().get('Email');
$Password = session().get('Password');

$result = DB::table("signup")
->select(array(
'Username' => $Username,
'Email' => $Email,
'Password' => $Password
))
->where('Username', "=", "{{ $Username }}")
->where('Email', "=", "{{ $Email }}")
->where('Password', "=", "{{ $Password }}");
->get();
@endphp

@if ($result)
session().put('Username', $Username);
session().put('Email', $Email);
session().put('Password', $Password);
session().put('CPassword', $Password);
header("Location: home");
@else
echo "<script>
    swal({
        title: 'Something went wrong',
        icon: 'error',
    });
</script>";
@endif
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
