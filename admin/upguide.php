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

   	$id=htmlspecialchars($_POST['id']);
   	$approve=htmlspecialchars($_POST['approve']);

   	$id=quote_smart($id,$con);
   	$approve=quote_smart($approve,$con);
   	$sql="UPDATE LocalGuideInfo set Approve='$approve' where GuideId='$id'";
   	$result = mysqli_query($con,$sql);
   }

?>


<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Admin Panel</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
		
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
				<li><a href="upguide.php">Update</a></li>
			</ul>
			  <form method="POST" action="upguide.php">
				<div class="form-group">
			      <label for="id">GuideId: </label>
			      <input name="id" type="text" class="form-control" id="address" placeholder="Enter Id" value="">
			    </div>
			  <div class="form-group">
			      <label for="approve">Approved: </label>
			      <input name="approve" type="text" class="form-control" id="approve" placeholder="Enter Approval" value="">
			    </div>
			    <button name="sub" type="submit" class="btn btn-primary">Update</button>
			    </form>

	<!--footer-->		
       

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		

	
	
	<div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<ul class="list-inline item-details">
				
			</ul>
		</div>
	</div>
	
	<div class="clearfix"></div>
	</div>
	
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
