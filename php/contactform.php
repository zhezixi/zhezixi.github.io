<?php

if (isset($_POST['sumbit'])){
  $name = $_POST['name'];
  $emailfrom = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  $mailTo = "bingyi@umich.edu";
  $headers = "From: My portfolio".$emailfrom;
  $txt = "you have received an email from".$name."." \n\n".$message;

  mail($mailTo,$subject,$txt,$headers);
  header("Location: index.php?mailsend");
}


 ?>
