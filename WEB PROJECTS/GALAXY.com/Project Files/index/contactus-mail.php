<?php

session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

    $mail = new PHPMailer(true);

    try {
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'hack.jerry26@gmail.com';
        $mail->Password = 'etapijvdmncrsfav';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $dest=$_SESSION['mal'];
        // Sender and recipient details
        $mail->setFrom('hack.jerry26@gmail.com', 'Fuzail Raza');
        $mail->addAddress($dest);
        $msg=' Hey MR/MRs' . $_SESSION['Rname']. '<br>' . 'Thanks for your kind Suggestions . ' .  '<br>'.'Your Response : ' .  '<br>'. $_SESSION['Response'];  
        // Email content
        $mail->isHTML(true);
        $mail->Subject = 'Response Copy';
        $mail->Body = $msg;

        // Send the email
        $mail->send();
        
        echo "<script>alert('Response Recieved'); window.location.href = '../index.php';</script>";

    } catch (Exception $e) {
        echo "Error: {$mail->ErrorInfo}";
    }

?>
