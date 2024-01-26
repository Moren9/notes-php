<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "notes figo";
    $dbport = "3306";

    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname, $dbport);

    if($conn->error){
        echo "errore id connessione";
    } else {
        echo "connesso con successo";
    }


?>