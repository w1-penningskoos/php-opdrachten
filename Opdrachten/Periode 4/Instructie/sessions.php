<?php
    // PHP Session voorbeeld

    // Sessie starten
    session_start();

    // Session vullen met data
    if(isset($_GET["txtUsername"]) == true)
    $_SESSION["username"] = $_GET["txtUsername"];

?>