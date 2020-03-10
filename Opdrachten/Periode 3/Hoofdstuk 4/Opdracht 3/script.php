<?php
$task2 = "Lancering in: ";
$counter = 19;
function alert($msg)
{
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
function consoleLog($message)
{
    echo "<script type='text/javascript'>console.log('$message')</script>";
}
while ($counter >0)
{
    alert($task2 . $counter);
    $counter--;
}

$task3 = "Lancering in: ";
for ($i=19; $i>0; $i--)
{
    consoleLog($task3 . $i);
}
?>