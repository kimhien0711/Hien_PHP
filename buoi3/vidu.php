<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
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