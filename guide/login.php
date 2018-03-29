<?php
   include ("config.php");
   session_start();
   function quote_smart($value,$con)
		{
		   if (get_magic_quotes_gpc()) {
		       $value = stripslashes($value);
		   }
		   $value=trim($value);
		   $value = mysqli_real_escape_string($con,$value);
		   return $value;
		}
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $email = htmlspecialchars($_POST['email']);
      $mypassword = htmlspecialchars($_POST['password']); 
      $email=quote_smart($email,$con);
      $mypassword=quote_smart($mypassword,$con);
      $sql = "SELECT * FROM LocalGuideInfo WHERE Email = '$email' and Password = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_assoc($result);
      $count = mysqli_num_rows($result);  
      if($count == 1) {
         $_SESSION[guide] = $row['Email'];
         header("location:index.php");
      }else {
      }
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Guide Login</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link id="bootstrap-style" href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="img/favicon.ico">
	<style type="text/css">
		body { background: url(img/bg-login.jpg) !important; }
	</style>	
</head>
<body>
	<div class="container-fluid-full">
		<div class="row-fluid">			
			<div class="row-fluid">
				<div class="login-box">
					<h2>Login to Guide Panel</h2>
					<form class="form-horizontal" action="" method="post">
						<fieldset>
							<div class="input-prepend" title="Email">
								<span class="add-on"><i class="halflings-icon user"></i></span>
								<input class="input-large span10" name="email" id="email" type="text" placeholder="type email"/>
							</div>
							<div class="clearfix"></div>
							<div class="input-prepend" title="Password">
								<span class="add-on"><i class="halflings-icon lock"></i></span>
								<input class="input-large span10" name="password" id="password" type="password" placeholder="type password"/>
							</div>
							<div class="clearfix"></div>
							<div class="button-login">	
								<button type="submit" class="btn btn-primary">Login</button>
							</div>
							<div class="clearfix"></div>
					</form>
					<hr>
					
				</div><!--/span-->
			</div>
		</div>
	</div>
	<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/jquery-migrate-1.0.0.min.js"></script>
	<script src="js/jquery-ui-1.10.0.custom.min.js"></script>
	<script src="js/jquery.ui.touch-punch.js"></script>
	<script src="js/modernizr.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.cookie.js"></script>
	<script src='js/fullcalendar.min.js'></script>
	<script src='js/jquery.dataTables.min.js'></script>
	<script src="js/excanvas.js"></script>
	<script src="js/jquery.flot.js"></script>
	<script src="js/jquery.flot.pie.js"></script>
	<script src="js/jquery.flot.stack.js"></script>
	<script src="js/jquery.flot.resize.min.js"></script>
	<script src="js/jquery.chosen.min.js"></script>
	<script src="js/jquery.uniform.min.js"></script>
	<script src="js/jquery.cleditor.min.js"></script>
	<script src="js/jquery.noty.js"></script>
	<script src="js/jquery.elfinder.min.js"></script>
	<script src="js/jquery.raty.min.js"></script>
	<script src="js/jquery.iphone.toggle.js"></script>
	<script src="js/jquery.uploadify-3.1.min.js"></script>
	<script src="js/jquery.gritter.min.js"></script>
	<script src="js/jquery.imagesloaded.js"></script>
	<script src="js/jquery.masonry.min.js"></script>
	<script src="js/jquery.knob.modified.js"></script>
	<script src="js/jquery.sparkline.min.js"></script>
	<script src="js/counter.js"></script>
	<script src="js/retina.js"></script>
	<script src="js/custom.js"></script>
	<!-- end: JavaScript-->
	
</body>
</html>
