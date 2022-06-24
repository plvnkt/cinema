<?php
    session_start();
    //sprawdzamy czy user jest zalogowany, tylko zalogowany może dokonać rezerwacji miejsc
    if (isset($_SESSION["userusername"])) {      
        include_once 'header.php';   
    }
    else {
        header("location: login.php");
    }

    //funkcja do zapamiętywania wybranego pola select po odświeżeniu 
    function checkSelected($fieldValue, $selectName)
    {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      if(isset($_POST[$selectName])){
        if ($fieldValue == $_POST[$selectName]) echo ' selected';}
    }
    }

?>
<!--  zawartość strony z rezerwacją -->
<section class="reservation-page">
    <form method="POST" action="reservation.php">
      <label> Wybierz film:</label>
      <select id="movie" name="resFilm">
        <option selected disabled>--Wybierz film--</option>
        <option value="" <?php checkSelected('BUZZ ASTRAL', 'resFilm'); ?>>BUZZ ASTRAL</option>
        <option value="ELVIS" <?php checkSelected('ELVIS', 'resFilm'); ?>>ELVIS</option>
        <option value="JURASSIC WORLD: DOMINION" <?php checkSelected('JURASSIC WORLD: DOMINION', 'resFilm'); ?>>JURASSIC WORLD: DOMINION</option>
        <option value="CZARNY TELEFON" <?php checkSelected('CZARNY TELEFON', 'resFilm'); ?>>CZARNY TELEFON</option>
        <option value="TOP GUN: MAVERICK" <?php checkSelected('TOP GUN: MAVERICK', 'resFilm'); ?>>TOP GUN: MAVERICK</option>
        <option value="JEŻYK I PRZYJACIELE" <?php checkSelected('JEŻYK I PRZYJACIELE', 'resFilm'); ?>>JEŻYK I PRZYJACIELE</option>
        <option value="DOKTOR STRANGE W MULTIWERSUM OBŁĘDU" <?php checkSelected('DOKTOR STRANGE W MULTIWERSUM OBŁĘDU', 'resFilm'); ?>>DOKTOR STRANGE W MULTIWERSUM OBŁĘDU</option>
        <option value="SONIC 2 SZYBKI JAK BŁYSKAWICA" <?php checkSelected('SONIC 2 SZYBKI JAK BŁYSKAWICA', 'resFilm'); ?>>SONIC 2. SZYBKI JAK BŁYSKAWICA</option>
        <option value="ŻYWY" <?php checkSelected('ŻYWY', 'resFilm'); ?>>ŻYWY</option>
      </select><br>
      <label> Wybierz dzień:</label>
      <select id="day" name="resDay" onchange="populate(this.id,'movie','hour')">
        <option selected disabled>--Wybierz dzień--</option>
        <option value="Poniedzialek" <?php checkSelected('Poniedzialek', 'resDay'); ?>>Poniedziałek</option>
        <option value="Wtorek" <?php checkSelected('Wtorek', 'resDay'); ?>>Wtorek</option>
        <option value="Sroda" <?php checkSelected('Sroda', 'resDay'); ?>>Środa</option>
        <option value="Czwartek" <?php checkSelected('Czwartek', 'resDay'); ?>>Czwartek</option>
        <option value="Piatek" <?php checkSelected('Piatek', 'resDay'); ?>>Piątek</option>
        <option value="Sobota" <?php checkSelected('Sobota', 'resDay'); ?>>Sobota</option>
        <option value="Niedziela"  <?php checkSelected('Niedziela', 'resDay'); ?>>Niedziela</option>
      </select><br>
      <label> Wybierz godzine:</label>
      <select id="hour" name="resHour">
        <option selected disabled>--Wybierz godzinę--</option>
      </select>
      <script>
        //funkcja podająca odpowiednią godzine seansu na podstawie wybranego filmu oraz dnia
        function populate(day,movie,hour){
          var day = document.getElementById(day);
          var movie = document.getElementById(movie);
          var hour = document.getElementById(hour);

          hour.innerHTML = "";

          if (movie.value == "BUZZ ASTRAL" && (day.value == "Poniedzialek" || day.value == "Sroda" || day.value == "Piatek" || day.value == "Niedziela" )) {
            var optionArray = ['14:00|14:00 ','20:00|20:00'];
          }
          else if (movie.value == "BUZZ ASTRAL" && (day.value == "Wtorek" || day.value == "Czwartek" || day.value == "Sobota" )) {
            var optionArray = ['17:00|17:00','23:00|23:00'];
          }
          else if (movie.value == "ELVIS" && (day.value == "Poniedzialek" || day.value == "Sroda" || day.value == "Piatek" || day.value == "Niedziela" )) {
            var optionArray = ['14:00|14:00'];
          }
          else if (movie.value == "ELVIS" && (day.value == "Wtorek" || day.value == "Czwartek" || day.value == "Sobota" )) {
            var optionArray = ['20:00|20:00'];
          }
          else if (movie.value == "JURASSIC WORLD: DOMINION" && (day.value == "Poniedzialek" || day.value == "Sroda" || day.value == "Piatek" || day.value == "Niedziela" )) {
            var optionArray = ['20:00|20:00'];
          }
          else if (movie.value == "JURASSIC WORLD: DOMINION" && (day.value == "Wtorek" || day.value == "Czwartek" || day.value == "Sobota" )) {
            var optionArray = ['14:00|14:00','23:00|23:00'];
          }
          else if (movie.value == "CZARNY TELEFON" && (day.value == "Wtorek" || day.value == "Czwartek" || day.value == "Sobota" )) {
            var optionArray = ['17:00|17:00'];
          }
          else if (movie.value == "TOP GUN: MAVERICK" && (day.value == "Poniedzialek" || day.value == "Sroda" || day.value == "Piatek" || day.value == "Niedziela" )) {
            var optionArray = ['17:00|17:00','23:00|23:00'];
          }
          else if (movie.value == "TOP GUN: MAVERICK" && (day.value == "Wtorek" || day.value == "Czwartek" || day.value == "Sobota" )) {
            var optionArray = ['20:00|20:00'];
          }
          else if (movie.value == "JEŻYK I PRZYJACIELE" && (day.value == "Poniedzialek" || day.value == "Sroda" || day.value == "Piatek" || day.value == "Niedziela" )) {
            var optionArray = ['11:00|11:00'];
          }
          else if (movie.value == "JEŻYK I PRZYJACIELE" && (day.value == "Wtorek" || day.value == "Czwartek" || day.value == "Sobota" )) {
            var optionArray = ['11:00|11:00'];
          }
          else if (movie.value == "DOKTOR STRANGE W MULTIWERSUM OBŁĘDU" && (day.value == "Poniedzialek" || day.value == "Sroda" || day.value == "Piatek" || day.value == "Niedziela" )) {
            var optionArray = ['17:00|17:00','23:00|23:00'];
          }
          else if (movie.value == "DOKTOR STRANGE W MULTIWERSUM OBŁĘDU" && (day.value == "Wtorek" || day.value == "Czwartek" || day.value == "Sobota" )) {
            var optionArray = ['11:00|11:00'];
          }
          else if (movie.value == "SONIC 2 SZYBKI JAK BŁYSKAWICA" && (day.value == "Poniedzialek" || day.value == "Sroda" || day.value == "Piatek" || day.value == "Niedziela" )) {
            var optionArray = ['11:00|11:00'];
          }
          else if (movie.value == "ŻYWY" && (day.value == "wtorek" || day.value == "Czwartek" || day.value == "Sobota" )) {
            var optionArray = ['14:00|14:00'];
          }

          
          for(var option in optionArray){
            var pair = optionArray[option].split("|");
            var newoption = document.createElement("option");
            
            newoption.value = pair[0];
            newoption.innerHTML=pair[1];
            newoption.selected;
            
            
            hour.options.add(newoption);
            
          }
        }
      </script><br>
      <button type="submit" class="changeSelected" name="free-seats">Zobacz wolne miejsca!</button>
    </form>
    
    <?php
      // tutaj sprawdzamy w bazie danych zarezerwowane wcześniej miejsca
      require_once './includes/dbh.inc.php';
      if (isset($_POST['free-seats'])) {
        $resDay = $_POST['resDay'];
        $resFilm = $_POST['resFilm'];
        $resHour = $_POST['resHour'];
        $query = "SELECT `resSeat` FROM `reservation` WHERE resDay='$resDay' AND resHour='$resHour' AND resFilm='$resFilm'";
        $query_run = mysqli_query($conn, $query);

        if (mysqli_num_rows($query_run) > 0) {
          while($row = mysqli_fetch_assoc($query_run)) {
           $players[] = $row["resSeat"];
          }
        }else{
          $players = [];
        }
        //tutaj pokazujemy wybór miejsc dopiero po kliknięciu sprawdz wolne miejsca
        echo "    <ul class='showcase'>";
        echo "  <li>";
        echo "    <div class='seat'></div>";
        echo "    <small>Wolne</small>";
        echo "  </li>";
        echo "  <li>";
        echo "    <div class='seat selected'></div>";
        echo "    <small>Wybrane</small>";
        echo "  </li>";
        echo "  <li>";
        echo "    <div class='seat sold'></div>";
        echo "    <small>Zajęte</small>";
        echo "  </li>";
        echo "</ul>";
        echo "<div class='container'>";
        echo "  <div class='screen'></div>";
      
        echo "  <div class='row-reservation'>";
        echo "    <p class='seat-nb'>A</p>";
        echo "    <div class='seat' id='A1' onClick='reply_click(this.id, this.className)'></div>";
        echo "    <div class='seat' id='A2' onClick='reply_click(this.id)'></div>";
        echo "    <div class='seat' id='A3' onClick='reply_click(this.id)'></div>";
        echo "    <div class='seat' id='A4' onClick='reply_click(this.id)'></div>";
        echo "    <div class='seat' id='A5' onClick='reply_click(this.id)'></div>";
        echo "    <div class='seat' id='A6' onClick='reply_click(this.id)'></div>";
        echo "    <div class='seat' id='A7' onClick='reply_click(this.id)'></div>";
        echo "    <div class='seat' id='A8' onClick='reply_click(this.id)'></div>";
        echo "  </div>";

        echo "  <div class='row-reservation'>";
        echo "    <p class='seat-nb'>B</p>";
        echo "    <div class='seat' id='B1' onClick='reply_click(this.id)'></div>";
        echo "    <div class='seat' id='B2' onClick='reply_click(this.id)'></div>";
        echo "    <div class='seat' id='B3' onClick='reply_click(this.id)'></div>";
        echo "    <div class='seat' id='B4' onClick='reply_click(this.id)'></div>";
        echo "    <div class='seat' id='B5' onClick='reply_click(this.id)'></div>";
        echo "    <div class='seat' id='B6' onClick='reply_click(this.id)'></div>";
        echo "    <div class='seat' id='B7' onClick='reply_click(this.id)'></div>";
        echo "    <div class='seat' id='B8' onClick='reply_click(this.id)'></div>";
        echo "  </div>";
        echo "  <div class='row-reservation'>";
        echo "    <p class='seat-nb'>C</p>";
        echo "    <div class='seat' id='C1' onClick='reply_click(this.id)'></div>";
        echo "    <div class='seat' id='C2' onClick='reply_click(this.id)'></div>";
        echo "    <div class='seat' id='C3' onClick='reply_click(this.id)'></div>";
        echo "    <div class='seat' id='C4' onClick='reply_click(this.id)'></div>";
        echo "    <div class='seat' id='C5' onClick='reply_click(this.id)'></div>";
        echo "    <div class='seat' id='C6' onClick='reply_click(this.id)'></div>";
        echo "    <div class='seat' id='C7' onClick='reply_click(this.id)'></div>";
        echo "    <div class='seat' id='C8' onClick='reply_click(this.id)'></div>";
        echo "  </div>";
        echo "  <div class='row-reservation'>";
        echo "    <p class='seat-nb'>D</p>";
        echo "    <div class='seat' id='D1' onClick='reply_click(this.id)'></div>";
        echo "    <div class='seat' id='D2' onClick='reply_click(this.id)'></div>";
        echo "    <div class='seat' id='D3' onClick='reply_click(this.id)'></div>";
        echo "    <div class='seat' id='D4' onClick='reply_click(this.id)'></div>";
        echo "    <div class='seat' id='D5' onClick='reply_click(this.id)'></div>";
        echo "    <div class='seat' id='D6' onClick='reply_click(this.id)'></div>";
        echo "    <div class='seat' id='D7' onClick='reply_click(this.id)'></div>";
        echo "    <div class='seat' id='D8' onClick='reply_click(this.id)'></div>";
        echo "  </div>";
        echo "  <div class='row-reservation'>";
        echo "    <p class='seat-nb'>E</p>";
        echo "    <div class='seat' id='E1' onClick='reply_click(this.id)'></div>";
        echo "    <div class='seat' id='E2' onClick='reply_click(this.id)'></div>";
        echo "    <div class='seat' id='E3' onClick='reply_click(this.id)'></div>";
        echo "    <div class='seat' id='E4' onClick='reply_click(this.id)'></div>";
        echo "    <div class='seat' id='E5' onClick='reply_click(this.id)'></div>";
        echo "    <div class='seat' id='E6' onClick='reply_click(this.id)'></div>";
        echo "    <div class='seat' id='E7' onClick='reply_click(this.id)'></div>";
        echo "    <div class='seat' id='E8' onClick='reply_click(this.id)'></div>";
        echo "  </div>";
        echo "  <div class='row-reservation'>";
        echo "    <p class='seat-nb'>F</p>";
        echo "    <div class='seat' id='F1' onClick='reply_click(this.id)'></div>";
        echo "    <div class='seat' id='F2' onClick='reply_click(this.id)'></div>";
        echo "    <div class='seat' id='F3' onClick='reply_click(this.id)'></div>";
        echo "    <div class='seat' id='F4' onClick='reply_click(this.id)'></div>";
        echo "    <div class='seat' id='F5' onClick='reply_click(this.id)'></div>";
        echo "    <div class='seat' id='F6' onClick='reply_click(this.id)'></div>";
        echo "    <div class='seat' id='F7' onClick='reply_click(this.id)'></div>";
        echo "    <div class='seat' id='F8' onClick='reply_click(this.id)'></div>";
        echo "  </div>";
        
        echo "  <div class='row-reservation'>";  
        echo "    <div class='seatnb'>1</div>";
        echo "    <div class='seatnb'>2</div>";
        echo "    <div class='seatnb'>3</div>";
        echo "    <div class='seatnb'>4</div>";
        echo "    <div class='seatnb'>5</div>";
        echo "    <div class='seatnb'>6</div>";
        echo "    <div class='seatnb'>7</div>";
        echo "    <div class='seatnb'>8</div>";
        echo "  </div>";
        echo "</div>";
        echo" <p class='text'>";
        echo"   Wybrano <span id='count'>0</span> miejsc(a) <span id='count-seats'></span>. Cena to: <span id='total'>0</span> PLN.";
        echo" </p>";

        // tutaj przekazujemy do php array z JS z linijki 270 i poniżej
        echo" <form name='Form' method='post' onsubmit='return insertarrayintohiddenformfield()' action='reservation.php'>";
        echo" <input name='siedzenie' type=hidden>";
        echo" <button name='convert array' type='submit' value='convert array'>Rezerwuj!</button>";
       
      }
      if(isset($_POST['siedzenie'])){
       $ar = $_POST['siedzenie'];
       $seatArr = explode(",",$ar);
      }      
      //tutaj wprowadzamy rezerwacje do bazy danych 
       if (isset($ar)){
       for ($i=3;$i<count($seatArr);$i++){         
          $query1 = "INSERT INTO reservation (resId, resDay, resHour, resSeat, resUser, resFilm) VALUES (NULL, '$seatArr[0]', '$seatArr[1]', '$seatArr[$i]', '{$_SESSION['userusername']}', '$seatArr[2]')";
          $query_run = mysqli_query($conn, $query1);
        }
       echo "<div class='finalText'>Zarezerwowano miejsca! Sprawdź zakładkę <a class='linkUser' href='user.php'>Moje rezerwacje!</a></div>";
       
      }
    ?>
