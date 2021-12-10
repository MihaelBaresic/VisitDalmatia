<?php
session_start();
include "Db.php";

//if database is connected or not
if(mysqli_connect_error()){
    exit('Error connecting to the database' . mysqli_connect_error());
}


if(isset($_POST['usern']) && isset($_POST['psw'])) {
    
    function Validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}

$usern = Validate($_POST['usern']);
$pass = $_POST['psw'];


$sql = "SELECT * FROM korisnici WHERE username='$usern'";

$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result) > 0) 
{
    $row = mysqli_fetch_assoc($result);
    if(($row['username'] === $usern) && (password_verify($pass,$row['password'])))
    {
        echo"<script type='text/javascript'>window.alert('Login success!');</script>";
        $_SESSION['username'] = $row['username'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['ID_k'] = $row['ID_k'];
        echo "<script>location.href = 'Home.php';</script>";
    }
    else
    {
        echo "<script type='text/javascript'>window.alert('Inccorect password!')</script>";
        echo "<script>location.href = 'index.php';</script>";
    }

}
else {
    echo "<script type='text/javascript'>window.alert('Username does not exist!')</script>";
    echo "<script>location.href = 'index.php';</script>";
}
?>