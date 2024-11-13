<!DOCTYPE html>
<html>
<head>
    <title>Trang Admin</title>
</head>
<body>
    <h2>Trang Admin</h2>
    <form action="process.php" method="post">
        <input type="hidden" name="action" value="add">
        <label for="name">Tên sản phẩm:</label>
        <input type="text" name="name" required><br>
        <label for="price">Giá:</label>
        <input type="number" name="price" required><br>
        <input type="submit" value="Thêm sản phẩm">
    </form>
    <hr>
    <h3>Danh sách sản phẩm</h3>
    <?php
    // Kết nối đến cơ sở dữ liệu
    $conn = new mysqli("localhost", "root", "", "foodorder");
    if ($conn->connect_error) {
        die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
    }

    // Lấy danh sách sản phẩm
    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<p>".$row['name']." - ".$row['price']." <a href='process.php?action=edit&id=".$row['id']."'>Sửa</a> <a href='process.php?action=delete&id=".$row['id']."'>Xóa</a></p>";
        }
    } else {
        echo "Không có sản phẩm nào.";
    }

    // Đóng kết nối
    $conn->close();
    ?>
</body>
</html>
