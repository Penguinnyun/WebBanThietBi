<?php include_once('header.php'); ?>
<?php include 'connect_database.php'; ?>

<?php
if (!isset($_GET['tendanhmuc'])) {
    echo "Không có tên danh mục để sửa.";
    exit;
}

$tendanhmuc = $_GET['tendanhmuc'];
$duongdan = "";

// Kết nối đến cơ sở dữ liệu
$conn = mysqli_connect("localhost", "root", "", "ql_webmaytinh");
if (!$conn) {
    die("Kết nối không thành công: " . mysqli_connect_error());
}

// Truy vấn danh mục
$query = "SELECT * FROM tbl_danhmuc WHERE tendanhmuc='$tendanhmuc'";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $duongdan = $row["duongdan"];
    }
} else {
    echo "Không có dữ liệu";
    exit;
}
?>

<form method="POST">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong>
                        <span class="glyphicon glyphicon-th"></span>
                        <span>Sửa danh mục</span>
                    </strong>
                </div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Tên Danh Mục</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-th-large"></i>
                                </span>
                                <input type="text" class="form-control" name="txtTenDanhMuc" value="<?php echo $tendanhmuc; ?>" disabled>
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
                        <button type="submit" name="update_category" class="btn btn-danger">Cập nhật danh mục</button>
                        <a href="danhmuc.php?tentaikhoan=<?php echo $tentaikhoan ?>" class="btn btn-primary">Quay Lại</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update_category'])) {
    $duongdan = $_POST['txtDuongDan'];

    $query = "UPDATE tbl_danhmuc SET duongdan='" . $duongdan . "' WHERE tendanhmuc='" . $tendanhmuc . "'";
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "<script>alert('Cập nhật danh mục thành công'); window.location.href = 'danhmuc.php?tentaikhoan=<?php echo $tentaikhoan ?>';</script>";
    } else {
        echo "<script>alert('Cập nhật danh mục thất bại');</script>";
    }
}
?>

<?php include_once('footer.php'); ?>
