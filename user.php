<!-- header -->
<?php
        include_once 'header.php';
        
?>

<!-- zawartość moje rezerwacje -->
    <section class="your-reservation">
        <div class="title">
            <h1>Moje rezerwacje:</h1>
            <div class="line"></div>
        </div>
        <?php
        //tutaj są pobierane oraz wyświetlna wszystkie rezerwacje dla aktualnie zalogowanego użytkownika
            $i=0;
            include_once './includes/dbh.inc.php';
            $query = "SELECT `resDay`, `resHour`, `resSeat`, `resFilm` FROM `reservation` WHERE resUser='{$_SESSION['userusername']}'";
            $query_run = mysqli_query($conn, $query);
            if (mysqli_num_rows($query_run) > 0) {
                // output data of each row
                while($row = $query_run->fetch_assoc()) {
                    $i++;
                    echo "<p class='myReservationRow'>Nr: " . $i . " | Dzień: " . $row["resDay"]. " | Godzina: " . $row["resHour"]. " | Miejsce: " . $row["resSeat"]." | Film: " . $row["resFilm"]."</p><br>";
                    echo"<div class='lineShort'></div>";
                }
                } else {
                  echo "0 results";
                }
        ?>
    </section>


<!-- footer -->
<?php
        include_once 'footer.php';
?>