<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $emailFrom = $_POST['email'];
  $message = $_POST['message'];

  $mailTo = "BRAN0025@e.ntu.edu.sg";
  $headers = "From: ".$emailFrom;
  $txt = "You have received a mail from ".$name.".\n\n".$message;

  mail($mailTo, $txt, $txt, $headers);
  header("Location: index.php?mailsend");
}