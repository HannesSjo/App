<?php
$bodyClass = "d-flex justify-content-center align-items-center";
$Whateva = "Bästa att göra listan någonsin";
include 'includes/header.php';

$query = "SELECT id FROM users";
$result = mysqli_query($connection, $query);
$num_users = mysqli_num_rows($result);
?>


<!-- Background video -->
<video autoplay loop muted>
  <source src="vid/Video.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video>
<!-- Background video END -->

<!-- Main content -->
<main class="col-12 col-sm-8 col-lg-4 animated flipInY">
  <img src="img/todoLogo.svg" alt="">
  <a class="btn btn-outline-light" href="login.php">Login</a>
  <a class="btn btn-outline-light" href="register.php">Register</a>
  <p>Med <span><?php echo $num_users ?></span> registrerade användare</p>
</main>
<!-- Main content END -->
