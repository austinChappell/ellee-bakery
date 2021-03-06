<?php

  define("COMPANY", "Ellee Bakery");
  include("arrays.php");

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo TITLE; ?> | Ellee Bakery</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Raleway|Dancing+Script" rel="stylesheet">
    <script src='https://www.google.com/recaptcha/api.js'></script>
  </head>

  <body id="<?php echo BODYID; ?>">
    <div class="page-wrap">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img id='brand-logo' src='images/logo-main-oval.png' /></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="gallery.php">Gallery</a></li>
              <li><a href="faq.php">FAQ</a></li>
              <li><a href="order.php">Order</a></li>
              <li><a href="contact.php">Contact</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
