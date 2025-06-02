<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'ql_webmaytinh');
if (!$conn) {
    echo "Kết nối không thành công " . mysqli_connect_error();
}

$tk = $_GET['tentaikhoan'];

// Khởi tạo giỏ hàng nếu chưa tồn tại
if (!isset($_SESSION['giohang'])) {
    $_SESSION['giohang'] = [];
}

// Cập nhật số lượng giỏ hàng vào session
function updateCartCount()
{
    $_SESSION['cart_count'] = count($_SESSION['giohang']);
}

// Xoá tất cả sản phẩm trong giỏ hàng
if (isset($_GET['delcart']) && ($_GET['delcart'] == 1)) {
    unset($_SESSION['giohang']);
    $_SESSION['giohang'] = [];
    updateCartCount();
}

// Xoá sản phẩm trong giỏ hàng
if (isset($_GET['delid']) && ($_GET['delid'] >= 0)) {
    array_splice($_SESSION['giohang'], $_GET['delid'], 1);
    updateCartCount();
}

function batLoiSoLuong($soluong)
{
    if (strlen($soluong) === 0) {
        return false;
    }
    if (!preg_match('/^[0-9]+$/', $soluong)) {
        return false;
    }
    return true;
}

function chuanHoaDuLieu($soluong)
{
    if (batLoiSoLuong($soluong) === false) {
        echo '
            <script>
                alert("Số lượng sai!");
            </script>
        ';
        return false;
    }
    return true;
}

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['btnThemVaoGioHang'])) {
    $tensanpham = $_POST["txtTenSanPham"];
    $anh = $_POST["txtAnh"];
    $gia = $_POST["txtGia"];
    $soluong = $_POST["txtSoLuong"];
    $masanpham = $_POST["txtMaSanPham"];

    if (chuanHoaDuLieu($soluong) === false) {
        exit();
    }

    $query = "SELECT * FROM tbl_sanpham WHERE masanpham='$masanpham'";
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        if ((int)$row["soluong"] < 1) {
            echo '
                <script>
                    alert("Mặt hàng này đã hết!");
                </script>
            ';
        } else if ($soluong > (int)$row["soluong"]) {
            echo '
                <script>
                    alert("Số lượng bạn mua đã vượt quá tồn kho!");
                </script>
            ';
        } else {
            $check = 0;
            for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
                if ($_SESSION['giohang'][$i][4] == $masanpham) {
                    echo '
                        <script>
                            alert("Sản phẩm này đã có trong giỏ hàng");
                            window.location.href = "giohang.php?tentaikhoan=' . $tk . '";
                        </script>
                    ';
                    $check = 1;
                    break;
                }
            }

            if ($check === 0) {
                echo '
                    <script>
                        alert("Thêm vào giỏ hàng thành công");
                         window.location.href = "giohang.php?tentaikhoan=' . $tk . '";
                    </script>
                ';
                $sp = [$tensanpham, $anh, $gia, $soluong, $masanpham];
                $_SESSION['giohang'][] = $sp;
                updateCartCount();
            }
        }
    }
}
function chuanHoaTien($number)
{
    return number_format($number, 0, '', '.');
}

function showGioHang($tk)
{
    if (isset($_SESSION['giohang']) && is_array($_SESSION['giohang'])) {
        $tongtien = 0;
        for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
            $tt = $_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][3];
            $tongtien += $tt;
            echo '
                <tr>
                    <td>' . ($i + 1) . '</td>
                    <td>
                     <div class="cart-info">
                    <img src="/baitaplon/anhweb/' . $_SESSION['giohang'][$i][1] . '" alt=""></td>
                    </div>
                    <td>' . $_SESSION['giohang'][$i][4]. '</td>
                    <td>' . $_SESSION['giohang'][$i][0] . '</td>
                    <td>' . $_SESSION['giohang'][$i][3] . '</td>
                    <td>' . chuanHoaTien($_SESSION['giohang'][$i][2]) . ' đ</td>
                     <td><a href="giohang.php?delid=' . $i . '&tentaikhoan=' . $tk . '" class="xoagiohang">Xoá khỏi giỏ hàng</a></td>
                </tr>            
            ';
        }
        echo '
            <div class="total-price">
                <table>
                    <tr>
                        <td style="color: skyblue;">Thông tin đơn hàng</td>
                    </tr>
                    <tr>
                        <td>Tổng tiền phải trả:</td>
                        <td>' .chuanHoaTien($tongtien) . ' đ</td>
                    </tr>
                </table>
            </div>    
        ';
    } else {
        echo '
            <div class="total-price">
                <table>
                    <tr>
                        <td style="color: skyblue;">Thông tin đơn hàng</td>
                    </tr>
                    <tr>
                        <td>Tổng tiền phải trả:</td>
                        <td>0 đ</td>
                    </tr>
                </table>
            </div>    
        ';
    }
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ Hàng</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="cart.css">
    
