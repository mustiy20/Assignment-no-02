<html><head><title>Login</title></head><body>
    <?php
    if ($_POST['username'] == "Mustujab" && $_POST["password"] == "mustiy20")    {
        session_start();
        $_SESSION["Login"] = "YES";
        echo "<h1>Logged In</h1>";
        echo "<p><a href='document.php'>Link to Document File</a></p>";
    }   else    {
        session_start();
        $_SESSION["Login"] = "NO";
        echo "<h1>Not logged in</h1>";
        echo "<p><a href='document.php'>Link</a></p>";
    }
    ?>
</body></html>