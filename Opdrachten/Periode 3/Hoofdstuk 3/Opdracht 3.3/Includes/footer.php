<?php
date_default_timezone_set("Europe/Amsterdam");
$uur = date("H");

if ($uur <= 5)
{
    $dayPart = "Goedennacht Heer Koos Pennings @2020";
}
elseif ($uur <= 12)
{
    $dayPart = "Goedenochtend Heer Koos Pennings @2020";
}
elseif ($uur <= 17)
{
    $dayPart = "Goedenmiddag Heer Koos Pennings @2020";
}
elseif ($uur <= 24)
{
    $dayPart = "Goedenavond Heer Koos Pennings @2020";
}
?>
<?php
echo "<div class='footer'>";
echo $dayPart . "@2020";
echo "</div></footer>";
echo "</body></html>";
?>