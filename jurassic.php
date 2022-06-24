<!-- header -->
<?php
        include_once 'header.php';
?>
<!-- zawartość strony z filmem: opis, zdjęcie, godziny senasów oraz przycisk do przejścia do rezerwacji miejsc -->
<section class="films-page">
        <div class="row">
            <div class="films-col">
                <img src="./image/jurassic-mini.jpg">
                
            </div>
            <div class="films-col">
                <h1>JURASSIC WORLD: DOMINION</h1>
                <div class="details">
                    <ul class="detials-list">
                        <li class="first">Przygodowy</li>
                        <li>Science-Fiction</li>
                        <li>Czas trwania: 147 min</li>
                        <li>Od lat: 13</li>
                    </ul>
                </div>
                <p class="description">Jurassic World Dominion rozgrywa się cztery lata po zniszczeniu Isla Nublar. Dinozaury żyją i polują teraz razem z ludźmi na całym świecie. Ta krucha równowaga zmieni przyszłość i raz na zawsze okaże się, czy ludzie mają pozostać największymi drapieżnikami na planecie, którą teraz dzielą z najbardziej przerażającymi stworzeniami w historii. Jurassic World Dominion pokaże nigdy nie widziane dinozaury, znakomitą akcję i zadziwiające nowe efekty wizualne.</p>
            </div>
        </div>
        <div class="row">
            <div class="films-col">
            <a class="reservation" href="reservation.php"> Rezerwuj miejsce!</a>
            </div>
            <div class="films-col">
                <h2>Najbliższe seanse:</h2>
                <ul class="days">
                    <li class="first">Poniedziałek: <a class="hours">20:00</a></li>
                    <li>Wtorek: <a class="hours">14:00</a><a class="hours">23:00</a></li>
                    <li>Środa: <a class="hours">20:00</a></li>
                    <li>Czwartek: <a class="hours">14:00</a><a class="hours">23:00</a></li>
                    <li>Piątek: <a class="hours">20:00</a></li>
                    <li>Sobota: <a class="hours">14:00</a><a class="hours">23:00</a></li>
                    <li>Niedziela: <a class="hours">20:00</a></li></li>
                </ul>
            </div>
        </div>
</section>




<!-- footer -->
<?php
        include_once 'footer.php';
?>