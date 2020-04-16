<html>
<head></head>
<body>
<?php
date_default_timezone_set("Europe/Amsterdam");
$dayNames = array("zondag","maandag","dinsdag","woensdag","donderdag","vrijdag","zaterdag");
$i = 0;
for ($i = 0; $i <= 6; $i++)
{
    echo("Dag " . $i . " is " . $dayNames[$i] . strtotime(date("w-d-Y")) . strtotime());
}

?>
</body>
</html>