<?php
  echo $_POST['id'] ."<br />";

  echo "==============================<br />";
  echo "All Data Submitted Successfully!";
  

 
    include "db.php";


    $sql = "UPDATE korisnici SET random = '$_POST[id]' WHERE korisnici.ID_k = 4";

    //UPDATE `korisnici` SET `random` = 'A' WHERE `korisnici`.`ID_k` = 4

    $con->query($sql);
  
?>