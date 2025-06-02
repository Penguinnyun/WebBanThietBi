<?php include_once('header.php'); ?>
<?php include 'connect_database.php'; ?>

<?php
    // Lấy id sản phẩm từ URL
    $masanpham = $_GET['masanpham'];

    $conn = mysqli_connect("localhost","root","","ql_webmaytinh");
    if (!$conn){
        echo "Kết nối không thành công!";
    } else {
        // Truy vấn để xóa sản phẩm dựa trên id
        $query = "DELETE FROM `tbl_sanpham` WHERE masanpham ='".$masanpham."'";
        $result = mysqli_query($conn, $query);

        // Kiểm tra kết quả truy vấn
        if ($result > 0){
            echo '
                <script>
                    alert("Xoá sản phẩm thành công");
                    window.location.href = "sanpham.php?tentaikhoan=' . $tentaikhoan .'";
                </script>
            ';
        } else {
            echo "Xoá sản phẩm thất bại";
        }
    }
?>

<?php include_once('footer.php'); ?>