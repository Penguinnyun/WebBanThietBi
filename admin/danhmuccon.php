<?php include_once('header.php'); ?>
<?php include 'connect_database.php'; ?>
<?php
$query = "SELECT * FROM tbl_danhmuccon"; //Lệnh Truy Vấn Sql
$result = mysqli_query($conn, $query); //Thực thi truy vấn
?>

<h2>DANH SÁCH DANH MỤC CON</h2>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <form method="POST" class="form-inline">
                    <input type="text" name="txtsearch" class="form-control" placeholder="Tìm kiếm danh mục con">
                    <button type="submit" name="btnsearch" class="btn btn-primary">Tìm Kiếm</button>
                </form>
                <div class="pull-right">
                    <a href="themdanhmuccon.php?tentaikhoan=<?php echo $tentaikhoan ?>" class="btn btn-primary">THÊM DANH MỤC CON</a>
                </div>
            </div>
            <div class="panel-body">

                <?php
                $conn = mysqli_connect("localhost", "root", "", "ql_webmaytinh");
                if (!$conn) {
                    echo "Kết nối không thành công!" . mysqli_connect_error();
                } else {
                    $query = "SELECT * FROM tbl_danhmuccon"; 
                    $result = mysqli_query($conn, $query);

                    if (mysqli_num_rows($result) > 0) {
                        echo '
                        <table id="table" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Tên danh mục con</th>
                                    <th class="text-center">Tên danh mục</th>
                                    <th class="text-center">Đường dẫn</th>
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
                                        <td class="text-center">' . $row["tendanhmuccon"] . ' </td>
                                        <td class="text-center">' . $row["tendanhmuc"] . ' </td>
                                        <td class="text-center">' . $row["duongdan"] . ' </td>
                                        <td class="text-center">
                                    <div class="btn-group">
                                        <a href="suadanhmuccon.php?tendanhmuccon=' . $row["tendanhmuccon"] .'&tentaikhoan=' . $tentaikhoan . '" class="btn btn-info btn-xs" title="Edit" data-toggle="tooltip">
                                            <span class="glyphicon glyphicon-edit"></span>
                                        </a>
                                        <a href="xoadanhmuccon.php?tendanhmuccon=' . $row["tendanhmuccon"] .'&tentaikhoan=' . $tentaikhoan . '" class="btn btn-danger btn-xs" title="Delete" data-toggle="tooltip" onclick="return confirm(\'Có chắc chắn muốn xoá?\');">
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
                        echo '<a href="danhmuccon.php?tentaikhoan=' . $tentaikhoan . '" class="quaylaithongtin">Quay lại bảng thông tin</a>';
                    echo '
                    <script>
                        document.getElementById("table").style.display = "none";
                    </script>
                    ';
                    $query = "SELECT * FROM tbl_danhmuccon
                        WHERE CONCAT(tendanhmuc, duongdan) LIKE N'%" . $timkiem . "%'";
                        // $query = "SELECT * FROM tbl_sanpham WHERE tensanpham LIKE N'%" . $timkiem . "%'";
                    $result = mysqli_query($conn, $query);

                    if (mysqli_num_rows($result) > 0) {
                        echo '
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Tên danh mục con</th>
                                    <th class="text-center">Tên danh mục</th>
                                    <th class="text-center">Đường dẫn</th>
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
                                 <td class="text-center">' . $row["tendanhmuccon"] . ' </td>
                                        <td class="text-center">' . $row["tendanhmuc"] . ' </td>
                                        <td class="text-center">' . $row["duongdan"] . ' </td>
                                        <td class="text-center">
                                    <div class="btn-group">
                                        <a href="suadanhmuccon.php?tendanhmuccon=' . $row["tendanhmuccon"] .'&tentaikhoan=' . $tentaikhoan . '" class="btn btn-info btn-xs" title="Edit" data-toggle="tooltip">
                                            <span class="glyphicon glyphicon-edit"></span>
                                        </a>
                                        <a href="xoadanhmuccon.php?tendanhmuccon=' . $row["tendanhmuccon"] .'&tentaikhoan=' . $tentaikhoan .  '" class="btn btn-danger btn-xs" title="Delete" data-toggle="tooltip" onclick="return confirm(\'Có chắc chắn muốn xoá?\');">
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
