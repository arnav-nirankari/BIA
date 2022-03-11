<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$phone = $_POST['phone'];

$email_from = 'arnav.nirankari@student.ufv.ca';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
               "User Email: $visitor_email.\n".
               "User Phone: $phone.\n".;

$to = 'arnav.nirankari@student.ufv.ca';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to, $email_subject,$email_body,$headers);

header("Location: index.hmtl");
?>
