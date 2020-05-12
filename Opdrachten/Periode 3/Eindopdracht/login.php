<?php
/**
 * User: Koos Pennings
 * Date: 16/04/2020
 * Time: 12:06 PM
 * File: Eindopdrachten
 */
?>

<?php
    include("script.php");
?>

<!doctype HTML>
<html>
<head>
    <link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>
<header>
    <h1><?php echo "Uitwerking van PHP-opdrachten";?></h1>
</header>
<aside>
    <h2>Menu</h2>
    <ul>
        <li>Hoofdstuk 2
            <ul>
                <li>
                    <a href="hoofdstuk2/opdracht_2-1.php">Opdracht 2.1</a>
                </li>
                <li>
                    <a href="hoofdstuk2/opdracht_2-2.php">Opdracht 2.2</a>
                </li>
            </ul>
        </li>
        <li>Hoofdstuk 5
            <ul>
                <li>
                    <a href="hoofdstuk5/opdracht54.php">Opdracht 5.4</a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
<main id="wrapper">
    <h2>Bergheen</h2>
    <?php
    if($loginSuccess == false)
    {
        $message = "Foutieve inlog gegevens";
        echo "<p>Login om onze openings tijden + adresgegevens te zien</p>";
        echo "<p style='color: red'>" . $message . "</p>";
        echo "<form method='post' action=''>
        <h4>Naam</h4>
        <input type='text' name='username'>
        <br>
        <h4>Wachtwoord</h4>
        <input type='password' name='password'>
        <br>
        <input type='submit' value='login'>
    </form>";
    }
    ?>
    <?php
    if($loginSuccess == true)
    {
        echo "<p>Welkom!</p>";
        echo "<fieldset id='fieldOne'>";
        echo "<legend>Openingstijden</legend>";
        echo "<p>Do: 22:00</p>";
        echo "<p>Vr: All day</p>";
        echo "<p>Za: All day</p>";
        echo "<p>Zo: 12:00</p>";
        echo "</fieldset>";

        echo "<fieldset id='fieldTwo'>";
        echo "<legend>Adressgegevens</legend>";
        echo "<p>Am Wriezener Bahnhof</p>";
        echo "<p>10243 Berlin</p>";
        echo "<p>Duitsland</p>";
        echo "<p></p>";
        echo "</fieldset>";
    }
    ?>

</main>
</body>
</html>



