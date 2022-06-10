<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- do ustalenia nazwa -->
    <title>Kino Flex</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="image/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- navbar -->
    <header>
        <a class="logo" href="home.php">Pod Cummulusem</a>
        <nav>
            <ul class="navbar">
                <li><a href="films.php">Repertuar</a></li>
                <li><a href="about.php">O nas</a></li>
                <li><a href="contact.php">Kontakt</a></li>
            </ul>
        </nav>
        <a class="login" href=""><button>Zaloguj</button></a>
    </header>

    <!-- Home -->
    <section class="home">
        <div class="home-content">
            <div class="home-screen" style="background:url(image/topgun2.jpeg) no-repeat">
                <button class="screen-button">Kup bilet</button>
            </div>

            <div class="played-today">
                <h2>Teraz gramy: </h2>
                <div id="current_date"> </p>
            </div>
        </div>
    </section>


    
    <!-- Footer  -->
   <section class="footer">
       <div class="social-media">
            <h3>Obserwuj nas na:</h3>
            <a href="https://facebook.com" class="fa fa-facebook"> Facebook</a>
            <a href="https://twitter.com" class="fa fa-twitter"> Twitter</a>
            <a href="https://instagram.com" class="fa fa-instagram"> Instagram</a>
       </div>
       <div class="authors">Stworzone przez K53 - temat 16</div>
   </section>
   <script src="js/script.js"></script>
</body>
</html>