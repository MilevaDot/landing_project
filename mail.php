<?php

require("vendor/autoload.php");

use PHPMailer\PHPMailer\PHPMailer;

function sendMail($subject, $body, $email, $name, $html=False) {

    // Initial configuration of our email server
    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = 'smtp.gmail.com';
    $phpmailer->SMTPAuth = true;
    $phpmailer->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $phpmailer->CharSet = PHPMailer::CHARSET_UTF8;
    $phpmailer->Port = 465;
    $phpmailer->Username = 'aaron.d.ilizarbe.s@gmail.com';
    $phpmailer->Password = 'cmawdngdgfujqhqa';

    // $phpmailer = new PHPMailer();
    // $phpmailer->isSMTP();
    // $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
    // $phpmailer->SMTPAuth = true;
    // $phpmailer->Port = 2525;
    // $phpmailer->Username = '7985de685882a4';
    // $phpmailer->Password = 'a1f69193abc575';


    // Add destinataries
    $phpmailer->setFrom('aaron.d.ilizarbe.s@gmail.com', 'My Company');
    $phpmailer->addAddress($email, $name);

    // Define the content of my email
    $phpmailer->isHTML($html);                                  //Set email format to HTML
    $phpmailer->Subject = $subject;
    $phpmailer->Body    = $body;

    // Send the email
    $phpmailer->send();
}

?>