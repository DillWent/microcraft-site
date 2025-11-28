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
<!DOCTYPE html>
<html>
    <head>
        <title>Microcraft Admin Portal - Home</title>
    </head>
    <body>
        <h1>Admin Portal</h1>
        <h3>Logged in as <?= $_SESSION["username"] ?> - <a href="handle.php?s=logout">log out</a></h3>
        <hr />
        <h2>Navigation</h2>
        <a href="itemrequests.php">Item requests</a>
        <hr />
        <h2>Needs your attention</h2>
<?php
$requests = json_decode(file_get_contents("../itemrequests.json"), true);
foreach ($requests as $request) {
    if (!$request["read"]) {
        echo "item request: ";
        echo $request["name"];
    }
}
?>
    </body>
</html>