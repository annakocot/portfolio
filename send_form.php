<?php
if (isset($_POST['sendBtn'])) {
  $mailFrom = $_POST['email'];
  $message = $_POST['message'];

  $mailTo = "annakocot@tutamail.com";
  $headers = "From: ".$mailFrom;
  $txt = .$message;

  mail($mailTo, $txt, $headers);
  header("Location: index.php?mailsend");
}
?>
