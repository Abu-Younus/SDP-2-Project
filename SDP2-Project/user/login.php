<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
</head>

<div class="container">

    <div class="row">

        <div class="col-xl-6 col-lg-6 col-md-9 col-sm-9 mx-auto" style="margin-top: 120px;">

            <div class="card bg-dark">

                <div class="card-header bg-warning">

                    <h4 class="text-center text-light">Sign In</h4>

                </div>

                <div class="card-body">
                    <h5 class="text-center text-danger"><?php echo $message; ?></h5>
                    <form action="" method="POST">

                        <div class="form-group">

                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required autofocus/>

                        </div>

                        <div class="form-group">

                            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required autofocus/>

                        </div>

                        <div class="form-group">

                            <input type="submit" class="btn btn-success btn-block" name="btnLogIn" id="btnLogIn" value="LogIn"/>

                        </div>

                        <div class="form-group">

                            <h6 class="text-center"><a href="user/passwordReset.php" class="text-success">Forgot Password</a></h6>

                        </div>

                        <div class="form-group">

                            <h6 class="text-center text-light"><label>you have no account?</label>
                                <a href="user/register.php" class="text-danger">Create Account</a>
                            </h6>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.js"></script>

</html>
