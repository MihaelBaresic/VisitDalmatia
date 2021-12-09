<?php
$DATABASE_HOST = 'visitdalmatia.database.windows.net';
$DATABASE_USER = 'dalmatia';
$DATABASE_PASS = 'visitMe00';
$DATABASE_NAME = 'visitDalmatia';

$con = mssqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);



if(!$con) {
    echo "Connection failed!";
}
?>

<!-- $host ="xxx.xxx.xxx.xxx"; 
$username ="username";
$password ="password";
$database ="database";

mssql_connect($host, $username, $password);
mssql_select_db($database); -->
