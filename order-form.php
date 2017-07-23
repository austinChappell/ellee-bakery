<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>FAQ | Ellee Bakery</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Raleway|Dancing+Script" rel="stylesheet">
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-100479002-2', 'auto');
  ga('send', 'pageview');

</script>
  </head>
  <body id='confirmation'>
    <div class='content1'>

<?php

$captcha = $_POST['g-recaptcha-response'];
$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LeFJCQUAAAAAAhi-7TEIt7fbzI68ca_JNCsdcy2&response=".$captcha."&remoteip=66.147.242.96");
$name = $_POST['name'];
$email = $_POST['email'];
$sender = 'Austin.W.Chappell@gmail.com';
$subject = 'Order Form';
$eventDate = $_POST['eventDate'];
$pickupDate = $_POST['pickupDate'];
$theme = $_POST['theme'];
$quantity = $_POST['quantity'];
$allergies = $_POST['foodAllergies'];
$packaging = $_POST['packaging'];
$formcontent="From: $name \n Email: $email \n Event Date: $eventDate \n Pickup Date: $pickupDate \n Theme: $theme \n Quantity: $quantity \n Food Allergies: $allergies \n Packaging: $packaging";
$recipient = "elleebakery@gmail.com";
$subject = "Order Request";
$mailheader = "From: $sender \r\n";
if(!$captcha) {
  echo "<h3>Please verify that you are not a robot.</h3>";
  echo "<a href='order.php'><button class='go-back-button'>Go Back</button></a>";
} else {
  if($response.success == true) {
    echo "<h3>Thank you for your inquiry! We will be in contact with you shortly.</h3>";
    echo "<a href='index.php'><button class='go-back-button'>Home Page</button></a>";
    mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
  } else if($response.success == false) {
    echo "<h3>Please be verify that you are not a robot.</h3>";
  };
};
// echo "Thank you!";

?>

    </div>
  </body>
</html>
