<?php
   include 'db.php';
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Discover Bangladesh</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
      <?php
       include("header.php");
    ?>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        <li data-target="#carousel-example-generic" data-slide-to="4"></li>
        <li data-target="#carousel-example-generic" data-slide-to="5"></li>
        <li data-target="#carousel-example-generic" data-slide-to="6"></li>
        <li data-target="#carousel-example-generic" data-slide-to="7"></li>
        <li data-target="#carousel-example-generic" data-slide-to="8"></li>
      </ol>
      <div class="carousel-inner" >
        <div class="item active">
          <img src="img/saj.jpg">
          <div class="carousel-caption">
            <h2>Sajek Valley<h2>
          </div>
        </div>

        <div class="item ">
          <img src="img/rata.jpg">
          <div class="carousel-caption">
            <h2>Ratarghul<h2>
          </div>
        </div>

        <div class="item">
          <img src="img/shundorbon.jpg">
          <div class="carousel-caption">
            <h2>Shundorban<h2>
          </div>
        </div>

        <div class="item ">
          <img src="img/Bichanakandi.jpg">
          <div class="carousel-caption">
            <h2>Bichanakandi<h2>
          </div>
        </div>

        <div class="item ">
          <img src="img/kuakata.jpg">
          <div class="carousel-caption">
            <h2>Kuakata Beach<h2>
          </div>
        </div>

        <div class="item ">
          <img src="img/Birishiri.jpg">
          <div class="carousel-caption">
            <h2>Birishiri<h2>
          </div>
        </div>

        <div class="item ">
          <img src="img/nafakhum.jpg">
          <div class="carousel-caption">
            <h2>Nafakhum<h2>
          </div>
        </div>

        <div class="item ">
          <img src="img/Cox.jpg">
          <div class="carousel-caption">
            <h2>Cox Bazar<h2>
          </div>
        </div>

        <div class="item ">
          <img src="img/nijhum.jpg">
          <div class="carousel-caption">
            <h2>Nijhum dip<h2>
          </div>
        </div>
      </div>
      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
      <?php
       include("footer.php");
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!--<footer style="padding-top: 15px;height: 150px; background-color: #004D40; margin:0 auto">
      <p class="glyphicon-copyright-mark " style="text-align: center">
        <b style="color: yellow">062,066,068,069</b>
      </p>
    </footer>-->
  </body>
</html>
  
  