<?php
	include ("header.php");
	include ("config.php"); 
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
   	$firstname=htmlspecialchars($_POST['firstname']);
   	$lastname=htmlspecialchars($_POST['lastname']);
   	$gender=htmlspecialchars($_POST['gender']);
   	$dob=htmlspecialchars($_POST['dob']);
   	$email=htmlspecialchars($_POST['email']);
   	$password=htmlspecialchars($_POST['password']);

   	$firstname=quote_smart($firstname,$con);
   	$lastname=quote_smart($lastname,$con);
   	$gender=quote_smart($gender,$con);
   	$dob=quote_smart($dob,$con);
   	$email=quote_smart($email,$con);
   	$password=quote_smart($password,$con);

   	$sql="INSERT into LocalGuideInfo(FirstName,LastName,Gender,DateOfBirth,Email,Password)values('$firstname','$lastname','$gender','$dob','$email','$password')";
   	$result = mysqli_query($con,$sql);
   	if($result)
   	{
   		echo "Successful!!";
   		header("location:index.php");
   	}
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Admin Panel</title>
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
</head>
<body>
<?php include("head.php"); ?>
		<div class="container-fluid-full">
		<div class="row-fluid">
			<?php include("sidebar.php"); ?>
			<div id="content" class="span10">
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.php">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="addguide.php">Add</a></li>
			</ul>

			<h2>Info</h2>
			<form Action="addguide.php" method="POST">
			    <div class="form-group">
			      <label for="firstname">First Name:</label>
			      <input name="firstname" type="text" class="form-control" id="firstname" placeholder="Enter FirstName" value="">
			    </div>
			    <div class="form-group">
			      <label for="lastname">Last Name:</label>
			      <input name="lastname" type="text" class="form-control" id="lastname" placeholder="Enter LastName" value="">
			    </div>
			    <div class="form-group">
			      <label for="gender">Gender:</label>
			      <input name="gender" type="text" class="form-control" id="gender" placeholder="Enter Gender"
			      value="">
			    </div>
			    <div class="form-group">
			      <label for="dob">DateOfBirth:</label>
			      <input name="dob" type="date" class="form-control" id="dob" placeholder="Enter Date Of Birth" value="">
			    </div>
			    <div class="form-group">
			      <label for="email">Email:</label>
			      <input name="email" type="email" class="form-control" id="email" placeholder="Enter Email" value="">
			    </div>
			    <div class="form-group">
			      <label for="password">Password:</label>
			      <input name="password" type="password" class="form-control" id="password" placeholder="Enter Password" value="">
			    </div>
			    <button name="sub" type="submit" class="btn btn-primary">Add Guide</button>
			  </form>

	</div><!--/.fluid-container-->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
	<div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<ul class="list-inline item-details">
				
			</ul>
		</div>
	</div>
	
	<div class="clearfix"></div>

	<!-- start: JavaScript-->

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
