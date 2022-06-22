<?php
    session_start();
    if (isset($_SESSION["userusername"])) {      
        include_once 'header.php';   
    }
    else {
        header("location: login.php");
    }
?>
<section class="reservation-page">
    <form method="POST">
      <label> Wybierz film:</label>
      <select id="movie" name="resFilm">
        <option selected disabled>--Wybierz film--</option>
        <option value="buzz">BUZZ ASTRAL</option>
        <option value="elvis">ELVIS</option>
        <option value="jurassic">JURASSIC WORLD: DOMINION</option>
        <option value="czarny">CZARNY TELEFON</option>
        <option value="topgun">TOP GUN: MAVERICK</option>
        <option value="jezyk">JEŻYK I PRZYJACIELE</option>
        <option value="doktor">DOKTOR STRANGE W MULTIWERSUM OBŁĘDU</option>
        <option value="sonic">SONIC 2. SZYBKI JAK BŁYSKAWICA</option>
        <option value="zywy">ŻYWY</option>
      </select><br>
      <label> Wybierz dzień:</label>
      <select id="day" name="resDay" onchange="populate(this.id,'movie','hour')">
        <option selected disabled>--Wybierz dzień--</option>
        <option value="poniedzialek">Poniedziałek</option>
        <option value="wtorek">Wtorek</option>
        <option value="sroda">Środa</option>
        <option value="czwartek">Czwartek</option>
        <option value="piatek">Piątek</option>
        <option value="sobota">Sobota</option>
        <option value="niedziela">Niedziela</option>
      </select><br>
      <label> Wybierz godzine:</label>
      <select id="hour" name="resHour">
        <option selected disabled>--Wybierz godzinę--</option>
      </select>
      <script>
        function populate(day,movie,hour){
          var day = document.getElementById(day);
          var movie = document.getElementById(movie);
          var hour = document.getElementById(hour);

          hour.innerHTML = "";

          if (movie.value == "buzz" && (day.value == "poniedzialek" || day.value == "sroda" || day.value == "piatek" || day.value == "niedziela" )) {
            var optionArray = ['14:00|14:00','20:00|20:00'];
          }
          else if (movie.value == "buzz" && (day.value == "wtorek" || day.value == "czwartek" || day.value == "sobota" )) {
            var optionArray = ['17:00|17:00','23:00|23:00'];
          }
          else if (movie.value == "elvis" && (day.value == "poniedzialek" || day.value == "sroda" || day.value == "piatek" || day.value == "niedziela" )) {
            var optionArray = ['14:00|14:00'];
          }
          else if (movie.value == "elvis" && (day.value == "wtorek" || day.value == "czwartek" || day.value == "sobota" )) {
            var optionArray = ['20:00|20:00'];
          }
          else if (movie.value == "jurassic" && (day.value == "poniedzialek" || day.value == "sroda" || day.value == "piatek" || day.value == "niedziela" )) {
            var optionArray = ['20:00|20:00'];
          }
          else if (movie.value == "jurassic" && (day.value == "wtorek" || day.value == "czwartek" || day.value == "sobota" )) {
            var optionArray = ['14:00|14:00','23:00|23:00'];
          }
          else if (movie.value == "czarny" && (day.value == "wtorek" || day.value == "czwartek" || day.value == "sobota" )) {
            var optionArray = ['17:00|17:00'];
          }
          else if (movie.value == "topgun" && (day.value == "poniedzialek" || day.value == "sroda" || day.value == "piatek" || day.value == "niedziela" )) {
            var optionArray = ['17:00|17:00','23:00|23:00'];
          }
          else if (movie.value == "topgun" && (day.value == "wtorek" || day.value == "czwartek" || day.value == "sobota" )) {
            var optionArray = ['20:00|20:00'];
          }
          else if (movie.value == "jezyk" && (day.value == "poniedzialek" || day.value == "sroda" || day.value == "piatek" || day.value == "niedziela" )) {
            var optionArray = ['11:00|11:00'];
          }
          else if (movie.value == "jezyk" && (day.value == "wtorek" || day.value == "czwartek" || day.value == "sobota" )) {
            var optionArray = ['11:00|11:00'];
          }
          else if (movie.value == "doktor" && (day.value == "poniedzialek" || day.value == "sroda" || day.value == "piatek" || day.value == "niedziela" )) {
            var optionArray = ['17:00|17:00','23:00|23:00'];
          }
          else if (movie.value == "doktor" && (day.value == "wtorek" || day.value == "czwartek" || day.value == "sobota" )) {
            var optionArray = ['11:00|11:00'];
          }
          else if (movie.value == "sonic" && (day.value == "poniedzialek" || day.value == "sroda" || day.value == "piatek" || day.value == "niedziela" )) {
            var optionArray = ['11:00|11:00'];
          }
          else if (movie.value == "zywy" && (day.value == "wtorek" || day.value == "czwartek" || day.value == "sobota" )) {
            var optionArray = ['14:00|14:00'];
          }

          for(var option in optionArray){
            var pair = optionArray[option].split("|");
            var newoption = document.createElement("option");

            newoption.value = pair[0];
            newoption.innerHTML=pair[1];
            hour.options.add(newoption);
          }
        }
      </script><br>
      <button type="submit" name="free-seats">Zobacz wolne miejsca!</button>
    </form>
    
    <?php
      require_once './includes/dbh.inc.php';
      if (isset($_POST['free-seats'])) {
        $resDay = $_POST['resDay'];
        $resFilm = $_POST['resFilm'];
        $resHour = $_POST['resHour'];
        $query = "SELECT `resSeat` FROM `reservation` WHERE resDay='$resDay' AND resHour='$resHour' AND resUser='{$_SESSION['userusername']}' AND resFilm='$resFilm'";
        $query_run = mysqli_query($conn, $query);
        
      
        if (mysqli_num_rows($query_run) > 0) {
        // output data of each row
          while($row = mysqli_fetch_assoc($query_run)) {
           $players[] = $row["resSeat"];
          }
        }
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
        echo "    <div class='seat' id='A1' onClick='reply_click(this.id)'></div>";
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
        echo"   Wybrano <span id='count'>0</span> miejsc(a)  <span id='count-seats'></span>. Cena to: <span id='total'>0</span> PLN.";
        echo" </p>";
        echo" <button type='submit' name='reservation-btn'>Rezerwuj!</button>";
        
      }
    ?>
    
    
   
        
    
</section>


 <!-- footer -->
 <?php
    include_once 'footer.php';
  ?>
  <script>
    var seatArr = [];
    const countSeats = document.getElementById("count-seats");
    function reply_click(clicked_id)
    {
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
   
    var passedArray = <?php echo '["' . implode('", "', $players) . '"]' ?>;
    for (var i = 0; i < passedArray.length; i++) {
      document.getElementById(passedArray[i]).className = "seat sold";          
    }
  </script>