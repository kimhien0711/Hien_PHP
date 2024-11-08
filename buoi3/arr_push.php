<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Sản Phẩm</title>
</head>
<body>
    <h1>Thêm sản phẩm mới</h1>
    <form action="" method="POST">
        Tên sản phẩm: <input type="text" name="name" required>
        Gía sản phẩm: <input type="text" name="price" required>                  
        <input type="submit" value="Thêm sản phẩm">
    </form>
    <h1>Danh sách sản phẩm</h1>

    <?php
        session_start(); // Bắt đầu session

        // Kiểm tra và khởi tạo danh sách sản phẩm trong session
        if (!isset($_SESSION['products'])) {
            $_SESSION['products'] = [];
        }

        // Xử lý form khi người dùng thêm sản phẩm
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $productName = $_POST['name'];
            $productPrice = $_POST['price'];
            $product = [
                'name' => $productName,
                'price' => $productPrice
            ];
            // Thêm sản phẩm vào danh sách trong session
            $_SESSION['products'][] = $product;
        }

        // Hiển thị danh sách sản phẩm
        if (!empty($_SESSION['products'])) {
            echo "<ul>";
            foreach ($_SESSION['products'] as $product) {
                echo "<li>" . ($product['name']) . " - " . ($product['price']) . " VNĐ</li>";
            }
            echo "</ul>";
        } else {
            echo "Chưa có sản phẩm nào.";
        }
    ?>
</body>
</html>
