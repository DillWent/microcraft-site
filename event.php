<?php
$file = fopen("eventweek.json", "r");
$data = json_decode(fread($file, filesize("eventweek.json")), true);
fclose($file);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>MicroCraft Hub</title>
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&display=swap" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=home" />
    </head>
    <body>
        <div class="escape">
            <a href="index.php"><span class="material-symbols-outlined">home</span></a>
        </div>
        <div class="header">
            <h1>Event Hub</h1>
        </div>
        <div class="tablebox">
            <table style="margin: auto; width: 50%; text-align: center;">
                <tr>
                    <th>Session</th>
                    <th>Mon</th>
                    <th>Tue</th>
                    <th>Wed</th>
                    <th>Thur</th>
                    <th>Fri</th>
                </tr>
                <tr>
                    <td>Session 1</td>
                    <?php
for ($x = 0; $x < count($data); $x++) {
    $ref = $data[$x];
    if ($ref[0]["taken"]) {
        echo '<td class="taken session" ';
        echo 'opt="';
        echo $x;
        echo ',0">';
        echo "???";
        echo '</td>';
    } else {
        echo '<td class="free session" ';
        echo 'opt="';
        echo $x;
        echo ',0">';
        echo "???";
        echo '</td>';
    };
};
                    ?>
                </tr>
                <tr>
                    <td>Session 2</td>
                    <?php
for ($x = 0; $x < count($data); $x++) {
    $ref = $data[$x];
    if ($ref[1]["taken"]) {
        echo '<td class="taken session" ';
        echo 'opt="';
        echo $x;
        echo ',1">';
        echo "???";
        echo '</td>';
    } else {
        echo '<td class="free session" ';
        echo 'opt="';
        echo $x;
        echo ',1">';
        echo "???";
        echo '</td>';
    };
};
                    ?>
                </tr>
            </table>
        </div>
        <div class="invis" id="claimbox">
            <form method="GET" action="control.php">
                <p onclick='document.getElementById("claimbox").classList.add("invis");'>Cancel</p>
                <label for="usrnme">Username:</label>
                <input type="text" id="usrnme" name="username" />
                <label for="name">Event Name:</label>
                <input type="text" id="name" name="name" />
                <input type="hidden" name="slot" id="slot" />
                <input type="hidden" name="source" value="eventclaim" />
                <input type="submit" value="Claim" />
            </form>
        </div>
        <script>
function popUp(event) {
    let el = event.currentTarget;
    let popup = document.getElementById("claimbox");
    popup.classList.remove("invis");
    console.log(el);
    console.log(popup);
    document.getElementById("slot").setAttribute("value", el.getAttribute("opt"));
}
function unPop(event) {
    document.getElementById("claimbox").classList.add("invis");
}
const tds = document.getElementsByClassName("free");
for (let i = 0; i < tds.length; i++) {
    tds[i].addEventListener("click", popUp);
}
        </script>
    </body>
</html>