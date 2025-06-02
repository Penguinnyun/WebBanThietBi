<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sản phẩm</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</head>
<body>
    
<?php
include 'connect_database.php'; // Đảm bảo rằng bạn đã kết nối cơ sở dữ liệu ở đây
if (isset($_GET['masanpham'])) {
    $masanpham = $_GET['masanpham'];
}
?>
<?php include 'header.php'; ?>

<div class="product-detail-container">
    <div class="left">
        <?php
        // Kết nối với cơ sở dữ liệu
        $conn = mysqli_connect("localhost", "root", "", "ql_webmaytinh");
        if (!$conn) {
            echo "Kết nối không thành công!" . mysqli_connect_error();
        } else {
            // Lấy dữ liệu sản phẩm từ cơ sở dữ liệu dựa trên masanpham
                $query = "SELECT * FROM tbl_sanpham WHERE masanpham='$masanpham'";
                $result = mysqli_query($conn, $query);
                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    echo '<img src="/baitaplon/anhweb/' . $row["anh"] . '" alt="product image">';
                } else {
                    echo '<p>Không tìm thấy sản phẩm.</p>';
                }
            } 
        
        ?>
    </div>
    <div class="center">
        <?php
        if (isset($row)) {
            echo '
            <p class="product-code">Mã SP: ' . $row["masanpham"] . '</p>
            <h2>' . $row["tensanpham"] . '</h2>
            <h3>Thông số sản phẩm:</h3>
            <p>' . nl2br($row["thongso"]) . '</p>
            <p class="price">' . number_format($row["gia"]) . '<span class="currency">đ</span></p>
            <div class="quantity-container">
                <label for="quantity">Số lượng:</label>
                <button class="quantity-button" onclick="updateQuantity(-1)">-</button>
                <input type="number" id="quantity" name="quantity" value="1" min="1" max="5" oninput="validateQuantity()">
                <button class="quantity-button" onclick="updateQuantity(1)">+</button>
            </div>

            <p id="quantity-warning" style="color: red; display: none;">Bạn chỉ được mua tối đa 5 sản phẩm này.</p>
                       
             <div class="product-detail">
                <div class="cart-button">
                <form method="POST" action="giohang.php?tentaikhoan='.$tentaikhoan.'">
                                <!-- Các trường dữ liệu ẩn để gửi thông tin sản phẩm -->
                                <input type="hidden" name="txtMaSanPham" value="' . $row["masanpham"] . '">
                                <input type="hidden" name="txtTenSanPham" value="' . $row["tensanpham"] . '">
                                <input type="hidden" name="txtAn" value="' . $row["anh"] . '">
                                <input type="hidden" id="txtSoLuong" name="txtSoLuong" value="1">
                                <input type="hidden" name="txtGia" value="' . $row["gia"] . '">
                                <button class="add-to-cart-button" type="submit" name="btnThemVaoGioHang">THÊM VÀO GIỎ HÀNG</button>
                </form>
                </div>
                
            </div>';
        }
        ?>
    </div>
    <div class="right">
        <div class="info-box">
            <h3>YÊN TÂM MUA HÀNG</h3>
            <ul>
                <li>Uy tín 24 năm Top đầu trên thị trường</li>
                <li>Sản phẩm chính hãng 100%</li>
                <li>Trả góp lãi suất 0% toàn bộ giỏ hàng</li>
                <li>Trả bảo hành tận nơi sử dụng</li>
                <li>Bảo hành tận nơi cho doanh nghiệp</li>
                <li>Vệ sinh miễn phí trọn đời PC, Laptop</li>
            </ul>
        </div>
        <div class="info-box">
            <h3>MIỄN PHÍ GIAO HÀNG</h3>
            <ul>
                <li>Giao hàng miễn phí toàn quốc</li>
                <li>Nhận hàng và thanh toán tại nhà (ship COD)</li>
            </ul>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>

<script>
function updateQuantity(amount) {
    var quantityInput = document.getElementById('quantity');
    var currentValue = parseInt(quantityInput.value);
    if (currentValue + amount >= 1 && currentValue + amount <= 5) {
        quantityInput.value = currentValue + amount;
    } else if (currentValue + amount > 5) {
        alert('Bạn chỉ được mua tối đa 5 sản phẩm này.');
    }
    document.getElementById('txtSoLuong').value = quantityInput.value; // Cập nhật giá trị số lượng vào input hidden
}

function validateQuantity() {
    var quantityInput = document.getElementById('quantity');
    if (quantityInput.value > 5) {
        quantityInput.value = 5;
        alert('Bạn chỉ được mua tối đa 5 sản phẩm này.');
    } else if (quantityInput.value < 1) {
        quantityInput.value = 1;
    }
    document.getElementById('txtSoLuong').value = quantityInput.value; // Cập nhật giá trị số lượng vào input hidden
}



</script>

</body>
</html>



