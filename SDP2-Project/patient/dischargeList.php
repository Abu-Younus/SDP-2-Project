<?php
require_once '../app/classes/Database.php';

$sql = "SELECT * FROM discharge";
$queryResult = mysqli_query(Database::dbConnection(), $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Patient List</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css" />
    <link rel="stylesheet" href="../assets/css/style.css" />
</head>

<?php include '../home/navbar.php' ?>

<body>

<div class="container">

    <div class="row">

        <div class="col-xl-10 col-lg-10 col-md-9 col-sm-9 mx-auto" style="margin-top: 80px;">

            <div class="card bg-gray-700">

                <div class="card-header bg-dark">

                    <h4 class="text-center text-light">Patient List</h4>

                </div>

                <div class="card-body">
                    <table width="100%" border="1" cellspacing="0">
                        <tr class="text-white">
                            <th>Sr No.</th>
                            <th>Patient Name</th>
                            <th>Patient Type</th>
                            <th>Address</th>
                            <th>Cabin No.</th>
                            <th>Admission Date</th>
                            <th>Discharge Date</th>
                            <th>Reference</th>
                        </tr>
                        <?php $i=1; ?>
                        <?php while ($row = mysqli_fetch_array($queryResult)) { ?>
                            <tr class="text-info">
                                <td><?php echo $i++ ?></td>
                                <td><?php echo $row['patientName'] ?></td>
                                <td><?php echo $row['patientType'] ?></td>
                                <td><?php echo $row['patientAddress'] ?></td>
                                <td><?php echo $row['cabinNo'] ?></td>
                                <td><?php echo $row['admissionDate'] ?></td>
                                <td><?php echo $row['dischargeDate'] ?></td>
                                <td><?php echo $row['reference'] ?></td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>

            </div>

        </div>

    </div>

</div>

<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/bootstrap.js"></script>

</body>
</html>