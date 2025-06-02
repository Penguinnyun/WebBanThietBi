<?php include_once('header.php'); ?>
<?php include 'connect_database.php'; ?>



<?php   $query = "SELECT * FROM tbl_danhmuc"; //Lệnh Truy Vấn Sql
        $result = mysqli_query($conn, $query); //Thực thi truy vấn

$danhmuc = [];
while ($row = mysqli_fetch_assoc($result)) {
    $danhmuc[] = $row;
}

// Truy vấn tên danh mục con
$query_con = "SELECT * FROM tbl_danhmuccon";
$result_con = mysqli_query($conn, $query_con);
$danhmuccon = [];
while ($row_con = mysqli_fetch_assoc($result_con)) {
    $danhmuccon[] = $row_con;
}

// Xuất dữ liệu JSON cho JavaScript
echo "<script>
        var danhmuc = " . json_encode($danhmuc) . ";
        var danhmuccon = " . json_encode($danhmuccon) . ";
      </script>";
?>


<form method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong>
                        <span class="glyphicon glyphicon-th"></span>
                        <span>Thêm sản phẩm</span>
                    </strong>
                </div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Tên Sản Phẩm</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-th-large"></i>
                                </span>
                                <input type="text" class="form-control" name="txtTenSanPham" placeholder="Tên sản phẩm" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Mã Sản Phẩm</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-barcode"></i>
                                </span>
                                <input type="text" class="form-control" name="txtMaSanPham" placeholder="Mã sản phẩm" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Danh Mục</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-list"></i>
                                </span>
                                <select class="form-control" name="cboDanhMuc" id="tendanhmuc">
                                        <option value="">Chọn danh mục</option>
                                        <?php foreach ($danhmuc as $dm) { ?>
                                            <option value="<?= $dm['tendanhmuc'] ?>"><?= $dm['tendanhmuc'] ?></option>
                                        <?php } ?>
                                    </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Danh Mục Con</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-list"></i>
                                </span>
                                <select class="form-control" name="cboDanhMucCon" id="tendanhmuccon">
                                <option value="">Chọn danh mục con</option>
                                    </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Giá</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-usd"></i>
                                </span>
                                <input type="number" class="form-control" name="txtGia" placeholder="Giá sản phẩm" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Số Lượng</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-th-large"></i>
                                </span>
                                <input type="number" class="form-control" name="txtSoLuong" placeholder="Số lượng" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Thông số</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-info-sign"></i>
                                </span>
                                <textarea class="form-control" name="txtThongSo" placeholder="Thông số kỹ thuật" required></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Ảnh Sản Phẩm</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-picture"></i>
                                </span>
                                <input type="file" class="form-control" name="txtAnh" accept="image/*" required>
                            </div>
                        </div>
                        <button type="submit" name="add_product" class="btn btn-danger">Thêm sản phẩm</button>
                        <a href="sanpham.php?tentaikhoan=<?php echo $tentaikhoan ?>" class="btn btn-primary">Quay Lại</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_product'])){
    
        $masanpham = $_POST['txtMaSanPham'];
        $tensanpham = $_POST['txtTenSanPham'];
        $anh = $_FILES['txtAnh']["name"];
        $tendanhmuc = $_POST['cboDanhMuc'];
        $tendanhmuccon = $_POST['cboDanhMucCon'];
        $soluong = $_POST['txtSoLuong'];
        $gia = $_POST['txtGia'];
        $thongso = $_POST['txtThongSo'];

        
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["txtAnh"]["name"]);

        if (move_uploaded_file($_FILES["txtAnh"]["tmp_name"], $target_file)) {
            $conn = mysqli_connect("localhost", "root", "", "ql_webmaytinh");
            if (!$conn) {
                echo "Kết nối không thành công!";
            } else {
                $them = "INSERT INTO   tbl_sanpham VALUES ('" . $masanpham . "', '" . $tensanpham . "', '" . $anh . "', '" . $tendanhmuc . "', '" . $tendanhmuccon . "' , '" . $soluong . "', '" . $gia . "', '" . $thongso . "');";
                $result = mysqli_query($conn, $them);
                if ($result > 0) {
                    echo "<script>alert('Thêm sản phẩm thành công');</script>";
                } else {
                    echo "<script>alert('Thêm sản phẩm thất bại');</script>";
                }
            }
        } else {
            echo "<script>alert('Có lỗi xảy ra khi upload file ảnh');</script>";
        }
    }

