<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer Store</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <?php include 'connect_database.php'; ?>
    <?php include 'header.php'; ?>


    <div class="container">
        <div class="main-content">
            <div class="sidebar">
                <h4>Chăm sóc khách hàng</h4>
                <ul>
                    <li><a href="hotro.php">Hỗ trợ</a></li>
                    <li><a href="lienhe.php">Liên hệ</a></li>
                    <li><a href="chinhsachbaohanh.php">Chính sách bảo hành</a></li>
                    <li><a href="chinhsachdoitra.php">Chính sách đổi trả</a></li>
                </ul>
                <h4>Hệ thống cửa hàng </h4>
                <ul>
                    <li><a href="hethonghacommienbac.php">Hacom miền Bắc</a></li>
                    <li><a href="hethonghacommientrung.php">Hacom miền Trung</a></li>
                    <li><a href="hethonghacommiennam.php">Hacom miền Nam</a></li>
                </ul>
                <h4>Tin tức </h4>
                <ul>
                    <li><a href="sukien.php">Sự kiện</a></li>
                    <li><a href="khuyenmai.php">Chương trình khuyến mãi </a></li>
                </ul>
            </div>
            <div class="main-banner-wrapper">
                <button class="prev">&#10094;</button>
                <div class="main-banner">
                    <div class="banner-slides">
                        <img src="/baitaplon/anhweb/anhwebto2.png" alt="Banner 1">
                        <img src="/baitaplon/anhweb/anhwebto4.png" alt="Banner 2">
                        <img src="/baitaplon/anhweb/anhwebto5.png" alt="Banner 3">
                        <img src="/baitaplon/anhweb/anhwebto6.png" alt="Banner 4">
                        <img src="/baitaplon/anhweb/anhwebto7.jpg" alt="Banner 5">
                    </div>
                </div>
                <button class="next">&#10095;</button>
            </div>

            <div class="right-images">
                <img src="/baitaplon/anhweb/anhphai4.png" alt="Right Image 1">
                <img src="/baitaplon/anhweb/anhphai3.png" alt="Right Image 2">
                <img src="/baitaplon/anhweb/anhphai1.jpg" alt="Right Image 3">
                <img src="/baitaplon/anhweb/anhphai2.jpg" alt="Right Image 4">
                <img src="/baitaplon/anhweb/anhphai5.webp" alt="Right Image 5">
            </div>
        </div>

        <div class="banner">
            <div class="banner-item">
                <img src="/baitaplon/anhweb/anhweb1.jpg" alt="Banner 2">
            </div>
            <div class="banner-item">
                <img src="/baitaplon/anhweb/anhweb2.jpg" alt="Banner 3">
            </div>
            <div class="banner-item">
                <img src="/baitaplon/anhweb/anhweb3.png" alt="Banner 4">
            </div>
            <div class="banner-item">
                <img src="/baitaplon/anhweb/anhweb4.png" alt="Banner 5">
            </div>
        </div>

        <div class="discount-codes">
            <h2>Mã Giảm Giá</h2>
            <div class="codes">
                <div class="code">
                    <div class="left-content">
                        <h3>Giảm 50K </h3>
                        <p>ĐH từ 0đ</p>
                        <p>NHẬP MÃ NGAY</p>
                    </div>
                    <div class="separator"></div>
                    <div class="right-content">
                        <img src="/baitaplon/anhweb/discountlogo.png" alt="Logo Giảm Giá" class="discount-logo">
                        <p class="discount-code">GIAM50K0Đ</p>
                        <button class="copy-btn" onclick="copyCode('GIAM50K0Đ')">Copy mã</button>
                    </div>
                </div>
                <div class="code">
                    <div class="left-content">
                        <h3>Giảm 150K </h3>
                        <p>ĐH từ 0đ</p>
                        <p>NHẬP MÃ NGAY</p>
                    </div>
                    <div class="separator"></div>
                    <div class="right-content">
                        <img src="/baitaplon/anhweb/discountlogo.png" alt="Logo Giảm Giá" class="discount-logo">
                        <p class="discount-code">GIAM150K0Đ</p>
                        <button class="copy-btn" onclick="copyCode('GIAM150K0Đ')">Copy mã</button>
                    </div>
                </div>
                <div class="code">
                    <div class="left-content">
                        <h3>Giảm 300K </h3>
                        <p>ĐH từ 0đ</p>
                        <p>NHẬP MÃ NGAY</p>
                    </div>
                    <div class="separator"></div>
                    <div class="right-content">
                        <img src="/baitaplon/anhweb/discountlogo.png" alt="Logo Giảm Giá" class="discount-logo">
                        <p class="discount-code">GIAM300K0Đ</p>
                        <button class="copy-btn" onclick="copyCode('GIAM300K0Đ')">Copy mã</button>
                    </div>
                </div>
                <div class="code">
                    <div class="left-content">
                        <h3>Giảm 100K </h3>
                        <p>ĐH từ 0đ</p>
                        <p>NHẬP MÃ NGAY</p>
                    </div>
                    <div class="separator"></div>
                    <div class="right-content">
                        <img src="/baitaplon/anhweb/discountlogo.png" alt="Logo Giảm Giá" class="discount-logo">
                        <p class="discount-code">GIAM100K0Đ</p>
                        <button class="copy-btn" onclick="copyCode('GIAM100K0Đ')">Copy mã</button>
                    </div>
                </div>
                <div class="code">
                    <div class="left-content">
                        <h3>Giảm 200K </h3>
                        <p>ĐH từ 0đ</p>
                        <p>NHẬP MÃ NGAY</p>
                    </div>
                    <div class="separator"></div>
                    <div class="right-content">
                        <img src="/baitaplon/anhweb/discountlogo.png" alt="Logo Giảm Giá" class="discount-logo">
                        <p class="discount-code">GIAM200K0Đ</p>
                        <button class="copy-btn" onclick="copyCode('GIAM200K0Đ')">Copy mã</button>
                    </div>
                </div>
                <div class="code">
                    <div class="left-content">
                        <h3>Giảm 500K </h3>
                        <p>ĐH từ 0đ</p>
                        <p>NHẬP MÃ NGAY</p>
                    </div>
                    <div class="separator"></div>
                    <div class="right-content">
                        <img src="/baitaplon/anhweb/discountlogo.png" alt="Logo Giảm Giá" class="discount-logo">
                        <p class="discount-code">GIAM500K0Đ</p>
                        <button class="copy-btn" onclick="copyCode('GIAM500K0Đ')">Copy mã</button>
                    </div>
                </div>
            </div>
        </div>




        <h1 align="center">Welcome to Our Computer Store</h1>
        <h2>LAPTOP</h2>
        <div class="product-list">
            <?php
        // Kết nối với cơ sở dữ liệu
        $conn = mysqli_connect("localhost", "root", "", "ql_webmaytinh");
     if (!$conn) {
         echo "Kết nối không thành công!" . mysqli_connect_error();
     } else {
         // Lấy dữ liệu sản phẩm từ cơ sở dữ liệu
         $query = "SELECT * FROM tbl_sanpham WHERE tendanhmuc='Laptop' LIMIT 8";
         $result = mysqli_query($conn, $query);//Thực thi truy vấn
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '
                <div class="product">
                    <form method="POST" action="giohang.php?tentaikhoan=' . $tentaikhoan . '">
                        <a href="chitietsanpham.php?masanpham=' . $row["masanpham"] . '&tentaikhoan=' . $tentaikhoan . '">
                            <img src="/baitaplon/anhweb/' . $row["anh"] . '" alt="product image">
                            <h2>'. $row["tensanpham"] . '</h2>
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
        ?>
        </div>
        <div class="view-all-container">
            <a href="danhmuc.php?danhmuc=Laptop" class="view-all-button">Xem tất cả sản phẩm</a>
        </div>



        <h2>PC</h2>

        <div class="product-list">
            <?php
        // Kết nối với cơ sở dữ liệu
        $conn = mysqli_connect("localhost", "root", "", "ql_webmaytinh");
     if (!$conn) {
         echo "Kết nối không thành công!" . mysqli_connect_error();
     } else {
         // Lấy dữ liệu sản phẩm từ cơ sở dữ liệu
         $query = "SELECT * FROM tbl_sanpham WHERE tendanhmuc='PC' LIMIT 8";
         $result = mysqli_query($conn, $query);//Thực thi truy vấn
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
        ?>
        </div>
        <div class="view-all-container">
            <a href="danhmuc.php?danhmuc=PC" class="view-all-button">Xem tất cả sản phẩm</a>
        </div>


        <h2>Linh kiện máy tính</h2>

        <div class="product-list">
            <?php
        // Kết nối với cơ sở dữ liệu
        $conn = mysqli_connect("localhost", "root", "", "ql_webmaytinh");
     if (!$conn) {
         echo "Kết nối không thành công!" . mysqli_connect_error();
     } else {
         // Lấy dữ liệu sản phẩm từ cơ sở dữ liệu
         $query = "SELECT * FROM tbl_sanpham WHERE tendanhmuc='Linh kiện máy tính' LIMIT 8";
         $result = mysqli_query($conn, $query);//Thực thi truy vấn
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
        ?>
        </div>
        <div class="view-all-container">
            <a href="danhmuc.php?danhmuc=Linh kiện máy tính" class="view-all-button">Xem tất cả sản phẩm</a>
        </div>

        <h2>Màn hình máy tính</h2>

        <div class="product-list">
            <?php
        // Kết nối với cơ sở dữ liệu
        $conn = mysqli_connect("localhost", "root", "", "ql_webmaytinh");
     if (!$conn) {
         echo "Kết nối không thành công!" . mysqli_connect_error();
     } else {
         // Lấy dữ liệu sản phẩm từ cơ sở dữ liệu
         $query = "SELECT * FROM tbl_sanpham WHERE tendanhmuc='Màn hình máy tính' LIMIT 8";
         $result = mysqli_query($conn, $query);//Thực thi truy vấn
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
        ?>
        </div>
        <div class="view-all-container">
            <a href="danhmuc.php?danhmuc=Màn hình máy tính" class="view-all-button">Xem tất cả sản phẩm</a>
        </div>

        <h2>Nội thất Gaming</h2>

        <div class="product-list">
            <?php
        // Kết nối với cơ sở dữ liệu
        $conn = mysqli_connect("localhost", "root", "", "ql_webmaytinh");
     if (!$conn) {
         echo "Kết nối không thành công!" . mysqli_connect_error();
     } else {
         // Lấy dữ liệu sản phẩm từ cơ sở dữ liệu
         $query = "SELECT * FROM tbl_sanpham WHERE tendanhmuc='Nội thất Gaming' LIMIT 8";
         $result = mysqli_query($conn, $query);//Thực thi truy vấn
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
        ?>
        </div>
        <div class="view-all-container">
            <a href="danhmuc.php?danhmuc=Nội thất Gaming" class="view-all-button">Xem tất cả sản phẩm</a>
        </div>

        <h2>Phụ kiện rời</h2>

        <div class="product-list">
            <?php
        // Kết nối với cơ sở dữ liệu
        $conn = mysqli_connect("localhost", "root", "", "ql_webmaytinh");
     if (!$conn) {
         echo "Kết nối không thành công!" . mysqli_connect_error();
     } else {
         // Lấy dữ liệu sản phẩm từ cơ sở dữ liệu
         $query = "SELECT * FROM tbl_sanpham WHERE tendanhmuc='Phụ kiện rời' LIMIT 8";
         $result = mysqli_query($conn, $query);//Thực thi truy vấn
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
        ?>
        </div>
        <div class="view-all-container">
            <a href="danhmuc.php?danhmuc=Phụ kiện rời" class="view-all-button">Xem tất cả sản phẩm</a>
        </div>

        <h2>Phụ kiện </h2>

        <div class="product-list">
            <?php
        // Kết nối với cơ sở dữ liệu
        $conn = mysqli_connect("localhost", "root", "", "ql_webmaytinh");
     if (!$conn) {
         echo "Kết nối không thành công!" . mysqli_connect_error();
     } else {
         // Lấy dữ liệu sản phẩm từ cơ sở dữ liệu
         $query = "SELECT * FROM tbl_sanpham WHERE tendanhmuc='Phụ kiện ' LIMIT 8";
         $result = mysqli_query($conn, $query);//Thực thi truy vấn
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
        ?>
        </div>
        <div class="view-all-container">
            <a href="danhmuc.php?danhmuc=Phụ kiện " class="view-all-button">Xem tất cả sản phẩm</a>
        </div>


        <?php include 'footer.php'; ?>

        <script>
        document.addEventListener('DOMContentLoaded', function() {
            let currentSlide = 0;
            const numSlides = document.querySelectorAll('.banner-slides img').length;

            function showSlide(index) {
                const slideWidth = document.querySelector('.main-banner').clientWidth;
                const slider = document.querySelector('.banner-slides');
                slider.style.transform = `translateX(${-index * slideWidth}px)`;
            }

            function nextSlide() {
                currentSlide = (currentSlide + 1) % numSlides;
                showSlide(currentSlide);
            }

            function prevSlide() {
                currentSlide = (currentSlide - 1 + numSlides) % numSlides;
                showSlide(currentSlide);
            }

            document.querySelector('.next').addEventListener('click', nextSlide);
            document.querySelector('.prev').addEventListener('click', prevSlide);

            setInterval(nextSlide, 5000); // Tự động trượt mỗi 3 giây
        });
        </script>

        <script>
        function copyCode(code) {
            navigator.clipboard.writeText(code).then(function() {
                alert('Đã sao chép mã: ' + code);
            }, function(err) {
                alert('Không thể sao chép mã: ', err);
            });
        }
        </script>

</body>

</html>