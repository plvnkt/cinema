    <!-- header -->
    <?php
        include_once 'header.php';
    ?>
    
    <section class="signup-form">
        <h2>Zarejestruj się</h2>
        <div class="signup-form-form">   <!-- css do zrobienia -->
            <form action="includes/signup.inc.php" method="post">
                <input type="text" name="name" placeholder="Imie i nazwisko..">
                <input type="text" name="email" placeholder="Email..">
                <input type="text" name="username" placeholder="Nazwa użytkownika..">
                <input type="password" name="pwd" placeholder="Hasło..">
                <input type="password" name="pwdrepeat" placeholder="Powtórz hasło..">
                <button type="submit" name="submit">Zarejestruj się</button>
            </form>
        </div>
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p>Wypełnij wszystkie pola!</p>";
            }
            if ($_GET["error"] == "invalidusername") {
                echo "<p>Wpisz prawidłową nazwę użytkownika!</p>";
            }
            if ($_GET["error"] == "invalidemail") {
                echo "<p>Wpisz prawidłowy email!</p>";
            }
            if ($_GET["error"] == "passworddontmatch") {
                echo "<p>Hasła nie są takie same!</p>";
            }
            if ($_GET["error"] == "usernametaken") {
                echo "<p>Nazwa użytkownika jest już zajęta!</p>";
            }
            if ($_GET["error"] == "stmtfailed") {
                echo "<p>Coś poszło nie tak, spróbuj ponownie!</p>";
            }
            if ($_GET["error"] == "none") {
                echo "<p>Rejestracja przeszła prawidłowo!</p>";
            }
        }
        ?>
        <h3>Masz już konto? <a href="login.php">Zaloguj się!</a></h3>
    </section>

    


    <!-- footer -->
    <?php
        include_once 'footer.php';
    ?>
