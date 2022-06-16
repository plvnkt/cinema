<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakt</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="image/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <nav class="navbar">
        <h1 class="logo">Pod cummulusem</h1>
        <ul class="nav-links">
            <li><a href="#">Repertuar</a></li>
            <li><a href="about.php">O nas</a></li>
            <li><a href="contact.php">Kontakt</a></li>
            <li class="login"><a href="#">Zaloguj</a></li>
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

    <section class="footer">
       <div class="social-media">
            <h3>Obserwuj nas na:</h3>
            <a href="https://facebook.com" class="fa fa-facebook"> Facebook</a>
            <a href="https://twitter.com" class="fa fa-twitter"> Twitter</a>
            <a href="https://instagram.com" class="fa fa-instagram"> Instagram</a>
       </div>
       <div class="authors">Stworzone przez K53 - temat 16</div>
   </section>
</body>
</html>