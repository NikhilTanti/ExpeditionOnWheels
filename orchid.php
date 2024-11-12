<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expedition on Wheels</title>

    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link href=""
</head>
<body>

<!--nav bar start -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="position: fixed; top: 0; width: 100%; z-index: 1000;">
  <a class="navbar-brand" href="index.php"><img src="images/logo2.png" height="55" width="65"> ExpeditionOnWheels</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="services.php">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact us</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<!--nav bar end-->

<!--corrousel start-->
    <div id="demo" class="carousel slide" data-ride="carousel" style="margin-top: 60px;">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <picture>
  <source media="(max-width: 600px)" srcset="images/image20.jpeg">
  <source media="(min-width: 601px) and (max-width: 1200px)" srcset="medium-image.jpg">
  <source media="(min-width: 1201px)" srcset="images/image19.jpeg">
  <img src="fallback-image.jpg" style="width: 100%; height: auto;">
</picture>


      <div class="carousel-caption">
        <h3>Jeep Safari</h3>
        <p>We had such a great time in Kaziranga!</p>
      </div>   
    </div>
    <div class="carousel-item">
    <picture>
  <source media="(max-width: 600px)" srcset="images/image21.jpeg">
  <source media="(min-width: 601px) and (max-width: 1200px)" srcset="medium-image.jpg">
  <source media="(min-width: 1201px)" srcset="images/image19.jpeg">
  <img src="fallback-image.jpg" style="width: 100%; height: auto;">
</picture>
      <div class="carousel-caption">
        <h3>Elephant Safari</h3>
        <p>Thank you, Expedition on Wheels!</p>
      </div>   
    </div>
    <div class="carousel-item">
    <picture>
  <source media="(max-width: 600px)" srcset="images/image18.jpeg">
  <source media="(min-width: 601px) and (max-width: 1200px)" srcset="medium-image.jpg">
  <source media="(min-width: 1201px)" srcset="images/image19.jpeg">
  <img src="fallback-image.jpg" style="width: 100%; height: auto;">
</picture>
      <div class="carousel-caption">
        <h3>Dolphin Sighting</h3>
        <p>It was a great experience!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<!--corrousel end-->




<!--footer starat-->
<footer style=" bottom: 0; width: 100%; background-color: #343a40; color: white; text-align: center; padding: 1rem;">
  <p>&copy; nikhiltanti351@gmail.com</p>
  <div style="margin-top: 10px;">
  </div>
</footer>
<!--footer end-->


     


  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    
</body>
</html>