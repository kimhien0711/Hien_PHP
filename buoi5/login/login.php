<?php
    session_start();
    $flag = 0;
    if (!empty($_POST["ho_ten"]) && !empty( $_POST["email"]) && !empty( $_POST["ten_dn"]) && !empty( $_POST["mat_khau"])){
        $_SESSION["ho_ten"] = $_POST["ho_ten"];
        $_SESSION["email"] = $_POST["email"];
        $_SESSION["ten_dn"] = $_POST["ten_dn"]; 
        $_SESSION["mat_khau"] = $_POST["mat_khau"];
        $flag = 1;

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column; 
        }

        label {
            display: block;
            font-size: 14px;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            margin-bottom: 5px;
            font-size: 14px;
            box-sizing: border-box;
        }

        form[name="form2"] {
            text-align: center;
        }
    </style>
</head>
<body>
    <form action="login.php" method="POST" name="form1">
        <h1>THÔNG TIN ĐĂNG NHẬP</h1>
        <label for="ho_ten"><b>Họ và tên:</b></label>
        <input type="text" id="ho_ten" name="ho_ten" required><br><br>

        <label for="email"><b>Email:</b></label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="ten_dn"><b>Tên đăng nhập:</b></label>
        <input type="text" id="ten_dn" name="ten_dn" required><br><br>

        <label for="mat_khau"><b>Mật khẩu:</b></label>
        <input type="password" id="mat_khau" name="mat_khau" required><br><br>

        <button type="submit">Đăng nhập</button>
    </form>

    <form action="" method="POST" name="form2">
        <?php
            if ($flag == 1) {
                echo"Xin chào: <b><i>".$_SESSION["ho_ten"]."<b><i><br>";
                echo"Email: <b><i>".$_SESSION["email"]."<b><i><br>";
                echo "Tên đăng nhập "."<b> <i>".$_SESSION["ten_dn"]."<b><i><br>";
                echo "Mật khẩu: <b><i>".$_SESSION["mat_khau"]."<b><i><br>";
                echo "<a href='doc_session.php'>Click here! </a>";
            }
        ?>
    </form>

</body>
</html>