<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
  }
  $cart_count = isset($_SESSION['cart_count']) ? $_SESSION['cart_count'] : 0;
include 'connect_database.php'; // Đảm bảo rằng bạn đã kết nối cơ sở dữ liệu ở đây
// Kiểm tra xem 'txtTenTaiKhoan' có tồn tại trong $_SESSION hay không
if (isset($_SESSION["txtTenTaiKhoan"])) {
    $tentaikhoan = $_SESSION["txtTenTaiKhoan"];
} else {
    $tentaikhoan = null; // Gán giá trị mặc định nếu chưa đăng nhập
}
?>


<!-- logo chính -->
<div class="header">
    <a href="index.php"><img src="/baitaplon/anhweb/logohacom.png" alt="Logo" class="logo"></a>

    <!-- phần tìm kiếm đầu trang chủ -->
    <div class="search-container">
        <form id="searchForm" action="timkiemsanpham.php" method="POST" onsubmit="return validateForm()">
            <input type="text" id="txtsearch" name="txtsearch" placeholder="Nhập tên sản phẩm, từ khóa cần tìm">
            <button type="submit" name="btnsearch"><img src="/baitaplon/anhweb/searchicon.svg"
                    alt="Search Icon"></button>
        </form>
    </div>
    <script>
    function validateForm() {
        var x = document.getElementById("txtsearch").value;
        if (x == "") {
            alert("Vui lòng nhập thông tin tìm kiếm");
            return false;
        }
        return true;
    }
    </script>

    <div class="icons">
        <a href="https://www.facebook.com/www.hacom.vn"><img src="/baitaplon/anhweb/logofb.png" alt="Facebook"></a>
        <a href="https://www.youtube.com/channel/UCIoWNINN5sJcx1zboLXZmeA"><img src="/baitaplon/anhweb/logoyt.png"
                alt="YouTube"></a>
        <a href="https://www.instagram.com/hacom.vn/"><img src="/baitaplon/anhweb/logoig.png" alt="Instagram"></a>
        <a href="https://www.tiktok.com/@hacom.vn"><img src="/baitaplon/anhweb/logotiktok.png" alt="TikTok"></a>
        <a href="https://technews.com.vn/"><img src="/baitaplon/anhweb/logonews.png" alt="News"></a>
        <!-- Điều kiện kiểm tra xem người dùng đã đăng nhập chưa -->
        <?php if (isset($tentaikhoan)): ?>
        <a href="profile.php?tentaikhoan=<?php echo $tentaikhoan ?>"><img src="/baitaplon/anhweb/accounticonmoi.png"
                alt="Account"> <?php echo $tentaikhoan; ?></a>
        <?php else: ?>
        <a href="dangnhap.php"><img src="/baitaplon/anhweb/accounticonmoi.png" alt="Account">Tài khoản</a>
        <?php endif; ?>
        <a href="donhang.php?tentaikhoan=<?php echo $tentaikhoan ?>"><img src="/baitaplon/anhweb/truckicon.png"
                alt="Track Order">Tra cứu đơn hàng</a>
        <a href="giohang.php?tentaikhoan=<?php echo $tentaikhoan ?>"><img src="/baitaplon/anhweb/carticon.png"
                alt="Cart">Giỏ hàng</a>
    </div>
</div>

<div class="navbar">
    <ul class="main-menu">
        <?php
        $conn = mysqli_connect("localhost", "root", "", "ql_webmaytinh");
        if (!$conn) {
            echo "Kết nối không thành công: " . mysqli_connect_error();
        } else {
            $query = "SELECT * FROM tbl_danhmuc";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) > 0) {
                while ($rows = mysqli_fetch_assoc($result)) {
                    $tendanhmuc_escaped = mysqli_real_escape_string($conn, $rows["tendanhmuc"]);
                    $queryChild = "SELECT * FROM tbl_danhmuccon WHERE tendanhmuc='$tendanhmuc_escaped'";
                    $resultChild = mysqli_query($conn, $queryChild);
                    $IsChild = false;
                    if (mysqli_num_rows($resultChild) > 0) {
                        $IsChild = true;
                    }

                    if ($IsChild == false) {
                        echo '<li><a href="danhmuc.php?danhmuc=' . $rows["tendanhmuc"] . '">' . $rows["tendanhmuc"] . '</a></li>';
                    } else {
                        echo '<li class="dropdown">
                            <a href="danhmuc.php?danhmuc=' . $rows["tendanhmuc"] . '" class="dropbtn">' . $rows["tendanhmuc"] . '</a>
                            <div class="dropdown-content">';
                        while ($rowChild = mysqli_fetch_assoc($resultChild)) {
                            echo '<a href="danhmuc.php?danhmuc=' . $rowChild["tendanhmuccon"] . '">' . $rowChild["tendanhmuccon"] . '</a>';
                        }
                        echo '</div></li>';
                    }
                }
            }
        }
        ?>
    </ul>
</div>