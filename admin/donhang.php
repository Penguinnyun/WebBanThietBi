<?php include_once('header.php'); ?>
<?php include 'connect_database.php'; ?>
<?php
$query = "SELECT * FROM tbl_donhang"; //Lệnh Truy Vấn Sql
$result = mysqli_query($conn, $query); //Thực thi truy vấn
?>

<h2>DANH SÁCH ĐƠN HÀNG</h2>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <form method="POST" class="form-inline">
                    <input type="text" name="txtsearch" class="form-control" placeholder="Tìm kiếm đơn hàng">
                    <button type="submit" name="btnsearch" class="btn btn-primary">Tìm Kiếm</button>
                </form>
            </div>
            <div class="panel-body">

                <?php
                $conn = mysqli_connect("localhost", "root", "", "ql_webmaytinh");
                if (!$conn) {
                    echo "Kết nối không thành công!" . mysqli_connect_error();
                } else {
                    $query = "SELECT * FROM tbl_donhang"; //Lệnh Truy Vấn Sql
                    $result = mysqli_query($conn, $query); //Thực thi truy vấn

                    if (mysqli_num_rows($result) > 0) {
                        echo '
                        <table id="table" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Mã đơn hàng</th>
                                    <th class="text-center">Tên sản phẩm</th>
                                    <th class="text-center">Ảnh</th>
                                    <th class="text-center">Số lượng</th>
                                    <th class="text-center">Đơn giá</th>
                                    <th class="text-center">Tổng tiền</th>
                                    <th class="text-center">Ngày mua</th>
                                    <th class="text-center">Trạng thái</th>
                                    <th class="text-center">Tên tài khoản</th>
                                    <th class="text-center">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                        ';
                        $i = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '
                            <tr>
                                <td class="text-center">' . $i . '</td>
                                <td class="text-center">' . $row["madonhang"] . ' </td>
                                        <td class="text-center">' . $row["tensanpham"] . ' </td>
                                         <td class="text-center"><img src="/baitaplon/anhweb/' . $row["anh"] . '" alt="product image" style="width: 50px; height: 50px;"></td>
                                         <td class="text-center">' . $row["soluong"] . ' </td>
                                        <td class="text-center">' . number_format($row["dongia"], 0, ',', '.') . '</td>
                                        <td class="text-center">' . number_format($row["dongia"]* $row["soluong"], 0, ',', '.') . '</td>
                                         <td class="text-center">' . $row["ngaymua"] . ' </td>
                                         <td class="text-center">' . $row["trangthai"] . ' </td>
                                         <td class="text-center">' . $row["tentaikhoan"] . ' </td>
                                        <td class="text-center">
                                    <div class="btn-group">
                                        <a href="suadonhang.php?madonhang=' . $row["madonhang"]. '&tentaikhoan=' . $tentaikhoan . '" class="btn btn-info btn-xs" title="Edit" data-toggle="tooltip">
                                            <span class="glyphicon glyphicon-edit"></span>
                                        </a>
                                        <a href="xoadonhang.php?madonhang=' . $row["madonhang"]. '&tentaikhoan=' . $tentaikhoan . '" class="btn btn-danger btn-xs" title="Delete" data-toggle="tooltip" onclick="return confirm(\'Có chắc chắn muốn xoá?\');">
                                            <span class="glyphicon glyphicon-trash"></span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            ';
                            $i++;
                        }
                        echo '</tbody></table>';
                    } else {
                        echo "Không có dữ liệu";
                    }
                }
                ?>

                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btnsearch'])) {
                    $timkiem = $_POST["txtsearch"];
                    if (empty($timkiem)) {
                        echo "<script>alert('Vui lòng nhập thông tin tìm kiếm');</script>";
                    } else {
                        echo '<a href="donhang.php?tentaikhoan=' . $tentaikhoan . '" class="quaylaithongtin">Quay lại bảng thông tin</a>';
                    echo '
                    <script>
                        document.getElementById("table").style.display = "none";
                    </script>
                    ';
                    $query = "SELECT * FROM tbl_donhang
                    WHERE CONCAT(madonhang, tensanpham, soluong, dongia, ngaymua, trangthai, tentaikhoan) LIKE N'%" . $timkiem . "%'";
                    // $query = "SELECT * FROM tbl_sanpham WHERE tensanpham LIKE N'%" . $timkiem . "%'";
                    $result = mysqli_query($conn, $query);

                    if (mysqli_num_rows($result) > 0) {
                        echo '
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                   <th class="text-center">#</th>
                                    <th class="text-center">Mã đơn hàng</th>
                                    <th class="text-center">Tên sản phẩm</th>
                                    <th class="text-center">Ảnh</th>
                                    <th class="text-center">Số lượng</th>
                                    <th class="text-center">Đơn giá</th>
                                    <th class="text-center">Tổng tiền</th>
                                    <th class="text-center">Ngày mua</th>
                                    <th class="text-center">Trạng thái</th>
                                    <th class="text-center">Tên tài khoản</th>
                                    <th class="text-center">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                        ';
                        $i = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '
                            <tr>
                                <td class="text-center">' . $i . '</td>
                                <td class="text-center">' . $row["madonhang"] . ' </td>
                                        <td class="text-center">' . $row["tensanpham"] . ' </td>
                                         <td class="text-center"><img src="/baitaplon/anhweb/' . $row["anh"] . '" alt="product image" style="width: 50px; height: 50px;"></td>
                                         <td class="text-center">' . $row["soluong"] . ' </td>
                                        <td class="text-center">' . number_format($row["dongia"], 0, ',', '.') . '</td>
                                        <td class="text-center">' . number_format($row["dongia"]* $row["soluong"], 0, ',', '.') . '</td>
                                         <td class="text-center">' . $row["ngaymua"] . ' </td>
                                         <td class="text-center">' . $row["trangthai"] . ' </td>
                                         <td class="text-center">' . $row["tentaikhoan"] . ' </td>
                                        <td class="text-center">
                                    <div class="btn-group">
                                        <a href="suadonhang.php?madonhang=' . $row["madonhang"]. '&tentaikhoan=' . $tentaikhoan . '" class="btn btn-info btn-xs" title="Edit" data-toggle="tooltip">
                                            <span class="glyphicon glyphicon-edit"></span>
                                        </a>
                                        <a href="xoadonhang.php?madonhang=' . $row["madonhang"]. '&tentaikhoan=' . $tentaikhoan . '" class="btn btn-danger btn-xs" title="Delete" data-toggle="tooltip" onclick="return confirm(\'Có chắc chắn muốn xoá?\');">
                                            <span class="glyphicon glyphicon-trash"></span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            ';
                            $i++;
                        }
                        echo '</tbody></table>';
                    } else {
                        echo '<div class="alert alert-warning" role="alert">Không có dữ liệu</div>';
                    }
                }
            }
                ?>
            </div>
        </div>
    </div>
</div>

<?php include_once('footer.php'); ?>
