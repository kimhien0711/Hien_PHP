<!--  Hàm gửi mail  -->
<?php
require_once('../model/phpmailer/Exception.php');
require_once('../model/phpmailer/PHPMailer.php');
require_once('../model/phpmailer/SMTP.php');

function sendMail($to,$subject, $content) {

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer\PHPMailer\PHPMailer(true);

try {
    //Server settings                
    $mail->isSMTP();                                            //Gửi bằng SMTP
    $mail->Host       = 'smtp.gmail.com';                       //Thiết lập máy chủ SMTP để gửi qua
    $mail->SMTPAuth   = true;                                   //Bật xác thực SMTP
    $mail->Username   = 'hiencaok@gmail.com';                   //Tên người dùng SMTP
    $mail->Password   = 'gryx ktvw cdhm oucl';                  //SMTP password
    $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;            //Bật mã hóa TLS ngầm
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('hiencaok@gmail.com', 'KIM HIEN');
    $mail->addAddress($to);                             //Thêm người nhận

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $content;

    $mail->send();
    echo 'Gửi thành công';
} catch (Exception $e) {
    echo "Gửi mail thất bại. Mailer Error: {$mail->ErrorInfo}";
}
}
?>