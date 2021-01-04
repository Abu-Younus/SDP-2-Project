<?php
require_once 'Database.php';
class discharge
{
    public function patientDischarge($data) {
        $patientId = $data['patient_id'];
        $patientName = $data['patientName'];
        $patientType = $data['patientType'];
        $patientAddress = $data['address'];
        $cabinNo = $data['cabinNo'];
        $admissionDate = $data['admissionDate'];
        $dischargeDate = $data['dischargeDate'];
        $reference = $data['reference'];

        $sql = "INSERT INTO discharge (patient_id, patientName, patientType, patientAddress, cabinNo, admissionDate, dischargeDate, reference) 
VALUES ('$patientId','$patientName', '$patientType', '$patientAddress', '$cabinNo', '$admissionDate', '$dischargeDate' , '$reference')";

        if(mysqli_query(Database::dbConnection(), $sql)) {
            $queryResult = mysqli_query(Database::dbConnection(), $sql);
            if($queryResult) {
                $message = "Patient Discharge Save Successfully!";
                return $message;
            }
            else {
                $message = "Patient Discharge did not save!";
                return $message;
            }
        }
        else {
            die("Query Problem".mysqli_error(Database::dbConnection()));
        }
    }
}