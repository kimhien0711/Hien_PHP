<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $course = array(
            'FRONTEND' => array('title' => 'Khóa học lập trình Frontend Online', 'fee' => 1200000),
            'PHP-MYSQL'=> array('title'=> 'Khóa học lập trình web PHP-MYSQL', 'fee' => 1680000 )
        );
        foreach ($course as $key => $value) {
            echo "$key <br>";
            echo "- {$value['title']}<br>";
            echo "- {$value['fee']}<br>";
        }
    ?>
</body>
</html>