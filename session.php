<?php

include "db.php";
session_start();

$sql = "SELECT username, email
FROM korisnici";
$result = mysqli_query($con, $sql);


if(isset($_SESSION['ID_k'])  && isset($_SESSION['username'])) { 
    ?>


<?php   

}

else {
    header("Location: index.php");
    exit();
} 
?>