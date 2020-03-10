<html>
<head>

</head>
<body>
<?php
date_default_timezone_set("Asia/Hong_Kong");
$currentTime = date("H:i:s");
echo($currentTime);

$currentHour = "Fri";//date("D");
echo "   ";
switch ($currentHour)
{
    case "Mon":
        echo "Garfield wint de lasagna cup op Maandag";
        break;
    case "Tue":
        echo "Dinsdag is voor homo's op Dinsdag";
        break;
    case "Wed":
        echo "Jarno heeft tb op Woensdag";
        break;
    case "Thu":
        echo "Jim gaat sex hebben met Jan van der Ende op Donderdag";
        break;
    case "Fri":
        echo "Echoooo, echooo, echoo, echo. op Vrijdag";
        break;
    case "Sat":
        echo "Dion heeft 18 behaald op Zaterdag";
        break;
    case "Sun":
        echo "Niels is een herione verslaafde op Zondag";
        break;
    default:
        echo "Deze dag bestaat niet";
}
?>
</body>
</html>