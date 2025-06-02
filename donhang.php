<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đơn hàng</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="donhang.css">
</head>
<body>
<?php
include 'connect_database.php'; // Đảm bảo rằng bạn đã kết nối cơ sở dữ liệu ở đây
$tentaikhoan = isset($_SESSION["txtTenTaiKhoan"]) ? $_SESSION["txtTenTaiKhoan"] : '';
$query = "SELECT * FROM tbl_donhang WHERE tentaikhoan = '$tentaikhoan'";
$result = mysqli_query($conn, $query);
?>

<?php include 'header.php'; ?>

<div class="container">
        <?php
        $conn = mysqli_connect("localhost", "root", "", "ql_webmaytinh");
        if (!$conn) {
            echo "Kết nối không thành công!" . mysqli_connect_error();
        } else {
            // Lấy dữ liệu sản phẩm từ cơ sở dữ liệu
            $query = "SELECT * FROM tbl_donhang WHERE tentaikhoan = '$tentaikhoan'";
            $result = mysqli_query($conn, $query);//Thực thi truy vấn
        if (mysqli_num_rows($result) > 0) {
            echo '
                <h1>Danh sách đơn hàng đã mua</h1>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Mã đơn hàng</th>
                            <th>Tên sản phẩm</th>
                            <th>Ảnh</th>
                            <th>Số lượng</th>
                            <th>Đơn giá</th>
                            <th>Tổng tiền</th>
                            <th>Ngày mua</th>
                            <th>Trạng thái</th>
                        </tr>
                    </thead>
                    <tbody>            
            ';
        } else {
            echo '
                <h1>Đơn hàng của bạn hiện đang trống</h1>
                <table class="table table-bordered">
                    <tbody>   
            ';
        }
        ?>
        <?php
        function chuanHoaTien($number)
        {
            return number_format($number, 0, '', '.');
        }
        ?>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo '
                        <tr>
                            <td>DH' . $row["madonhang"] . '</td>
                            <td>' . $row["tensanpham"] . '</td>
                            <td>
                                <img class="image-order" src="/baitaplon/anhweb/' . $row["anh"] . '" alt="Ảnh mô tả">
                            </td>
                            <td>' . $row["soluong"] . '</td>
                            <td>' . chuanHoaTien($row["dongia"]) . ' đ</td>
                            <td>' . chuanHoaTien($row["dongia"] * $row["soluong"]) . ' đ</td>
                            <td>' . $row["ngaymua"] . '</td>
                            <td>' . $row["trangthai"] . '</td>
                        </tr>                    
                    ';
        }
    }
        ?>
        </tbody>
        </table>
    </div>



<?php include 'footer.php'; ?>
</body>
</html>
