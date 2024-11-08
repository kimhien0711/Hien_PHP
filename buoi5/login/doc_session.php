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
    <form action="" method="POST" name="form1" id="form1">
        <table width="400px" height="232px">
            <tr>
                <td>Kết quả sau khi nhấn <em>Click here!</em></td>
            </tr>
            <tr>
                <td width="243px" height="45px"><img src="https://khoanh24.com/uploads/w750/2016/11/25/hinh-nen-merry-christmas-158379a36d3a1c_d427c54c8dc7f71b6976b2c86d86c78a.jpg" width="356px" height="85px" /></td>
                <td width="157px"> <?php
                    echo"Xin chào <b>".$_SESSION["ho_ten"]."<b><br>";
                    echo"Tên đăng nhập: <b>".$_SESSION["ten_dn"]."<b><br>";
                    echo "<a href='login.php'>Quay về trang ĐĂNG NHẬP </a></p>";
                ?> </td>
            </tr>
            <tr>
                <td colspan = "2"><img src="https://th.bing.com/th/id/OIP.Ic1FHb-XqtTaM9YbuZPHhwHaEo?w=237&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" width="577px" height="112px" alt=""></td>
            </tr>
        </table>
    </form>
</body>
</html>