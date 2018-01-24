<?php
  function UsernameExists($username){
    global $connection;

    $query = "SELECT username FROM users WHERE username = '$username' ";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0) {
      return true;
    }
    else {
      return false;
    }
  }

  function errorMsg($msg){
    echo "<div class='animated bounceInUp' id='alert'>" . $msg . "</div>";
}

  function addTask(){
    global $connection;

    if (isset($_POST['taskName'])) {
      $title = $_POST['taskName'];
      $userID = $_SESSION['id'];

      $query = "INSERT INTO tasks(title, user_id) ";
      $query .= "VALUES('$title', '$userID')";
      $addTaskQuery = mysqli_query($connection, $query);
    }
    else {
      echo "REEEEEEEEEEEEEEEEE";
    }
  }

  function removeTask(){
    global $connection;
    $taskID = $_POST['taskID'];
    $query = "DELETE FROM tasks WHERE id = $taskID";
    $deleteTaskQuery = mysqli_query($connection, $query);
    header("location: index.php");
  }

function editTask(){
  global $connection;
  $taskID = $_POST['taskID'];
  $newText = $_POST['newTask'];
  $query = "UPDATE tasks SET title='$newText' WHERE id = '$taskID'";
  $updateTaskQuery = mysqli_query($connection, $query);
  header("location: index.php");
}
 ?>
