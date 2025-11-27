<!DOCTYPE html>
<html>
    <head>
        <title>Microcraft Hub</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=home" />
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div class="escape">
            <a href="info.php"><span class="material-symbols-outlined">home</span></a>
        </div>
        <div class="header" style="background-color: #fff">
            <form class="requestForm" action="handle.php?s=itemrequest" method="POST">
                <h2>Request info</h2>
                <label for="requestor">Your Username:</label>
                <input type="text" id="requestor" name="requestor" />
                <label for="no">Number Required:</label>
                <input type="number" id="no" name="no" />
                <label for="requestName">Informative Item Name:</label>
                <input type="text" id="requestName" name="requestName" />
                <label for="desc">Brief Description:</label>
                <input type="text" id="desc" name="desc" class="long" />
                <label for="reason">Why do you need it?</label>
                <input type="text" id="reason" name="reason" class="long" />
                <h2>Item info</h2>
                <label for="name">Final Item Name:</label>
                <input type="text" id="name" name="name" />
                <label for="lore">Lore (Item Description):</label>
                <textarea name="lore" id="lore" style="resize: none;"></textarea>
                <div>
                    <input type="checkbox" id="collectors" name="collectors" value="collectors" />
                    <label for="collectors">I want it to be a Collector's Item</label>
                </div>
                <div>
                    <input type="checkbox" id="3d" name="3d" value="3d" />
                    <label for="3d">I want a 3D model</label>
                </div>
                <input type="submit" value="Submit Request" />
            </form>
        </div>
        <?php
        if (isset($_GET["success"]) && $_GET["success"] == "true") {
            echo '<div class="bar bottom green"><p>Request successful!</p></div>';
        }
        ?>
    </body>
</html>