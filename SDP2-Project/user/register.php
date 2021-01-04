<?php
    require_once '../app/classes/register.php';
    $message = '';
    if(isset($_POST['btnSignUp'])) {
        $userRegistration = new register();
        $userRegistration->userRegistration($_POST);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css" />
    <link rel="stylesheet" href="../assets/css/style.css" />
</head>

<body style="background-image: url('../assets/images/pexels5.png'); background-size: cover;">

<div class="container">

    <div class="row">

        <div class="col-xl-6 col-lg-6 col-md-9 col-sm-9 mx-auto" style="margin-top: 80px;">

            <div class="card bg-gray-700">

                <div class="card-header bg-dark">

                    <h4 class="text-center text-light">Sign Up</h4>

                </div>

                <div class="card-body">
                    <h5 class="text-center text-danger"><?php echo $message; ?></h5>
                    <form action="" method="post">

                        <div class="form-group">

                            <input type="text" class="form-control" name="firstName" id="firstName" placeholder="First Name" required autofocus/>

                        </div>

                        <div class="form-group">

                            <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Last Name" required autofocus/>

                        </div>

                        <div class="form-group">

                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required autofocus/>

                        </div>

                        <div class="form-group">

                            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required autofocus/>

                        </div>

                        <div class="form-group">

                            <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password" required autofocus/>

                        </div>

                        <div class="form-group">

                            <input type="submit" class="btn btn-success btn-block" name="btnSignUp" id="btnSignUp" value="SignUp"/>

                        </div>

                        <div class="form-group">

                            <h6 class="text-center text-light"><label>you have already account?</label>
                                <a href="../index.php" class="text-success">back to LogIn</a>
                            </h6>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/bootstrap.js"></script>

</body>
</html>