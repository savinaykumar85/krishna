<html>
<head>
<title>PHPMailer - SMTP basic test with authentication</title>
</head>
<body>

<?php

//error_reporting(E_ALL);
error_reporting(E_STRICT);

date_default_timezone_set('America/Toronto');

require_once('class.phpmailer.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

include('../phpmailform.php');
$mail             = new PHPMailer();

//$body             = file_get_contents('contents.html');
$body             = $email_message;


$mail->IsHTML(true); // send as HTML
$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host       = "mail.franbizzsolutions.com"; // SMTP server
$mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->Host       = "mail.franbizzsolutions.com"; // sets the SMTP server
$mail->Port       = 25;                    // set the SMTP port for the GMAIL server
$mail->Username   = "info@franbizzsolutions.com"; // SMTP account username
$mail->Password   = "demo@404";        // SMTP account password

$mail->SetFrom('info@franbizzsolutions.com', 'franbizzsolutions');

$mail->AddReplyTo("info@franbizzsolutions.com","franbizzsolutions");

$mail->Subject    = "New request for Franchise found at franbizzsolutions.com!!!";

//$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($body);


//$address = "franbizzsolutions@gmail.com,ekanshkatoch@gmail.com";

//$address = "avneesh.mca.06@gmail.com";
$address1 = "franbizzsolutions@gmail.com";
$address2 = "ekanshkatoch@gmail.com";

//$mail->AddAddress($address, "franbizzsolutions");
$mail->AddAddress($address1, "franbizzsolutions");
$mail->AddAddress($address2, "franbizzsolutions");

//$mail->AddAttachment("images/phpmailer.gif");      // attachment
//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
  header('Location: ../thankyou.html');

    exit();
}

?>

</body>
</html>
