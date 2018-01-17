<?php
    session_start();
    include 'includes/db.php';

    if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);

    $hashFormat ="$2y$10$";
    $salt ="EmilHasGayREEEEEEEEEEE";
    $saltyHash = $hashFormat . $salt;

    $password = crypt($password, $saltyHash);

    $query = "INSERT INTO users(username, password) ";
    $query .= "VALUES ('$username', '$password')";

    $result = mysqli_query($connection, $query);

    if (!$result){
      die("Query failed") . mysqli_error($connection);
    }
}

  $Whateva = "Registrera";
 ?>

 <?php include "includes/header.php"; ?>

    <form class="login animated fadeInDown" action="register.php" method="post">
          <h3>Registrera</h3>
      <input type="text" name="username" placeholder="Username" required autofocus>
      <input type="password" name="password" placeholder="Password" required>
      <input class="submit" type="submit" name="register" value="Registrera">
    </form>
  </body>
</html>
