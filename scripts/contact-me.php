<?php

#variables
$to = "lamkin.alexys@gmail.com";
#-- below are the variable from the users input
$visitor_email = $_POST['email'];
$visitor_fname = $_POST['fname'];
$visitor_lname = $_POST['lname'];
$visitor_subj = $_POST['subject'];
$visitor_message = $_POST['message'];

#compose email
$email_subject = "New message from $visitor_fname [$visitor_subj]";

$email_body = "You have received a new message: \n\n".
      "Name: $visitor_fname $visitor_lname \n\n".
      "Email: $visitor_email \n\n".
      "Area of interest: $visitor_subj \n\n".
      "Message: \n \t$visitor_message \n\n".
      "----- End of Message -----\n\n".

$headers = "From: $visitor_email \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

#send email
mail($to,$email_subject,$email_body,$headers);

header('Location: thank-you.html');

?>