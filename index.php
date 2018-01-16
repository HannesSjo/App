<?php
session_start();
//if (!$_SESSION['username']) {
//  header("Location: login.php");
//}
$Whateva = "Welcome";
?>
 <?php include "includes/header.php"; ?>
<?php if ($_SESSION['username']): ?>
    <h1>Welcome <?php echo $_SESSION['username']?></h1>
    <a href="logout.php">Logga ut <?php echo $_SESSION['username'];?></a>
  <?php else: ?>
    <h1>What about u doing here? Log in first <a href="login.php">here</a> </h1>
  <?php endif; ?>
  </body>
</html>
