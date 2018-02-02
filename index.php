<?php
$bodyClass = "d-flex justify-content-center align-items-center";
$Whateva = "Bästa att göra listan någonsin";
include 'includes/header.php';

$query = "SELECT * FROM users";
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
<main class="animated flipInY">
  <img src="img/todoLogo.svg" alt="">
  <a class="btn btn-primary" href="login.php">Login</a>
  <a class="btn btn-secondary" href="register.php">Register</a>
  <p>Med <?php echo $num_users ?> registrerade användare</p>
</main>
<!-- Main content END -->

 <?php include 'includes/footer.php';?>
