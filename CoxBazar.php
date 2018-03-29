<?php
   include 'db.php';
   include 'comments.php';
   ob_start();
   session_start();
   ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cox's bazar</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css" media="screen">
    .comment-box{
      align-self: center;
      background-color: #999;
      width: 500px;
      border-radius: 1px;
      margin:0 auto;
      padding: 20px;
      margin-bottom: 4px;
      border: 2px solid #004D40;
    }
    .comment-box textarea{
      width: 450px;
      border-radius: 4px;
    }
  </style>
</head>
  	<body>
	<?php
	   include("header.php");
	?>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		</ol>
    <!-- Wrapper for slides -->
		<div class="carousel-inner" >
			<div class="item active">
			  <img src="img/1.jpg">
			  <div class="carousel-caption">
			    <h2>Cox's Bazar<h2>
			  </div>
			</div>

			<div class="item ">
			  <img src="img/2.jpg">
			  <div class="carousel-caption">
			    <h2>Cox's Bazar<h2>
			  </div>
			</div>

			<div class="item">
			  <img src="img/3.jpg">
			  <div class="carousel-caption">
			    <h2>Cox's Bazar<h2>
			  </div>
			</div>
      	</div>
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
		</a>
    </div>
	
	<div class="container">
		<div class="row" style="margin-top:20px;">
			 <h1 style="color:blue;">Description</h1>
			 <p style="text-indent:20px;"><h4 style="word-spacing: 5px;"> <?php  //include 'db.php';
			 //session_start();
	        	$sql = "SELECT * FROM SiteInfo where PlaceId=1";
	        	$result = mysqli_query($con,$sql);
		        $db_field = mysqli_fetch_assoc($result);
		        $placeid=$db_field['PlaceId'];
		        echo "".$db_field['Details'];?>
				</h4>
			</p>
			 
		</div>
		</hr>
		<div class="row" style="margin-top:20px;">
	    <h1 style="color:blue;"> Map</h1>
		 	<div class="col-md-4" style="margin: auto;">
				<iframe
				  width="800"
				  height="450"
				  frameborder="0" style="border:0;margin: auto"
				  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCyYqEe7PLCNvGtp4TNNyk1qIQ1EPj67eo
				    &q=Cox's+Bazar,+Bangladesh" allowfullscreen>
				</iframe> 
			</div>
		<div class="col-md-4">	
		</div>	 
	</div>
		<div class="row" style="margin-top:20px;">
		<h1 style="color:blue;">Road transport</h1>
	 		<div class="col-md-4">
		 		 <img src="img/gl.jpg" alt="Smiley face" height="270" width="300">
					<div class="thumb-description">
						<span class="thumb-title"><h3>Green Line paribahan</h3></span>
						<p><b>Head Office : </b><br>9/2, Outer Circular Road, Momen Bagh,<br>Rajarbagh, Dhaka - 1217 .
						<br><b>Tel : </b> 8331302-4, 8353004-5, 9339623, 9342580 <br><b>Fex : </b> +088-02-8350003
						<br><b>Email : </b>  greenline@greenlineparibahan.com.
						</p>
					</div> 
		 	</div>
		 
			<div class="col-md-4">
			 <img src="img/soudia.jpg" alt="Smiley face" height="270" width="300">
									  <div class="thumb-description">
									<span class="thumb-title"><h3>Saudia Paribahan</h3></span>
									<p><b>Dhaka Office : </b><br>Fakirapool, Dhaka, Bangladesh.
									<br><b>Tel : </b> 02-41558,02- 9346478, 02-9333606 <br>
									<b>
									
									Chittagong Office :</b><br> K.C.De Road,Chittagong,
									Bangladesh.
									
									<br><b>Tel : </b> 615161<br>
									<b>Cox's Bazar Office : </b><br>Laldhighir Par, Cox's Bazar, Bangladesh.
									<br><b>Tel : </b> 0341-3611, 0341-3888 
									</p>
			</div>
									  
		 		 
		 </div>
		 		  <img src="img/sh.jpg" alt="Smiley face" height="270" width="300">
                                     <div class="thumb-description">
									<span class="thumb-title"><h3>Shohagh Paribahan</h3></span>
									<p><b>Head Office : </b><br>114 Malibagh, DIT Road, (Near Mouchak Rail Gate)<br>Dhaka-1217, Bangladesh.
									<br><b>Tel : </b> 9334152, 418458, 8316766
									<br><b>Chittagong Office :</b>  34 Zakir Hossain Road, Dampara, Chittagong,
									Bangladesh.
									<br><b>Tel : </b> :031-618930,031-616520,0171-798344
									</p>
								</div>
								</div>
					
      <div class="row" style="margin-top:20px;">
	     
		 <h1 style="color:blue;">Air transport</h1>
		 		 		 <div class="col-md-4">
						 		      <img src="img/ua.jpg" alt="Smiley face" height="270" width="300">
									 <div class="thumb-description">
									<span class="thumb-title"><h3>United Airways (bd) Ltd</h3></span>
									<p>Corporate Office is in Uttara other Sales Offices are Gulshan and Dilkusha.
									   Best Aviation Limited.
									<b>Address:</b><br>House # 43, Road # 1/, Block-J, Baridhara , <br>Dhaka, Bangladesh.
									<br><b>Contact Information :</b><br>Tell : +880-2-9888780, 8860248, 8855254, 9882404.
									</p>
								</div>
									  
			
		 		 
		 </div>
		 
		 <div class="col-md-4">
			 <img src="img/bm.jpg" alt="Smiley face" height="270" width="300">
									  <div class="thumb-description">
									<span class="thumb-title"><h3>GMG Airlines</h3></span>
									<p><b>Address:</b><br>GMGAIR 8, Kemal Ataturk Avenue, <br>Banani C/A., Dhaka-1213.
									<br><b>Contact Information :</b><br>Tel : 8140275-80,<br>Airport Office : 8917220-3 -(International),<br>8915699 - (Domestic).
									</p>
								</div>
									  
		 		 
		 </div>
		 		  <img src="img/gmg.jpg" alt="Smiley face" height="270" width="300">
                                    <div class="thumb-description">
									<span class="thumb-title"><h3>Biman Bangladesh Airlines</h3></span>
									<p><b>Address:</b><br>Balaka Bhaban, Kurmitola,<br>Dhaka-1229, Bangladesh.
									<br><b>Contact Information :</b><br>Tel : : 8917400-19 (Head Office) 9560151, 9559610 ,<br>Airport Office : 8917400.
									</script></span><br>Web&nbsp; : <a href="http://www.biman-airlines.com">www.biman-airlines.com</a></span>
									</p>
								</div>
								</div>
					
			
      <div class="row" style="margin-top:20px;">
	     
		 <h1 style="color:blue;">Hotels</h1>
		 		 		 <div class="col-md-4">
						 		      <img src="img/seagull.jpg" alt="Smiley face" height="270" width="300">
									 
							<div class="excerpt">
								<div class="heading"><h3>Seagull Hotel</h3></div>
								Rank: 5 star<br>
								Rooms: 182 well appointed guest rooms. (Regular Rooms 120, Deluxe Rooms  41, Suite Rooms 20, Presidential Suite 01)
								<br>Contact No:+88 01766666530 - Hotline<br>
											+88 01766666531 - 34
								
							</div>
		 </div>
		 
		 <div class="col-md-4">
			 <img src="img/seapalace.jpg" alt="Smiley face" height="270" width="300">
									  <div class="excerpt">
								<div class="heading"><h3>Hotel Sea Palace</h3> </div>
								Rank: 5 star<br>
								Standing   around 6 acres of land. Hotel Sea Palace is located at Kalatoli road near from the airport and Kalatoli Beach. 
								<br>Tel: 880-341-63692, 63792, 63794, 63826, 63853<br>
									Cell: 01714652227-8, 07109934743, 01709934738<br>
									Fax : 880-0341- 63769.<br>
									E-mail: seapalace@gmail.com<br>
								</div>
									  
		 		 
		 </div>
		 		  <img src="img/coralreef.jpg" alt="Smiley face" height="270" width="300">
								<div class="heading"><h3>Hotel Coral Reef</h3></div>
								Rank: 3 star<br>
								Hotel Coral Reef is a fully furnished international beach hotel, opened recently in order to cater the requirements of customers of the 21 century.
								</div>
								
						
      <div class="row" style="margin-top:20px;">
	     
		  		 		 <div class="col-md-4">
						 		      <img src="img/op.jpg" alt="Smiley face" height="270" width="300">
									 
							<div class="excerpt">
								<div class="heading"><h3>Hotel Ocean paradise</h3></div>
								Rank: 5 star<br>
								Awaken to a tropical sea view as the light spills into your room. Spend the day basking in the sun or exploring other sights and sounds on the mountains, or coral reef islands<br>
								<br>Hotline: +88 01938 846761-65<br>
									Email: reservation@oceanparadisehotel.com<br>
								
							</div>
	 
		 </div>
		 
		 <div class="col-md-4">
			 <img src="img/saye.jpg" alt="Smiley face" height="270" width="300">
							 <div class="excerpt">
								<div class="heading"><h3>Hotel Sayemoon</h3> </div><hr>
								Rank: 5 star<br>
                                Sayeman Beach Resort, the illustrious lifestyle destination offers 228 guest rooms, including 16 Panorama Ocean Suites with 180-degree view of the Bay of Bengal, 38 Ocean View suites overlooking the sumptuous infinity pool, an exclusive portfolio of leisure and entertainment experiences and over 20,000 sq ft.
								<br>RESERVATIONS: +88 09610 777 888, +88 0341-51350<br>
									HOTLINE: +88 01755691917
   
								</div>						  
		 		 
		 </div>
					
								
								</div>						  
		 </div>
		</div>
