<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = $_POST["hsa"];
        function check($a){   
            if ($a % 2 == 0){
                echo "Đây là số chẵn";
            }else{
                echo "Đây là số lẽ";
            }
        }
    ?>

    <form action="form2.php" method="POST">
        Number: <input type="number" name="hsa" value="<?php echo $a ?>">
        <input type="hidden" name="submit" value="1">
        <input type="submit" value="Submit">
    </form>

    <p class="kp"><?php check($a); ?></p>

</body>
</html>