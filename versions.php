<?php
$latest = "1.1.0";
$versions = array("1.0.0"=>"Made modpack", "1.1.0"=>"Added Tool Trims");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>MicroCraft Hub</title>
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=home" />
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div class="escape">
            <a href="index.php"><span class="material-symbols-outlined">home</span></a>
        </div>
        <div class="header" style="grid-template-rows: 70% auto; background-image: url(assets/images/versions.png);">
            <h1>Modpack Versions</h1>
            <a class="button green" href="download.php?v=<?= $latest ?>">Latest Version (<?= $latest ?>)</a>
        </div>
        <div class="tablebox">
        <table width=100%>
            <tr>
                <th width=10% class="left">Version</th>
                <th width=90% class="right">Changelog</th>
            </tr>
<?php
foreach (array_reverse($versions, true) as $v=>$c) {
    echo "<tr><td class='left'><a href='download.php?v=";
    echo $v;
    echo "'>";
    echo $v;
    echo "</a></td><td class='right'><p>";
    echo $c;
    echo "</p></td></tr>";
}
?>
        </table>
</div>
    </body>
</html>