</section>


 <!-- footer -->
 <?php
    include_once 'footer.php';
  ?>
  <script>
    //skrypt przekazujący kliknięte miejsca wraz z resztą danych o rezerwacji do Arraya, który nastepnie przekazuje je do PHP (linijka 240 i poniżej) i wpisuje do bazy danych jako rezerwacje 
    function insertarrayintohiddenformfield(){
    
    var siedzenie = seatArr.join();
    var dzien = '<?php echo $resDay; ?>';
    var godzina = '<?php echo $resHour; ?>';
    var film = '<?php echo $resFilm; ?>';
    var siedzenie =dzien +',' + godzina + ',' + film + ',' + siedzenie;
    
    document.Form.siedzenie.value=siedzenie;
    }
    
    //tutaj jest skrypt dotyczący zmiany klasy siedzenia z seat na seat sold po pobraniu danych z bazy odnośnie zrobionych już rezerwacji (linijka 123). Tu przerabia je z PHP na JS. Po ustawieniu seat sold siedzenie robi się białe i nie klikalne - sprawdź css i script.js
    var passedArray = <?php echo '["' . implode('", "', $players) . '"]' ?>;
    for (var i = 0; i < passedArray.length; i++) {
      document.getElementById(passedArray[i]).className = "seat sold";          
    }
    
    //tutaj skrypt wypisuje na ekranie i do arraya kliknięte wolne miejsca aby dalej je przekazać do wpisania do bazy danych przy rezerwacji
    var seatArr = [];
    const countSeats = document.getElementById("count-seats");
    function reply_click(clicked_id)
    {
      if (document.getElementById(clicked_id).className != "seat sold") {
        if (!seatArr.includes(clicked_id,0)) {
          seatArr.push(clicked_id);
        }
        else {
          for( var i = 0; i < seatArr.length; i++){ 
            if ( seatArr[i] === clicked_id) { 
              seatArr.splice(i, 1); 
              
            }
          }
        }
        countSeats.innerText = seatArr;
      }
    }
  </script>