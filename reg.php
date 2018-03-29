<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Registration</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<?php 
ob_start();
session_start();
	include("db.php");
   function quote_smart($value,$con)
    {
       // Stripslashes
       if (get_magic_quotes_gpc()) {
           $value = stripslashes($value);
       }
       $value=trim($value);
       // Quote if not integer
       $value = mysqli_real_escape_string($con,$value);
       return $value;
    }
if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $firstname = htmlspecialchars($_POST['firstname']);
      $lastname=htmlspecialchars($_POST['lastname']);
      $dateofbirth = htmlspecialchars($_POST['dateofbirth']);
      $gender = htmlspecialchars($_POST['gender']);
      $email=htmlspecialchars($_POST['email']);
      $password = htmlspecialchars($_POST['password']);
      $country = htmlspecialchars($_POST['country']);

      $firstname=quote_smart($firstname,$con);
      $lastname=quote_smart($lastname,$con);
      $dateofbirth=quote_smart($dateofbirth,$con);
      $gender=quote_smart($gender,$con);
      $email=quote_smart($email,$con);
      $password=quote_smart($password,$con);
      $country=quote_smart($country,$con);
      
      $sql = "INSERT into TouristInfo(FirstName,LastName,DateOfBirth,Gender,Country,Email,Password)values('$firstname','$lastname','$dateofbirth','$gender','$country','$email','$password')";
      $result = mysqli_query($con,$sql);
      if($result){
         $_SESSION['login_user'] = $lastname;?>
          <?php
         header("location:index.php");
      }
   }
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>