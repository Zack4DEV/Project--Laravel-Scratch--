<!-- None Laravel Controllers -->
@include(__DIR__.'/resources/Views/Config.blade.php');

<!-- User Login-->

              @php

                          if (isset($_POST['user_login_submit'])) {
                              $Email = $_POST['Email'];
                              $Password = $_POST['Password'];

                              $sql = $conn->query("SELECT * FROM signup  WHERE Email = '$Email' AND Password = '$Password'");
                              $sql->execute();
                              $result = $sql->fetchAll(PDO::FETCH_ASSOC);
                  if ($result) {
                              $_SESSION['usermail']=$Email;
                              $Email = "";
                              $Password = "";
                              header("Location: __DIR__.'/resources/views/Index.blade.php'");
                              } else {
                              echo "<script>swal({
                                  title: 'Something went wrong',
                                  icon: 'error',
                              });
                              </script>";                           
                              }
                          }

                    @endphp

<!-- Employee Login-->
                    @php
                      if (isset($_POST['Emp_login_submit'])) {
                          $Email = $_POST['Emp_Email'];
                          $Password = $_POST['Emp_Password'];
                          $sql = $conn->query("SELECT * FROM emp_login WHERE Emp_Email = '$Email' AND Emp_Password =  '$Password'");
                          $result = $sql->execute();
                          $sql->fetchAll(PDO::FETCH_ASSOC);
                          if($result){
                                  $_SESSION['usermail']=$Email;
                                  $Email = "";
                                  $Password = "";
                                  header("Location: __DIR__.'/resources/views/Admin/admin.blade.php'");
                  } else {
                                  echo "<script>swal({
                                      title: 'Something went wrong',
                                      icon: 'error',
                                  });
                                  </script>";
                              }
                          }
                      ?>  
                  @endphp

<!-- User Signup -->
                @php
if (isset($_POST['user_signup_submit'])) {
                            $Username = $_POST['Username'];
                            $Email = $_POST['Email'];
                            $Password = $_POST['Password'];
                            $CPassword = $_POST['CPassword'];

                            if ($Username == "" || $Email == "" || $Password == "") {
                                echo "<script>swal({
                            title: 'Fill the proper details',
                            icon: 'error',
                        });
                        </script>";
                }else if($Password == $CPassword) {
                                    $sql = $conn->query("SELECT * FROM signup WHERE Email = '$Email' AND Password = '$Password'");
                                    $sql->execute();
                                    $result = $sql->fetchAll(PDO::FETCH_ASSOC);

                                    if ($result) {
                                        echo "<script>swal({
                                                title: 'Email already exist',
                                                icon: 'error',
                                            });
                                            </script>";
                                    } else {
    //$id = $_SESSION['UserID'];
                  //$sql = $conn->query("INSERT INTO signup VALUES ('','$Username', '$Email', '$Password')");
$result = $conn->prepare("INSERT INTO signup VALUES ('','$Username', '$Email', '$Password')")->execute();

                    if ($result) {
                                    $_SESSION['usermail']=$Email;
//$id = "";
                                    $Username = "";
                                    $Email = "";
                                    $Password = "";
                                    $CPassword = "";
                                    header("Location: __DIR__.'/resources/views/User.blade.php'");
                    } else {
                                    echo "<script>swal({
                                        title: 'Something went wrong',
                                        icon: 'error',
                                    });
                                    </script>";
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
                  @endphp