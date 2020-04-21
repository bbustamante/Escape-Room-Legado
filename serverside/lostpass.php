<?php
header('Content-Type: application/json');
$sendmail = '';
$sendpassword = '';
$response = [];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once( '../assets/PHPMailer/src/Exception.php' );
require_once( '../assets/PHPMailer/src/PHPMailer.php' );
require_once( '../assets/PHPMailer/src/SMTP.php' );

require_once( 'lostpasstemplate.php' );

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                   // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'secureams15.sgcpanel.com';             // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = $sendmail;                              // SMTP username
    $mail->Password   = $sendpassword;                          // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 25;                                     // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    $mail->CharSet    = 'UTF-8';                                // Enable UTF-8

    //Recipients
    $mail->setFrom($sendmail, 'El Legado del Escapista');
    $mail->addAddress($_POST['email']);
    //$mail->addBCC('bcc@example.com');

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Recuperar contraseña.';
    $mail->Body    = $content;

    $mail->send();
    $response['status'] = 'OK';
} catch (Exception $e) {
    $response['status'] = 'KO';
    $response['error'] = $mail->ErrorInfo;
}

echo json_encode($response);
?>
