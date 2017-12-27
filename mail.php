<?php
//code to send mail
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '/home/honeybarua/Desktop/PHPMailer-master/src/Exception.php';
require '/home/honeybarua/Desktop/PHPMailer-master/src/PHPMailer.php';
require '/home/honeybarua/Desktop/PHPMailer-master/src/SMTP.php';


$mail = new PHPMailer;
$mail->isSMTP();                            
$mail->Host = 'smtp.gmail.com';             
$mail->SMTPAuth = true;                     
$mail->Username = 'baruahoney24@gmail.com';          // SMTP username
$mail->Password = 'gurugram12345'; // SMTP password
$mail->SMTPSecure = 'tls';                  
$mail->Port = 587;                          // TCP port to connect to

$mail->setFrom('baruahoney24@gmail.com', '');
$mail->addReplyTo('info@example.com', '');
$mail->addAddress($email);   // Add a recipient


//$to      = $email; // Send email to our user
//$subject = 'Signup | Verification'; // Give the email a subject 
$message = '
 
Thanks for signing up!
Your account has been created, you can login with the following credentials :
------------------------
Username: '.$name.'
Password: '.$pass.'
------------------------
 
'; // Our message above including the link

$mail->isHTML(true);  // Set email format to HTML

//$bodyContent = '<h1>Thanks for Your Enquiry</h1>';
//$bodyContent .= '<p>We did our job and your message is</p>'.$msg;

$mail->Subject = 'Signup | Verification';
$mail->Body    = $message;

if(!$mail->send()) {
    //echo 'Message could not be sent.';
    //echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    $msg1="Check your Mail For Login Credentials";
}
?>