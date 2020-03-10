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
        <link href="../opdracht 1/style.css" type="text/css" rel="stylesheet">
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
    $event = "Elfstedentocht";
    $localName = "Alvestêdetocht";
    $length = 200;
    $eventActivitie = "Schaatstoch";
    $typeOfIce = "Natuurijs";
    $organiser = "Koninklijke Vereniging De Friesche Elf Steden";
    $eventPlace = "Leeuwarden";
    $eventProvince = "Friesland";
    $timesEventHeld = 15;
    $firstTime = 1909;
    $timesPerWinter = 1;
    ?>
    <?php
    $verhaal1 = "De " . $event . " (Fries: " . $localName . ") is een " . $length . " kilometer lange " . $eventActivitie . " over " . $typeOfIce . " die wordt georganiseerd door " .
        $organiser . ". " . $eventPlace . " de hoofdstad van " . $eventProvince . ", is start-en aankomstplaats. De " . $event . " is inmiddels " . $timesEventHeld . " maal verreden en werd voor het eerst in " .
        $firstTime . " gereden en wordt maximaal " . $timesPerWinter . " keer per winter gehouden.";
    echo $verhaal1;
    echo "De " . $event . " (Fries: " . $localName . ") is een " . $length . " kilometer lange " . $eventActivitie . " over " . $typeOfIce . " die wordt georganiseerd door " .
        $organiser . ". " . $eventPlace . " de hoofdstad van " . $eventProvince . ", is start-en aankomstplaats. De " . $event . " is inmiddels " . $timesEventHeld . " maal verreden en werd voor het eerst in " .
        $firstTime . " gereden en wordt maximaal " . $timesPerWinter . " keer per winter gehouden."
    ?>
    <footer>
        <?php
        include "../../Hoofdstuk 3/Opdracht 3.3/Includes/footer.php";
        ?>
    </footer>
</main>
</body>
</html>