<?php

if(isset($_POST['requestbtn'])) {
  $firstName = $_POST['firstname'];
  $lastName = $_POST['lastname'];
  $mailFrom = $_POST['mail'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $mailTo = "bridgebuildersm@gmail.com";
  $headers = "From: ".$mailFrom;
  $txt = "You have an e-mail from".$mailFrom."\n\n".$message;

  mail($mailTo, $subject, $txt, $headers);
  header("Location: index.php?mailsent");
  // echo "Mail Sent. Thank you ".$firstName." we will contact you shortly.";

}else

if(isset($_POST['share'])){
  $testiarea = $_POST['testiarea'];

  header("Location: contact.php?testimony_shared");
}else

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  header("Location: contact.php?message_recieved");
}

?>