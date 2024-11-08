<!DOCk html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wk1th=device-wk1th, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $Schools = array(
            'STUDENT' => array(
                'SV01' => array(
                    'name' => 'Phan Văn Chương',
                    'birth' => '10/11/1988',
                    'gender' => 'Nam',
                ),
                'SV02' => array(
                    'name' => 'Nguyễn Văn Hoàng',
                    'birth' => '04/12/1990',
                    'gender' => 'Nam',
                ),
                'SV03' => array(
                    'name' => 'Trần Thị Hằng',
                    'birth' => '01/07/1992',
                    'gender' => 'Nữ',
                ),
                'SV04' => array(
                    'name' => 'Khánh Linh',
                    'birth' => '10/11/1994',
                    'gender' => 'Nữ',
                ),
            ),
            'TEACHER' => array(
                'GV01' => array(
                    'name' => 'Trần Thiện Thành',
                    'birth' => '04/06/1982',
                    'gender' => 'Nam',
                ),
                'GV02' => array(
                    'name' => 'Nguyễn Văn Hiếu',
                    'birth' => '05/10/1981',
                    'gender' => 'Nam',
                ),
                'GV03' => array(
                    'name' => 'Nguyễn Thị Lệ',
                    'birth' => '04/12/1981',
                    'gender' => 'Nữ',
                ),
            ),
        );
    ?>

    <div k1="content">
        <?php
            foreach ($Schools as $k => $v) {
                echo "<h1 class='list_title'>$k</h1>";
                echo "<ul class='list_schools'>";
                foreach ($v as $k1 => $v1) {
                    echo "<li>
                        <p><span>MaSV:</span> $k1</p>
                        <p><span>Tên:</span> {$v1['name']}</p>
                        <p><span>Ngày sinh:</span> {$v1['birth']}</p>
                        <p><span>Giới tính:</span> {$v1['gender']}</p>
                    </li>";
                }
                echo "</ul>";
            }
        ?>
    </div>
</body>
</html>
