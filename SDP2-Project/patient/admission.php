<?php
require_once '../app/classes/admission.php';

$patientAdmission = new admission();

$message = '';

if(isset($_POST['btnSave'])) {
    $patientAdmission->patientAdmission($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Patient Admission</title>
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

                    <h4 class="text-center text-light">Patient Admission</h4>

                </div>

                <div class="card-body">
                    <h5 class="text-center text-danger"><?php echo $message; ?></h5>
                    <form action="" method="post">

                        <div class="form-group">

                            <input type="text" class="form-control" name="patientName" id="patientName" placeholder="Patient Name" required autofocus/>

                        </div>

                        <div class="form-group">

                           <select class="form-control" name="patientType">
                               <option value="#">Please select patient type</option>
                               <option value="emergency">Emergency</option>
                               <option value="high_blood_pressure">High Blood Pressure</option>
                               <option value="high_sugar">High Sugar</option>
                               <option value="sugar_cretinine">Sugar Cretinine</option>
                               <option value="critical">Critical</option>
                           </select>

                        </div>

                        <div class="form-group">

                           <textarea class="form-control" name="address" cols="1" rows="4" placeholder="Patient Address"></textarea>

                        </div>

                        <div class="form-group">

                            <input type="text" class="form-control" name="cabinNo" id="cabinNo" placeholder="Cabin No" required autofocus/>

                        </div>

                        <div class="form-group">
                            <label class="text-white" for="admissionDate">Admission Date : </label>
                            <input type="date" class="form-control" name="admissionDate" id="admissionDate" required autofocus/>

                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="reference" id="reference" placeholder="Reference" required autofocus/>

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