<?php
include 'config.php';
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Guide Panel</title>
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
					<a href="#">Home</a> </li>
			</ul>

			<h2>Info</h2>

			<?php 
        	$sql = "SELECT * FROM LocalGuideInfo where Email='$_SESSION[guide]'";
        	$result = mysqli_query($con,$sql);
	        $db_field = mysqli_fetch_assoc($result);
	        $a=$db_field['GuideId'];?>
	        <table class="table table-bordered table-responsive table-striped table-hover" style="border:3 px solid;border-radius: 4px;border-color: #004D40">
	        	<thead>
	        		<tr>
	        			<th>Guide's Data</th>
	        		</tr>
	        	</thead>
	        	<tbody >
	        		<tr >
	        			<td>ID</td>
	        			<td><?php  echo "".$db_field['GuideId'];?></td>
	        		</tr>
	        		<tr >
	        			<td>Name</td>
	        			<td><?php  echo "".$db_field['FirstName'];?><?php  echo " ".$db_field['LastName'];?></td>
	        		</tr>
	        		<tr>
	        			<td>Date of Birth</td>
	        			<td><?php  echo "".$db_field['DateOfBirth'];?></td>
	        		</tr>
	        		<tr>
	        			<td>Gender</td>
	        			<td><?php  echo "".$db_field['Gender'];?></td>
	        		</tr>
	        		<tr >
	        			<td>Address</td>
	        			<td><?php  echo "".$db_field['HouseNo'];?><?php  echo ",".$db_field['RoadNo'];?><?php  echo ",".$db_field['Post'];?><?php  echo ",".$db_field['Thana'];?><?php  echo ",".$db_field['District'];?></td>
	        		</tr>
	        		<tr >
	        			<td>Approve</td>
	        			<td><?php  echo "".$db_field['Approve'];?></td>
	        		</tr>
	        		<?php
        	$sql = "SELECT Contact FROM LocalGuideInfo_Contact where GuideId=$a";
        	$result = mysqli_query($con,$sql);
	        while($db_field = mysqli_fetch_assoc($result)){
	        $i = 1;
	        //$a=$db_field['GuideId'];?>
	        		<tr >
	        			<td>Contact<?php echo $i;$i++;?></td>
	        			<td><?php  echo "".$db_field['Contact'];?></td>
	        		</tr>
	        		<?php } ?>
	        		<?php 
			include 'config.php';
        	$sql = "SELECT * FROM Availibility where GuideId='$a' order by AvailibilityId desc limit 1";
        	$result = mysqli_query($con,$sql);
	        $db_field = mysqli_fetch_assoc($result);
	        $a=$db_field['AvailibilityId'];?>
	        		<tr >
	        			<td>Available</td>
	        			<td><?php  echo "".$db_field['Available'];?></td>
	        		</tr>
	        		<tr >
	        			<td>Avalable Time</td>
	        			<td><?php  echo "".$db_field['AvailableTime'];?></td>
	        		</tr>
	        	</tbody>
	        </table>
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
