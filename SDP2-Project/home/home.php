<?php
    session_start();
    require_once '../app/classes/login.php';
    if($_SESSION['id'] == null) {
        header("location:../index.php");
    }
    $userLogout = new login();

    if(isset($_GET['logout'])) {
        $userLogout->userLogout();
    }

    $sql = "SELECT * FROM doctors";
    $doctorsQuery = mysqli_query(Database::dbConnection(), $sql);
?>

<!DOCTYPE html>
<html lang="en">
<?php

?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Home</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css" />
    <link rel="stylesheet" href="../assets/css/all.min.css" />
    <link rel="stylesheet" href="../assets/css/style.css" />
</head>

<div class="container-fluid">
    <div class="row">

        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 bg-warning" style="height:60px;">

            <div class="col-md-12 logo_agile">
                <h3 style="margin-top: 10px;">
                    <a href="../home/home.php">
                        <span>A</span>chievers
                        <span>H</span>ealth
                        <span>C</span>are
                    </a>
                </h3>
            </div>

        </div>

        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 bg-warning" style="height:60px;">

            <div id="content-wrapper" class="d-flex flex-column">

                <div id="content" style="margin-top: 10px;">

                    <div class="container-fluid">
                        <form action="" method="post" class="d-none d-md-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group">
                                <input type="text" name="search" class="form-control bg-light border-0 small" placeholder="search here" aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button name="btnSearch" class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-fw"></i>
                                    </button>
                                </div>
                            </div>
                        </form>

                        <nav class="navbar navbar-expand navbar-black topbar mb-4 static-top shadow col-md-nav-6 mb-auto" style="float: right;">

                            <ul class="navbar-nav">
                                <li class="nav-item dropdown no-arrow d-md-none">
                                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-search fa-fw"></i>
                                    </a>
                                    <!-- Dropdown - Messages -->
                                    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                        <form action="" method="post" class="form-inline mr-auto w-100 navbar-search">
                                            <div class="input-group">
                                                <input type="text" name="search" class="form-control bg-light border-0 small" placeholder="Search here" aria-label="Search" aria-describedby="basic-addon2">
                                                <div class="input-group-append">
                                                    <button name="btnSearch" class="btn btn-primary" type="button">
                                                        <i class="fas fa-search fa-fw"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </li>

                            </ul>

                            <ul class="navbar-nav">

                                <li class="nav-item mr-3">

                                    <a href="" class="nav-link">Appointment</a>

                                </li>

                                <li class="nav-item mr-3">

                                    <a href="" class="nav-link">Location</a>

                                </li>

                                <li class="nav-item mr-3">

                                    <a href="" class="nav-link">Mail</a>

                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-user-circle fa-fw"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown" name="logout" id="logout">

                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
                                    </div>
                                </li>

                            </ul>

                        </nav>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="row">

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" style="height:100%; background-color: #343a40">

            <nav class="navbar navbar-expand-lg bg-dark navbar-dark">

                <button type="button" class="navbar-toggler" data-target="#menu" data-toggle="collapse">

                    <span class="navbar-toggler-icon"></span>

                </button>

                <div class="collapse navbar-collapse" id="menu">

                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item active mr-3">
                            <a href="home.php" class="nav-link">Home</a>
                            <span class="sr-only">(current)</span>
                        </li>

                        <li class="nav-item dropdown mr-3">
                            <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Doctors</a>

                            <ul class="dropdown-menu bg-dark">

                                <li>
                                    <a href="../doctor/addDoctor.php" class="nav-link">Add Doctor</a>
                                </li>

                                <li>
                                    <a href="" class="nav-link">Appointment</a>
                                </li>

                            </ul>

                        </li>

                        <li class="nav-item dropdown mr-3">
                            <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Patients</a>

                            <ul class="dropdown-menu bg-dark">

                                <li>
                                    <a href="../patient/admission.php" class="nav-link">Admission</a>
                                </li>

                                <li>
                                    <a href="../patient/discharge.php" class="nav-link">Discharge</a>
                                </li>

                                <li>
                                    <a href="../patient/patientList.php" class="nav-link">Patient List</a>
                                </li>

                                <li>
                                    <a href="../patient/dischargeList.php" class="nav-link">Discharge List</a>
                                </li>

                                <li>
                                    <a href="" class="nav-link">Doctor Appointment</a>
                                </li>

                            </ul>

                        </li>

                        <li class="nav-item dropdown mr-3">
                            <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Services</a>

                            <ul class="dropdown-menu bg-dark">

                                <li>
                                    <a href="" class="nav-link">Emergency</a>
                                </li>

                                <li>
                                    <a href="" class="nav-link">Ambulance</a>
                                </li>

                                <li>
                                    <a href="" class="nav-link">Cabin</a>
                                </li>

                            </ul>

                        </li>

                        <li class="nav-item mr-3">
                            <a href="" class="nav-link">Health & Guides</a>
                        </li>

                        <li class="nav-item mr-3">
                            <a href="" class="nav-link">Contact</a>
                        </li>

                        <li class="nav-item mr-3">
                            <a href="" class="nav-link">About</a>
                        </li>

                    </ul>

                    <ul class="navbar-nav">

                        <li class="nav-item mr-3">
                            <a href="" class="nav-link" data-toggle="modal" data-target="#signInModal">SignIn</a>
                        </li>

                        <li class="nav-item mr-3">
                            <a href="" class="nav-link" data-toggle="modal" data-target="#signUpModal">SignUp</a>
                        </li>

                    </ul>

                </div>
            </nav>

            <div id="slider" class="carousel slide" data-ride="carousel" data-interval="2000">

                <ol class="carousel-indicators">

                    <li data-target="#slider" data-slide-to="0" class="active"></li>
                    <li data-target="#slider" data-slide-to="1"></li>
                    <li data-target="#slider" data-slide-to="2"></li>
                    <li data-target="#slider" data-slide-to="3"></li>

                </ol>

                <div class="carousel-inner">

                    <div class="carousel-item active">

                        <img src="../assets/images/pexels3.png" class="w-100" height="450" alt="" />

                    </div>

                    <div class="carousel-item">

                        <img src="../assets/images/pexels4.png" class="w-100" height="450" alt="" />

                    </div>

                    <div class="carousel-item">

                        <img src="../assets/images/pexels5.png" class="w-100" height="450" alt="" />

                    </div>

                    <div class="carousel-item">

                        <img src="../assets/images/pexels8.png" class="w-100" height="450" alt="" />

                    </div>

                </div>

                <a href="#slider" class="carousel-control-prev" data-slide="prev">

                    <span class="carousel-control-prev-icon"></span>

                </a>

                <a href="#slider" class="carousel-control-next" data-slide="next">

                    <span class="carousel-control-next-icon"></span>

                </a>

            </div>

        </div>

    </div><br>

    <div class="row text-center">

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" style="height:100%;">

            <div class="card">
                <div class="card-header">
                    <h3 class="title text-danger">Top Doctors</h3>
                </div>
            </div>

            <div class="container-fluid" style="display: flex;">
                <?php while ($doctors = mysqli_fetch_array($doctorsQuery)) { ?>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 mb-4">
                    <div class="card h-100">
                        <img class="card-img-top" width="150" height="170" src="../doctor/doctorImage/<?php echo $doctors['image'] ?>" alt="">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $doctors['doctorName']  ?></h4>
                            <p class="card-text"><?php echo $doctors['doctorType'] ?></p>
                            <p class="card-text"><?php echo $doctors['roomNo'] ?></p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>

        </div>

    </div>

    <!----signInModal---->

    <div class="modal fade" id="signInModal">

        <div class="modal-dialog">

            <div class="modal-content">

                <div class="modal-header">

                    <h6 class="text-center text-success">Sign In</h6>
                    <button type="button" class="close" data-dismiss="modal">&Cross;</button>

                </div>

                <div class="modal-body">

                    <form action="" method="post">

                        <div class="form-group">

                            <div class="col-md-12">

                                <input type="email" name="email" class="form-control" placeholder="Email Address" required=""/>

                            </div>

                        </div>

                        <div class="form-group">

                            <div class="col-md-12">

                                <input type="password" name="password" class="form-control" placeholder="Password" required=""/>

                            </div>

                        </div>

                        <div class="form-group">

                            <div class="col-md-12">

                                <input type="submit" name="btnSignIn" value="Submit" class="btn btn-success btn-block" />

                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

    <!---signUp modal---->

    <div class="modal fade" id="signUpModal">

        <div class="modal-dialog">

            <div class="modal-content">

                <div class="modal-header">

                    <h6 class="text-center text-success">Sign Up</h6>
                    <button type="button" class="close" data-dismiss="modal">&Cross;</button>

                </div>

                <div class="modal-body">

                    <form action="" method="post">

                        <div class="form-group">

                            <div class="col-md-12">

                                <input type="text" name="firstName" class="form-control" placeholder="First Name" required="" />

                            </div>

                        </div>

                        <div class="form-group">

                            <div class="col-md-12">

                                <input type="text" name="lastName" class="form-control" placeholder="Last Name" required=""/>

                            </div>

                        </div>

                        <div class="form-group">

                            <div class="col-md-12">

                                <input type="email" name="email" class="form-control" placeholder="Email Address" required=""/>

                            </div>

                        </div>

                        <div class="form-group">

                            <div class="col-md-12">

                                <input type="password" name="password" class="form-control" placeholder="Password" required="" />

                            </div>

                        </div>

                        <div class="form-group">

                            <div class="col-md-12">

                                <input type="password" name="confirmPassword" class="form-control" placeholder="Confirm Password" required="" />

                            </div>

                        </div>

                        <div class="form-group">

                            <div class="col-md-12">

                                <input type="submit" name="btnSignUp" value="Submit" class="btn btn-success btn-block" />

                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>


<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/bootstrap.js"></script>
<script src="../assets/js/script.js"></script>
</body>
</html>