<?php
$liveevent = true;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>MicroCraft Hub</title>
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&display=swap" rel="stylesheet" />
        <link href="style.css" rel="stylesheet" />
    </head>
    <body>
        <div class="header" style="background-image: url(assets/images/index.png); grid-template-columns: 30% 20% 20% 30%; grid-template-rows: 70% auto auto;">
                <h1 style="grid-column: 1 / span 4">MicroCraft Hub</h1>
                <a href="download.php?v=latest" class="button green" style="grid-column: 2">Download Modpack</a>
            <a href="installationguide.html" class="button gray" style="grid-column: 3">Installation Guide</a>
            <a href="http://<?= file_get_contents("http://ipecho.net/plain") ?>:25566" class="button yellow" style="grid-column: 2">Dynmap</a>
            <a href="info.php" class="button blue" style="grid-column: 3">Server Info</a>
        </div>
        <div class="bar">
            <p>Server will be updating to 1.21.10 during the Christmas holidays!</p>
        </div>
    </body>
</html>
