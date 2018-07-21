<?php
    session_start();

    include 'koneksi.php';

    if(isset($_POST['register_btn'])){
        $customer_name = mysqli_real_escape_string($connect, $_POST['customer_name']);
        $email = mysqli_real_escape_string($connect, $_POST['email']);
        $phone = mysqli_real_escape_string($connect, $_POST['phone']);
        $password = mysqli_real_escape_string($connect, $_POST['password']);
        $password2 = mysqli_real_escape_string($connect, $_POST['password2']);

        if ($password == $password2) {
            $password = md5($password);
            $sql = "INSERT INTO users (customer_name, email, phone, password) VALUES ('$customer_name', '$email', '$phone', '$password')";
            mysqli_query($connect, $sql);
            $_SESSION['email'] = $email;
            $_SESSION['nama'] = $customer_name;
			$_SESSION['phone'] = $phone;
            header("location:alamaak-deadline/index.php");
        } else {
            echo "The two passwords do not match";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Register</title>
        <meta name="description" content="Love Authority." />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
        <link rel="stylesheet" href="css/styles.css" />
    </head>
    <body>
        <!--hero section-->
        <section class="hero">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-8 mx-auto">
                        <div class="card border-none">
                            <div class="card-body">
                              <div class="mt-2">
                                  <img src="images/logo/256.png" alt="logo" class="brand-logo mx-auto d-block img-fluid rounded-circle"/>
                              </div>
                                <div class="mt-4">
                                    <form method="POST" action="register.php">
                                        <div class="form-group">
                                            <input type="name" class="form-control" name="customer_name" value="" placeholder="Enter name" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" value="" placeholder="Enter email address" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="number" class="form-control" name="phone" value="" placeholder="Enter Phone Number" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password" value="" placeholder="Enter password" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password2" value="" placeholder="Confirm password" required>
                                        </div>
                                        <center>
                                        <button type="submit" class="btn btn-outline-light" name="register_btn">Create Account</button>
                                      </center>
                                    </form>
                                    <div class="clearfix"></div>
                                    <p class="content-divider center mt-4"><span>or</span></p>
                                </div>
                                <p class="text-center">
                                    Already have an account? <a href="login.php">Login Now</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </body>
</html>
