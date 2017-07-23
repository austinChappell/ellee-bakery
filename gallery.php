<?php

  define("TITLE", "Gallery");
  define("BODYID", "gallery");
  include("header.php");

?>

<div class='container'>
  <div class='row'>

<?php

  foreach($photoGallery as $photo) {

?>

<div class='col-md-4 col-sm-6 col-xs-12'>
  <img src="images/cookies/<?php echo $photo[url]; ?>.jpg" alt="<?php echo $photo[alt]; ?>" class='thumbnail' />
</div>

<?php

  }
?>

  </div>
</div>

<?php

  include("footer.php");

?>
