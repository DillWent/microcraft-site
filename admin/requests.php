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
$requests = json_decode(file_get_contents("../itemrequests.json"), true);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Item Requests - Microcraft Admin Portal</title>
    </head>
    <body>
        <h1>Item Requests</h1>
        <a href="index.php">Back</a>
        <h2>Unread</h2>
        <ul>
<?php
foreach ($requests as $request) {
    if (!$request["read"]) {
        echo '<li><a href="request.php?r=' . array_search($request, $requests) . '">' . $request["requestName"] . " from " . $request["requestor"] . "</a></li>";
    }
}
?>
        </ul>
        <h2>Read</h2>
        <ul>
<?php
foreach ($requests as $request) {
    if ($request["read"]) {
        echo '<li><a href="request.php?r=' . array_search($request, $requests) . '">' . $request["requestName"] . " from " . $request["requestor"] . "</a></li>";
    }
}
?>
        </ul>
    </body>
</html>