</head>
<body>
    <?php include 'header.php'; ?>

    <?php
    $query = "SELECT * FROM tbl_thongtintaikhoan where tentaikhoan ='$tentaikhoan'";
    $result = mysqli_query($conn, $query);

    $hovaten = "";
    $sodienthoai = "";
    $CCCD = "";
    $diachi = "";

    while ($row = mysqli_fetch_assoc($result)) {
        $hovaten = $row["hovaten"];
        $sodienthoai = $row["sodienthoai"];
        $CCCD = $row["cccd"];
        $diachi = $row["diachi"];
    };

    ?>

    <div class="container">
        <h1>Giỏ hàng của bạn</h1>

        <table>
            <tr>
                <th>STT</th>
                <th>Ảnh</th>
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Số lượng</th>
                <th>Giá</th>
                <th>Thao tác</th>
                

            </tr>
            <?php
            showGioHang($tk);
            ?>
        </table>
    </div>

    <div class="container-2">
        <h1>CỬA HÀNG MÁY TÍNH HACOM</h1>
        <h2>Thông tin giao hàng</h2>
        <form method="POST">
            <div class="form-group">
                <label for="name">Họ và tên</label>
                <input type="text" id="name" name="name" placeholder="Họ và tên" value="<?php echo $hovaten ?>" disabled>
            </div>
            <div class="form-group">
                <label for="CCCD">Căn cước công dân</label>
                <input type="CCCD" id="CCCD" name="CCCD" placeholder="Căn cước công dân" value="<?php echo $CCCD ?>" disabled>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="phone">Số điện thoại</label>
                    <input type="text" id="phone" name="phone" placeholder="Số điện thoại" value="<?php echo $sodienthoai ?>" disabled>
                </div>
                <div class="form-group">
                    <label for="address">Địa chỉ</label>
                    <input id="address" name="address" placeholder="Địa chỉ" value="<?php echo $diachi ?>" disabled>
                </div>
            </div>
            <h2>Phương thức vận chuyển</h2>
            <div class="payment-method">
                <label>
                    <input type="radio" name="shipment-method" value="Chuyển phát nhanh">
                    Chuyển phát nhanh
                </label>
            </div>
            <div class="payment-method">
                <label>
                    <input type="radio" name="shipment-method" value="Chuyển phát thường">
                    Chuyển phát thường
                </label>
            </div>
            <h2>Phương thức Thanh Toán</h2>
            <div class="payment-method">
                <label for="cod">
                    <input type="radio" id="cod" name="payment-method" value="Thanh toán tiền mặt khi giao hàng (COD)">
                    Thanh toán tiền mặt khi giao hàng (COD)
                </label>
            </div>
            <div class="payment-method">
                <label for="bank-transfer">
                    <input type="radio" id="bank-transfer" name="payment-method" value="Thanh toán chuyển khoản qua ngân hàng">
                    Thanh toán chuyển khoản qua ngân hàng
                </label>
            </div>
            <div class="payment-method">
                <label for="pos">
                    <input type="radio" id="pos" name="payment-method" value="Thanh toán quẹt thẻ khi giao hàng (POS)">
                    Thanh toán quẹt thẻ khi giao hàng (POS)
                </label>
            </div>
            <div class="payment-method">
                <label for="vnpay">
                    <input type="radio" id="vnpay" name="payment-method" value="Thanh toán online qua cổng VNPay (ATM/Visa/MasterCard/JCB/QR Pay trên Internet Banking)">
                    Thanh toán online qua cổng VNPay (ATM/Visa/MasterCard/JCB/QR Pay trên Internet Banking)
                    <div class="icons">
                    </div>
                </label>
            </div>
            <div class="payment-method">
                <label for="momo">
                    <input type="radio" id="momo" name="payment-method" value="Ví MoMo">
                    Ví MoMo
                </label>
            </div>
        </form>
    </div>

    <div class="btn">
        <form method="POST">
            <button type="submit" name="btnThanhToan" class="thanhtoan">Thanh toán</button>
            <a href="giohang.php?tentaikhoan=<?php echo $tk ?>&delcart=1" class="xoagiohang">Xoá giỏ hàng</a>
        </form>
    </div>




    

    <?php include 'footer.php'; ?>
