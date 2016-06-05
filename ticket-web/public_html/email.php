<?php

/**
 * @author : ahlul.esasjana
 * Date May 25, 2016 00:12:08 AM
 */

date_default_timezone_set('Etc/UTC');
require('lib/PHPMailerAutoload.php');

if(isset($_POST['email'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = $_POST['email_to'];
    $email_subject = $_POST['subject'];

    $title = array('Title', 'Mr.', 'Ms.', 'Mrs.');
    $selected_key = $_POST['title'];
    $selected_val = $title[$_POST['title']]; 

    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $comments = $_POST['comments']; // required

  if(($selected_key==0))
    echo "<script> alert('Please enter your title')</script>";
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     $email_message = "";
    $email_message .="Title: ".$selected_val."\n";
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";

    $allowedExts = array("doc", "docx", "xls", "xlsx", "pdf");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if ((($_FILES["file"]["type"] == "application/pdf")
|| ($_FILES["file"]["type"] == "application/msword")
|| ($_FILES["file"]["type"] == "application/excel")
|| ($_FILES["file"]["type"] == "application/vnd.ms-excel")
|| ($_FILES["file"]["type"] == "application/x-excel")
|| ($_FILES["file"]["type"] == "application/x-msexcel")
|| ($_FILES["file"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document")
|| ($_FILES["file"]["type"] == "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"))

&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "<script>alert('Error: " . $_FILES["file"]["error"] ."')</script>";
    }
//  else
//    {
//        $d='upload/';
//        $de=$d . basename($_FILES['file']['name']);
//    move_uploaded_file($_FILES["file"]["tmp_name"], $de);
//$fileName = $_FILES['file']['name'];
//    $filePath = $_FILES['file']['tmp_name'];
     //add only if the file is an upload
//     }
  }

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
$mail->SMTPDebug  = 1;
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
$mail->Username = "informasi.bsm@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "#2Juni2012";
//Set who the message is to be sent from
$mail->setFrom($email_from, $first_name.' '.$last_name);
//Set an alternative reply-to address
$mail->addReplyTo($email_from, $first_name.' '.$last_name);
//Set who the message is to be sent to
$mail->addAddress($email_to, $first_name.' '.$last_name);
//Set the subject line
$mail->Subject = ($email_subject);
//Read an HTML message body from an external file, convert referenced images to embedded, convert HTML into a basic plain-text alternative body
$mail->Body = ($email_message);
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
//$mail->AddAttachment($_FILES['file']['tmp_name'], $_FILES['file']['name']);
$mail->AddAttachment($_FILES['file']['tmp_name'], $_FILES['file']['name']);
//Send the message, check with alert
if(!$mail->Send()) {
  echo "<script>alert('Mailer Error: " . $mail->ErrorInfo."')</script>";
} else {
  echo "<script>alert('Sending email to ". $email_to." success!')</script>";
}
}
?>