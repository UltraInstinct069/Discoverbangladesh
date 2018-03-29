<?php 
  session_start();
	include("db.php");
  function quote_smart($value,$con)
    {
       // Stripslashes
       if (get_magic_quotes_gpc()) {
           $value = stripslashes($value);
       }
       // Quote if not integer
       $value=trim($value);
       $value = mysqli_real_escape_string($con,$value);
       
       return $value;
    }
if($_SERVER["REQUEST_METHOD"] == "POST") {
      $myemail = htmlspecialchars($_POST['email']);
      $mypassword = htmlspecialchars($_POST['password']);
      $myemail=quote_smart($myemail,$con);
      $mypassword=quote_smart($mypassword,$con);
      $sql = "SELECT * FROM TouristInfo WHERE Email = '$myemail' and Password = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_assoc($result);
      $count = mysqli_num_rows($result);
    
      $_SESSION["login_user"] = $row['LastName'];
      $_SESSION["ID"] = $row['TouristId'];
    
      if($count == 1) {         
         header("location:index.php");
      }
      else {
        header("location:login.php");
      }
 }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>LogIn</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<?php
   include("header.php");
?>
<div style="width: 450px;margin: auto;background-color: #fff;padding-top: 75px">
  <h2>Log In</h2>
  <form Action="login.php" method="POST">
    <div class="form-group">
      <label for="email">Email:</label>
      <input name="email" type="email" class="form-control" id="email" placeholder="Enter email" >
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input name="password" type="password" class="form-control" id="pwd" placeholder="Enter password" >
    </div>
    <button name="submit" type="submit" class="btn btn-primary">Sign In</button>
    <button name="submit" type="button" class="btn btn-info" data-toggle="modal" data-target="#registration">Sign Up</button>
  </form>
  <div id="registration" class="modal fade">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Registration</h4>
          </div>
          <div class="modal-body">
            <form action="reg.php" method="POST"> 
            <div class="form-group" style="padding-top: 25px">
                <input name="firstname" type="text" class="col-xs-12" id="firstname" placeholder="First Name" required="null">
              </div>
              <div  class="form-group" style="padding-top: 25px">
                <input name="lastname" type="text" class="col-xs-12" id="lastname" placeholder="Last Name" required="null">
              </div>
              <div  class="form-group" style="padding-top: 25px">
                <input name="dateofbirth" type="date" class="col-xs-12" id="dateofbirth" placeholder="Date Of Birth" required="null">
              </div>
              <label>Gender:</label>
              <div class="form-group">
              Male<input type="radio" name="gender" <?php if(isset($gender)&&$gender=='male') echo "checked"; ?> value="Male" placeholder="">
              
              Female<input type="radio" name="gender" <?php if(isset($gender)&&$gender=='female')echo "checked"; ?> value="Female" placeholder="">
              </div>
              <div  class="form-group">
              <label>Select Your Country:</label>
                <?php include("country.php"); ?>
              </div>
              <div  class="form-group">
                <input name="email" type="email" class="col-xs-12" id="email" placeholder="Email" required="null">
              </div>
              <div  class="form-group" style="padding-top: 25px">
                <input name="password" type="password" class="col-xs-12" id="pwd" placeholder="Enter password" required="null">
              </div>
              <button name="sub" style="margin-top: 25px" type="submit" class="btn btn-primary">Sign In</button>
             </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>
</div>
<footer style="padding-top: 150px">
<?php
   include("footer.php");
?>    
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	
</body>
</html>