    <!-- header -->
    <?php
        include_once 'header.php';
    ?>
    
    <!-- logowanie użytkownika -->
    <section class="login-form">
        <h2>Zaloguj się</h2>
        <div class="signup-form-form">
            <form action="includes/login.inc.php" method="post">
                <input type="text" name="username" placeholder="Nazwa użytkownika/Email..">
                <input type="password" name="pwd" placeholder="Hasło..">
                <button type="submit" name="submit">Zaloguj się</button>
            </form>
        </div>
        <!-- obsługa błedów logowania -->
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p>Wypełnij wszystkie pola!</p>";
            }
            if ($_GET["error"] == "wronglogin") {
                echo "<p>Złe dane logowania</p>";
            }  
        }
        ?>
        <h3>Nie masz konta?</h3>
        <a class="login-signup" href="signup.php">Zarejestruj się!</a>
    </section>



    <!-- footer -->
    <?php
        include_once 'footer.php';
    ?>
