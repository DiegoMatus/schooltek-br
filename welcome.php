<?php
$email       = @trim(stripslashes($_POST['email'])); 
$subject    = "PRUEBA (Ignorar)! (BRA)";
$to   		= 'diego@schooltek.com';//replace with your email
$toHide		= "";

if (!empty($email)) {
	$message = '<html><body>';
	$message .= '<p style="color:red;" class="text-center">Schooltek, Inc. | México - Brasil - USA</p>';
	$message .= '</body></html>';

	$header.= "MIME-Version: 1.0\r\n"; 
	$header.= "Content-type: text/html; charset=UTF-8\r\n";
	$header = "From: {$email} <{$email}>\r\n"; 
	$header.= "Reply-To: <{$email}>\r\n"; 
	$header.= "Subject: {$subject}\r\n"; 
	$header.= "Bcc: $toHide\r\n";
	$header.= "X-Priority: 1\r\n";
	$header.= "X-Mailer: PHP/".phpversion();

	mail($to, $subject, $message, $header);
	header('Location: index.html');
}
die;

