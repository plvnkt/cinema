<!-- header -->
<?php
        include_once 'header.php';
?>
<!-- zawartość strony z filmem: opis, zdjęcie, godziny senasów oraz przycisk do przejścia do rezerwacji miejsc -->
<section class="films-page">
        <div class="row">
            <div class="films-col">
                <img src="./image/buzz-mini.jpg">
            </div>
            <div class="films-col">
                <h1>Buzz Astral</h1>
                <div class="details">
                    <ul class="detials-list">
                        <li class="first">Animowany</li>
                        <li>Familijny</li>
                        <li>Przygodowy</li>
                        <li>Czas trwania: 105 min</li>
                        <li>Od lat: b.o.</li>
                    </ul>
                </div>
                <p class="description">Młody pilot testowy zostaje bohaterem w kosmosie i dzięki temu dostaje swoją własną zabawkę - Buzza.</p>
            </div>
        </div>
        <div class="row">
            <div class="films-col">
            <a class="reservation" href="reservation.php"> Rezerwuj miejsce!</a>
            </div>
            <div class="films-col">
                <h2>Najbliższe seanse:</h2>
                <ul class="days">
                    <li class="first">Poniedziałek: <a class="hours">14:00</a><a class="hours">20:00</a></li>
                    <li>Wtorek: <a class="hours">17:00</a><a class="hours">23:00</a></li>
                    <li>Środa: <a class="hours">14:00</a><a class="hours">20:00</a></li>
                    <li>Czwartek: <a class="hours">17:00</a><a class="hours">23:00</a>
                    <li>Piątek: <a class="hours">14:00</a><a class="hours">20:00</a></li>
                    <li>Sobota: <a class="hours">17:00</a><a class="hours">23:00</a></li>
                    <li>Niedziela: <a class="hours">14:00</a><a class="hours">20:00</a></li>
                </ul>
            </div>
        </div>
</section>




<!-- footer -->
<?php
        include_once 'footer.php';
?>