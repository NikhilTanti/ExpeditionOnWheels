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

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><img src="images/logo2.png" height="55" width="65"> ExpeditionOnWheels</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">

      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
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


    <div id="demo" class="carousel slide" data-ride="carousel">
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

    <section class="my-0">
      <div class="py-5">
        <h2 class="text-center">About us</h2>
      </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-5 col-md-6 col-12">
          <img src="images/image2.jpg" class="img-fluid aboutimg">
      </div>

      <div class="col-lg-5 col-md-6 col-12">
          <h2 class="display-4">Expedition on Wheels</h2>
          <p class="py-5">Welcome to *Expedition on Wheels*! Book your safari with us to explore the stunning wildlife and landscapes of Kaziranga and the North-East. Secure your spot now for an unforgettable adventure!</p>
          <a href="about.php" class="btn btn-success"> ABOUT US </a>
      </div>
    </div>
  </div>
    </section>


    <section class="my-5">
      <div class="py-5">
        <h2 class="text-center" name="services">Our Services</h2>
      </div>

      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">

          <div class="card">
  <img class="card-img-top" src="images/image6.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Jeep Safari</h4>
    <p class="card-text">A Jeep Safari in Kaziranga takes you on an exciting journey through the park's diverse landscapes, offering a chance to see the iconic one-horned rhinoceros, elephants, and other wildlife up close. Ideal for nature lovers and adventure enthusiasts.</p>
    <a href="jeep.php" class="btn btn-primary">know more</a>
  </div>
</div>

   </div>

   <div class="col-lg-4 col-md-4 col-12">

          <div class="card">
  <img class="card-img-top" src="images/image1.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Elephant Safari</h4>
    <p class="card-text">An Elephant Safari in Kaziranga offers a unique and immersive way to explore the park’s wildlife. Riding atop gentle giants, you can get up close to the iconic one-horned rhinos, deer, and other animals in their natural habitat, making it a memorable experience for all.</p>
    <a href="elephant.php" class="btn btn-primary">know more</a>
  </div>
</div>

   </div>

   <div class="col-lg-4 col-md-4 col-12">

          <div class="card">
  <img class="card-img-top" src="images/image6.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Dolphin Siting</h4>
    <p class="card-text">Kaziranga National Park offers a unique opportunity to spot the rare and elusive Gangetic dolphins in the Brahmaputra River.. Dolphin sightings add an exciting dimension to your wildlife adventure, making your visit to Kaziranga even more memorable.</p>
    <a href="dolphin.php" class="btn btn-primary">know more</a>
  </div>
</div>

   </div>


        </div>

      </div>
      </section>

      <section class="my-5">
      <div class="py-5">
        <h2 class="text-center">Gallery</h2>
      </div>

      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/image13.jpeg" class="img-fluid pb-4">

          </div>

          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/image13.jpeg" class="img-fluid pb-4">

          </div>

          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/image13.jpeg" class="img-fluid pb-4">

          </div>

          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/image13.jpeg" class="img-fluid pb-4">

          </div>

          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/image13.jpeg" class="img-fluid pb-4">

          </div>

          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/image13.jpeg" class="img-fluid pb-4">

          </div>

        </div>
        
      </div>

    </section>


      <section class="my-5">
      <div class="py-5">
        <h2 class="text-center"> <!-- Google Calendar Appointment Scheduling begin -->
<link href="https://calendar.google.com/calendar/scheduling-button-script.css" rel="stylesheet">
<script src="https://calendar.google.com/calendar/scheduling-button-script.js" async></script>
<script>
(function() {
  var target = document.currentScript;
  window.addEventListener('load', function() {
    calendar.schedulingButton.load({
      url: 'https://calendar.google.com/calendar/appointments/schedules/AcZssZ3taIHCg0DV45_RCTq_nTUzpUJUJhpUhQQympKwiDw5fsxsAPa0mqNr7NmtW2U38gdHbA7PvVeG?gv=true',
      color: '#33B679',
      label: "Book now",
      target,
    });
  });
})();
</script>
<!-- end Google Calendar Appointment Scheduling --></h2>
      </div>

      <div class="w-50 m-auto">
        <form action="userinfo.php" method="post">

          <div class="form-group">
            <label>Username</label>
            <input type="text" name="user" autocomplete="off" class="form-control">
          </div>

          <div class="form-group">
            <label>Email id</label>
            <input type="text" name="email" autocomplete="off" class="form-control">
          </div>

          <div class="form-group">
            <label>Phone Number</label>
            <input type="text" name="phone" autocomplete="off" class="form-control">
          </div>

          <div class="form-group">
            <label>Comments</label>
            <textarea class="form-control" name="comment">
            </textarea>
          </div>

          <button type="submit" class="btn btn-success">Submit</button>

        </form>
      </div>


      </section>

      <footer>
        <p class="p-3 bg-dark text-white text-center">@nikhiltanti351@gmail.com</p>
      </footer>

      <!-- Google calander -->

     


  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    
</body>
</html>