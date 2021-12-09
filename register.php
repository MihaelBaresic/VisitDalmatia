<?php

  require_once('db.php'); 
  $db= $con; // update with your database connection
  // by default, error messages are empty
  $register=$valid=$passErr=$cpassErr='';
  // by default,set input values are empty
  $set_username=$set_password=$set_email='';
  //if database is connected

  extract($_POST);
  if(isset($_POST['submit']))
  {
    
    //input fields are Validated with regular expression
  //    $validUsername="/^[a-zA-Z ]*$/";
  //    $validEmail="/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/";
    $uppercasePassword = "/(?=.*?[A-Z])/";
    $lowercasePassword = "/(?=.*?[a-z])/";
    $digitPassword = "/(?=.*?[0-9])/";
    $spacesPassword = "/^$|\s+/";
    $symbolPassword = "/(?=.*?[#?!@$%^&*-])/";
    $minEightPassword = "/.{8,}/";

      
  // password validation 
  if(empty($password)){
    $passErr="Password is Required"; 
  } 
  elseif (!preg_match($uppercasePassword,$password) || !preg_match($lowercasePassword,$password) || !preg_match($digitPassword,$password) || !preg_match($symbolPassword,$password) || !preg_match($minEightPassword,$password) || preg_match($spacesPassword,$password)) {
    $passErr="Password must be at least one uppercase letter, lowercase letter, digit, a special character with no spaces and minimum 8 length";
  }
  else{
    $passErr=true;
  }

  // form validation for confirm password
  if($cpassword!=$password){
    $cpassErr="Confirm Password doest Matched";
  }
  else{
    $cpassErr=true;
  }

  // check all fields are valid or not
  if($passErr==1 && $cpassErr==1)
  {

    
      $password  =legal_input(md5($password));
    
      // check unique email
      $checkEmail=unique_email($email);
      if($checkEmail)
      {
        $register=$email." is already exist";
      }else{

        // Insert data
        $register=register($username,$email,$password);

      }




  }else{

      // set input values is empty until input field is invalid
      $set_username = $username;
      $set_email =  $email;
  }
  // check all fields are valid or not
  }

  //password error (hash) TODO
  // convert illegal input value to legal value formate
  function legal_input($value) {
    $value = trim($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);
    return $value;
  }

  function unique_email($email){
    
    global $db;
    $sql = "SELECT email FROM Korisnici WHERE email='".$email."'";
    $check = $db->query($sql);

  if ($check->num_rows > 0) {
    return true;
  }else{
    return false;
  }
  }





  // function to insert user data into database table
  function register($username,$email,$password){

    global $db;
    $sql="INSERT INTO Korisnici(username,email,password) VALUES(?,?,?)";
    $query=$db->prepare($sql);
    $query->bind_param('sss',$username,$email,$password);
    $exec= $query->execute();
      if($exec==true)
      {
      return "You are registered successfully";
      }
      else
      {
        return "Error: " . $sql . "<br>" .$db->error;
      }
  }
?>