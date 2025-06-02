<?php include_once('header.php'); ?>
<?php include 'connect_database.php'; ?>

<?php
if (!isset($_GET['madonhang'])) {
    echo "Không có mã đơn hàng để sửa.";
    exit;
}
$madonhang = $_GET['madonhang'];

$query = "SELECT * FROM tbl_donhang WHERE madonhang='$madonhang'";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $tensanpham = $row["tensanpham"];
        $anh = $row["anh"];
        $soluong = $row["soluong"];
        $dongia = $row["dongia"];
        $ngaymua = $row["ngaymua"];
        $trangthai = $row["trangthai"];
    }
}

// Kết nối đến cơ sở dữ liệu
$conn = mysqli_connect("localhost", "root", "", "ql_webmaytinh");
if (!$conn) {
    die("Kết nối không thành công: " . mysqli_connect_error());
}

?>

<form method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong>
                        <span class="glyphicon glyphicon-th"></span>
                        <span>Sửa đơn hàng</span>
                    </strong>
                </div>
                <div class="panel-body">
                    <div class="col-md-12">
                    <div class="form-group">
                            <label>Mã Đơn hàng</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-barcode"></i>
                                </span>
                                <input type="text" class="form-control" name="txtMaDonHang" value="<?php echo $madonhang ?>" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tên Sản Phẩm</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-th-large"></i>
                                </span>
                                <input type="text" class="form-control" name="txtTenSanPham" value="<?php echo $tensanpham ?>" disabled required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Ảnh </label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-picture"></i>
                                </span>
                                <input type="file" class="form-control" name="txtAnh" accept="image/*">
                            </div>
                            <img src="uploads/<?php echo $anh; ?>" alt="Current Image" style="width: 50px; height: 50px;"disabled required>
                        </div>
                        <div class="form-group">
                            <label>Số lượng</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-barcode"></i>
                                </span>
                                <input type="number" class="form-control" name="txtSoLuong" value="<?php echo $soluong ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Đơn Giá</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-usd"></i>
                                </span>
                                <input type="number" class="form-control" name="txtGia" value="<?php echo $dongia ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Ngày mua</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-th-large"></i>
                                </span>
                                <input type="date" class="form-control" name="dtpNgayMua" value="<?php echo $ngaymua ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Trạng thái</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-th-large"></i>
                                </span>
                                <select class="form-control" name="cboTrangThai">
                                    <option value="Đang giao">Đang giao</option>
                                    <option value="Đã nhận hàng">Đã nhận hàng</option>
                                </select>
                            </div>
                        </div>
                        
                        <button type="submit" name="btnSua" class="btn btn-danger">Cập nhật đơn hàng</button>
                    <a href="donhang.php?tentaikhoan=<?php echo $tentaikhoan ?>" class="btn btn-primary">Quay Lại</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['btnSua'])) {
    $soluong = $_POST["txtSoLuong"];
    $dongia = $_POST["txtGia"];
    $ngaymua = $_POST["dtpNgayMua"];
    $trangthai = $_POST["cboTrangThai"];


        // Xử lý upload ảnh
        if (!empty($_FILES['txtAnh']['name'])) {
            $anh = $_FILES['txtAnh']['name'];
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($anh);
            move_uploaded_file($_FILES['txtAnh']['tmp_name'], $target_file);
        }

        $query = "UPDATE tbl_donhang SET soluong='" . $soluong . "', dongia='" . $dongia . "', ngaymua='" . $ngaymua . "', trangthai='" . $trangthai . "' WHERE madonhang='" . $madonhang . "'";
        $result = mysqli_query($conn, $query);
        if ($result) {
            echo "<script>alert('Cập nhật đơn hàng thành công'); window.location.href = 'donhang.php?tentaikhoan=<?php echo $tentaikhoan ?>';</script>";
        } else {
            echo "<script>alert('Cập nhật đơn hàng thất bại');</script>";
        }
    }
?>

<?php include_once('footer.php'); ?>
