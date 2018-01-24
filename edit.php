<?php
  session_start();
  $bodyID = "login";

  $taskName = $_REQUEST['taskName'];
  $taskID = $_REQUEST['taskID'];
  $Whateva = "Ändra " . $taskName . "?";
  include 'includes/header.php';


  if (isset($_POST['changeTask'])) {
    if (isset($_SESSION['username'])){
      editTask();
    }
  }
 ?>
 <form action="edit.php" method="post">
   <input type="hidden" name="taskID" value="<?php echo $taskID; ?>">
   <h2>Är du säker på att du vill ändra detta inlägg?</h2>
   <input type="text" name="newTask" placeholder="New Task Text" value="<?php echo $taskName; ?>" required>
   <input type="submit" name="changeTask" value="Ändra">
   <a href="index.php">No</a>
 </form>



</body>
</html>
