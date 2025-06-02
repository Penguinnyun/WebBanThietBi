<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin tài khoản</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="profile.css">
    
</head>
<body>
    <?php
    include 'connect_database.php'; // Đảm bảo rằng bạn đã kết nối cơ sở dữ liệu ở đây
    ?>
    <?php include 'header.php'; ?>

    <?php
  $query = "SELECT * FROM tbl_thongtintaikhoan WHERE tentaikhoan = '$tentaikhoan'";
  $result = mysqli_query($conn, $query);

  $hovaten = "";
  $sodienthoai = "";
  $gioitinh = "";
  $ngaysinh = "";
  $cccd = "";
  $diachi = "";

  while ($row = mysqli_fetch_assoc($result)) {
    $hovaten = $row["hovaten"];
    $sodienthoai = $row["sodienthoai"];
    $gioitinh = $row["gioitinh"];
    $ngaysinh = $row["ngaysinh"];
    $cccd = $row["cccd"];
    $diachi = $row["diachi"];
  }
  ?>

  <div class="profile-container">
    <form class="profile-info-container" method="POST">
      <h2 class="profile-title">Hồ sơ của tôi</h2>
      <table class="profile-info">
        <tr>
          <td class="profile-info-title">Tên đăng nhập</td>
          <td>
            <input type="text" name="txtTenDangNhap" class="profile-info-input" value="<?php echo $tentaikhoan ?>" disabled>
          </td>
        </tr>
        <tr>
          <td class="profile-info-title">Họ và tên</td>
          <td>
            <input type="text" name="txtHoVaTen" class="profile-info-input" value="<?php echo $hovaten ?>">
          </td>
        </tr>
        <tr>
          <td class="profile-info-title">CCCD</td>
          <td>
            <input type="number" name="txtCCCD" class="profile-info-input" value="<?php echo $cccd ?>">
          </td>
        </tr>
        <tr>
          <td class="profile-info-title">Số điện thoại</td>
          <td>
            <input type="number" name="txtSoDienThoai" class="profile-info-input" value="<?php echo $sodienthoai ?>">
          </td>
        </tr>
        <tr>
          <td class="profile-info-title">Giới tính</td>
          <td>
            <?php
            if ($gioitinh === "nam") {
              echo '
                <input type="radio" name="radGioiTinh" value="nam" id="male" checked>
                <label for="male">Nam</label>  
                <input type="radio" name="radGioiTinh" value="nữ "id="female">
                <label for="male">Nữ</label>            
              ';
            } else if ($gioitinh === "nữ") {
              echo '
                <input type="radio" name="radGioiTinh" value="nam" id="male" >
                <label for="male">Nam</label>  
                <input type="radio" name="radGioiTinh" value="nữ" id="female" checked>
                <label for="male">Nữ</label>            
              ';
            } else {
              echo '
                <input type="radio" name="radGioiTinh" value="nam" id="male" >
                <label for="male">Nam</label>  
                <input type="radio" name="radGioiTinh" value="nữ" id="female">
                <label for="male">Nữ</label>            
              ';
            }
            ?>
          </td>
        </tr>
        <tr>
          <td class="profile-info-title">Ngày sinh</td>
          <td>
            <input type="date" name="dtpNgaySinh" class="profile-info-input" style="width: 130px" value="<?php echo $ngaysinh ?>">
          </td>
        </tr>
        <tr>
        <tr>
          <td class="profile-info-title">Địa chỉ</td>
          <td>
            <input type="text" name="txtDiaChi" class="profile-info-input" value="<?php echo $diachi ?>">
          </td>
        </tr>
        <tr>
          <td></td>
          <td>
            <button type="submit" name="btnLuu" class=" profile-info-save">Cập nhật thông tin</button>
            <a href="doimatkhau.php?tentaikhoan=<?php echo $tentaikhoan ?>" class="btn">Đổi mật khẩu</a>
            <a href="dangxuat.php" class="logout-btn">Đăng xuất</a>

          </td>
        </tr>
      </table>
    </form>
  </div>

</body>

</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btnLuu'])) {
  $hovaten = $_POST["txtHoVaTen"];
  $sodienthoai = $_POST["txtSoDienThoai"];
  $gioitinh = $_POST["radGioiTinh"];
  $ngaysinh = $_POST["dtpNgaySinh"];
  $cccd = $_POST["txtCCCD"];
  $diachi = $_POST["txtDiaChi"];

  $query_check = "SELECT * FROM tbl_thongtintaikhoan WHERE tentaikhoan = '$tentaikhoan'";
  $result_check = mysqli_query($conn, $query_check);
  //Check xem tài khoản này đã trong bảng thông tin tài khoản chưa
  if (mysqli_num_rows($result_check) === 0) { //Nếu bằng 0 tức là chưa có -> INSERT vào bảng tài khoản
    $query_them = "INSERT INTO tbl_thongtintaikhoan VALUES ('" . $tentaikhoan . "', '" . $hovaten . "', '" . $sodienthoai . "', '" . $gioitinh . "', '" . $ngaysinh . "' , '" . $cccd . "', '" . $diachi . "')";
    $result_them = mysqli_query($conn, $query_them);
    if ($result > 0) {
      echo '
          <script>
              alert("Thêm dữ liệu thành công");
              window.location.href = "profile.php?tentaikhoan=' . $tentaikhoan . '";
          </script>
      ';
    } else {
      echo '
          <script>
              alert("Thêm dữ liệu thất bại");
          </script>
      ';
    }
  } else { //Ngược lại, Cập nhật thông tin
    $query_sua = "UPDATE tbl_thongtintaikhoan SET hovaten='" . $hovaten . "', sodienthoai='" . $sodienthoai . "', gioitinh='" . $gioitinh . "', ngaysinh='" . $ngaysinh . "', cccd='" . $cccd . "', diachi='" . $diachi . "' WHERE tentaikhoan='" . $tentaikhoan . "'";
    $result_sua = mysqli_query($conn, $query_sua);
    if ($result > 0) {
      echo '
            <script>
                alert("Cập nhật dữ liệu thành công");
                window.location.href = "profile.php?tentaikhoan=' . $tentaikhoan . '";
            </script>
        ';
    } else {
      echo '
            <script>
                alert("Cập nhật dữ liệu thất bại");
            </script>
        ';
    }
  }
}

?>


    <?php include 'footer.php'; ?>
</body>
</html>