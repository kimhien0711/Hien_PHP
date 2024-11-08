<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        error_reporting();
        $Schools = array(
            'STUDENT' => array('ma' => 'SV01', 'name' => 'Phan Văn Chương', 'date' => '10/11/1988','render' => 'Nam'),
                        array('ma' => 'SV01', 'name' => 'Phan Văn Chương', 'date' => '10/11/1988','render' => 'Nam'),
                        array('ma' => 'SV01', 'name' => 'Phan Văn Chương', 'date' => '10/11/1988','render' => 'Nam'),
                        array('ma' => 'SV01', 'name' => 'Phan Văn Chương', 'date' => '10/11/1988','render' => 'Nam'),


            'TEACHER'=> array('ma' => 'GV01', 'name' => 'Trần Thiện Thành', 'date' => '04/06/1982','render' => 'Nam')

        );
        foreach ($Schools as $key => $value) {
            echo "$key <br>";
            echo "* {$value['ma']}<br>";
            echo "   {$value['name']}<br>";
            echo "   {$value['date']}<br>";
            echo "   {$value['render']}<br>";
        }
    ?>
</body>
</html>