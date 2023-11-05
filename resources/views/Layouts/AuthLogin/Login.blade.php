@if (isset($_POST['Emp_login_submit']))
                    $Email = $_POST['Emp_Email'];
                    $Password = $_POST['Emp_Password'];

                    $result = DB::select("SELECT * FROM emp_login WHERE Emp_Email = '$Email' AND Emp_Password = BINARY'$Password'");

                    @if ($result->num_rows > 0)
                        $_SESSION['usermail'] = $Email;
                        $Email = $POST[""];
                        $Password = $_POST[""];
                        header("Location: admin/admin");
                    @else
                        echo "<script>swal({
                                title: 'Something went wrong',
                                icon: 'error',
                            });
                            </script>";
                    @endif
@endif
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
