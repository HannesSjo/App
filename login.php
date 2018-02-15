<?php
    $Whateva = "Login";
    $bodyClass = "d-flex flex-column justify-content-center align-items-center";
    include "includes/header.php";
    session_start();

    $errorMessage = "";

    if (isset($_POST['login'])) {
      loginUser();
      $errorMessage = loginUser();
  }
 ?>

    <form class="col-12 col-sm-8 col-lg-4 userForms animated fadeInDown" action="login.php" method="post">
      <img src="img/todoLogo.svg" alt="ToDo">
      <?php if ($errorMessage): ?>
        <div class=" alert alert-danger animated shake" id="alert"><?php echo $errorMessage; ?></div>
      <?php endif; ?>
    <div class="form-group">
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Användarnamn" required autofocus>
  </div>
  <div class="form-group">
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Lösenord" required>
  </div>
  <button type="submit" name="login" class="col-12 btn btn-outline-light">Logga in</button>
  <a href="register.php" class="form-text text-muted text-center">Ny användare? Registrera dig här</a>
</form>


<?php include 'includes/footer.php'; ?>
