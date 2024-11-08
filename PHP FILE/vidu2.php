<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Tạo - Ghi và Đọc File</title>
    <style type="text/css">
        body {
            color: #FFFFFF;
            font-family: LucidaHandwriting, LucidaCalligraphy;
        }
        .style1 {
            font-family: Verdana, Arial, Helvetica, sans-serif;
            font-size: smaller;
        }
        .style6 {
            color: #FFFFFF;
        }
    </style>
</head>
<body>
    <form id="form1" name="form1" method="post" action="">
        <table width="500" text-align="center" cellpadding="2" cellspacing="2" backgroud-color="#DB95B8">
            <tr backgroud-color="#BDA8A7">
                <td colspan="2" backgroud-color="#CC3366" text-align="center" class="style1">
                    <h2>TẠO - GHI VÀ ĐỌC FILE VỪA TẠO</h2>
                </td>
            </tr>
            <tr>
                <td width="93"><span class="style6">Tên file: </span></td>
                <td width="393"><input name="ten_file" type="text" id="ten_file" value="<?php echo isset($_POST['ten_file']) ? htmlspecialchars($_POST['ten_file']) : ''; ?>" /></td>
            </tr>
            <tr>
                <td valign="top"><span class="style6">Nội dung: </span></td>
                <td><textarea name="noi_dung" cols="50" rows="4" id="noi_dung"><?php echo isset($_POST['noi_dung']) ? htmlspecialchars($_POST['noi_dung']) : ''; ?></textarea></td>
            </tr>
            <tr>
                <td colspan="2" text-align="center">
                    <input type="submit" name="Submit" value="Ghi và đọc file" />
                </td>
            </tr>
        </table>
    </form>

    <!-- <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the file name and content from the form
        $ten_file = isset($_POST['ten_file']) ? $_POST['ten_file'] : '';
        $noi_dung = isset($_POST['noi_dung']) ? $_POST['noi_dung'] : '';

        // Check if the file name is provided
        if (!empty($ten_file)) {
            // Create and write to the file
            $file_path = $ten_file . ".txt";
            file_put_contents($file_path, $noi_dung);

            // Read and display the content of the file
            $content = file_get_contents($file_path);
            echo "<div style='color: #FFFFFF; text-align: center; margin-top: 20px;'>";
            echo "<h3>Nội dung của file:</h3>";
            echo "<pre style='background-color: #333333; padding: 10px; color: #FFFFFF;'>" . htmlspecialchars($content) . "</pre>";
            echo "</div>";
        } else {
            echo "<div style='color: red; text-align: center; margin-top: 20px;'>Vui lòng nhập tên file.</div>";
        }
    }
    ?> -->
    
    
    <?php
    if (isset($_POST["ten_file"]) && isset($_POST["noi_dung"])) {
    $ten_file = $_POST["ten_file"];
    $noi_dung = $_POST["noi_dung"];
    
    // Write content to file
    $file = fopen($ten_file, "w");
    fwrite($file, $noi_dung);
    fclose($file);
    echo "<p align='center' class='style6'><b>Đã ghi file thành công!</b></p>";

    // Read and display content from file
    $file = fopen($ten_file, "r");
    echo "<table width='500' align='center' bgcolor='#DB95B8' class='style6'><tr><td>";
    echo "<b>Nội dung của file:</b><br><br>";
    while (!feof($file)) {
        $noi_dung = fgets($file, 1000);
        echo nl2br($noi_dung);
    }
    echo "<br><br>Đọc file thành công!<br></td></tr></table>";
    fclose($file);
} else {
    echo "<p align='center'>Hãy nhập đủ tên file và nội dung!</p>";
}
?>

</body>
</html>
