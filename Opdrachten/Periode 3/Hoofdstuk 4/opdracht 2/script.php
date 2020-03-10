<?php
$courseName = "LOB";
/*
    PHP
    ASP
    SQL
    Javascript
    LOB
    Digitale Vaardigheden
    Engels
    Nederlands
    Modeleren
    Rekenen
    Computertekenen
 */
$teacherName = "Onbekend";
/*
    Meneer Spierings
    Meneer van Wetering
    Meneer Gijsbrechts
    Meneer Evers
    Meneer Visser
    Mevrouw Pielage
    Meneer Giesen
    Meneer van der Ende
    Meneer van Bijnen
    Meneer van de Wetering
    Meneer van den Berg
 */
switch ($courseName)
{
    case "PHP":
        $teacherName = "Meneer Spierings";
        break;
    case "ASP":
        $teacherName = "Meneer van Wetering";
        break;
    case "SQL":
        $teacherName = "Meneer Gijsbrechts";
        break;
    case "Javascript":
        $teacherName = "Meneer Evers";
        break;
    case "LOB":
        $teacherName = "Meneer Visser";
        break;
    case "Digitale Vaardigheden":
        $teacherName = "Mevrouw Pielage";
        break;
    case "Engels":
        $teacherName = "Meneer Giesen";
        break;
    case "Nederlands":
        $teacherName = "Meneer van der Ende";
        break;
    case "Modeleren":
        $teacherName = "Meneer van Bijnen";
        break;
    case "Rekenen":
        $teacherName = "Meneer van de Wetering";
        break;
    case "Computertekenen":
        $teacherName = "Meneer van den Berg";
        break;
}

echo "<p> Je docent voor het vak " . "<span>" . $courseName . "</span>" . " is " . "<span>" . $teacherName . "</span>" . "</p>";
?>
<style>
    span
    {
        font-weight: bold;
    }
</style>
