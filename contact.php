<?php
function spamcheck($field) {
  // Sanitize e-mail address
  $field=filter_var($field, FILTER_SANITIZE_EMAIL);
  // Validate e-mail address
  if(filter_var($field, FILTER_VALIDATE_EMAIL)) {
    return TRUE;
  } else {
    return FALSE;
  }
}
?>

<?php
// display form if user has not clicked submit
if (!isset($_POST["submit"])) {
  ?>
  <form class="submit-form" method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
  <input type="text" name="from" placeholder="your name"><br />
	<input type="text" name="email" placeholder="your email"><br />
  <textarea rows="5" name="message" placeholder="your message"></textarea>
  <br />
  <input class="submit" type="submit" name="submit" value="send">
  </form>
  <?php 
} 

else {    // the user has submitted the form
  // Check if the "from" input field is filled out
  if (isset($_POST["from"])) {
    $from = $_POST["email"]; // sender
    $message = "Name:" . ' ' . $_POST["from"]. "\r\n";
    $message .= "Email:" . ' ' . $_POST["email"]. "\r\n";
    $message .= "Message:" . ' ' . $_POST["message"]. "\r\n";

    // message lines should not exceed 70 characters (PHP rule), so wrap it
    $message = wordwrap($message, 70);
    // send mail
    mail("lena.masek@gmail.com", 'About The Truth', $message, "From: $from\n");
    echo "Thank you for taking your time to send me that! I'll get back to you soon.";
  }
}
?>
