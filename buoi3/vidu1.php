<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .color{
            color: red;
        }

        .red{
            color: red;
        }

        .green{
            color: green;
        }

        .blue{
            color: blue;
        }
    </style>
</head>
<body>
<?php
    error_reporting(0) ;
    // define an indexed array
    $color = array("red", "green", "blue");

    // in ra tất cả các phần tử
    // echo $color[0] . "<br>", $color[1] . "<br>", $color[2] . "<br>";
    
    // foreach ($color as $color) {
    //     echo $color . "<br>";  
    // }

    // for ($i = 0; $i < count($color); $i++) {
    //     echo $color[$i]. "<br>";
    // }
    
    // in tất cả ra màu đỏ
    // for ($i = 0; $i < count($color); $i++) {
    //     echo "<p class='color'>$color[$i]</p>";
    // }

    //in ra các chữ có màu giống với nó
    for ($i = 0; $i < count($color); $i++) {
        if ($i == 0) {
            echo "<p class='red'> $color[0] </p>";
        }elseif ($i == 1) {
            echo "<p class='green'> $color[1] </p>";
        }else{
            echo "<p class='blue'> $color[2] </p>";
        }
    }


?>

</body>
</html>