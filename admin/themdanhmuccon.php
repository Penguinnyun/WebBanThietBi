<?php include_once('header.php'); ?>
<?php include 'connect_database.php'; ?>
<?php
$query = "SELECT * FROM tbl_danhmuc"; //Lệnh Truy Vấn Sql
$result = mysqli_query($conn, $query); //Thực thi truy vấn
?>


<form method="POST">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong>
                        <span class="glyphicon glyphicon-th"></span>
                        <span>Thêm danh mục con</span>
                    </strong>
                </div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Tên Danh Mục Con</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-th-large"></i>
                                </span>
                                <input type="text" class="form-control" name="txtTenDanhMucCon" placeholder="Tên danh mục con" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tên Danh Mục</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-th-large"></i>
                                </span>
                                <select class="form-control" name="cboDanhMuc">
                                        <?php
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo '
                                                <option value="' . $row["tendanhmuc"] . '">' . $row["tendanhmuc"] . '</option>
                                            ';
                                        }
                                        ?>
                                    </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Đường dẫn</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-th-large"></i>
                                </span>
                                <input type="text" class="form-control" name="txtDuongDan" placeholder="Đường dẫn" required>
                            </div>
                        </div>
                        
                        <button type="submit" name="add_category" class="btn btn-danger">Thêm danh mục con</button>
                        <a href="danhmuccon.php?tentaikhoan=<?php echo $tentaikhoan ?>" class="btn btn-primary">Quay Lại</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_category'])) {
    $tendanhmuccon = $_POST['txtTenDanhMucCon'];
    $duongdan = $_POST['txtDuongDan'];
    $tendanhmuc = $_POST['cboDanhMuc'];
        
        $conn = mysqli_connect("localhost", "root", "", "ql_webmaytinh");
        if (!$conn) {
            echo "Kết nối không thành công!" . mysqli_connect_error();
        } else {
            $query = "INSERT INTO tbl_danhmuccon VALUES ('" . $tendanhmuccon . "', '" . $tendanhmuc . "', '" . $duongdan . "');";
            $result = mysqli_query($conn, $query);
            if ($result) {
                echo "<script>alert('Thêm danh mục con thành công');</script>";
            } else {
                echo "<script>alert('Thêm danh mục con thất bại');</script>";
            }
        }
    }
?>

<?php include_once('footer.php'); ?>
