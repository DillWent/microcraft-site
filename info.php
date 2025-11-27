<!DOCTYPE html>
<html>
    <head>
        <title>MicroCraft Hub</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=home" />
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div class="escape">
            <a href="index.php"><span class="material-symbols-outlined">home</span></a>
        </div>
        <div class="header" style="grid-template-columns: 20% 20% 20% 20% 20%; grid-template-rows: 70% auto; background-image: url(assets/images/info.png);">
            <h1 style="grid-column: 1 / span 5">Server Info</h1>
            <p class="button green" style="grid-column: 2">Server IP: <?= file_get_contents("http://ipecho.net/plain") ?></p>
            <p class="button blue" style="grid-column: 3">Server Version: 1.21.5</p>
            <p class="button yellow" style="grid-column: 4">Latest Modpack Version: <a href="download.php?v=latest">1.1.0</a></p>
        </div>
        <div class="gridbox">
            <p>The server has a variety of custom item textures and models. These are used for events or as special Collector's Items. If you would like one, you can use this form to request a custom item.</p>
            <a href="itemrequest.php" class="button gray">Custom Item Request Form</a>
        </div>
    </body>
</html>