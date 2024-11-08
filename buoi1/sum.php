<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $sum_c = 0;
    $sum_l = 0; 
    for ($i = 0; $i <= 5; $i++){
        if ($i % 2 == 0 ){
            $sum_c =$sum_c +$i;
        }else{
            $sum_l = $sum_l +$i;
        }
    
    }
    echo "$sum_c";
    echo "$sum_l";
    ?>
</body>
</html>