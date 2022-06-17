<?php
    session_start();
    if (isset($_SESSION["userusername"])) {      
        include_once 'header.php';   
    }
    else {
        header("location: login.php");
    }
?>




 <!-- footer -->
 <?php
    include_once 'footer.php';
?>