<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả tìm kiếm</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'connect_database.php'; ?>
<?php include 'header.php'; ?>

<?php
$timkiem = '';
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btnsearch'])) {
    $timkiem = $_POST["txtsearch"];
}
?>

    <h1 class=search-result> Tìm Kiếm: "<?php echo htmlspecialchars($timkiem); ?>"</h1>

<div class="product-list">
<?php
// Kết nối với cơ sở dữ liệu
$conn = mysqli_connect("localhost", "root", "", "ql_webmaytinh");
if (!$conn) {
    echo "Kết nối không thành công!" . mysqli_connect_error();
} else {
    if (!empty($timkiem)) {
        $query = "SELECT * FROM tbl_sanpham
                        WHERE CONCAT(masanpham, tensanpham, anh, tendanhmuc, tendanhmuccon, soluong, gia) LIKE N'%" . $timkiem . "%'";
                        // $query = "SELECT * FROM tbl_sanpham WHERE tensanpham LIKE N'%" . $timkiem . "%'";
                    $result = mysqli_query($conn, $query);
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '
                <div class="product">
                    <form method="POST" action="giohang.php?tentaikhoan=' . $tentaikhoan . '">
                        <a href="chitietsanpham.php?masanpham=' . $row["masanpham"] . '&tentaikhoan=' . $tentaikhoan . '">
                            <img src="/baitaplon/anhweb/' . $row["anh"] . '" alt="product image">
                            <h2>' . $row["tensanpham"] . '</h2>
                        </a>
                        <p class="price">' . number_format($row["gia"], 0, ',', '.') . '<span class="currency">đ</span></p>
                        <div class="cart-button">
                            <p class="product-code">MÃ SP: ' . $row["masanpham"] . '</p>
                            <!-- Các trường dữ liệu ẩn để gửi thông tin sản phẩm -->
                            <input type="hidden" name="txtMaSanPham" value="' . $row["masanpham"] . '">
                            <input type="hidden" name="txtTenSanPham" value="' . $row["tensanpham"] . '">
                            <input type="hidden" name="txtAnh" value="' . $row["anh"] . '">
                            <input type="hidden" name="txtSoLuong" value="1">
                            <input type="hidden" name="txtGia" value="' . $row["gia"] . '">
                            <button class="add-to-cart-button" type="submit" name="btnThemVaoGioHang">THÊM VÀO GIỎ HÀNG</button>
                        </div>
                    </form>
                </div>
                ';
            }
        } else {
            echo '<p>Không có sản phẩm nào.</p>';
        }
    }
    // Đóng kết nối cơ sở dữ liệu
    mysqli_close($conn);
}
?>
</div>

<?php include 'footer.php'; ?>
</body>
</html>
