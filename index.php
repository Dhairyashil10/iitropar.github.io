<?php

$name = $_POST['name'];

$visitor_email = $_POST['email'];

 $subject = $_POST['subject'];

 $message = $_POST['message'];

 $email from = 'info@dhairyashil10.github.io';

 $email subject 'New Form Submission';

$email_body "User Name: $name.\n".

"User Email: $visitor_email.\n". 

"Subjects: $subject.\n".

"User Message: $message.\n";

 $to'dhairyshil@gmail.com';


$headers = "From: $email_from \r\n";

 $headers = "Reply-To: $visitor_email \r\n";

 mail($to,$email_subject,$email_body,$headers);

 header("Location; contact.html");

 ?>