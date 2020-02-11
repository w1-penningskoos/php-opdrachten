<!doctype html>
<html>
    <head>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta charset="utf-8">

        <link href="" rel="stylesheet" type="text/css">
        <script src="" defer></script>
        <title>

        </title>
    </head>
    <body>
    <?php
        // Variables
        // - Strings ""
        // - Integer - Number
        // - Boolean True/False
        $firstName = "Koos";
        $lastName = "Pennings";
        $fullName = $firstName . " " . $lastName;

        // Integer - numbers
        $dateOfBirth = 2003;
        $currentYear = date("Y");
        $age = $currentYear - $dateOfBirth;

        // Boolean

        $fromMaaskantje = false;
        $isMale = true;
            if($fromMaaskantje == true)
            {
                if($isMale == true)
                {
                    echo("<p>Welke homo speelt er nou John in garfield kart</p>");
                }
                else
                {
                    echo("<p>Jij houd zeker van kaaskoppen ofnie he lesbo</p>");
                }
            }
            else
            {
                if($isMale == true)
                {
                    echo("<p>Jij bent coole jongen");
                }
                else
                {
                    echo("<p>Jij bent minder waardig</p>");
                }
            }
    ?>
    <div>
        <?php
        echo("<h1>Hallo " . $fullName . "</h1>");
        echo("<h2>Jij bent " . $age . " jaar oud</h2>");
        ?>
    </div>
    </body>
</html>