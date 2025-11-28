<?php
session_start();
if (isset($_GET["s"])) {
    if ($_GET["s"] == "logout") {
        session_destroy();
        header("Location: verify.php");
    } elseif ($_GET["s"] == "login") {
        if (isset($_POST["username"]) && isset($_POST["password"])) {
            $logins = json_decode(file_get_contents("logins.json"), true);
            if (isset($logins[$_POST["username"]]) && $_POST["password"] == $logins[$_POST["username"]]) {
                $_SESSION["username"] = $_POST["username"];
                $_SESSION["password"] = $_POST["password"];
            }
        }
        header("Location: verify.php");
    } else {
        header("Location: verify.php");
    }
} else {
    header("Location: verify.php");
}
?>