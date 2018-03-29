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

   	$email=htmlspecialchars($_POST['email']);
   	$houseno=htmlspecialchars($_POST['houseno']);
   	$roadno=htmlspecialchars($_POST['roadno']);
   	$post=htmlspecialchars($_POST['post']);
   	$thana=htmlspecialchars($_POST['thana']);
   	$district=htmlspecialchars($_POST['district']);

   	$email=quote_smart($email,$con);
   	$district=quote_smart($district,$con);
   	$houseno=quote_smart($houseno,$con);
   	$roadno=quote_smart($roadno,$con);
   	$post=quote_smart($post,$con);
   	$thana=quote_smart($thana,$con);
   	$s=$_SESSION['guide'];
   	$sql="UPDATE LocalGuideInfo set Email='$email',HouseNo='$houseno',RoadNo='$roadno',
   			Post='$post',Thana='$thana',District='$district'
   			where Email='$s'";
   	$result = mysqli_query($con,$sql);

   	$sql="SELECT * from LocalGuideInfo where Email='$s'";
   	$result = mysqli_query($con,$sql);
   	$db_field=mysqli_fetch_assoc($result);
   	$a=$db_field['GuideId'];
   	
   	$result = mysqli_query($con,$sql);
   	$available=htmlspecialchars($_POST['available']);
   	$availabletime=htmlspecialchars($_POST['availabletime']);

   	$available=quote_smart($available,$con);
   	$availabletime=quote_smart($availabletime,$con);

   	$sql="UPDATE Availibility set Available='$available',AvailableTime='$availabletime'	where GuideId='$a'";
   	$result = mysqli_query($con,$sql);
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Guide Panel</title>
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
				<li><a href="updateguide.php">Update</a></li>
			</ul>

			<h2>Info</h2>
			<?php 
			$s=$_SESSION['guide'];
        	$sql = "SELECT *FROM LocalGuideInfo where Email='$s'";
        	$result = mysqli_query($con,$sql);
	        $db_field = mysqli_fetch_assoc($result);
	        $a=$db_field['GuideId'];?>
			<form Action="" method="POST">
			    <div class="form-group">
			      <label for="email">Email:</label>
			      <input name="email" type="email" class="form-control" id="email" placeholder="Enter email" value="<?php echo ''.$db_field['Email']; ?>">
			    </div>
			    <div class="form-group">
			      <label for="houseno">HouseNo:</label>
			      <input name="houseno" type="text" class="form-control" id="address" placeholder="Enter Address" value="<?php echo ''.$db_field['HouseNo']; ?>">
			    </div>
			    <div class="form-group">
			      <label for="roadno">RoadNo:</label>
			      <input name="roadno" type="text" class="form-control" id="address" placeholder="Enter Address" value="<?php echo ''.$db_field['RoadNo']; ?>">
			    </div>
			    <div class="form-group">
			      <label for="post">Post:</label>
			      <input name="post" type="text" class="form-control" id="address" placeholder="Enter Address" value="<?php echo ''.$db_field['Post']; ?>">
			    </div>
			    <div class="form-group">
			      <label for="thana">Thana:</label>
			      <input name="thana" type="text" class="form-control" id="address" placeholder="Enter Address" value="<?php echo ''.$db_field['Thana']; ?>">
			    </div>
			    <div class="form-group">
			      <label for="district">District:</label>
			      <input name="district" type="text" class="form-control" id="address" placeholder="Enter Address" value="<?php echo ''.$db_field['District']; ?>">
			    </div>

	        <!--<?php /*include 'config.php';
        	$sql = "SELECT Contact FROM LocalGuideInfo_Contact where GuideId=$a";
        	$result1 = mysqli_query($con,$sql);$i = 1;$j=1;
	        while($db_field1 = mysqli_fetch_assoc($result1)){?>
	        	<div class="form-group">
			      <label for="contact">Contact<?php echo $i; $i++;?>:</label>
			      <input name="contact<?php echo $j;$j++;?>" type="text" class="form-control" id="address" placeholder="Enter Contact" value="<?php echo ''.$db_field1['Contact']; ?>">
			    </div>
			    <?php } */?>-->
			    <?php include 'config.php';
        	$sql = "SELECT * FROM Availibility where GuideId='$a' order by AvailibilityId desc limit 1";
        	$result2 = mysqli_query($con,$sql);
	        $db_field2 = mysqli_fetch_assoc($result2);
	        $a=$db_field2['AvailibilityId'];?>
	        		<div class="form-group">
			      <label for="available">Available:</label>
			      <input name="available" type="text" class="form-control" id="address" placeholder="Enter Address" value="<?php echo ''.$db_field2['Available']; ?>">
			    </div>	
			    	<div class="form-group">
			      <label for="availabletime">Available Time:</label>
			      <input name="availabletime" type="date" class="form-control" id="address" placeholder="Enter Address" value="<?php echo ''.$db_field2['AvailableTime']; ?>">
			    </div>	
			    		    <button name="sub" type="submit" class="btn btn-primary">Update</button>
			  </form>

	<!--footer-->		
       

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->	
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
