<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .square {
            width: 100px;
            height: 100px;
            background-color: red;
            display: inline-block;
            margin: 2px; 
        }
    </style>
</head>
<body>
    <?php
    for($i = 0; $i < 5; $i++){ 
        for($j = 0; $j < 10; $j++){ 
            echo "<div class='square'></div>";
        }
        echo "<br>"; 
    }
    ?>
</body>
</html>
