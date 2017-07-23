<?php

  define("TITLE", "Order");
  define("BODYID", "faq");
  include("header.php");

?>

<div class='container'>
  <div class='content-wrapper'>
    <div class='inner-wrapper'>
      <div class='inner-wrapper-container'>
        <h3>Custom Order</h3>
        <p>Orders need to be placed at least two weeks prior to pick up date or an additional fee for a rush order will apply.</p>
        <p>Recommended or average orders contain mostly 3-4 inch cookies with a mixture of primarily basic and detailed cookies, and a few elaborate cookies. Average price for this type of order is $35 per dozen. However, Ellee Bakery reserves the right to determine the final quote.</p>
        <p>Upon receiving your order request, a quote will be provided to you within 1-2 business days, via email, along with an invoice/link to pay the 50% deposit necessary to confirm your order.</p>
        <form id='order-form' action='order-form.php' method='POST'>
          <form-group>
            <label>Full Name:<br /><input type='text' name='name' required /></label><br />
          </form-group>
          <form-group>
            <label>Email:<br /><input type='text' name='email' required /></label><br />
          </form-group>
          <form-group>
            <label>Event Date:<br /><input type='date' name='eventDate' required /></label><br />
          </form-group>
          <form-group>
            <label>Pickup Date:<br /><input type='date' name='pickupDate' required /></label><br />
          </form-group>
          <form-group>
            <label>Theme/Designs/Occasion:<br /><input type='text' name='theme' required /></label><br />
          </form-group>
          <form-group>
            <label>Number of Cookies (minimum of 12):<br /><input type='number' name='quantity' required /></label><br />
          </form-group>
          <form-group>
            <label>Food Allergies:<br /><input type='text' name='foodAllergies' required /></label><br />
          </form-group>
          <form-group>
            <label id='radio'>Packaging:<br />
              <input type='radio' name='packaging' value='box' checked /> Box<br />
              <input type='radio' name='packaging' value='bag' /> Individual Bag with Ribbon ($3/dozen)<br />
            </label>
          </form-group>
          <div class="g-recaptcha" data-theme="light" data-sitekey="6LeFJCQUAAAAAGtb4IqkSAbNmmYE9-2y4X7EMNBo" style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;"></div>
          <input id='submit' type='submit' />
        </form>
      </div>
    </div>
  </div>
</div>

<?php

  include("footer.php");

?>