</body>
</html>


<?php
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['btnThanhToan'])) {
    if (isset($_SESSION['giohang']) && (is_array($_SESSION['giohang']))) {
        for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
            $masanpham = $_SESSION['giohang'][$i][4];
            $soluongmua = (int)$_SESSION['giohang'][$i][3];
            $sql_select = "SELECT soluong FROM tbl_sanpham WHERE masanpham = '$masanpham'";
            $result_select = mysqli_query($conn, $sql_select);

            while ($row = mysqli_fetch_assoc($result_select)) {
                $soluonghientai = (int)$row["soluong"];
            }

            $soluongmoi = $soluonghientai - $soluongmua;

            $sql_update = "UPDATE tbl_sanpham SET soluong = '$soluongmoi' WHERE masanpham = '$masanpham'";
            $result_update = mysqli_query($conn, $sql_update);



            $tensanpham = $_SESSION['giohang'][$i][0];
            $anh = $_SESSION['giohang'][$i][1];
            $gia = $_SESSION['giohang'][$i][2];
            $soluong = $_SESSION['giohang'][$i][3];
            $thoiGianHienTai = date('Y-m-d H:i:s');

            $query = "INSERT INTO tbl_donhang (tensanpham, anh, soluong, dongia, ngaymua, trangthai, tentaikhoan) 
          VALUES ('$tensanpham', '$anh', '$soluong', '$gia', '$thoiGianHienTai', 'Đang giao', '$tentaikhoan')";
            $result = mysqli_query($conn, $query);

            if ($result_update === true) {
                echo '
                    <script>
                        alert("Đặt hàng thành công");
                        window.location.href = "giohang.php?tentaikhoan=' . $tentaikhoan . '&delcart=1";
                    </script>    
                ';
            } else {
                echo '
                <script>
                    alert("Cập nhật số lượng thất bại!");
                </script>   
                ';
            }
        }
    }
}
?>
























<!-- <div class="container-2">
    <h1>CỬA HÀNG MÁY TÍNH HACOM</h1>
    <h2>Thông tin giao hàng</h2>
    <form method="POST">
        <div class="form-group">
            <label for="name">Họ và tên</label>
            <input type="text" id="name" name="name" placeholder="Họ và tên" value="<?php echo $hovaten ?>">
        </div>
        <div class="form-group">
            <label for="CCCD">Căn cước công dân</label>
            <input type="text" id="CCCD" name="CCCD" placeholder="Căn cước công dân" value="<?php echo $CCCD ?>">
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="phone">Số điện thoại</label>
                <input type="text" id="phone" name="phone" placeholder="Số điện thoại" value="<?php echo $sodienthoai ?>">
            </div>
            <div class="form-group">
                <label for="address">Địa chỉ</label>
                <textarea id="address" name="address" placeholder="Địa chỉ"><?php echo $diachi ?></textarea>
            </div>
        </div>
        <h2>Phương thức vận chuyển</h2>
        <div class="payment-method">
            <label>
                <input type="radio" name="shipment-method" value="Chuyển phát nhanh">
                Chuyển phát nhanh
            </label>
        </div>
        <div class="payment-method">
            <label>
                <input type="radio" name="shipment-method" value="Chuyển phát thường">
                Chuyển phát thường
            </label>
        </div>
        <h2>Phương thức Thanh Toán</h2>
        <div class="payment-method">
            <label for="cod">
                <input type="radio" id="cod" name="payment-method" value="Thanh toán tiền mặt khi giao hàng (COD)">
                Thanh toán tiền mặt khi giao hàng (COD)
            </label>
        </div>
        <div class="payment-method">
            <label for="bank-transfer">
                <input type="radio" id="bank-transfer" name="payment-method" value="Thanh toán chuyển khoản qua ngân hàng">
                Thanh toán chuyển khoản qua ngân hàng
            </label>
        </div>
        <div class="payment-method">
            <label for="pos">
                <input type="radio" id="pos" name="payment-method" value="Thanh toán quẹt thẻ khi giao hàng (POS)">
                Thanh toán quẹt thẻ khi giao hàng (POS)
            </label>
        </div>
        <div class="payment-method">
            <label for="vnpay">
                <input type="radio" id="vnpay" name="payment-method" value="Thanh toán online qua cổng VNPay (ATM/Visa/MasterCard/JCB/QR Pay trên Internet Banking)">
                Thanh toán online qua cổng VNPay (ATM/Visa/MasterCard/JCB/QR Pay trên Internet Banking)
            </label>
        </div>
        <div class="payment-method">
            <label for="momo">
                <input type="radio" id="momo" name="payment-method" value="Ví MoMo">
                Ví MoMo
            </label>
        </div>
        <div class="btn">
        <form method="POST">
            <button type="submit" name="btnThanhToan" class="thanhtoan">Thanh toán</button>
            <a href="giohang.php?tentaikhoan=<?php echo $tk ?>&delcart=1" class="xoagiohang">Xoá giỏ hàng</a>
        </form>
    </div>
    </form>
