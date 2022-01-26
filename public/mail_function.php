<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//Load Composer's autoloader
require 'C:\Users\Mhar\Desktop\CBS 401\FacultyInfoSys\vendor\phpmailer\phpmailer\src\Exception.php';
require 'C:\Users\Mhar\Desktop\CBS 401\FacultyInfoSys\vendor\phpmailer\phpmailer\src\PHPMailer.php';
require 'C:\Users\Mhar\Desktop\CBS 401\FacultyInfoSys\vendor\phpmailer\phpmailer\src\SMTP.php';

//Create an instance; passing `true` enables exceptions
try {
    function sendOTP($email, $otp)
    {
        $mail = new PHPMailer;


        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.mailtrap.io';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = '55c6cb9186239d';                     //SMTP username
        $mail->Password   = 'fee4a9c4e59217';                               //SMTP password
        //$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 2525;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('mhar.micu.enriquez@gmail.com.com', 'Mhar - FacultyInfoSys');
        $mail->addAddress($email);     //Add a recipient
        //$mail->addAddress('ellen@example.com');               //Name is optional
        //$mail->addReplyTo('info@example.com', 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        //Attachments
        //$mail->addAttachment('');         //Add attachments
        //$mail->addAttachment('');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Faculty Information System - One-Time PIN (OTP)';
        $mail->Body    = 'Good day! <br><br> Your requested Faculty Information System One-Time PIN (OTP) is <b>' . $otp . '</b>
        <br><br>Should you have any concerns or clarifications, contact Customer Care Center through any of the following:
            <br>Customer Care Center	:	8405-7000 
            <br>Domestic Toll-Free	:	1-800-10-405-7000 
            <br>E-mail	:	customercare@mail.fis.com 
        <br><br>Thank you for using Faculty Information System Application. This is a system generated message. Please do not reply.<br>
        <br>This communication is intended solely for the use of the addressee. It may contain confidential or legally privileged information. If you are not the intended recipient, any disclosure, copying, distribution, or taking any action in reliance on this communication is strictly prohibited and may be unlawful. If you received this communication in error, please notify the sender immediately and delete this communication from your system. Faculty Information System is neither liable for the proper and complete transmission of this communication nor for any delay in its receipt.
        <br><br>This only valid for <b>5 minutes</b>.';
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $result = $mail->Send();

        return $result;
    }
} catch (Exception $e) {
    echo $e;
}