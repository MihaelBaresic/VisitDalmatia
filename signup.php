<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0">
    <title>Create acount</title>
    <link rel="stylesheet" href="Style/signup.css">
    <script src="Scripts/Functions.js"></script>
</head>

<body>
    <div id="login-box">
        <div class="left">
            <div id="logo">
                <img src="Pictures\logo_visit_dalmatia.jpg">
            </div>
            <h1>Sign up</h1>
            <span></span>
            <p id="login">Already have account? <a href="index.php">Login here</a></p>

            <form method="POST" autocomplete="off" id="register_form" name="register_form" action="register.php">
                <input type="text" name="username" placeholder="Username" autocomplete="off" onchange="Lgth();"
                    required />
                <input type="text" name="email" placeholder="E-mail" autocomplete="off"
                    pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[a-z]{2,3}$" required />
                <input type="password" name="password" placeholder="Password" autocomplete="off" onchange="Confirm();"
                    required />
                <input type="password" name="password_r" placeholder="Retype password" autocomplete="off"
                    onchange="Confirm();" required />
                    
                <?php
                    $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                    if(strpos($fullUrl, "signup=db_connect_error") == true){
                        echo "<div class='error'>Could not connect with database!</div>";
                    }
                    if(strpos($fullUrl, "signup=error") == true){
                        echo "<div class='error'>Error occurred!</div>";
                    }
                    if(strpos($fullUrl, "signup=userTaken") == true){
                        echo "<div class='error'>Username already taken, try again.</div>";
                    }
                ?>
                <input type="submit" name="submit" value="SIGN UP" />
            </form>

            <!-- <input type="submit" name="signup_submit" value="Sign me up" /> -->

        </div>

        <div class="right" id="gr">
            <!--  <span class="loginwith">Sign in with<br />social network</span>

       <button class="social-signin facebook">Log in with facebook</button>
        <button class="social-signin twitter">Log in with Twitter</button>
        <button class="social-signin google">Log in with Google+</button>-->
        </div>
        <!-- <div class="or">OR</div> -->

    </div>


</body>

</html>