<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$feedback = $_POST['subject'];
$message = $_POST['message'];

$email_from= 'thefeast@chen.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Feedback: $feedback.\n".
              "User Message: $message\.n";

$to = 'soundaryaraghuis@gmail.com';

$headers = "From: $email_from \r\n";

$headers = "Reply -To: $visitors_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>
    