<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookmarks</title>
    <script src="Scripts/Functions.js"></script>
    <script src="https://kit.fontawesome.com/f091d61524.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Style/home_style.css">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
</head>
<body>
    <div class="nav-container">
        <div class="wrappern">
            <nav>
                <div class="logo">
                    <a href="Home.php"><img src="Icons/logo.png" alt="Logo"></a>
                </div>
                    <ul class="nav-items">
                        <li>
                            <a href="Home.php">Home</a>
                        </li>
                        
                        <li>
                            <a href="bookmarks.php">Bookmarks</a>
                        </li>

                        <li>
                            <a class="nav-btn-logout" href="logout.php">Logout</a>
                        </li>

                    </ul>
            </nav>
        </div>
    </div>

    <div class="header-container">
        <div class="wrapper">
            <header>
                <div class="intro-content">

                    <h1>
                        My Bookmarks 
                    </h1>
                </div>
                <div class="intro-image">
                    <img src="Pictures/avion.png" alt="avion">
                </div>
            </header>

        <div>
            <table>
                
            <?php
                include "db.php";
                include "session.php";
                $sql = "SELECT mjesto.Naziv, mjesto.id_zup, mjesto.hylink, mjesto.id_mj FROM mjesto INNER JOIN bookmarks ON mjesto.id_mj=bookmarks.id_mjesta AND bookmarks.id_korisnika=$_SESSION[ID_k] ORDER BY mjesto.Naziv";
                $counter=1;
                $result = mysqli_query($con, $sql);

                if(mysqli_num_rows($result)>0){
                    echo"
                    <tr>
                        <th></th>
                        <th>Destination</th>
                        <th>County</th>
                        <th></th>
                    </tr>";
                    while($row = mysqli_fetch_assoc($result)) {
                        $county_name = $row["id_zup"];
                        switch($county_name){
                            case 'splitskodalmatinska':
                            $county_name = 'Split-Dalmatia county';
                            break;
                            case 'zadarska':
                            $county_name = 'Zadar county';
                            break;
                            case 'sibenskokninska':
                            $county_name = 'Sibenik-Knin county';
                            break; 
                            case 'dubrovacka':
                            $county_name = 'Dubrovnik-Neretva county';
                            break;     
        
                            }

                        echo"
                        <tr>
                        <td>$counter.</td>
                        <td><a href='$row[hylink]' target='_blank'>$row[Naziv]</a></td>
                        <td>$county_name</td>
                        <td>
                            <form id='myForm1' method='POST'>
                                <i class='fas fa-times' onclick='SubmitFormData1($row[id_mj],this,$counter);return false;' style='font-size: 30px;'></i>
                                <p id='del$counter' style='display: none;'>Deleted!</p>
                            </form>    
                        </td>
                        </tr>
                        ";
                        $counter++;
                    }
                }
                else{
                    echo"<div>
                    <h1>You didn't bookmark any place yet!<h1>
                    </div>";
                }
            ?>
            </table>
        </div>



            <a href="#"><img src="Icons/logo.png" alt="Logo"></a>

            <div class="social-icons">
                <a href="#"><img src="Icons/facebook-logo.png" alt="Facebook"></a>
                <a href="#"><img src="Icons/Instagram-logo.png" alt="Instagram"></a>
                <a href="#"><img src="Icons/gmail-logo.png" alt="Gmail"></a>
            </div>
        </div>
    </div>
    <footer>©VISIT DALMATIA All Rights Reserved</footer>
    <script src="Scripts/delete.js"></script>

</body>
</html>