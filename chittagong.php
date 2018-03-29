<?php
   include 'db.php';
   session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
  
</head>
<body style="background-color: #ddd">
  <?php
     include("header.php");
  ?>
  <div style="padding-top: 75px">
    <div >
    <h2 class="text-center" style="font-family: cursive"><i>Welcome <?php
      
                if(isset($_SESSION['login_user'])){
                  echo  " ".$_SESSION['login_user'] ;
                }
              ?></i></h2>
    	<video width="100%" loop autoplay="">
		      <source src="chittagong.mp4" type="video/mp4"></video>
    </div>
    <div class="panel-group">
<h3 class="text-center">Chittagong</h3>
<p class="text-center">Explore Chittagong's sparkling sea beaches, outdoor lifestyle and great natural beauty. Enjoy this fast paced city that knows how to celebrate, live it up and relax.</p>
<p class="text-center">Chittagong Division is located at southern part of the country has an area of 33771 sq. km and a population of 23.99. It has 11 districts and 38 municipalities.
Chittagong is the biggest seaport and second largest town in Bangladesh situated near the Bay of Bengal. It is 264 km away east of Dhaka, famous for hill areas, natural beauty and for the seashore. Chittagong is also known of the town of Aulias (Muslim saints).</p>
</div>
  <div class="container">
      <div class="row" style="margin-top:20px;">
       <div class="col-md-3">
        <a href="http://www.w3schools.com">  <img src="img/coxbazar.jpg" alt="Smiley face" height="250" width="270"></a>     
     
     </div>
     
     <div class="col-md-3">
           <h3><strong>Cox's Bazar</strong></h3>
       <p>
        Cox's Bazar is a town, a fishing port and district 
        headquarters in Bangladesh. The beach in Cox's Bazar
        is an unbroken 125 km sandy sea beach with a gentle slope,
        one of the world's longest. It is located 150 km south 
        of the industrial port Chittagong <a href="CoxBazar.php">see more</a>
         </p>
     
     
     </div>
     <div class="col-md-3">
          <img src="img/enani.jpg" alt="Smiley face" height="250" width="270">
     
     
     </div>
     <div class="col-md-3">
           <h3><b>Enani Beach</b></h3>
       <p>
        Inani Beach (also Enani Beach) is an 18-kilometre-long (11 mi)
        sea beach in Ukhia Upazila of Cox's Bazar District, Bangladesh.
        It has a lot of coral stone. This coral stones look green and
        live in summer or in rainy season.
         </p>
     
     
     </div>
     
    </div>
    
    <div class="row" style="margin-top:20px;">
       <div class="col-md-3">
         <img src="img/himchori.jpg" alt="Smiley face" height="250" width="270">     
     
     </div>
     
     <div class="col-md-3">
           <h3><strong>Him Chari</strong></h3>
       <p>
        Himchari, is really a nice visiting place in Cox'sbazar. This location
        is situated 12 km south of Cox’s Bazar Town and 6 km from the Kalatali 
        beach by the hill.Journey to Himchari is also exciting because the road 
        to Himchari runs by the lovely green hills on one side and open blue sea
        on the other side.
         </p>
     
     
     </div>
     <div class="col-md-3">
          <img src="img/saint.jpg" alt="Smiley face" height="250" width="270">
     
     
     </div>
     <div class="col-md-3">
           <h3><b>Saint Martin</b></h3>
       <p>
        St. Martin's Island  is a small island (area only 8 km2) in the
        northeastern part of the Bay of Bengal, about 9 km south of the 
        tip of the Cox's Bazar-Teknaf peninsula, and forming the southernmost
        part of Bangladesh.
         </p>
     
     
     </div>
     
    </div>
    
    
    <div class="row" style="margin-top:20px;">
       <div class="col-md-3">
         <img src="img/saj.jpg" alt="Smiley face" height="250" width="270">    
     
     </div>
     
     <div class="col-md-3">
           <h3><strong>Sajek Valley</strong></h3>
       <p>
        Sajek Valley is one of the most beautiful tourism spot
        in Bangladesh hilly area. It’s situated in the Baghaichari
        upozilla in Rangamati district, near the Mizoram border.
        The valley’s height is about 18000 ft from the sea level. 
         </p>
     
     
     </div>
     <div class="col-md-3">
          <img src="img/nilgiri.jpg" alt="Smiley face" height="250" width="270">
     
     
     </div>
     <div class="col-md-3">
           <h3><b>Nilgiri</b></h3>
       <p>
        Nil Giri is the highest hill resort of Bangladesh with 
        amazing natural beauty. This Resort is located 47 km South-East
        of Bandarban town on Chimbuk Range at a height of 2400 feet from 
        sea level. It has a high class residential accommodation that makes
        a difference.  This beautiful resort in the top of the mountain
        maintain by the Bangladesh Army.
         </p>
     
     
     </div>
     
    </div>
    
    
    <div class="row" style="margin-top:20px;">
       <div class="col-md-3">
         <img src="img/kuakata.jpg" alt="Smiley face" height="250" width="270">    
     
     </div>
     
     <div class="col-md-3">
           <h3><strong>Kuakata</strong></h3>
       <p>
        Kuakata is a town known for its panoramic sea beach.It is located
        in south-eastern Bangladesh, and is the number two tourist
        destination in the country. Kuakata beach is a sandy expanse 18
        kilometres (11 mi) long and 3 kilometres (1.9 mi) wide.From the
        beach one can have an unobstructed view of both sunrise and sunset
        over the Bay of Bengal. 
         </p>
     
     
     </div>
     <div class="col-md-3">
          <img src="img/nafakhum.jpg" alt="Smiley face" height="250" width="270">
     </div>
     <div class="col-md-3">
           <h3><b>NafaKhum</b></h3>
       <p>
        Nafa-khum is a waterfall in Bangladesh on the Sangu River. It
        is among the largest waterfalls in the country by volume of water
        falling.The wild hilly river Sangu suddenly falls down here about 25–30 feet.
         </p>
     
     
     </div>
   
  </div>
</div> 
</div>
<footer style="padding-top: 150px">
<?php
   include("footer.php");
?>    
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
	
</body>
</html>