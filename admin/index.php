<?php
session_start();
if (isset($_SESSION["username"]) && isset($_SESSION["password"])) {
    $logins = json_decode(file_get_contents("logins.json"), true);
    if (!(isset($logins[$_SESSION["username"]]) && $_SESSION["password"] == $logins[$_SESSION["username"]])) {
        header("Location: verify.php");
    }
} else {
    header("Location: verify.php");
}
?>
<h1>BIG</h1>
<a href="handle.php">Log out</a>