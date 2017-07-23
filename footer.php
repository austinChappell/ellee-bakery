    </div>
      <div class="footer">
        <ul>

        <?php

          foreach($socialMedia as $account) {

        ?>

        <li>
          <a href="<?php echo $account[href]; ?>">
            <img src="images/social-media/<?php echo $account[img]; ?>.png" />
          </a>
        </li>

        <?php

          }

        ?>

        </ul>

        <p>&copy; <?php echo date('Y') ?> <?php echo COMPANY; ?><br />All Rights Reserved.</p>
      </div>

  </body>
  <script type='text/javascript' src='https://code.jquery.com/jquery-3.2.1.min.js'></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
  </script>
  <script type='text/javascript' src='script.js'></script>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-100479002-2', 'auto');
    ga('send', 'pageview');

  </script>
  <link rel="stylesheet" href="style.css" />
</html>
