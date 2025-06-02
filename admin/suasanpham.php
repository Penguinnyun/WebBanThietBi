<?php include_once('header.php'); ?>
<?php include 'connect_database.php'; ?>

<?php
if (!isset($_GET['masanpham'])) {
    echo "Không có mã sản phẩm để sửa.";
    exit;
}

$masanpham = $_GET['masanpham'];
$tensanpham = "";
$anh = "";
$tendanhmuc = "";
$tendanhmuccon = "";
$soluong = "";
$gia = "";
$thongso = "";

// Kết nối đến cơ sở dữ liệu
$conn = mysqli_connect("localhost", "root", "", "ql_webmaytinh");
if (!$conn) {
    die("Kết nối không thành công: " . mysqli_connect_error());
}

// Truy vấn danh mục
$querydanhmuc = "SELECT * FROM tbl_danhmuc";
$resulttdm = mysqli_query($conn, $querydanhmuc);

// Truy vấn sản phẩm
$query = "SELECT * FROM tbl_sanpham WHERE masanpham='$masanpham'";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $tensanpham = $row["tensanpham"];
        $anh = $row["anh"];
        $tendanhmuc = $row["tendanhmuc"];
        $tendanhmuccon = $row["tendanhmuccon"];
        $soluong = $row["soluong"];
        $gia = $row["gia"];
        $thongso = $row["thongso"];
    }
} else {
    echo "Không có dữ liệu";
}
?>

<form method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong>
                        <span class="glyphicon glyphicon-th"></span>
                        <span>Sửa sản phẩm</span>
                    </strong>
                </div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Tên Sản Phẩm</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-th-large"></i>
                                </span>
                                <input type="text" class="form-control" name="txtTenSanPham" value="<?php echo $tensanpham; ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Mã Sản Phẩm</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-barcode"></i>
                                </span>
                                <input type="text" class="form-control" name="txtMaSanPham" value="<?php echo $masanpham; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Danh Mục</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-list"></i>
                                </span>
                                <select class="form-control" name="cboTenDanhMuc">
                                    <?php
                                    while ($row = mysqli_fetch_assoc($resulttdm)) {
                                        if ($row["tendanhmuc"] === $tendanhmuc) {
                                            echo '<option value="' . $row["tendanhmuc"] . '" selected>' . $row["tendanhmuc"] . '</option>';
                                        } else {
                                            echo '<option value="' . $row["tendanhmuc"] . '">' . $row["tendanhmuc"] . '</option>';
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Danh Mục Con</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-list"></i>
                                </span>
                                <select class="form-control" name="cboTenDanhMucCon">
                                    <?php
                                    $query = "SELECT * FROM tbl_danhmuccon";
                                    $result = mysqli_query($conn, $query);
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        if ($row["tendanhmuccon"] === $tendanhmuccon) {
                                            echo '<option value="' . $row["tendanhmuccon"] . '" selected>' . $row["tendanhmuccon"] . '</option>';
                                        } else {
                                            echo '<option value="' . $row["tendanhmuccon"] . '">' . $row["tendanhmuccon"] . '</option>';
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Giá</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-usd"></i>
                                </span>
                                <input type="number" class="form-control" name="txtGia" value="<?php echo $gia; ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Số Lượng</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-th-large"></i>
                                </span>
                                <input type="number" class="form-control" name="txtSoLuong" value="<?php echo $soluong; ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Thông số</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-info-sign"></i>
                                </span>
                                <textarea class="form-control" name="txtThongSo" required><?php echo $thongso; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Ảnh Sản Phẩm</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-picture"></i>
                                </span>
                                <input type="file" class="form-control" name="txtAnh" accept="image/*">
                            </div>
                            <img src="uploads/<?php echo $anh; ?>" alt="Current Image" style="width: 50px; height: 50px;">
                        </div>
                        <button type="submit" name="update_product" class="btn btn-danger">Cập nhật sản phẩm</button>
                        <a href="sanpham.php?tentaikhoan=<?php echo $tentaikhoan ?>" class="btn btn-primary">Quay Lại</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update_product'])) {
    if (empty($_POST["txtTenSanPham"]) || empty($_POST["txtMaSanPham"]) || empty($_POST["cboTenDanhMuc"]) || empty($_POST["txtGia"]) || empty($_POST["txtSoLuong"]) || empty($_POST["txtThongSo"])) {
        echo "<script>alert('Vui lòng điền đầy đủ thông tin');</script>";
    } else {
        $masanpham = $_POST['txtMaSanPham'];
        $tensanpham = $_POST['txtTenSanPham'];
        $tendanhmuc = $_POST['cboTenDanhMuc'];
        $tendanhmuccon = $_POST['cboTenDanhMucCon'];
        $soluong = $_POST['txtSoLuong'];
        $gia = $_POST['txtGia'];
        $thongso = $_POST['txtThongSo'];

        // Xử lý upload ảnh
        if (!empty($_FILES['txtAnh']['name'])) {
            $anh = $_FILES['txtAnh']['name'];
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($anh);
            move_uploaded_file($_FILES['txtAnh']['tmp_name'], $target_file);
        }

        $query = "UPDATE tbl_sanpham SET tensanpham='$tensanpham', anh='$anh', tendanhmuc='$tendanhmuc', tendanhmuccon='$tendanhmuccon', soluong='$soluong', gia='$gia', thongso='$thongso' WHERE masanpham='$masanpham'";
        $result = mysqli_query($conn, $query);
        if ($result) {
            echo "<script>alert('Cập nhật sản phẩm thành công'); window.location.href = 'sanpham.php?tentaikhoan=<?php echo $tentaikhoan ?>';</script>";
        } else {
            echo "<script>alert('Cập nhật sản phẩm thất bại');</script>";
        }
    }
}
?>

<?php include_once('footer.php'); ?>
