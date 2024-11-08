<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
           
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>

    <?php
        session_start();

        // danh sách sinh viên ban đầu
        if (!isset($_SESSION['initialized'])) {
            $_SESSION['students'] = [
                ['id' => '2015478', 'name' => 'Nguyễn Thị Hồng Loan', 'gender' => 'Nữ', 'hometown' => 'Hiệp Hòa - Bắc Giang', 'birth_year' => 1999, 'major' => 'Công nghệ thông tin'],
                ['id' => '2017501', 'name' => 'Vũ Giang Sơn', 'gender' => 'Nam', 'hometown' => 'Móng Cái - Quảng Ninh', 'birth_year' => 1998, 'major' => 'Cơ điện tử'],
                ['id' => '2017300', 'name' => 'Bùi Thanh Lam', 'gender' => 'Nữ', 'hometown' => 'Tiền Hải - Thái Bình', 'birth_year' => 2001, 'major' => 'Kế toán'],
                ['id' => '2017105', 'name' => 'Phạm Quốc Huy', 'gender' => 'Nam', 'hometown' => 'Phủ Lý - Hà Nam', 'birth_year' => 2000, 'major' => 'Văn hóa học'],
                ['id' => '2017594', 'name' => 'Nguyễn Thanh Phương', 'gender' => 'Nữ', 'hometown' => 'Ninh Giang - Hải Dương', 'birth_year' => 1999, 'major' => 'Quản trị văn phòng'],
                ['id' => '2018320', 'name' => 'Tô Cát Anh', 'gender' => 'Nữ', 'hometown' => 'Yên Khánh - Ninh Bình', 'birth_year' => 2000, 'major' => 'Ngôn ngữ Anh'],
                ['id' => '2018794', 'name' => 'Phạm Hồng Quang', 'gender' => 'Nam', 'hometown' => 'Lục Ngạn - Bắc Giang', 'birth_year' => 1998, 'major' => 'Công nghệ thông tin'],
                ['id' => '2017553', 'name' => 'Hoàng Thu Hạnh', 'gender' => 'Nữ', 'hometown' => 'Gia Lộc - Hải Dương', 'birth_year' => 1999, 'major' => 'Thiết kế thời trang'],
                ['id' => '2017199', 'name' => 'Trần Nguyên Ngọc Sơn', 'gender' => 'Nam', 'hometown' => 'Nho Quan - Ninh Bình', 'birth_year' => 1999, 'major' => 'Cơ khí'],
            ];
            $_SESSION['initialized'] = true; // Đánh dấu đã khởi tạo danh sách ban đầu
        }

        // thêm sinh viên mới
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'add') {
            $newStudent = [
                'id' => $_POST['id'],
                'name' => $_POST['name'],
                'gender' => $_POST['gender'],
                'hometown' => $_POST['hometown'],
                'birth_year' => $_POST['birth_year'],
                'major' => $_POST['major'],
            ];

            // Thêm sinh viên mới vào mảng session students
            $_SESSION['students'][] = $newStudent;

            // Chuyển hướng để ngăn form thêm sinh viên lặp lại khi refresh trang
            header("Location: ".$_SERVER['PHP_SELF']);
            exit();
        }

        //tìm kiếm sinh viên
        $students = $_SESSION['students']; // Lấy danh sách sinh viên từ session
        $searchKeyword = '';
        if (isset($_POST['search'])) {
            $searchKeyword = $_POST['keyword'];
            $students = array_filter($students, function ($student) use ($searchKeyword) {
                return strpos($student['id'], $searchKeyword) !== false ||
                        strpos($student['birth_year'], $searchKeyword) !== false || 
                        strpos($student['gender'], $searchKeyword) !== false ||
                        strpos($student['hometown'], $searchKeyword) !== false ||
                        strpos($student['major'], $searchKeyword) !== false ||
                        strpos($student['name'], $searchKeyword) !== false;
            });
        }

        //reset tìm kiếm
        if (isset($_POST['reset'])) {
            header("Location: ".$_SERVER['PHP_SELF']);
            exit();
        }

        //Xóa sinh viên
        if (isset($_GET['delete'])) {
            $idToDelete = $_GET['delete'];
            $_SESSION['students'] = array_filter($_SESSION['students'], function($student) use ($idToDelete) {
                return $student['id'] !== $idToDelete;
            });
        }
    ?>

    <form action="BTVN.php" method="POST">
        <h1>DANH SÁCH SINH VIÊN</h1>
        <input type="text" name="keyword" placeholder="Nhập từ khóa tìm kiếm"  value="<?= htmlspecialchars($searchKeyword) ?>">
        <button type="submit" name="search">Tìm</button>
        <button type="submit" name="reset">Tất cả</button>

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
            
            <?php if (!empty($students)): ?>
                <?php foreach ($students as $student): ?>
                    <tr>
                        <td><?= htmlspecialchars($student['id']) ?></td>
                        <td><?= htmlspecialchars($student['name']) ?></td>
                        <td><?= htmlspecialchars($student['gender']) ?></td>
                        <td><?= htmlspecialchars($student['hometown']) ?></td>
                        <td><?= htmlspecialchars($student['birth_year']) ?></td>
                        <td><?= htmlspecialchars($student['major']) ?></td>
                        <td>
                            <a href="edit.php?id=<?= urlencode($student['id']) ?>">Sửa</a> |
                            <a href="delete.php?id=<?= urlencode($student['id']) ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Xóa</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7">Không tìm thấy sinh viên nào</td>
                </tr>
            <?php endif; ?>
        </table>

    </form>
    <h3>Thêm sinh viên mới</h3>
    <form method="POST" action="BTVN.php">
        <input type="text" name="id" placeholder="Mã sinh viên" required>
        <input type="text" name="name" placeholder="Họ và tên" required>
        <select name="gender" required>
            <option value="">Chọn giới tính</option>
            <option value="Nam">Nam</option>
            <option value="Nữ">Nữ</option>
        </select>
        <input type="text" name="hometown" placeholder="Quê quán" required>
        <input type="number" name="birth_year" placeholder="Năm sinh" required>
        <input type="text" name="major" placeholder="Ngành học" required>
        <input type="hidden" name="action" value="add">
        <button type="submit">Thêm</button>
    </form>

</body>
</html>
