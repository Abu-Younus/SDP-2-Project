<?php

require_once 'Database.php';

class login
{
    public function userLoginCheck($data) {
        $email = $data['email'];
        $password = md5($data['password']);
        $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";

        if(mysqli_query(Database::dbConnection(), $sql)) {
            $queryResult = mysqli_query(Database::dbConnection(), $sql);
            $user = mysqli_fetch_assoc($queryResult);
            if($user) {
                session_start();

                $_SESSION['id'] = $user['id'];
                $_SESSION['firstName'] = $user['firstName'];
                $_SESSION['lastName'] = $user['lastName'];

                header('location:home/home.php');
            }
            else {
                $message = "Please use valid email address and password";
                return $message;
            }
        }
        else {
            die("Query Problem".mysqli_error(Database::dbConnection()));
        }
    }

    public function userLogout() {
        unset($_SESSION['id']);
        unset($_SESSION['firstName']);
        unset($_SESSION['lastName']);
        header('location:../index.php');
    }
}