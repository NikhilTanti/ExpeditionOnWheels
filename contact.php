<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExpeditionOnWheels</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }
        main {
            flex: 1;
        }
        .contact-section {
            padding: 60px 0;
            background-color: #f8f9fa;
        }
        .contact-title {
            text-align: center;
            margin-bottom: 40px;
        }
        .contact-info {
            margin-bottom: 30px;
        }
        footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 1rem;
        }
    </style>
</head>
<body>

<!-- Navbar start -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="position: fixed; top: 0; width: 100%; z-index: 1000;">
  <a class="navbar-brand" href="index.php"><img src="images/logo2.png" height="55" width="65"> ExpeditionOnWheels</a>
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
<!-- Navbar end -->

<div style="margin-top: 80px;"></div> <!-- Space to adjust for the fixed navbar -->

<!-- Main content -->
<main>
  <!-- Contact Section -->
  <section class="contact-section">
    <div class="container">
        <h2 class="contact-title display-4">Contact Us</h2>
        <div class="row">
            <div class="col-md-6 contact-info">
                <h4>Get in Touch</h4>
                <p><strong>Address:</strong> Kaziranga National Park, Assam, India</p>
                <p><strong>Email:</strong> <a href="mailto:nikhiltanti351@gmail.com">nikhiltanti351@gmail.com</a></p>
                <p><strong>Phone:</strong> <a href="tel:+911234567890">+91 12345 67890</a></p>

                <p><strong>Follow Us:</strong></p>
                <a href="#" class="btn btn-primary btn-sm mr-2">Facebook</a>
                <a href="#" class="btn btn-info btn-sm mr-2">Twitter</a>
                <a href="#" class="btn btn-danger btn-sm mr-2">Instagram</a>
            </div>
            <div class="col-md-6">
                <h4>Our Commitment</h4>
                <p>At ExpeditionOnWheels, we are committed to providing you with the best travel experiences in Kaziranga. Whether you are interested in our jeep safaris, elephant safaris, or dolphin sightings, our team is here to help you plan an unforgettable adventure.</p>
                <p>Feel free to reach out to us with any questions or for more information about our services. We look forward to helping you explore the natural beauty of Kaziranga!</p>
            </div>
        </div>
    </div>
  </section>
</main>

<!-- Footer -->
<footer>
    <p>&copy; 2023 ExpeditionOnWheels. All rights reserved.</p>
    <p>Email: <a href="mailto:nikhiltanti351@gmail.com" class="text-white">nikhiltanti351@gmail.com</a></p>
</footer>

<!-- Ensure Bootstrap JavaScript is included -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
