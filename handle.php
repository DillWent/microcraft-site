<?php
if ($_GET["s"] == "itemrequest") {
    $data = json_decode(file_get_contents("itemrequests.json"), true);
    $file = fopen("itemrequests.json", "w");
    $newdata = Array();
    $newdata["read"] = false;
    $newdata["requestor"] = $_POST["requestor"];
    $newdata["no"] = $_POST["no"];
    $newdata["requestName"] = $_POST["requestName"];
    $newdata["desc"] = $_POST["desc"];
    $newdata["reason"] = $_POST["reason"];
    $newdata["name"] = $_POST["name"];
    $newdata["lore"] = $_POST["lore"];
    if (isset($_POST["collectors"])) {
        $newdata["collectors"] = true;
    } else {
        $newdata["collectors"] = false;
    }
    if (isset($_POST["3d"])) {
        $newdata["3d"] = true;
    } else {
        $newdata["3d"] = false;
    }
    array_push($data, $newdata);
    fwrite($file, json_encode($data));
    fclose($file);
    header("Location: itemrequest.php?success=true");
} else {
    header("Location: index.php");
}
?>