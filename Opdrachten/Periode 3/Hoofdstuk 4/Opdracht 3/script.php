<?php
$task2 = "Lancering in: ";
$counter = 19;
function alert($msg)
{
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
while ($counter >0)
{
    $task2 = alert($task2 . $counter);
    $counter--;
}

function consoleLog($message)
{
    echo "<script type='text/javascript'>console.log('$message')</script>";
}
$task3 = "Lancering in: ";
for ($i=19; $i>0; $i--)
{
    $task3 = consoleLog($task3 . $i);
}

$e = 1;
$task4 = "";
while($e <= 6)
{
    $task4 = $task4 . "<h" . $e . ">Dit is de " . $e ."e ideratie</h" . $e . "><h1></h1>";
    $e++;
}


$task5 = "";
for($k = 1; $k <= 10; $k++)
{
    $task5 = $task5 . "<tr><td>Dit is de " . $k . "e ideratie</td></tr>";
}
$task5 =  "<table><tr>" . $task5 . "</tr></table>";

$task6 = "";
$o = 2020;
while( $o >= 2003)
{
    $leeftijd = $o - 2003;
    if($o == 2020)
    {
        $task6 = $task6 . "<p>In ". $o . " wordt ik " . $leeftijd . " jaar oud en ben ik Puber</p>";
    }
    if($o <2020 && $o >= 2015)
    {
        $task6 = $task6 . "<p>In " .$o . " was ik ". $leeftijd . " jaar oud en was ik een Puber</p>";
    }
    if($o < 2015 && $o >= 2011)
    {
        $task6 = $task6 . "<p>In " .$o . " was ik ". $leeftijd . " jaar oud en was ik een Tiener</p>";
    }
    if($o < 2011 && $o >= 2007)
    {
        $task6 = $task6 . "<p>In " .$o . " was ik ". $leeftijd . " jaar oud en was ik een Kleuter</p>";
    }
    if($o < 2007 && $o >= 2005)
    {
        $task6 = $task6 . "<p>In " .$o . " was ik ". $leeftijd . " jaar oud en was ik een Peuter</p>";
    }
    if($o == 2003)
    {
        $task6 = $task6 . "<p>Uiteindelijk ben ik in " . $o . " geboren</p>";
    };
    $o--;
}

?>
