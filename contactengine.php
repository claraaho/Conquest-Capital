<?php

require 'class.phpmailer.php';

$from = Trim(stripslashes($_POST['email'])); 
$name = Trim(stripslashes($_POST['name'])); 
$tel = Trim(stripslashes($_POST['tel'])); 
$message = Trim(stripslashes($_POST['message'])); 
$company = Trim(stripslashes($_POST['company'])); 

if (isset($_POST["subscribe"]) && $_POST["subscribe"]=="true") {
	$subscribe = true;
} else {
	$subscribe = false;
}

$mail = new PHPMailer;

$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;          // Enable SMTP authentication
$mail->Username = '***REMOVED***';                 // SMTP username
$mail->Password = '***REMOVED***';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('***REMOVED***', 'Online Form');
$mail->addAddress('***REMOVED***');     // Add a recipient
$mail->addCC('***REMOVED***');     // Add a recipient
$mail->addBCC('***REMOVED***');     // Add a recipient
$mail->addReplyTo($from, $name);

$mail->isHTML(true); 

$mail->Subject = 'Conquest Capital Consultation Request';
$body = $message . "<br/><br/>Name: ". $name ."<br/>Email: ". $from ."<br/><i> Company: " . $company . "<br/>Tel: ". $tel ."<br/>subscribe? ".$subscribe . "</i>";
$mail->Body    = $body;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo '<br>Mailer Error: ' . $mail->ErrorInfo;
} else {
	header( 'Location: our-company?sent=success#contacting' );
}

?>