<?php
  include "db.php";
  include "functions.php";
  if (!$Whateva){
    $Whateva = "";
  }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $Whateva; ?> | App</title>
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/login.css">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>
  <body id="<?php echo $bodyID;?>">
