<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Đăng ký</title>
</head>

<body>
    <div class="wrapper">
        <?php
        $tentaikhoan = "";
        $matkhau = "";
        $xacnhanmatkhau = "";
        $email = "";


        include '../baitaplon/admin/connect_database.php';  //Thêm file connect

        if (isset($_POST["btnDangKy"])) {
            $tentaikhoan = $_POST['txtTenTaiKhoan'];
            $matkhau = $_POST['txtMatKhau'];
            $xacnhanmatkhau = $_POST['txtXacNhanMatKhau'];
            $email = $_POST['txtEmail'];
            $errors = array();

            if (empty($tentaikhoan) or empty($matkhau) or empty($xacnhanmatkhau) or empty($email)) {
                array_push($errors, "Các ô không được để trống");
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                array_push($errors, "Email không hợp lệ");
            }
            if ($matkhau !== $xacnhanmatkhau) {
                array_push($errors, "Mật khẩu không khớp");
            }
            $query = "SELECT * FROM tbl_taikhoan WHERE email = '$email'";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) > 0) {
                array_push($errors, "Email đã tồn tại");
            }
            $query = "SELECT * FROM tbl_taikhoan WHERE tentaikhoan = '$tentaikhoan'";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) > 0) {
                array_push($errors, "Tên tài khoản đã tồn tại");
            }
            if (count($errors) > 0) {
                foreach ($errors as $error) {
                    // echo '
                    //     <script>
                    //         alert("' . "$error" . '");
                    //     </script>
                    // ';
                    echo "<div class='alert alert-danger'>$error</div>";
                }
            } else {
                $query = "INSERT INTO `tbl_taikhoan` (`tentaikhoan`, `matkhau`, `email`, `loaitaikhoan`) VALUES ('" . $tentaikhoan . "', '" . $matkhau . "', '" . $email . "', 'user' );";
                $result = mysqli_query($conn, $query);
                if ($result > 0) {
                    echo '
                        <script>
                            alert("Đăng ký thành công");
                        </script>
                    ';
                } else {
                    echo '
                        <script>
                            alert("Đăng ký thất bại");
                        </script>
                    ';
                }
            }
        }
        ?>
        <form method="post">
            <h1>Đăng ký</h1>
            <div class="inputbox">
                <input type="text" name="txtTenTaiKhoan" placeholder="Tên Tài Khoản" value="<?php echo $tentaikhoan ?>">
                <i class='bx bxs-user'></i>
            </div>

            <div class="inputbox">
                <input type="text" name="txtMatKhau" placeholder="Mật Khẩu" value="<?php echo $matkhau ?>">
                <i class='bx bxs-lock'></i>
            </div>

            <div class="inputbox">
                <input type="text" name="txtXacNhanMatKhau" placeholder="Xác Nhận Mật Khẩu" value="<?php echo $xacnhanmatkhau ?>">
                <i class='bx bxs-lock'></i>
            </div>

            <div class="inputbox">
                <input type="text" name="txtEmail" placeholder="Email" value="<?php echo $email ?>">
                <i class='bx bxs-envelope'></i>
            </div>

            <div class="remember-forgot">
                <a href="dangnhap.php">Quay lại trang đăng nhập</a>
            </div>

            <button type="submit" class="btn" name="btnDangKy">Đăng Ký</button>
        </form>
    </div>
</body>

</html>