<?php

/**
 * @author : ahlul.esasjana
 * Date May 25, 2016 00:12:08 AM
 */

date_default_timezone_set('Etc/UTC');
function sendEmail($to, $fullName, $email_message) {
require('lib/PHPMailerAutoload.php');
	
	$email_from = "ticketingaa@gmail.com";
	$email_name = "Portal Ticket [no-reply]";
	$email_subject = "Bukti Pemesanan Ticket";
	


// email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
//PHPMailer engine lib instance
$mail = new PHPMailer();
//Send SMTP param
$mail->IsSMTP();
//Enable SMTP debugging
// 0 = off (production only)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug  = 0;
//Output debug SMTPDebug
$mail->Debugoutput = 'html';
//Hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// if network does not support SMTP over IPv6
// $mail->Host = gethostbyname('smtp.gmail.com');
//SMTP port number - 587 for authenticated TLS
$mail->Port = 587;
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication (gmail account)
$mail->Username = "ticketingaa@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "bangsat20";
//Set who the message is to be sent from
$mail->setFrom($email_from, $email_name);
//Set an alternative reply-to address
$mail->addReplyTo($email_from, $email_name);
//Set who the message is to be sent to
$mail->addAddress($to, $fullName);
//Set the subject line
$mail->Subject = ($email_subject);
//Read an HTML message body from an external file, convert referenced images to embedded, convert HTML into a basic plain-text alternative body
$mail->Body = ($email_message);
//Replace the plain text body with one created manually
$mail->AltBody = 'do not reply this email';
//Send the message, check with alert
$mail->Send();
}
?>