<?php 
			//include 'db.php';
        	$sql = "SELECT * FROM LocalGuideInfo where Approve='Yes'";
        	if($result = mysqli_query($con,$sql)){?>
        			<h1 style="color:blue;text-align:center">Guide's Data</h1>
					<div align="center" style="width: 800px; margin: auto;">
	        <?php while($db_field = mysqli_fetch_array($result)){
	        $a=$db_field['GuideId'];?>
	        <table class="table table-bordered table-responsive table-striped table-hover" style="border:3 px solid;border-radius: 4px;border-color: #004D40">
	        	
	        	<tbody >
	        		<tr >
	        			<td>Guide ID</td>
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
	        		<?php //include 'db.php';
        	$sql = "SELECT Contact FROM LocalGuideInfo_Contact where GuideId=$a";
        	$result2 = mysqli_query($con,$sql);
	        while($db_field2 = mysqli_fetch_array($result2)){
	        $i = 1;
	        //$a=$db_field['GuideId'];?>
	        		<tr >
	        			<td>Contact<?php echo $i;$i++;?></td>
	        			<td><?php  echo "".$db_field2['Contact'];?></td>
	        		</tr>
	        		<?php } ?>
	        		<?php 
			//include 'db.php';
        	$sql = "SELECT * FROM Availibility where GuideId='$a' order by AvailibilityId desc limit 1";
        	$result1 = mysqli_query($con,$sql);
	        $db_field1 = mysqli_fetch_assoc($result1);
	        $a=$db_field1['AvailibilityId'];?>
	        		<tr >
	        			<td>Available</td>
	        			<td><?php  echo "".$db_field1['Available'];?></td>
	        		</tr>
	        		<tr >
	        			<td>Avalable Time</td>
	        			<td><?php  echo "".$db_field1['AvailableTime'];?></td>
	        		</tr>
	        	</tbody>
	        </table><?php } ?>
</div><?php } ?>
	       <?php
