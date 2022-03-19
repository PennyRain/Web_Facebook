<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer-master/src/Exception.php';
require '../PHPMailer-master/src/PHPMailer.php';
require '../PHPMailer-master/src/SMTP.php';

$username = 'phamduybboy2@gmail.com';
$password = 'fqxsqxvysjkgnweb';

if(isset($_POST["btnSendMail"])) {
    $email = $_POST["email"];

    $mail = new PHPMailer(true);
   global $username;
   global $password;
try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = $username;                     //SMTP username
    $mail->Password   = $password;                               //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    $mail->Port       = 465;  
    $mail->CharSet = 'UTF-8';                                  //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('phamduybboy2@gmail.com', 'Phạm Ngọc Duy');
    $mail->addAddress($email);     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    // Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Đổi lại mật khẩu';
    $mail->Body    = '<a href="http://localhost:8080/Facebook/App/change-password.php">http://localhost:8080/Facebook/App/change-password.php</a>';
    $mail->AltBody = 'Something in here, idk';

    $mail->send();
     header('Location: forgot-pass.php?status=Kiểm tra trong Email của bạn');
} catch (Exception $e) {
    header('Location: forgot-pass.php?status=Email không tồn tại hoặc không đúng vui lòng thử lại');
}
}

?>