<?php include_once('header.php'); ?>
<?php include 'connect_database.php'; ?>

<?php
if (!isset($_GET['id'])) {
    echo "Không có tên tài khoản để sửa.";
    exit;
}

$id = $_GET['id'];
$matkhau = "";
$email = "";
$loaitaikhoan = "";

// Kết nối đến cơ sở dữ liệu
$conn = mysqli_connect("localhost", "root", "", "ql_webmaytinh");
if (!$conn) {
    die("Kết nối không thành công: " . mysqli_connect_error());
}

// Truy vấn danh mục
$query = "SELECT * FROM tbl_taikhoan WHERE tentaikhoan='$id'";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $matkhau = $row["matkhau"];
        $email = $row["email"];
        $loaitaikhoan = $row["loaitaikhoan"];
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
                        <span>Sửa tài khoản</span>
                    </strong>
                </div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Tên Tài Khoản</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-th-large"></i>
                                </span>
                                <input type="text" class="form-control" name="txtTenTaiKhoan" value="<?php echo $id ?>" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                        <label>Mật khẩu</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-barcode"></i>
                                </span>
                                <input type="text" class="form-control" name="txtMatKhau" value="<?php echo $matkhau ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-th-large"></i>
                                </span>
                                <input type="text" class="form-control" name="txtEmail" value="<?php echo $email ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Loại tài khoản</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-th-large"></i>
                                </span>
                                <select class="form-control" name="cboLoaiTaiKhoan">
                                        <option value="admin">Admin</option>
                                        <option value="user">User</option>
                                    </select>
                            </div>
                        </div>

                        <button type="submit" name="update_acount" class="btn btn-danger">Cập nhật tài khoản</button>
                        <a href="taikhoan.php?tentaikhoan=<?php echo $tentaikhoan ?>" class="btn btn-primary">Quay Lại</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update_acount'])) {
    $matkhau = $_POST['txtMatKhau'];
    $email = $_POST['txtEmail'];
    $loaitaikhoan = $_POST['cboLoaiTaiKhoan'];

    $query = "UPDATE tbl_taikhoan SET matkhau='" . $matkhau . "', email='" . $email . "', loaitaikhoan='" . $loaitaikhoan . "' WHERE tentaikhoan='" . $id . "'";
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "<script>alert('Cập nhật tài khoản thành công'); window.location.href = 'taikhoan.php?tentaikhoan=<?php echo $tentaikhoan ?>';</script>";
    } else {
        echo "<script>alert('Cập nhật tài khoản thất bại');</script>";
    }
}
?>

<?php include_once('footer.php'); ?>
