<!-- plik obsługujący logowanie użytkownika -->
<?php

if(isset($_POST["submit"])){

    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    //obsługa błędu
    if (emptyInputLogin($username, $pwd) !== false) {
        header("location: ../login.php?error=emptyinput");
        exit();
    }

    //fukncja logująca użytkownika
    loginUser($conn, $username, $pwd);
}
else {
    header("location: ../login.php");
    exit();
}