<?php
include "koneksi.php";
session_start();
if (isset($_SESSION['email'])){
header ("");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Login</title>
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
                                    <a href="alamaak-deadline/index.php"><img src="images/logo/256.png" alt="logo" class="brand-logo mx-auto d-block img-fluid rounded-circle"/></a>
                                </div>
                                <div class="mt-4">
                                    <form method="POST" name = "login" action="cek_login.php">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" value="" placeholder="Enter email address" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password" value="" placeholder="Enter password" required>
                                        </div>
                                        <center>
                                        <button type="submit" class="btn btn-outline-light" name="login_btn">Sign in</button>
                                      </center>
                                    </form>
                                    <div class="clearfix"></div>
                                    <p class="content-divider center mt-4"><span>or</span></p>
                                </div>
                                <p class="text-center">
                                    Don't have an account yet? <a href="register.php">Sign Up Now</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </body>
</html>
