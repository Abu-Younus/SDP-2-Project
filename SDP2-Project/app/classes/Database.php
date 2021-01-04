<?php

class Database
{
    public function dbConnection() {
        $hostName = "localhost";
        $userName = "root";
        $password = "";
        $dbName = "sdp_project";

        $connect = mysqli_connect($hostName, $userName, $password, $dbName);

        return $connect;
    }
}