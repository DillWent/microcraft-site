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
if (!isset($_GET["r"])) {
    header("Location: requests.php");
} else {
    $requests = json_decode(file_get_contents("../itemrequests.json"), true);
    $request = $requests[(int) $_GET["r"]];
    if (!$request["read"]) {
        $requests[(int) $_GET["r"]]["read"] = true;
        $f = fopen("../itemrequests.json", "w");
        fwrite($f, json_encode($requests));
        fclose($f);
    }
    if ($request["collectors"]) {
        $request["collectors"] = "Yes";
    } else {
        $request["collectors"] = "No";
    }
    if ($request["3d"]) {
        $request["3d"] = "Yes";
    } else {
        $request["3d"] = "No";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Request - <?= $request["requestName"] ?> - Microcraft Admin Portal</title>
    </head>
    <body>
        <h1>Request - <?= $request["requestName"] ?></h1>
        <a href="requests.php">Back</a>
        <h2>Details:</h2>
        <p>Name: <?= $request["requestName"] ?></p>
        <p>Requestor: <?= $request["requestor"] ?></p>
        <p>Description: <?= $request["desc"] ?></p>
        <p>3D model: <?= $request["3d"] ?></p>
        <p>Reason: <?= $request["reason"] ?></p>
        <p>Number required: <?= $request["no"] ?></p>
        <p>Item name: <?= $request["name"] ?></p>
        <p>Item lore: <?= $request["lore"] ?></p>
        <p>Collectors item: <?= $request["collectors"] ?></p>
        <a href="handle.php?s=setunread&r=<?= $_GET["r"] ?>">Mark as unread</a>
    </body>
</html>