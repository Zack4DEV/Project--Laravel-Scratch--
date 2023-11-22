@include('Admins.Admin.Admin')

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

@php
$Email = session().get('Emp_Email');
$Password = session().get('Emp_Password');

$result = DB::table("emp_login")
->select(array(
'Emp_Email' => $Email,
'Emp_Password' => $Password
))
->where('Emp_Email', "=", "{{ $Email }}")
->where('Emp_Password', "=", "{{ $Password }}");
->get

@endif

@if ($result)
session().put('Emp_Email', $Email);
session().put('Emp_Password', $Password);
header("Location: admin/admin");
@else
echo "<script>
    swal({
        title: 'Something went wrong',
        icon: 'error',
    });
</script>";
@endif
