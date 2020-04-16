<?php
/**
 *   User: Naam
 *   Date: Date
 *   Time: 12:06 PM
 *   File: index.php
 */?>

<!doctype html>
<html>
<head>
    <link href="../../Hoofdstuk%202/opdracht 1/style.css" type="text/css" rel="stylesheet">
</head>
<body>
<header>
</header>
<div>
    <aside>
        <h2>Menu</h2>
        <ul>
            <li><a href="../../Hoofdstuk%202/Opdracht%201/index.php">Terug</a></li>
        </ul>
    </aside>
</div>
<main id="wrapper">
    <h2>Uitwerkingen</h2>
    <?php
    $driveOn = true;
    $trafficLightColor = "Groen";
    $ambulanceComing = false;
    if ($ambulanceComing == true)
    {
        $driveOn = false;
    }
    if ($trafficLightColor == "Groen" && $ambulanceComing == false)
    {
        $driveOn = true;
    }
    if ($trafficLightColor == "Orange" || $trafficLightColor == "Rood")
    {
        $driveOn = false;
    }
    if ($driveOn == true)
    {
        echo"<h1 id='groen'>U mag doorijden</h1>";
    }
    else
    {
        echo "<h1 id='rood'>U mag niet doorijden</h1>";
    }
    ?>
    <footer>
        <?php
        include "../../Hoofdstuk 3/Opdracht 3.3/Includes/footer.php";
        ?>
    </footer>
</main>
</body>
</html>