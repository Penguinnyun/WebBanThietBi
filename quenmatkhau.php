<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="forget.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Quên mật khẩu</title>
</head>
<body>
    <div class="wrapper">
        <?php
        if (isset($_POST["btnQuenMatKhau"])) {
            $email = $_POST["txtEmail"];
            $matkhaumoi = $_POST["txtMatKhauMoi"];
            $xacnhanmatkhau = $_POST["txtXacNhanMatKhau"];

            include '../baitaplon/admin/connect_database.php';  //Thêm file connect

            $errors = array();

            if (empty($email) or empty($matkhaumoi) or empty($xacnhanmatkhau)) {
                array_push($errors, "Các ô không được để trống");
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                array_push($errors, "Email không hợp lệ");
            }
            if ($matkhaumoi !== $xacnhanmatkhau) {
                array_push($errors, "Mật khẩu không khớp");
            }
            $query = "SELECT * FROM tbl_taikhoan WHERE email = '$email'";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) == 0) {
                array_push($errors, "Email không tồn tại");
            }
            if (count($errors) > 0) {
                foreach ($errors as $error) {
                    echo "<div class='alert alert-danger'>$error</div>";
                }
            } else {
                $query = "UPDATE tbl_taikhoan SET matkhau='$matkhaumoi' WHERE email='$email'";
                $result = mysqli_query($conn, $query);
                if ($result) {
                    echo '
                        <script>
                            alert("Đổi mật khẩu thành công");
                            window.location.href = "dangnhap.php";
                        </script>
                    ';
                } else {
                    echo '
                        <script>
                            alert("Đổi mật khẩu thất bại");
                        </script>
                    ';
                }
            }
        }
        ?>
        <form method="POST">
            <h1>Quên mật khẩu</h1>
            <div class="inputbox">
                <input type="email" name="txtEmail" placeholder="Email" required>
                <i class='bx bxs-envelope'></i>
            </div>

            <div class="inputbox">
                <input type="password" name="txtMatKhauMoi" placeholder="Mật Khẩu Mới" required>
                <i class='bx bxs-lock'></i>
            </div>

            <div class="inputbox">
                <input type="password" name="txtXacNhanMatKhau" placeholder="Xác Nhận Mật Khẩu" required>
                <i class='bx bxs-lock'></i>
            </div>

            <div class="remember-forgot">
                <a href="dangnhap.php">Quay lại trang Đăng nhập</a>
            </div>

            <button type="submit" class="btn" name="btnQuenMatKhau">Xác nhận</button>

            <div class="register">
                <p>Chưa có tài khoản? <a href="dangky.php">Đăng ký</a></p>
            </div>
        </form>
    </div>   
</body>
</html>
