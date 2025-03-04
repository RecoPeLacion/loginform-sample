<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "db_workimmersion";

    $conn = new mysqli($host, $user, $password, $db);
    if( $conn->connect_error ) {
        echo "Failed to connect DB" . $conn->connect_error;
    }

?>