<!-- header -->
<?php
        include_once 'header.php';
?>
<!-- zawartość strony z filmem: opis, zdjęcie, godziny senasów oraz przycisk do przejścia do rezerwacji miejsc -->
<section class="films-page">
        <div class="row">
            <div class="films-col">
                <img src="./image/czarny-telefon-mini.png">
                
            </div>
            <div class="films-col">
                <h1>CZARNY TELEFON</h1>
                <div class="details">
                    <ul class="detials-list">
                        <li class="first">Horror</li>
                        <li>Czas trwania: 104 min</li>
                        <li>Od lat: 15</li>
                    </ul>
                </div>
                <a class="reservation" href="reservation.php"> Rezerwuj miejsce!</a>
            </div>
        </div>
        <div class="row">
            <div class="films-col">
                <div class="reservation"><a href="reservation.php"> Rezerwuj miejsce!</a></div>
            </div>
            <div class="films-col">
                <h2>Najbliższe seanse:</h2>
                <ul class="days">
                    <li class="first">Poniedziałek: </li>
                    <li>Wtorek: <a class="hours">17:00</a></li>
                    <li>Środa: </li>
                    <li>Czwartek: <a class="hours">17:00</a></li>
                    <li>Piątek: </li>
                    <li>Sobota: <a class="hours">17:00</a></li>
                    <li>Niedziela: </li>
                </ul>
            </div>
        </div>
</section>




<!-- footer -->
<?php
        include_once 'footer.php';
?>