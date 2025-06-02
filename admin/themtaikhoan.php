<?php include_once('header.php'); ?>
<?php include 'connect_database.php'; ?>
<?php   $query = "SELECT * FROM tbl_taikhoan"; //Lệnh Truy Vấn Sql
        $result = mysqli_query($conn, $query); //Thực thi truy vấn
?>


<form method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong>
                        <span class="glyphicon glyphicon-th"></span>
                        <span>Thêm tài khoản</span>
                    </strong>
                </div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Tên Tài khoản</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-th-large"></i>
                                </span>
                                <input type="text" class="form-control" name="txtTenTaiKhoan" placeholder="Tên tài khoản" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Mật khẩu</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-barcode"></i>
                                </span>
                                <input type="text" class="form-control" name="txtMatKhau" placeholder="Mật Khẩu" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-th-large"></i>
                                </span>
                                <input type="text" class="form-control" name="txtEmail" placeholder="Email" required>
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

                        <button type="submit" name="add_product" class="btn btn-danger">Thêm tài khoản</button>
                        <a href="taikhoan.php?tentaikhoan=<?php echo $tentaikhoan ?>" class="btn btn-primary">Quay Lại</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_product'])){
    
    $tentaikhoan = $_POST['txtTenTaiKhoan'];
    $matkhau = $_POST['txtMatKhau'];
    $email = $_POST['txtEmail'];
    $loaitaikhoan = $_POST['cboLoaiTaiKhoan'];
        
            $conn = mysqli_connect("localhost", "root", "", "ql_webmaytinh");
            if (!$conn) {
                echo "Kết nối không thành công!";
            } else {
                $query = "INSERT INTO tbl_taikhoan VALUES ('" . $tentaikhoan . "', '" . $matkhau . "', '" . $email . "', '" . $loaitaikhoan . "');";
                $result = mysqli_query($conn, $query);
                if ($result > 0) {
                    echo "<script>alert('Thêm tài khoản thành công');</script>";
                } else {
                    echo "<script>alert('Thêm tài khoản thất bại');</script>";
                }
            }
        } 
    

?>



<?php include_once('footer.php'); ?>
