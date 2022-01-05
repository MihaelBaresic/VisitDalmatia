<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Style/places_style.css">
    <script src="Scripts/Functions.js"></script>
    <script src="https://kit.fontawesome.com/f091d61524.js" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
</head>
<body>
    <div class="search-box" id="search-box">    
        <input type="text" placeholder="Search here..." />
    </div>

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
                            <a href="bookmarks.php">Bookmarks</a>
                        </li>

                        <li>
                            <a class="nav-btn-container" href="#" >
                                <img class="search-btn" src="Icons/search-icon.svg" alt="">
                                <img class="close-btn" src="Icons/close-icon.svg" alt="">
                            </a>
                        </li>
                    </ul>
            </nav>
        </div>
            <div class="logout">
                <a class="nav-btn-logout" href="logout.php">Logout</a>
            </div>
    </div>

    <div class="header-container">
        <div class="wrapper">                
            <?php

                include "db.php";
                include "session.php";
                $county_name = $_GET['c_name'];


                $sql = "SELECT * FROM mjesto WHERE id_zup='$county_name' ORDER BY 'naziv'";

                $sqlnew = "SELECT * FROM zupanija WHERE naziv_zup='$county_name'";

                $result = mysqli_query($con, $sql);
                $resultnew = mysqli_query($con, $sqlnew);
                

                    if(mysqli_num_rows($resultnew)>0){
                        $rownew=mysqli_fetch_assoc($resultnew);


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
                        <header>
                            <div class='intro-content'>
                                <p class='top'>
                                    TOP DESTINATIONS
                                 </p>
                
                            <h1>$county_name</h1>
                            <p>$rownew[tekst]<p>
                            </div>
                        <div class='intro-image'>
                            <img src='$rownew[grb]' alt='grb'>
                        </div>
                        </header>
                        <h2 class='exp'>
                            Explore Top Destination
                        </h2>
                        ";
                                      
                    }

                
                /*
                    echo"
                    <form id='myForm' method='POST'>
                                            <input type='text' id='random' name='random' 'placeholder='random'
                                                required />
                                            <input type='button' id='submitFormData' value='Submit''></button>
                                        </form>
                                        <br/>
                                        <div id='results'>

                                        <!-- All data will display here  -->
                                        </div>
                    
                    
                    ";
                */ 

                    while($row = mysqli_fetch_assoc($result)) 
                    {
                        echo"
                        <div class='container' style='
                        background-color:lightgray; 
                        float: left;
                        width: 320px; heigth: 450px; border-radius:30px; margin: 33px 36px;'>


                            <div class='container-content' style='padding: 0px;
                            text-align: center; '>

                            <img src='$row[img_url]' style='width: 100%;
                            height: 200px; border-radius:30px 30px 0px 0px;'>
                            
                            <form id='myForm' method='POST'>
                            ";
                           
                            $sqln= "SELECT * FROM bookmarks WHERE id_korisnika = '$_SESSION[ID_k]' AND id_mjesta = '$row[id_mj]'";
                            $resultn=mysqli_query($con, $sqln);
                            
                            if(mysqli_num_rows($resultn)>0){
                                echo "
                                    <i class='fas bm-icon BookmarkIcon fa-bookmark' id='$row[id_mj]' onclick='SubmitFormData($row[id_mj], this);return false;' style='float:right; margin: 16px 16px 0 0;'></i>
                                    ";
                            }
                            else{
                                echo "
                                <i class='far bm-icon BookmarkIcon fa-bookmark' id='$row[id_mj]' onclick='SubmitFormData($row[id_mj], this);return false;' style='float:right; margin: 16px 16px 0 0;'></i>
                                ";
                            }
                            echo "
                            </form>

                            
                            <img src='Icons/location.png' style='float:left; margin: 16px 0 0 16px; width: 30px; heigth: 30px;'>
                            <h2>$row[naziv]</h2>

                            <p>For more information click <a href=$row[hylink] target='_blank'>here</a></p>

                            </div>
                        </div>";
                    }
                
                ?>
            

            <a class="Logo_d"href="#"><img src="Icons/logo.png" alt="Logo"></a>

            <div class="social-icons">
                <a href="#"><img src="Icons/facebook-logo.png" alt="Facebook"></a>
                <a href="#"><img src="Icons/Instagram-logo.png" alt="Instagram"></a>
                <a href="#"><img src="Icons/gmail-logo.png" alt="Gmail"></a>
            </div>
        </div>   
    </div>
    <footer>©VISIT DALMATIA All Rights Reserved</footer>
    <script src="Scripts/searchbar.js"></script>
</body>
</html>