if(isset($_SESSION['login_user'])){ ?>
	<h3><?php $id=$_SESSION['ID']; ?></h3>
	<h3><?php $user=$_SESSION['login_user']; ?></h3><?php } ?>
<?php 
/*
echo "<form class='comment-box' method='POST' action=''>
  <input type='hidden' name='uid' value='".$_SESSION['ID']."'><br>
  <input type='hidden' name='uname' value='".$_SESSION['login_user']."'><br>
  <input type='hidden' name='placeid' value='$placeid'><br>
  <textarea style='resize: none;height: 100px;width=150px' name='msg' required='null'></textarea><br>
  <input type='submit' name='commentSubmit' value='Submit'>

</form>";*/ ?>
<!--<form class="comment-box" method="POST" action="">
  <input type="hidden" name="uid" value="$id"><br>
  <input type="hidden" name="uname" value="$user"><br>
  <input type="hidden" name='placeid' value="$placeid"><br>
  <textarea name="msg" style="resize: none;height: 100px;width=150px"  required="null"></textarea><br>
  <input type="submit" name="submit" value='submit'>

</form>-->
<?php
if(isset($_SESSION['login_user'])){
echo "<form class='comment-box' method='POST' action='".setComments($con)."'>
  <input type='hidden' name='uid' value='".$_SESSION['ID']."'><br>
  <input type='hidden' name='uname' value='".$_SESSION['login_user']."'><br>
  <input type='hidden' name='placeid' value='".$placeid."'><br>
  <textarea style='resize: none;height: 75px;width=150px' name='msg' required='null'></textarea><br>
  <input type='submit' name='commentSubmit' value='Comment'>

</form>";}
else {?>
<h2 align="center"><?php echo "Sign in First To Comment"; ?></h2>
 	<?php
 } ?>
<div class='comment-box' style="overflow-y:scroll; overflow-x:hidden;width: 545px; height:400px;">
<?php
$sql="SELECT * from Review order by ReviewId asc";
	$result = mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($result)){?>
		
		<table class="table table-responsive table-striped" >  
		<?php if($row['user']=='Admin'){?>      	
        	<tbody style="color: red;">
        		<tr class="row" >
        			<td><?php  echo "".$row['Review'];?></td>
        		</tr>
        		<tr style="color: white; border:3 px solid;border-radius: 4px;border-color: #004D40" >
        			<td width="150"><?php 
        			  echo "".$row['user'];?></td>
        			
        			<td width="200"><?php  echo "".$row['ReviewTime'];?></td>	        	
        		</tr>
        	</tbody>
        	<?php } else{?>
        	<tbody>
        		<tr class="row" >
        			<td><?php  echo "".$row['Review'];?></td>
        		</tr>
        		<tr style="color: white; border:3 px solid;border-radius: 4px;border-color: #004D40" >
        			<td width="150"><?php 
        			  echo "".$row['user'];?></td>
        			
        			<td width="200"><?php  echo "".$row['ReviewTime'];?></td>	        	
        		</tr>
        	</tbody>
        	<?php }?>
       	</table>
<?php
	}
?>
</div>
<footer style="padding-top: 150px">
<?php
   include("footer.php");
?>    
</footer>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
  
  