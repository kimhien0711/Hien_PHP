<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        error_reporting(0);
        if (!isset($_COOKIE["khach_hang"])) 
            echo"Xin chào khách hàng <b><i>". $_COOKIE["khach_hang"] ."<b><i><br>";
        else
            echo "Xin chào quý khách! <br>";        
            echo"<a href = 'vidu.php'> Quay lại trang thông tin khách hàng! </a><br>";
    ?>
</body>
</html>