?>



<?php include_once('footer.php'); ?>

<script>
    document.getElementById('tendanhmuc').addEventListener('change', function() {
    var tendanhmucID = this.value;
    var tendanhmuccon = document.getElementById('tendanhmuccon');
    
    // Xóa các option cũ
    tendanhmuccon.innerHTML = '<option value="">Chọn danh mục con</option>';
    
    // Thêm các option mới
    danhmuccon.forEach(function(dmc) {
        if (dmc.tendanhmuc == tendanhmucID) {
            var option = document.createElement('option');
            option.value = dmc.tendanhmuccon;
            option.text = dmc.tendanhmuccon;
            tendanhmuccon.add(option);
        }
    });
});
</script>



















<!-- function kiemTraCCCD($cccd)
{
    // Kiểm tra độ dài số căn cước công dân: Số căn cước công dân phải có 9 hoặc 12 ký tự.
    if (strlen($cccd) !== 9 && strlen($cccd) !== 12) {
        return false;
    }

    // Kiểm tra các ký tự trong số căn cước công dân: Số căn cước công dân chỉ được chứa các ký tự số.
    if (!preg_match('/^[0-9]+$/', $cccd)) {
        return false;
    }

    return true;
} -->

<!-- <?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_product'])){
    
        $masanpham = $_POST['txtMaSanPham'];
        $tensanpham = $_POST['txtTenSanPham'];
        $anh = $_FILES['txtAnh']["name"];
        $tendanhmuc = $_POST['cboDanhMuc'];
        $tendanhmuccon = $_POST['cboDanhMucCon'];
        $soluong = $_POST['txtSoLuong'];
        $gia = $_POST['txtGia'];
        $thongso = $_POST['txtThongSo'];

        
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["txtAnh"]["name"]);

        if (move_uploaded_file($_FILES["txtAnh"]["tmp_name"], $target_file)) {
            $conn = mysqli_connect("localhost", "root", "", "ql_webmaytinh");
            if (!$conn) {
                echo "Kết nối không thành công!";
            } else {$kiemtra_query = "SELECT * FROM tbl_sanpham WHERE masanpham='$masanpham'";
                $kiemtra_result = mysqli_query($conn, $kiemtra_query);
    
                if (mysqli_num_rows($kiemtra_result) > 0) {
                    echo "<script>alert('Mã sản phẩm đã tồn tại. Vui lòng nhập mã sản phẩm khác.');</script>";
                } else {
                $them = "INSERT INTO   tbl_sanpham VALUES ('" . $masanpham . "', '" . $tensanpham . "', '" . $anh . "', '" . $tendanhmuc . "', '" . $tendanhmuccon . "' , '" . $soluong . "', '" . $gia . "', '" . $thongso . "');";
                $result = mysqli_query($conn, $them);
                if ($result > 0) {
                    echo "<script>alert('Thêm sản phẩm thành công');</script>";
                } else {
                    echo "<script>alert('Thêm sản phẩm thất bại');</script>";
                }
            }
        } 
    }
}
?> -->




<!-- function kiemTraCCCD($cccd)
{
    // Kiểm tra độ dài số căn cước công dân: Số căn cước công dân phải có 9 hoặc 12 ký tự.
    if (strlen($cccd) !== 9 && strlen($cccd) !== 12) {
        return false;
    }

    // Kiểm tra các ký tự trong số căn cước công dân: Số căn cước công dân chỉ được chứa các ký tự số.
    if (!preg_match('/^[0-9]+$/', $cccd)) {
        return false;
    }

    return true;
} -->