<?php
    session_start();
    error_reporting(E_ALL ^ E_DEPRECATED);
    require_once '../model/connect.php';

    // Thư viện phpmailer
    require_once('../model/phpmailer/Exception.php');
    require_once('../model/phpmailer/PHPMailer.php');
    require_once('../model/phpmailer/SMTP.php');
    require_once('../model/function.php');


    if (isset($_POST['submit']))
    {
        if (isset($_POST['fullname'])) {
            $fullname = $_POST['fullname'];
        }

        if (isset($_POST['username'])) {
            $username = $_POST['username'];
        }

        if (isset($_POST['password'])) {
            $password = $_POST['password'];
        }

        if (isset($_POST['email'])) {
            $email = $_POST['email'];
        }

        if (isset($_POST['address'])) {
            $address = $_POST['address'];
        }

        if (isset($_POST['phone'])) {
            $phone = $_POST['phone'];
        }

        $sql = "INSERT INTO users (fullname, username, password, email, phone, address, role)
                VALUES ('$fullname', '$username', md5('$password'), '$email', $phone, '$address', 1)";
        $res = mysqli_query($conn,$sql);

    }
    $subject = "Account Registration Successful";
    $content = "Hello $username
        <br><br>Thank you for registering an account. 
        <br>Username: $username <br>
        Password: $password <br><br>
        Best regards!";

    if ($res) {
        // Gửi email xác nhận
        sendMail($email, $subject, $content) ;
        // Chuyển hướng sau khi gửi email
        header("location:login.php?rs=success");
        exit();
    
    } else {
        header("location:login.php?rf=fail");
        exit();
    }
    
    
?>