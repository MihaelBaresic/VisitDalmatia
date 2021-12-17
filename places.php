<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Style/bookmarks_style.css">
</head>
<body>
    <div class="nav-container">
        <div class="wrapper">
            <nav>
                <div class="logo">
                    <a href="Home.php"><img src="Icons/logo.png" alt="Logo"></a>
                </div>
                    <ul class="nav-items">
                        <li>
                            <a href="Home.php">Home</a>
                        </li>

                        <li>
                            <a href="bookmarks.html">Bookmarks</a>
                        </li>

                        <li>
                            <a href="Home.php">Contacts</a>
                        </li>

                        <li>
                            <a class="nav-btn-logout" href="logout.php">Logout</a>
                        </li>

                    </ul>
            </nav>
        </div>
    </div>
</body>
</html>


<?php

include "db.php";
include "session.php";
$county_name = $_GET['c_name'];



$sql = "SELECT * FROM mjesto WHERE id_zup='$county_name' ORDER BY 'naziv'";

$result = mysqli_query($con, $sql);

    while($row = mysqli_fetch_assoc($result)) 
    {
        echo"

        <div class='container' style='
        background-color:lightgray; 
        float: left;
        width: 320px; heigth: 450px; border-radius:30px; margin: 33px 66px;'>


            <div class='container-content' style='padding: 0px;
            text-align: center; '>

            <img src='$row[img_url]' style='width: 100%;
            height: 200px; border-radius:30px 30px 0px 0px;'>

            <img src='Icons/bookmark.png' style='float:right; margin: 16px 16px 0 0; width: 30px; heigth: 30px;'>
            <img src='Icons/location.png' style='float:left; margin: 16px 0 0 16px; width: 30px; heigth: 30px;'>
            <h2>$row[naziv]</h2>

            <p>For more information click <a href=$row[hylink] target='_blank'>here</a></p>

            </div>
        </div>";


    }

?>



