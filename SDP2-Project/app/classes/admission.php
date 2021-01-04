<?php



require_once 'Database.php';

class admission
{
    public function patientAdmission($data) {
        $patientName = $data['patientName'];
        $patientType = $data['patientType'];
        $patientAddress = $data['address'];
        $cabinNo = $data['cabinNo'];
        $admissionDate = $data['admissionDate'];
        $reference = $data['reference'];

        $sql = "INSERT INTO patients (patientName, patientType, patientAddress, cabinNo, admissionDate, reference) 
VALUES ('$patientName', '$patientType', '$patientAddress', '$cabinNo', '$admissionDate', '$reference')";

        if(mysqli_query(Database::dbConnection(), $sql)) {
            $queryResult = mysqli_query(Database::dbConnection(), $sql);
            $patients = mysqli_fetch_assoc($queryResult);
            if($patients) {
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