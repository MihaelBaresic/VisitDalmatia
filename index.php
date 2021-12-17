<!DOCTYPE html>
<html lang="en-hr" and dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Login page</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/index.css" type="text/css">

    <script src="https://kit.fontawesome.com/f091d61524.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" type="image/png" href="Icons/login.png">
</head>

<body>
<div id="login-box">
        <div class="left">

        </div>

        <div class="right">
            <div id="logo">
                <img src="Pictures\logo_visit_dalmatia.jpg">
            </div>

            <h1>Login</h1>
            <span></span>

            <form method="POST" autocomplete="off" id="login_form" name="login_form" action="login.php">
                <input type="text" name="usern" placeholder="Username" autocomplete="off" required />
                <input type="password" name="psw" placeholder="Password" autocomplete="off" required />
                  
                <p id="signup">
                    <a href="signup.php">Don't have an account?</a>
                </p>
                <?php
                    $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                    if(strpos($fullUrl, "login=db_connect_error") == true){
                        echo "<div class='error'>Could not connect with database!</div>";
                    }
                    if(strpos($fullUrl, "login=error") == true){
                        echo "<div class='error'>Error occurred!</div>";
                    }
                    if(strpos($fullUrl, "login=incorrect") == true){
                        echo "<div class='error'>Incorrect Username/Password</div>";
                    }
                ?>
                <input type="submit" name="submit" value="LOGIN" />
            </form>


        </div>
</body>