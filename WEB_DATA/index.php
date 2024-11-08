<?php
    if (($open = fopen("North.csv","r")) !== FALSE){
        while (($data = fgetcsv($open, 1000, ",")) !== FALSE) {
            $array[] = $data;
        }
    fclose($open);
    }
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
        foreach ($array as $sub) {
            echo '<div class="card" style="width: 28em; margin-right: 20px; margin-top: 10px; box-shadow: 0 0 10px 0 grey;">';
            echo '<img src="' . $sub[0] . '" class="card-img-top" alt="">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title text-primary" style="font-family: Arial;">' . $sub[1] . '</h5>';
            echo '<p class="card-text"><i class="fa-solid fa-clock text-primary"></i> ' . $sub[2] . '</p>';
            echo '<p class="card-text"><i class="fa-solid fa-calendar-days text-primary"></i> ' . $sub[3] . '</p>';
            echo '<p class="card-text text-center text-success"><i class="fa-solid fa-hand-holding-dollar text-danger"></i> ' . $sub[4] . '</p>';
            echo '<a href="#" class="btn btn-primary">Book now</a>';
            echo '</div>';
            echo '</div>';
        }
    ?>
</body>
</html>