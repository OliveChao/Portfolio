<?php
if ( ($_POST['name']!="") && ($_POST['email']!="")){
$name = $_POST['name'];
// $number = $_POST['number'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "me@victorsalamba.co.ke";
$subject = "Website Contact Form";
// Always set content-type when sending HTML email
$mailheader = "MIME-Version: 1.0" . "\r\n";
$mailheader = "Content-type:text/html;charset=UTF-8" . "\r\n";
$mailheader = "From: $email \r\n";
$sent = mail($recipient, $subject, $formcontent, $mailheader);
if($sent){
 echo "<span style='color:green; font-weight:bold;'>
 Thank you for contacting me, I will get back to you shortly.
 </span><a href='index.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
}
else{
 echo "<span style='color:red; font-weight:bold;'>
 Sorry! Your form submission has failed!
 </span><a href='index.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
 }
}
// echo "Thank You!" . " -" . "<a href='index.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
