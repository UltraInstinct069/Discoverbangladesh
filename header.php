<!DOCTYPE html>
<html>
<head>
  <title>Header</title>
</head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <button type="button" class="navbar-toggle " data-toggle="collapse" data-target=".navbar-collapse" >
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Discover Bangladesh</a>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="index.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Introduction <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="index.php">History</a></li>
                <li><a href="index.php">Geography</a></li>
                <li><a href="index.php">Languages</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="index.php">Religion</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="index.php">Culture</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="index.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Places to see <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="index.php">Dhaka</a></li>
                <li><a href="index.php">Rajshahi</a></li>
                <li><a href="Chittagong.php">Chittagong</a></li>
              </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-right" method="POST" action="search.php">
            <div class="form-group">
              <input type="text" name="search" class="form-control" placeholder="Search">
            </div>
            <button type="submit" name="submit" class="btn btn-default">Search</button>
          </form>
          <ul class=" nav navbar-nav pull-right" allign="right">
            <?php
              if(!isset($_SESSION["login_user"] )){ ?>
            <li class=""><a href="login.php">Sign In</a></li>
            <?php
              }
              else{
            ?>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <?php
                  echo  "".$_SESSION["login_user"] ;
                ?>
                <span class="caret"></span>
                <?php
                  } 
                ?>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a href="logout.php">logout</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </body>
</html>