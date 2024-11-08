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
        input[type="text"], input[type="number"] {
            width: 200px;
            padding: 5px;
        }
        input[type="button"], input[type="submit"] {
            padding: 5px 10px;
        }
    </style>
</head>
<body>

<h2>Danh sách sinh viên</h2>

<!-- Form thêm/sửa sinh viên -->
<div id="form-container" style="margin-bottom: 20px;">
    <form method="post">
        <input type="hidden" name="id" id="student-id">
        <input type="text" name="name" placeholder="Họ và tên" required>
        <input type="text" name="gender" placeholder="Giới tính" required>
        <input type="text" name="hometown" placeholder="Quê quán" required>
        <input type="text" name="dob" placeholder="Ngày sinh" required>
        <input type="text" name="major" placeholder="Ngành học" required>
        <input type="submit" name="add_or_update" value="Lưu">
    </form>
</div>

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
    session_start();

    // Khởi tạo danh sách sinh viên trong session
    if (!isset($_SESSION['students'])) {
        $_SESSION['students'] = [
            ['id' => '2015478', 'name' => 'Nguyễn Thị Hồng Loan', 'gender' => 'Nữ', 'hometown' => 'Hiệp Hòa - Bắc Giang', 'dob' => '1999', 'major' => 'Công nghệ thông tin'],
            ['id' => '2017501', 'name' => 'Vũ Giang Sơn', 'gender' => 'Nam', 'hometown' => 'Móng Cái - Quảng Ninh', 'dob' => '1998', 'major' => 'Cơ điện tử'],
            ['id' => '2017300', 'name' => 'Bùi Thanh Lam', 'gender' => 'Nữ', 'hometown' => 'Tiền Hải - Thái Bình', 'dob' => '2001', 'major' => 'Kế toán'],
            ['id' => '2017105', 'name' => 'Phạm Quốc Huy', 'gender' => 'Nam', 'hometown' => 'Phủ Lý - Hà Nam', 'dob' => '2000', 'major' => 'Văn hóa học'],
            ['id' => '2017594', 'name' => 'Nguyễn Thanh Phương', 'gender' => 'Nữ', 'hometown' => 'Ninh Giang - Hải Dương', 'dob' => '1998', 'major' => 'Quản trị văn phòng'],
            ['id' => '2018320', 'name' => 'Tô Cát Anh', 'gender' => 'Nữ', 'hometown' => 'Yên Khánh - Ninh Bình', 'dob' => '2000', 'major' => 'Ngôn ngữ Anh'],
            ['id' => '2018794', 'name' => 'Phạm Hồng Quang', 'gender' => 'Nam', 'hometown' => 'Lục Ngạn - Bắc Giang', 'dob' => '1998', 'major' => 'Công nghệ thông tin'],
            ['id' => '2017553', 'name' => 'Hoàng Thu Hạnh', 'gender' => 'Nữ', 'hometown' => 'Gia Lộc - Hải Dương', 'dob' => '1999', 'major' => 'Thiết kế thời trang'],
            ['id' => '2017199', 'name' => 'Trần Nguyễn Ngọc Sơn', 'gender' => 'Nam', 'hometown' => 'Nho Quan - Ninh Bình', 'dob' => '1999', 'major' => 'Cơ khí']
        ];
    }

    // Thêm hoặc cập nhật sinh viên
    if (isset($_POST['add_or_update'])) {
        $id = $_POST['id'] ?? uniqid();
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $hometown = $_POST['hometown'];
        $dob = $_POST['dob'];
        $major = $_POST['major'];

        // Cập nhật sinh viên nếu đã có ID
        if (!empty($_POST['id'])) {
            foreach ($_SESSION['students'] as &$student) {
                if ($student['id'] === $id) {
                    $student = ['id' => $id, 'name' => $name, 'gender' => $gender, 'hometown' => $hometown, 'dob' => $dob, 'major' => $major];
                    break;
                }
            }
        } else {
            // Thêm sinh viên mới
            $_SESSION['students'][] = ['id' => $id, 'name' => $name, 'gender' => $gender, 'hometown' => $hometown, 'dob' => $dob, 'major' => $major];
        }
    }

    // Xóa sinh viên
    if (isset($_GET['delete'])) {
        $idToDelete = $_GET['delete'];
        $_SESSION['students'] = array_filter($_SESSION['students'], function($student) use ($idToDelete) {
            return $student['id'] !== $idToDelete;
        });
    }

    // Tìm kiếm sinh viên
    $search = $_POST['search'] ?? '';
    $filteredStudents = array_filter($_SESSION['students'], function($student) use ($search) {
        return empty($search) || stripos($student['name'], $search) !== false || stripos($student['id'], $search) !== false;
    });

    if (empty($filteredStudents)) {
        echo "<tr><td colspan='7'>Không tìm thấy sinh viên nào.</td></tr>";
    } else {
        foreach ($filteredStudents as $student) {
            echo "<tr>";
            echo "<td>{$student['id']}</td>";
            echo "<td>{$student['name']}</td>";
            echo "<td>{$student['gender']}</td>";
            echo "<td>{$student['hometown']}</td>";
            echo "<td>{$student['dob']}</td>";
            echo "<td>{$student['major']}</td>";
            echo "<td>
                <a href='#' onclick='editStudent(\"{$student['id']}\", \"{$student['name']}\", \"{$student['gender']}\", \"{$student['hometown']}\", \"{$student['dob']}\", \"{$student['major']}\")'>Sửa</a>
                <a href='?delete={$student['id']}' onclick='return confirm(\"Bạn có chắc chắn muốn xóa không?\");'>Xóa</a>
            </td>";
            echo "</tr>";
        }
    }
    ?>

</table>

<button onclick="clearForm()">Thêm mới</button>

<script>
    function editStudent(id, name, gender, hometown, dob, major) {
        document.getElementById('student-id').value = id;
        document.querySelector('input[name="name"]').value = name;
        document.querySelector('input[name="gender"]').value = gender;
        document.querySelector('input[name="hometown"]').value = hometown;
        document.querySelector('input[name="dob"]').value = dob;
        document.querySelector('input[name="major"]').value = major;
    }

    function clearForm() {
        document.getElementById('student-id').value = '';
        document.querySelector('input[name="name"]').value = '';
        document.querySelector('input[name="gender"]').value = '';
        document.querySelector('input[name="hometown"]').value = '';
        document.querySelector('input[name="dob"]').value = '';
        document.querySelector('input[name="major"]').value = '';
    }
</script>

</body>
</html>
