<?php
  include "db.php";
  include "functions.php";
    CheckIfSIsLast();
?>
<!DOCTYPE html>
<html lang="sv">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/login.css">
<link rel="stylesheet" href="css/animate.css">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
<link rel="manifest" href="manifest.json">
<link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
<meta name="theme-color" content="#ffffff">

<title><?php echo $Whateva . "&raquo" .  appName(); ?></title>
</head>
  <?php if (isset($bodyClass)) : ?>
    <body class="<?php echo $bodyClass;?>">
  <?php else: ?>
    <body>
  <?php endif;?>
