<?php
    session_start();
    error_reporting(0); 
    $flag = 0;
    if (!empty($_POST["ho_ten"])&& !empty($_POST["email"]) && !empty($_POST["dia_chi"])) {
        $thong_tin = $_POST["ho_ten"]. " - ". $_POST["email"]. " - ". $_POST["dia_chi"];
        setcookie("khach_hang", $thong_tin, time()+ 3600);
        $flag = 1;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create_cookie</title>
</head>
<body>
    <form action="vidu.php" method="POST" name="form1">
        <h1>INFORMATION LOGIN</h1>

        <label for="ho_ten"><b>Full Name:</b></label>
        <input type="text" id="ho_ten" name="ho_ten" required><br><br>

        <label for="email"><b>Email:</b></label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="dia_chi"><b>Address:</b></label>
        <input type="text" id="dia_chi" name="dia_chi" required><br><br>

        <button type="submit">Submit</button>
    </form>

    <form action="" method="POST" name="form2">
        <?php
            if ($flag == 1) {
                echo"Thông tin khách hàng <br>";
                echo $_COOKIE["khach_hang"]. "<br>";
                echo "<a href='inf_cookie.php'>Click here! </a>";
            }
        ?>
    </form>
</body>
</html>