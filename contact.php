<?php

  define("TITLE", "Contact");
  define("BODYID", "faq");
  include('header.php');

?>

    <div class='container'>
      <div class='content-wrapper'>
        <div class='inner-wrapper'>
          <div class='inner-wrapper-container'>
            <h3>Contact Us</h3>
            <p>Please contact us with any inquiries you may have about orders, pricing, designs, etc.</p>
            <form id='contact-form' action='contact-form.php' method='POST'>
              <form-group>
                <label>Full Name:<br /><input type='text' name='name' required /></label><br />
              </form-group>
              <form-group>
                <label>Email:<br /><input type='text' name='email' required /></label><br />
              </form-group>
              <form-group>
                <label>Subject:<br /><input type='text' name='subject' required /></label><br />
              </form-group>
              <form-group>
                <label>Message:<br /><textarea type='text' name='message' rows=5 required /></textarea></label><br />
              </form-group>
              <div class="g-recaptcha" data-theme="light" data-sitekey="6LeFJCQUAAAAAGtb4IqkSAbNmmYE9-2y4X7EMNBo" style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;"></div>
              <input id='submit' type='submit' />
            </form>
          </div>
        </div>
      </div>
    </div>

<?php

  include('footer.php');

?>
