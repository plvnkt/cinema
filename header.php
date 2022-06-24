<!-- header każdej z naszych stron -->
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
    <title>Pod Cumulusem</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="./image/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- menu/panel nawigacyjny -->
    <nav class="navbar">
        <a href="home.php"><img class="logo" src="image/logo-ofc.png" alt=""></a>
        <ul class="nav-links">
            <li><a href="home.php#repertuar">Repertuar</a></li>
            <li><a href="about.php">O nas</a></li>
            <li><a href="contact.php">Kontakt</a></li>
            <!-- tutaj jeśli user jest zalogowany to wyświetla się dropdown menu z opcją przejrzenia rezerwacji lub wylogowania -->
            <?php
                if (isset($_SESSION["userusername"])) {
                    echo "<div class='dropdown'>";
                        echo "<button onclick='myFunction()' class='login'>". $_SESSION["userusername"] . "</button>";
                        echo"<div id='myDropdown' class='dropdown-content'>";
                            echo "<a href='user.php'>Moje rezerwacje</a>";
                            echo "<a href='includes/logout.inc.php'>Wyloguj</a>";
                        echo"</div>";
                    echo"</div>";
                }
                else {
                   echo"<li class='login'><a href='login.php'>Zaloguj</a></li>";
                }
            ?>
        </ul>
        <img src="./image/menu-btn.png" alt="" class="menu-btn">
    </nav>
    <!-- skrypt tworzy mobilne menu dla użytkowników telefonów, aby mogli z niego wygonie korzystać na małych ekranach -->
    <script>
        const menuBtn = document.querySelector('.menu-btn')
        const navlinks = document.querySelector('.nav-links')

        menuBtn.addEventListener('click',()=>{
            navlinks.classList.toggle('mobile-menu')
        })
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

            // Close the dropdown menu if the user clicks outside of it
        window.onclick = function(event) {
        if (!event.target.matches('.login')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
        }
    </script>