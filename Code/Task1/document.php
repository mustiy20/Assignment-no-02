<?php
session_start();
if($_SESSION["Login"] != "YES")
{
    header("Location: form.php");
}
?>
<html>
    <head>
        <title>Documnet</title>
    </head>
    <body>
        <h1>This document is protected</h1>
        <p>You can only see it if you are logged in</p>
    </body>
</html>