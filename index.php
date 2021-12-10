<!DOCTYPE html>
<html lang="en-hr" and dir="ltr">
<head>
<meta charset="utf-8">
<title>Login page</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="Style/style.css" type="text/css">

<script src="https://kit.fontawesome.com/f091d61524.js" crossorigin="anonymous"></script>
<link rel="shortcut icon" type="image/png" href="Icons/login.png">

<body>
    <div class="Login-page">
        <div class="zlatnirat">
            <img src="Pictures/hero_background.jpg" width="100%" height="100%" alt="Picture of beach">
        </div>

        
        <div class="login">

            <form method="POST" autocomplete="on" id="login_form" name="login_form" action="login.php" style="width: 400px; height: 400px;">
                <label for="username"><b>Username</b></label><br>
                <input type="text" placeholder="Enter username" id="usern" name="usern" required><br>

                <label for="password"><b>Password</b></label><br>
                <input type="password" placeholder="Enter password" id="psw" name="psw" required><br>

                <input type="checkbox" id="remember" name="remember" checked>
                <label for="remeber">Remeber me</label><br>

                <button type="submit" id="sbmt" value="Login">Login</button><br>
                <p id="reg"><a href="register.html">Don't have an account?</a></p>

            </form>
        </div>
    </div>
</body>

</html>


<?php

if (isset($_GET['Message'])) {
    print '<script type="text/javascript">alert("' . $_GET['Message'] . '");</script>';
}

?>
