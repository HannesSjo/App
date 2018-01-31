<?php
session_start();
$Whateva = "Welcome";

include "includes/header.php";

if (isset($_POST['submit'])) {
  addTask();
}
?>

<?php if (isset($_SESSION['username'])): ?>
    <nav>
      <a href="logout.php">Logga ut <?php echo $_SESSION['username']; ?></a>
      <h1>App</h1>
    </nav>
    <section>
      <h2>Att göra</h2>
      <ul>
        <?php
          $query = "SELECT * FROM tasks WHERE user_id = {$_SESSION['id']}";
          $result = mysqli_query($connection, $query);
        ?>
        <?php while($row = mysqli_fetch_array($result)) :?>

          <li><?php echo $row['title']; ?>
          <a class="fa fa-trash" aria-hidden="true" href="delete.php?taskID=<?php echo $row['id']; ?>"></a>
          <a class="fa fa-pencil-square-o" aria-hidden="true" href="edit.php?taskID=<?php echo $row['id']; ?>&taskName=<?php echo $row['title']; ?>"></a>
          </li>
        <?php endwhile; ?>
      </ul>
        <form action="index.php" method="post">
          <input type="text" name="taskName" required>
          <input class="submit" type="submit" name="submit">
        </form>
    </section>

  <?php else: ?>
    <h1>What about u doing here? Login first <a href="login.php">here</a> </h1>
  <?php endif; ?>
  </body>
</html>
