<?php
include "config.php";

// Check user login or not
if(!isset($_SESSION['email'])){
    header('Location: login.html');
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: login.html');
}
?>
<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <h1>Homepage</h1>
        <form method='post' action="">
            <input type="submit" value="Logout" name="but_logout">
        </form>
    </body>
</html>
