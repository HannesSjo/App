<section id="tasks" class="col-12 col-sm-8 col-lg-4">
  <h2>Att göra</h2>
  <ul class="list-unstyled">
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
    <form class="form-inline my-2 my-lg-0 justify-content-center" action="admin.php" method="post">
      <input class="form-control mr-sm-2" type="text" name="taskName" required>
      <input class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit" value="Lägg till">
    </form>
</section>
