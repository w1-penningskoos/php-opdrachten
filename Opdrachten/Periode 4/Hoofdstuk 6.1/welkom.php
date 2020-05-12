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
    <link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>
<header>
    <h1><?php echo "Uitwerking van PHP-opdrachten"; ?></h1>
</header>
<div>
    <aside>
        <h2>Menu</h2>
        <ul><li>Hoofdstuk 2<ul>
                    <li><a href="../opdracht 2/opdracht_2-1.php">Opdracht 2.1</a></li>
                    <li><a href="../opdracht 2/opdracht_2-2.php">Opdracht 2.2</a></li>
                </ul></li>
            <li>Hoofdstuk 3<ul>
                    <li><a href="">Opdracht 3.1</a></li>
                    <li><a href="">Opdracht 3.2</a></li>
                    <li><a href="">Opdracht 3.3</a></li>
                </ul></li>
            <li>Hoofdstuk 4<ul>
                    <li><a href="">Opdracht 4.1</a></li>
                    <li><a href="">Opdracht 4.2</a></li>
                    <li><a href="">Opdracht 4.3</a></li>
                    <li><a href="">Opdracht 4.4</a></li>
                </ul></li>
            <li>Hoofdstuk 5<ul>
                    <li><a href="">Opdracht 5.1</a></li>
                    <li><a href="">Opdracht 5.2</a></li>
                    <li><a href="">Opdracht 5.3</a></li>
                    <li><a href="">Opdracht 5.4</a></li>
                </ul></li>
        </ul>
    </aside>
    <main id="wrapper">
        <h2>Uitwerkingen</h2>
        <h1>Je bent ingelogd</h1>
    </main>
    <footer>
        <?php
        session_start();
        if (isset($_SESSION['username']))
        {
            $bezoeker = $_SESSION['username']. "&nbsp;<a href='loguit.php'>Loguit</a>";
        }
        else
        {
            $bezoeker = "onbekende bezoeker". "&nbsp;<a href='opdracht%206.1.php'>Login</a>";
        }
        echo "Goedenavond " . $bezoeker . " &copy;2020";
        ?>
    </footer>
</div>
</body>
</html>