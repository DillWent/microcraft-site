<?php
session_start();
if (isset($_SESSION["username"]) && isset($_SESSION["password"])) {
    $logins = json_decode(file_get_contents("logins.json"), true);
    if (isset($logins[$_SESSION["username"]]) && $_SESSION["password"] == $logins[$_SESSION["username"]]) {
        header("Location: index.php");
    } else {
        session_destroy();
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Microcraft Admin Portal - Login</title>
    </head>
    <body>
        <h1>Admin Portal Login</h1>
        <form>
            <label for="username">Username</label>
            <input type="text" id="username" name="username" />
            <label for="password">Password</label>
            <input type="password" id="password" name="password" />
            <input type="submit" value="Login" />
        </form>
</html>
