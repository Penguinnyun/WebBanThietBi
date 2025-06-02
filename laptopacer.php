<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laptop Acer</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'header.php'; ?>

<h1 align="center">Laptop Acer</h1>
<div class="product-list">
    <?php
    // Kết nối với cơ sở dữ liệu
    $conn = mysqli_connect("localhost", "root", "", "ql_webmaytinh");
    if (!$conn) {
        die("Kết nối không thành công: " . mysqli_connect_error());
    }

    // Lấy dữ liệu sản phẩm từ cơ sở dữ liệu
    // Tìm ID của danh mục có tên "Laptop Acer" trong bảng tbl_menu.
    // Lấy tất cả sản phẩm từ bảng tbl_product có menu_ID khớp với ID vừa tìm được.
    
    $query = "SELECT * FROM tbl_product WHERE menu_ID = (SELECT ID FROM tbl_menu WHERE Name = 'Laptop Acer')";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '
            <div class="product">
                            <img src="/baitaplon/anhweb/' . $row["product_img"] . '" alt="' . $row["product_name"] . '">
                            <h2>' . $row["product_name"] . '</h2>
                            <p>' . nl2br($row["specifications"]) . '</p>
                            <p class="price">' . number_format($row["price"]) . '<span class="currency">đ</span></p>
                            <div class="cart-button">
                                <p class="product-code">MÃ SP: ' . $row["product_code"] . '</p>
                                <button class="add-to-cart-button">THÊM VÀO GIỎ HÀNG</button>
                            </div>
                        </div>
                        ';
        }
    } else {
        echo '<p>Không có sản phẩm nào.</p>';
    }

    mysqli_close($conn);
    ?>
</div>

<?php include 'footer.php'; ?>

</body>
</html>
