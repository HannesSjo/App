<?php
session_start();
if (!$_SESSION['LoggedIn']) {
  header("Location: login.php");
}
$Whateva = "Welcome";
?>
 <?php include "includes/header.php"; ?>
    <h1>Welcome <?php echo $_SESSION['username']?></h1>
  </body>
</html>
