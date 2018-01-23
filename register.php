<?php
$Whateva = "Registrera";
$bodyID = "login";
include "includes/header.php";
    session_start();

    if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

      if (UsernameExists($username)) {
        errorMsg("Användarnamnet finns redan!");
      }
      else {
        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);

        $hashFormat ="$2y$10$";
        $salt ="EMILEMILEMILEMILEMILEM";
        $saltyHash = $hashFormat . $salt;

        $password = crypt($password, $saltyHash);

        $query = "INSERT INTO users(username, password) ";
        $query .= "VALUES ('$username', '$password')";

        $result = mysqli_query($connection, $query);

        if (!$result){
          die("Query failed") . mysqli_error($connection);
        }
        header("Location: login.php");
    }
  }
 ?>

    <form class="login animated fadeInDown" action="register.php" method="post">
          <h3>Registrera</h3>
      <input type="text" name="username" placeholder="Username" required autofocus>
      <input type="password" name="password" placeholder="Password" required>
      <input class="submit" type="submit" name="register" value="Registrera">
    </form>
  </body>
</html>
