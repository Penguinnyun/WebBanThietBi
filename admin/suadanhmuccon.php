<?php include_once('header.php'); ?>
<?php include 'connect_database.php'; ?>

<?php
if (!isset($_GET['tendanhmuccon'])) {
    echo "Không có tên danh mục con để sửa.";
    exit;
}

$tendanhmuccon = $_GET['tendanhmuccon'];
$tendanhmuc = "";
$duongdan = "";

// Kết nối đến cơ sở dữ liệu
$conn = mysqli_connect("localhost", "root", "", "ql_webmaytinh");
if (!$conn) {
    die("Kết nối không thành công: " . mysqli_connect_error());
}

// Truy vấn danh mục con
$query = "SELECT * FROM tbl_danhmuccon WHERE tendanhmuccon='$tendanhmuccon'";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $tendanhmuc = $row["tendanhmuc"];
        $duongdan = $row["duongdan"];
    }
} else {
    echo "Không có dữ liệu";
    exit;
}

// Truy vấn danh mục
$querydanhmuc = "SELECT * FROM tbl_danhmuc";
$resulttdm = mysqli_query($conn, $querydanhmuc);
?>

<form method="POST">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong>
                        <span class="glyphicon glyphicon-th"></span>
                        <span>Sửa danh mục con</span>
                    </strong>
                </div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Tên Danh Mục Con</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-th-large"></i>
                                </span>
                                <input type="text" class="form-control" name="txtTenDanhMucCon" value="<?php echo $tendanhmuccon; ?>" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tên Danh Mục</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-th-large"></i>
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
                            <label>Đường Dẫn</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-link"></i>
                                </span>
                                <input type="text" class="form-control" name="txtDuongDan" value="<?php echo $duongdan; ?>" required>
                            </div>
                        </div>
                        <button type="submit" name="update_subcategory" class="btn btn-danger">Cập nhật danh mục con</button>
                        <a href="danhmuccon.php?tentaikhoan=<?php echo $tentaikhoan ?>" class="btn btn-primary">Quay Lại</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update_subcategory'])) {
    $tendanhmuc = $_POST['cboTenDanhMuc'];
    $duongdan = $_POST['txtDuongDan'];

    $query = "UPDATE tbl_danhmuccon SET tendanhmuc='" . $tendanhmuc . "', duongdan='" . $duongdan . "' WHERE tendanhmuccon='" . $tendanhmuccon . "'";
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "<script>alert('Cập nhật danh mục con thành công'); window.location.href = 'danhmuccon.php?tentaikhoan=<?php echo $tentaikhoan ?>';</script>";
    } else {
        echo "<script>alert('Cập nhật danh mục con thất bại');</script>";
    }
}
?>

<?php include_once('footer.php'); ?>
