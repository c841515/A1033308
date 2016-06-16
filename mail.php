<?php
mb_internal_encoding('UTF-8');
require('PHPMailer-master/PHPMailerAutoload.php');

$mail = new PHPMailer;

if(@$_POST['name']!=''){
$name=$_POST['name'];
$rename=$_POST['rename'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$content=$_POST['content'];

$mail->SMTPDebug = 3;                               // Enable verbose debug output
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = ("$email");                  // SMTP username
$mail->Password = 'as841123';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom("$name", '宜瑩');
$mail->addAddress('php@nuk.im');     // Add a recipient
$mail->Subject =mb_encode_mimeheader("$subject",'UTF-8');
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Body    = "$content";

if(!$mail->send()) 
{
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else 
{
    echo 'Message has been sent';
}
}
?>