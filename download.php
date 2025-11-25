<?php
$latest = "1.1.0";
$versions = array("1.0.0"=>"1.0.0.mrpack", "1.1.0"=>"1.1.0.mrpack");
if (isset($_GET["v"])) {
    if ($_GET["v"] == "latest") {
        $_GET["v"] = $latest;
    }
    if (array_key_exists($_GET["v"], $versions)) {
        $version = $_GET["v"];
        $download = $versions[$_GET["v"]];
    } else {
        header("Location: index.php");
    }
} else {
    $version = $latest;
    $download = $versions[$latest];
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>MicroCraft Hub</title>
        <link rel="stylesheet" href="style.css" />
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=home" />
    </head>
    <body>
        <div class="escape">
            <a href="index.php"><span class="material-symbols-outlined">home</span></a>
        </div>
        <div class="header" style="grid-template-rows: 70% auto; grid-template-columns: 30% 20% 20% 30%; background-image: url(assets/images/download.png);">
            <h1 style="grid-column: 1 / span 4">Download Modpack</h1>
            <a href="<?= $download ?>" download class="button green" style="grid-column: 2">Download (Version <?= $version ?>)</a>
            <a href="versions.php" class="button yellow" style="grid-column: 3">Other versions</a>
        </div>
    </body>
</html>