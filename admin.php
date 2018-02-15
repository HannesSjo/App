<?php
  session_start();
  $Whateva ="Username TodoList";
  include 'includes/header.php';
?>

<?php if (isset($_SESSION['username'])): ?>

<?php include 'includes/navigation.php'; ?>

<div class="container-fluid">
  <div class="row justify-content-center">
    <?php include "includes/profile.php"; ?>
    <?php // include "includes/tasks.php"; ?>
  </div>
</div>

<?php else: ?>
<div id="forbidden" class="d-flex justify-content-center align-items-center animated shake">
  <h1>Du har inte tillgång till denna sida</h1>
</div>
<?php endif; ?>
<?php include 'includes/footer.php'; ?>
