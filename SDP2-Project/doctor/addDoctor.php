<?php
require_once '../app/classes/addDoctor.php';

$doctorAdd = new addDoctor();

$message = '';

if(isset($_POST['btnSave'])) {
    $doctorAdd->doctorAdd($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Doctor Add</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css" />
    <link rel="stylesheet" href="../assets/css/style.css" />
</head>

<?php include '../home/navbar.php' ?>

<body>

<div class="container">

    <div class="row">

        <div class="col-xl-6 col-lg-6 col-md-9 col-sm-9 mx-auto" style="margin-top: 80px;">

            <div class="card bg-gray-700">

                <div class="card-header bg-dark">

                    <h4 class="text-center text-light">Add Doctor</h4>

                </div>

                <div class="card-body">
                    <h5 class="text-center text-danger"><?php echo $message; ?></h5>
                    <form action="" method="post" enctype="multipart/form-data">

                        <div class="form-group">

                            <input type="text" class="form-control" name="doctorName" id="doctorName" placeholder="Doctor Name" required autofocus/>

                        </div>

                        <div class="form-group">

                            <select class="form-control" name="doctorType">
                                <option value="#">Please select Doctor type</option>
                                <option value="Cardiologist">Cardiologist</option>
                                <option value="Neurologist">Neurologist</option>
                                <option value="Dentist">Dentist</option>
                                <option value="Neprologist">Neprologist</option>
                                <option value="Psychiatrist">Psychiatrist</option>
                            </select>

                        </div>

                        <div class="form-group">

                            <textarea class="form-control" name="address" cols="1" rows="4" placeholder="Doctor Address"></textarea>

                        </div>

                        <div class="form-group">

                            <input type="text" class="form-control" name="roomNo" id="roomNo" placeholder="Room No" required autofocus/>

                        </div>

                        <div class="form-group">

                            <input type="number" class="form-control" name="mobileNo" id="mobileNo" placeholder="Mobile No" required autofocus/>

                        </div>

                        <div class="form-group">

                            <input type="file" class="form-control" name="image" alt=""/>

                        </div>

                        <div class="form-group">

                            <input type="submit" class="btn btn-success btn-block" name="btnSave" id="btnSave" value="Save"/>

                        </div>

                        <div class="form-group">

                            <h6 class="text-center text-light">
                                <a href="../home/home.php" class="text-white">back to Home</a>
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