</div> -->












<!-- <?php
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['btnThanhToan'])) {
    // Kiểm tra xem giỏ hàng có sản phẩm nào không
    if (!isset($_SESSION['giohang']) || empty($_SESSION['giohang'])) {
        echo '
            <script>
                alert("Bạn chưa có sản phẩm nào trong giỏ hàng!");
            </script>
        ';
    } else {
        // Kiểm tra thông tin giao hàng
        $hovaten = isset($_POST['name']) ? trim($_POST['name']) : '';
        $CCCD = isset($_POST['CCCD']) ? trim($_POST['CCCD']) : '';
        $sodienthoai = isset($_POST['phone']) ? trim($_POST['phone']) : '';
        $diachi = isset($_POST['address']) ? trim($_POST['address']) : '';
        $phuongThucVanChuyen = isset($_POST['shipment-method']) ? $_POST['shipment-method'] : '';
        $phuongThucThanhToan = isset($_POST['payment-method']) ? $_POST['payment-method'] : '';

        // Kiểm tra các trường thông tin giao hàng
        if (empty($hovaten) || empty($CCCD) || empty($sodienthoai) || empty($diachi) || empty($phuongThucVanChuyen) || empty($phuongThucThanhToan)) {
            echo '
                <script>
                    alert("Bạn chưa nhập đủ thông tin giao hàng!");
                </script>
            ';
        } else {
            // Nếu tất cả các trường đã được điền đầy đủ, tiến hành xử lý đơn hàng
            if (isset($_SESSION['giohang']) && (is_array($_SESSION['giohang']))) {
                for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
                    $masanpham = $_SESSION['giohang'][$i][4];
                    $soluongmua = (int)$_SESSION['giohang'][$i][3];
                    $sql_select = "SELECT soluong FROM tbl_sanpham WHERE masanpham = '$masanpham'";
                    $result_select = mysqli_query($conn, $sql_select);

                    while ($row = mysqli_fetch_assoc($result_select)) {
                        $soluonghientai = (int)$row["soluong"];
                    }

                    $soluongmoi = $soluonghientai - $soluongmua;

                    $sql_update = "UPDATE tbl_sanpham SET soluong = '$soluongmoi' WHERE masanpham = '$masanpham'";
                    $result_update = mysqli_query($conn, $sql_update);

                    $tensanpham = $_SESSION['giohang'][$i][0];
                    $anh = $_SESSION['giohang'][$i][1];
                    $gia = $_SESSION['giohang'][$i][2];
                    $soluong = $_SESSION['giohang'][$i][3];
                    $thoiGianHienTai = date('Y-m-d H:i:s');

                    $query = "INSERT INTO tbl_donhang (tensanpham, anh, soluong, dongia, ngaymua, trangthai, tentaikhoan) 
                              VALUES ('$tensanpham', '$anh', '$soluong', '$gia', '$thoiGianHienTai', 'Đang giao', '$tk')";
                    $result = mysqli_query($conn, $query);

                    if ($result_update === true) {
                        echo '
                            <script>
                                alert("Đặt hàng thành công");
                                window.location.href = "giohang.php?tentaikhoan=' . $tk . '&delcart=1";
                            </script>    
                        ';
                    } else {
                        echo '
                        <script>
                            alert("Cập nhật số lượng thất bại!");
                        </script>   
                        ';
                    }
                }
            }
        }
    }
}
?> -->
