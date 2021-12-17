<?php
<<<<<<< HEAD
    $serverName = "visitdalmatia.database.windows.net"; // update me
    $connectionOptions = array(
        "Database" => "visitDalmatia", // update me
        "Uid" => "dalmatia", // update me
        "PWD" => "visitMe00" // update me
    );
    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
?>

=======
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'korisnici';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);



if(!$con) {
    echo "Connection failed!";
}
?>
>>>>>>> bd49a1b39efe2b1ab710add6dc746d08466d8a35
