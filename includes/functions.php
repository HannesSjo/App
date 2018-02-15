<?php

function appName(){
  return "ToDo";
}

  // Räknar antalet registrerade användare
function countUsers() {
  global $connection;
  $query = "SELECT id FROM users";
  $result = mysqli_query($connection, $query);
  return $numberOfUsers = mysqli_num_rows($result);

}
function registerUser(){
    global $connection;

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (UsernameExists($username)) {
      return $errorMessage = "Användarnamnet finns redan!";
    }
    else {
      $username = mysqli_real_escape_string($connection, $username);
      $password = mysqli_real_escape_string($connection, $password);

      $hashFormat ="$2y$10$";
      $salt ="ThisIsSoSecureUDontUnderstand";
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
function loginUser(){
  $db_password = "";
  $db_username = "";
  global $connection;

  $username = $_POST['username'];
  $password = $_POST['password'];

  $username = mysqli_real_escape_string($connection, $username);
  $password = mysqli_real_escape_string($connection, $password);

  $query = "SELECT * FROM users WHERE username = '{$username}' ";
  $select_users_query = mysqli_query($connection, $query);

  if (!$select_users_query) {
    die('Query failed') . mysqli_error($connection);
  }
  while ($row = mysqli_fetch_array($select_users_query)){
    global $connection;
    $db_id = $row['id'];
    $db_username = $row['username'];
    $db_password = $row['password'];
    $db_profilepic = $row['profilepic'];
  }

  $password = crypt($password, $db_password);

  if ($username === $db_username && $password === $db_password) {
    $_SESSION['id'] = $db_id;
    $_SESSION['username'] = $db_username;
    $_SESSION['profilepic'] = $db_profilepic;
    header("Location: admin.php");
  }
  else {
    return $errorMessage = "Fel användarnamn eller lösenord!";
  }

}

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
    header("location: admin.php");
  }

function editTask(){
  global $connection;
  $taskID = $_POST['taskID'];
  $newText = $_POST['newTask'];
  $query = "UPDATE tasks SET title='$newText' WHERE id = '$taskID'";
  $updateTaskQuery = mysqli_query($connection, $query);
  header("location: admin.php");
}

function CheckIfSIsLast(){
  global $Whateva;
if ($Whateva == "Username TodoList") {
    # code...
    if (isset($_SESSION['username'])) {
      $s = 's';
      if (substr($_SESSION['username'], -1) == 's' || substr($_SESSION['username'], -1) == 'S') {
        $s ='';
      }
      $Whateva = $_SESSION["username"] . $s . ' uppgifter';
    }
    else{
      $Whateva = "No acces";
    }

    if (isset($_POST['submit'])) {
      addTask();
    }
  }
}
 ?>
