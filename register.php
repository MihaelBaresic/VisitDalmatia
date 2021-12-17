<?php

if(isset($_POST['submit'])){
    include_once "db.php";
}
else{
    header("Location: signup.php?signup=error");
    exit();
}


//if database is connected or not
if(mysqli_connect_error()){
    header("Location: signup.php?signup=db_connect_error");
    exit();
}


if($stmt = $con->prepare('SELECT ID_k, password FROM korisnici WHERE username = ?')) {
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    $stmt->store_result();

    if($stmt->num_rows>0) {
        header("Location: signup.php?signup=userTaken");
        exit();
    }
    else {
        if($stmt = $con->prepare('INSERT INTO korisnici (username, password, email) VALUES (?, ?, ?)' )) {
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $stmt->bind_param('sss', $_POST['username'], $password, $_POST['email']);
            $stmt->execute();
            echo"<script type='text/javascript'>window.alert('Succesfully registred, you can now log in.');</script>";
            echo "<script>location.href = 'Index.php';</script>";
        } 
        else{
            header("Location: signup.php?signup=error");
            exit();
        }
    }
    $stmt->close();
}
else{
    header("Location: signup.php?signup=error");
    exit();
}
$con->close();

?>
