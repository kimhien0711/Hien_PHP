<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách sinh viên</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        input[type="text"] {
            width: 200px;
            padding: 5px;
        }
        input[type="button"] {
            padding: 5px 10px;
        }
    </style>
</head>
<body>

<h2>Danh sách sinh viên</h2>

<form method="post">
    <input type="text" name="search" placeholder="Nhập từ khóa cần tìm">
    <input type="submit" value="Tìm">
    <input type="submit" name="reset" value="Tất cả">
</form>

<table>
    <tr>
        <th>Mã sinh viên</th>
        <th>Họ và tên</th>
        <th>Giới tính</th>
        <th>Quê quán</th>
        <th>Ngày sinh</th>
        <th>Ngành học</th>
        <th>Tác vụ</th>
    </tr>

    <?php
    $students = [
        ['2015478', 'Nguyễn Thị Hồng Loan', 'Nữ', 'Hiệp Hòa - Bắc Giang', '1999', 'Công nghệ thông tin'],
        ['2017501', 'Vũ Giang Sơn', 'Nam', 'Móng Cái - Quảng Ninh', '1998', 'Cơ điện tử'],
        ['2017300', 'Bùi Thanh Lam', 'Nữ', 'Tiền Hải - Thái Bình', '2001', 'Kế toán'],
        ['2017105', 'Phạm Quốc Huy', 'Nam', 'Phủ Lý - Hà Nam', '2000', 'Văn hóa học'],
        ['2017594', 'Nguyễn Thanh Phương', 'Nữ', 'Ninh Giang - Hải Dương', '1998', 'Quản trị văn phòng'],
        ['2018320', 'Tô Cát Anh', 'Nữ', 'Yên Khánh - Ninh Bình', '2000', 'Ngôn ngữ Anh'],
        ['2018794', 'Phạm Hồng Quang', 'Nam', 'Lục Ngạn - Bắc Giang', '1998', 'Công nghệ thông tin'],
        ['2017553', 'Hoàng Thu Hạnh', 'Nữ', 'Gia Lộc - Hải Dương', '1999', 'Thiết kế thời trang'],
        ['2017199', 'Trần Nguyễn Ngọc Sơn', 'Nam', 'Nho Quan - Ninh Bình', '1999', 'Cơ khí']
    ];

    $search = $_POST['search'] ?? '';
    $filteredStudents = array_filter($students, function($student) use ($search) {
        return empty($search) || stripos(implode(' ', $student), $search) !== false;
    });

    foreach ($filteredStudents as $student) {
        echo "<tr>";
        foreach ($student as $info) {
            echo "<td>$info</td>";
        }
        echo "<td><a href='#'>Sửa</a> <a href='#'>Xóa</a></td>";
        echo "</tr>";
    }
    ?>

</table>

<button onclick="window.location='#'">Thêm mới</button>

</body>
</html>