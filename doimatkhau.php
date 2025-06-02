<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đổi mật khẩu</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="doimatkhau.css">
    
</head>
<body>
    <?php
    include 'connect_database.php'; // Đảm bảo rằng bạn đã kết nối cơ sở dữ liệu ở đây
    ?>
    <?php include 'header.php'; ?>


    <div class="profile-container">
        <form class="profile-info-container" method="POST">
            <h2 class="profile-title">Thay Đổi mật khẩu</h2>
            <table class="profile-info">
                <tr>
                    <td class="profile-info-title">Mật Khẩu Cũ</td>
                    <td>
                        <input type="text" name="txtMatKhauCu" class="profile-info-input">
                    </td>
                </tr>
                <tr>
                    <td class="profile-info-title">Mật Khẩu Mới</td>
                    <td>
                        <input type="text" name="txtMatKhauMoi" class="profile-info-input">
                    </td>
                </tr>
                <tr>
                    <td class="profile-info-title">Xác Nhận Mật Khẩu </td>
                    <td>
                        <input type="text" name="txtXacNhanMatKhau" class="profile-info-input">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <button type="submit" name="btnLuu" class=" profile-info-save">Đổi mật khẩu</button>
                        <a href="profile.php?tentaikhoan=<?php echo $tentaikhoan ?>" class="btn">Quay Lại</a>
                    </td>
                </tr>
            </table>
        </form>
    </div>


</body>

</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btnLuu'])) {
    $matkhaucu = $_POST["txtMatKhauCu"];
    $matkhaumoi = $_POST["txtMatKhauMoi"];
    $xacnhanmatkhau = $_POST["txtXacNhanMatKhau"];

    $query = "SELECT * FROM tbl_taikhoan WHERE tentaikhoan='$tentaikhoan'";
    $result = mysqli_query($conn, $query);

    $errors = array();

    while ($row = mysqli_fetch_assoc($result)) {
        if ($matkhaucu !== $row["matkhau"]) {
            array_push($errors, "Sai mật khẩu");
        }
        if ($matkhaumoi !== $xacnhanmatkhau) {
            array_push($errors, "Mật khẩu không khớp");
        }
        if (count($errors) > 0) {
            foreach ($errors as $error) {
                echo '
                    <script>
                        alert("' . "$error" . '");
                    </script>
                ';
                return;
            }
        } else {
            $query_update = "UPDATE tbl_taikhoan SET matkhau='" . $matkhaumoi . "' WHERE tentaikhoan='" . $tentaikhoan . "'";
            $result_update = mysqli_query($conn, $query_update);

            if ($result_update > 0) {
                echo '
                    <script>
                        alert("Đổi mật khẩu thành công");
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
}

?>

    <?php include 'footer.php'; ?>
</body>
</html>