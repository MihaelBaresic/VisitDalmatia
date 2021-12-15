<?php

#HELLO WORLD
include "db.php";
$county_name = $_GET['c_name'];



$sql = "SELECT * FROM mjesto WHERE id_zup='$county_name' ORDER BY 'naziv'";

$result = mysqli_query($con, $sql);

    while($row = mysqli_fetch_assoc($result)) 
    {
        echo"

        <div class='container'>
            <img src='$row[img_url]' style='width: 300px; heigth: 300px;'>
            <div class='container-content'>
                <h2>$row[naziv]</h2>
                <span><a href=$row[hylink]>Google location</span>
                <img src='Icons/bookmark.png' style='width: 30px; heigth: 30px;'>
            </div>

        </div>";


    }



// Fatal error: Uncaught TypeError: mysqli_fetch_assoc(): Argument #1 ($result) must be of type mysqli_result, bool given in C:\xampp\htdocs\VisitDalmatia\places.php:12 Stack trace: #0 C:\xampp\htdocs\VisitDalmatia\places.php(12): 
// mysqli_fetch_assoc(false) #1 {main} thrown in C:\xampp\htdocs\VisitDalmatia\places.php on line 12


?>






<!-- 
https://imotski.hr/wp-content/uploads/2020/01/imotski-2.jpg

https://a.cdn-hotels.com/gdcs/production183/d1693/12dc5cda-c6c9-4beb-aa9f-084de8a28b51.jpg?impolicy=fcrop&w=800&h=533&q=medium

https://image.dnevnik.hr/media/images/1600x1067/Jun2020/61905572-makarska-hrvatska.jpg

-->