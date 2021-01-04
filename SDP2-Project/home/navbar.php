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

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" style="height:60px; background-color: #343a40">

            <nav class="navbar navbar-expand-lg bg-dark navbar-dark">

                <button type="button" class="navbar-toggler" data-target="#menu" data-toggle="collapse">

                    <span class="navbar-toggler-icon"></span>

                </button>

                <div class="collapse navbar-collapse" id="menu">

                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item active mr-3">
                            <a href="../home/home.php" class="nav-link">Home</a>
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
                                    <a href="" class="nav-link">Discharge List</a>
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
