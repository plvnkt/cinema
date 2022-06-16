<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- do ustalenia nazwa -->
    <title>Kino Flex</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="image/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <nav class="navbar">
        <a href="home.php"><img class="logo" src="image/logo-ofc.png" alt=""></a>
        <ul class="nav-links">
            <li><a href="home.php#repertuar">Repertuar</a></li>
            <li><a href="about.php">O nas</a></li>
            <li><a href="contact.php">Kontakt</a></li>
            <?php
                if (isset($_SESSION["userusername"])) {
                   //echo"<p class='current-username'> ". $_SESSION["userusername"] . "</p>";
                   echo"<div class='login'><a href='includes/logout.inc.php'>Wyloguj</a></div>";
                   
                }
                else {
                   echo"<li class='login'><a href='login.php'>Zaloguj</a></li>";
                }
            ?>
        </ul>
        <img src="./image/menu-btn.png" alt="" class="menu-btn">
    </nav>
    <script>
        const menuBtn = document.querySelector('.menu-btn')
        const navlinks = document.querySelector('.nav-links')

        menuBtn.addEventListener('click',()=>{
            navlinks.classList.toggle('mobile-menu')
        })
    </script>