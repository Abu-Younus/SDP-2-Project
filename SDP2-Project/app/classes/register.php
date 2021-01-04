<?php

require_once 'Database.php';

class register
{
    public function userRegistration($data) {
        $firstName = $data['firstName'];
        $lastName = $data['lastName'];
        $email = $data['email'];
        $password = md5($data['password']);
        $confirmPassword = md5($data['confirmPassword']);

        $sql = "INSERT INTO users (firstName, lastName, email, password, confirmPassword) 
VALUES ('$firstName', '$lastName', '$email', '$password', '$confirmPassword')";

        if(mysqli_query(Database::dbConnection(), $sql)) {
            $queryResult = mysqli_query(Database::dbConnection(), $sql);
            $user = mysqli_fetch_assoc($queryResult);
            if($user) {
                header('location:../../home/home.php');
            }
            else {
                $message = "User didn't create!";
                return $message;
            }
        }
        else {
            die("Query Problem".mysqli_error(Database::dbConnection()));
        }
    }
}