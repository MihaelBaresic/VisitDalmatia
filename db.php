<?php
    $serverName = "visitdalmatia.database.windows.net"; // update me
    $connectionOptions = array(
        "Database" => "visitDalmatia", // update me
        "Uid" => "dalmatia", // update me
        "PWD" => "visitMe00" // update me
    );
    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
?>

