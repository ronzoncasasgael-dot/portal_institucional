<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $bd = "gestioninsti";

    $con = new mysqli($host, $user, $pass, $bd);

    if($con->connect_error) {
        die("Error de conexión: " . $con->connect_error);
    }
?>