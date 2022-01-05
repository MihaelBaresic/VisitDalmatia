<?php
    include "db.php";
    include "session.php";

    if ($_POST["klasa"] == "far" )
        $sql = "INSERT INTO bookmarks(id_korisnika, id_mjesta) VALUES ($_SESSION[ID_k],$_POST[id])";
    else
      $sql = "DELETE FROM bookmarks WHERE bookmarks.id_korisnika = $_SESSION[ID_k] AND bookmarks.id_mjesta=$_POST[id]";
    $con->query($sql);
  
?>