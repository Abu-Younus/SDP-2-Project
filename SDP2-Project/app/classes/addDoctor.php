<?php
require_once 'Database.php';
class addDoctor
{
    public function doctorAdd($data) {
        $doctorName = $data['doctorName'];
        $doctorType = $data['doctorType'];
        $address = $data['address'];
        $roomNo = $data['roomNo'];
        $mobileNo = $data['mobileNo'];
        $image = $_FILES['image']['name'];

        $sql = "INSERT INTO doctors (doctorName, doctorType, address, roomNo, mobileNo, image) 
VALUES ('$doctorName', '$doctorType', '$address', '$roomNo', '$mobileNo', '$image')";

        if(mysqli_query(Database::dbConnection(), $sql)) {
            move_uploaded_file($_FILES['image']['tmp_name'], "doctorImage/$image");
            $queryResult = mysqli_query(Database::dbConnection(), $sql);
            if($queryResult) {
                $message = "Patient Admission Save Successfully!";
                return $message;
            }
            else {
                $message = "Patient Admission did not save!";
                return $message;
            }
        }
        else {
            die("Query Problem".mysqli_error(Database::dbConnection()));
        }
    }
}