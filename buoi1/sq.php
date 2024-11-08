<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .square{
            width: 10px;
            height: 10px;
            background-color: red;
        }
    </style>
</head>
<body>
    <?php
    for ($i=0; $i < 5; $i++){
        echo "<div class='square'></div>";
    }
    ?>
</body>
</html>