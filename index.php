<?php
  $bodyClass = "d-flex justify-content-center align-items-center";
  $Whateva = "Bästa att göra listan någonsin";
  include 'includes/header.php';
?>


<!-- Background video -->
<video autoplay loop muted>
  <source src="vid/appBack.mp4" type="video/mp4">
  Your browser does not support html5 video.
</video>
<!-- Background video END -->

<!-- Main content -->
<main class="col-12 col-sm-8 col-lg-4 animated flipInY">
  <img src="img/todoLogo.svg" alt="">
  <p>Med <span><?php echo countUsers(); ?></span> registrerade användare</p>
  <a class="btn btn-outline-light" href="login.php">Login</a>
  <a class="btn btn-outline-light" href="register.php">Register</a>
</main>
<!-- Main content END -->

<?php include 'includes/footer.php' ?>
