
<link rel="stylesheet" href="form.css" type="text/css">
<div class="container">
  <?php session_start();?>
  <form id="contact" action="formprocess.php" method="post">
    <h3>STUDENT DETAILS</h3>
    <h4>Enter the details given below correctly!</h4>
    <fieldset>
      <input placeholder="Your name" type="text" name="name" tabindex="1" autofocus>
      <?php if (isset($_SESSION['error1'])):?>
      <span class="error"><?php echo $_SESSION['error1']; ?></span>
    <?php endif; ?>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="text" name="email" tabindex="2">
      <?php if (isset($_SESSION['error2'])):?>
      <span class="error"><?php echo $_SESSION['error2']; ?></span>
    <?php endif; ?>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number" type="text" name="phone"  tabindex="3">
      <?php if (isset($_SESSION['error3'])):?>
      <span class="error"><?php echo $_SESSION['error3']; ?></span>
    <?php endif; ?>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit">Submit</button>
    </fieldset>
  </form>
</div>
