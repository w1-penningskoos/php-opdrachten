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
            <form id="gameFrm" method="get" action="opdracht6.2.php">
                <div class="float">
                    <input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" value="steen">
                    <img src="images/steen.jpg"></div>
                <div class="float">
                    <input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" value="papier">
                    <img src="images/papier.jpg"></div>
                <div class="float">
                    <input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" value="schaar">
                    <img src="images/schaar.jpg">
                </div>
            </form>
            <?php
            session_start();

            if( isset($_SESSION['user1']) == false || isset($_SESSION['user2']) == false )
            {
                $_SESSION['user1'] = 0;
                $_SESSION['user2'] = 0;
            }

            if (isset($_GET['keuze']))
            {
                echo "Jij koos: <img src='images/{$_GET['keuze']}.jpg'>";
                //Wat kiest de computer
                //Random wordt er een getal tussen 0 en 2 gekozen
                $opties = array("steen","papier","schaar");
                $computerkeuzegetal = rand(0,2);
                $computerkeuze = $opties[$computerkeuzegetal];
                echo "&nbsp;&nbsp;De computer koos: <img src='images/{$computerkeuze}.jpg'>";

                //Uitkomsten steen papier schaar

                if($_GET['keuze'] == "steen" && $computerkeuze == "schaar")
                {
                    echo "Jij wint ";
                    $_SESSION['user1'] +=1;
                    echo "Jouw punten: " . $_SESSION['user1'] . " tegen " . "Computer punten: " . $_SESSION['user2'];
                }
                if($_GET['keuze'] == "steen" && $computerkeuze == "papier")
                {
                    echo "Jij verliest ";
                    $_SESSION['user2'] +=1;
                    echo "Jouw punten: " . $_SESSION['user1'] . " tegen " . "Computer punten: " . $_SESSION['user2'];
                }
                //Schaar
                if($_GET['keuze'] == "schaar" && $computerkeuze == "papier")
                {
                    echo "Jij wint ";
                    $_SESSION['user1'] +=1;
                    echo "Jouw punten: " . $_SESSION['user1'] . " tegen " . "Computer punten: " . $_SESSION['user2'];
                }
                if($_GET['keuze'] == "schaar" && $computerkeuze == "steen")
                {
                    echo "Jij verliest ";
                    $_SESSION['user2'] +=1;
                    echo "Jouw punten: " . $_SESSION['user1'] . " tegen " . "Computer punten: " . $_SESSION['user2'];
                }
                //Papier
                if($_GET['keuze'] == "papier" && $computerkeuze == "steen")
                {
                    echo "Jij wint ";
                    $_SESSION['user1'] +=1;
                    echo "Jouw punten: " . $_SESSION['user1'] . " tegen " . "Computer punten: " . $_SESSION['user2'];
                }
                if($_GET['keuze'] == "papier" && $computerkeuze == "schaar")
                {
                    echo "Jij verliest ";
                    $_SESSION['user2'] +=1;
                    echo "Jouw punten: " . $_SESSION['user1'] . " tegen " . "Computer punten: " . $_SESSION['user2'];
                }
                //Gelijkspel
                if($_GET['keuze'] == $computerkeuze)
                {
                    echo "Gelijk spel ";
                    echo "Jouw punten: " . $_SESSION['user1'] . " tegen " . "Computer punten: " . $_SESSION['user2'];
                }
                //Winconditie
                if($_SESSION['user1'] == 5)
                {
                    echo " Je hebt gewonnen Gefeliciteerd ";
                    $_SESSION['user1'] = 0;
                    $_SESSION['user2'] = 0;
                    session_destroy();
                }
                if($_SESSION['user2'] == 5)
                {
                    echo " Je hebt gewonnen Gefeliciteerd ";
                    $_SESSION['user1'] = 0;
                    $_SESSION['user2'] = 0;
                    session_destroy();
                }
            }
            //Steen

            ?>
        </main>
    </div>
</body>
</html>
