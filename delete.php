<?php
  session_start();
  $bodyID = "login";

  $Whateva = "U sure?";
  include 'includes/header.php';

  if (!empty($_GET['taskID'])) {
    $taskID = $_REQUEST['taskID'];
  }
  if (!empty($_POST)) {
    if (isset($_SESSION['username'])){
      removeTask();
    }
  }
 ?>
 <form action="delete.php" method="post">
   <input type="hidden" name="taskID" value="<?php echo $taskID; ?>">
   <h2>Är du säker på att du vill radera detta inlägg?</h2>
   <input type="submit" name="deleteTask" value="Ja">
   <a href="index.php">Nej</a>
 </form>



</body>
</html>
