<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $i =0;
    $sum_c = 0;
    $sum_l = 0;
    $sum = 0;
    while($i < 10){
        $sum = $sum +$i;
        if($i % 2 == 0){
            $sum_c = $sum_c + $i;
        }else{
            $sum_l = $sum_l + $i;
        }
        $i++;
    }
    echo "$sum_c";
    echo "<br>";
    echo "$sum_l";
    echo "<br>";
    echo "$sum";
    ?>
</body>
</html>