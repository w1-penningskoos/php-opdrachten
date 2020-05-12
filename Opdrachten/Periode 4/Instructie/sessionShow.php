<?php
    // Starten van Sessie
    session_start();

    //Tonen van gegevens
    echo "<p> Gebruikte username is: " . $_SESSION["txtUsername"];
?>