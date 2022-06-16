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
    <?php
        include_once 'header.php';
    ?>

    <!-- Header -->
    <header>
        <div class="header-content">
            <h1>BILETY NA "BUZZ ASTRAL" JUŻ W SPRZEDAŻY</h1><br>
            <a href="#" class="buy">Kup bilet</a>
        </div>
    </header>
    <script>
        const menuBtn = document.querySelector('.menu-btn')
        const navlinks = document.querySelector('.nav-links')

        menuBtn.addEventListener('click',()=>{
            navlinks.classList.toggle('mobile-menu')
        })
    </script>

    <!-- Repertuar -->
    <section class="repertuar" id="repertuar">
        <div class="title">
            <h1>Repertuar</h1>
            <div class="line"></div>
        </div>
        <div class="row">
            <div class="col">
                <img src="./image/buzz-mini.jpg">
                <h4>Buzz Astral</h4>
                <div class="button"><a href="#"> Kup bilet </a></div>
            </div>
            <div class="col">
                <img src="./image/elvis-mini.jpg">
                <h4>Elvis</h4>
                <div class="button"><a href="#"> Kup bilet </a></div>
            </div>
            <div class="col">
                <img src="./image/jurassic-mini.jpg">
                <h4>JURASSIC WORLD: DOMINION</h4>
                <div class="button"><a href="#"> Kup bilet </a></div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <img src="./image/czarny-telefon-mini.png">
                <h4>CZARNY TELEFON</h4>
                <div class="button"><a href="#"> Kup bilet </a></div>
            </div>
            <div class="col">
                <img src="./image/topgun-mini.jpg">
                <h4>TOP GUN: MAVERICK</h4>
                <div class="button"><a href="#"> Kup bilet </a></div>
            </div>
            <div class="col">
                <img src="./image/jezyk-mini.jpg">
                <h4>JEŻYK I PRZYJACIELE</h4>
                <div class="button"><a href="#"> Kup bilet </a></div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <img src="./image/doktor-mini.jpg">
                <h4>DOKTOR STRANGE W<br> MULTIWERSUM OBŁĘDU</h4>
                <div class="button"><a href="#"> Kup bilet </a></div>
            </div>
            <div class="col">
                <img src="./image/sonic-mini.jpg">
                <h4>SONIC 2. SZYBKI JAK BŁYSKAWICA</h4>
                <div class="button"><a href="#"> Kup bilet </a></div>
            </div>
            <div class="col">
                <img src="./image/zywy-mini.jpg">
                <h4>ŻYWY</h4>
                <div class="button"><a href="#"> Kup bilet </a></div>
            </div>
        </div>
    </section>
    
    <!-- Footer  -->
    <?php
        include_once 'footer.php';
    ?>
   <script src="js/script.js"></script>
</body>
</html>