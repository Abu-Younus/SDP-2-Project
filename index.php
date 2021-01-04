<?php
    require_once 'app/classes/login.php';
    $message = '';
    session_start();
    if($_SESSION['id'] != null) {
        header("location:home/home.php");
    }
    if(isset($_POST['btnLogIn'])) {
        $userLogin = new login();
        $message = $userLogin->userLoginCheck($_POST);
    }
?>

<body style="background-image: url('assets/images/pexels5.png'); background-size: cover;">

    <?php

        include 'user/login.php';
    ?>

</body>

