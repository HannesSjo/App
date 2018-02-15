<header id="profileHeader" class="d-flex col-12 align-items-center">
  <figure id="idle" class="">
    <?php if ($_SESSION['profilepic']): ?>
      <img class="img-fluid" src="img/profilepics/<?php echo $_SESSION['profilepic']; ?>" alt="<?php echo $_SESSION['username'] ; ?>">
    <?php else: ?>
      <i class="fas fa-user"></i>
    <?php endif; ?>
    <h2><?php echo $_SESSION['username']; ?></h2>
  </figure>
</header>
