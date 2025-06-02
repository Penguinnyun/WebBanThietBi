<?php include_once('header.php'); ?>
<?php include 'connect_database.php'; ?>

<?php
    // Lấy tên danh mục từ URL
    $tendanhmuc = $_GET['tendanhmuc'];

    $conn = mysqli_connect("localhost", "root", "", "ql_webmaytinh");
    if (!$conn) {
        echo "Kết nối không thành công!";
    } else {
        // Truy vấn để xóa danh mục dựa trên tên danh mục
        $query = "DELETE FROM tbl_danhmuc WHERE tendanhmuc='$tendanhmuc'";
        $result = mysqli_query($conn, $query);

        // Kiểm tra kết quả truy vấn
        if ($result>0) {
            echo '
                <script>
                    alert("Xóa danh mục thành công");
                    window.location.href = "danhmuc.php?tentaikhoan=' . $tentaikhoan .'";
                </script>
            ';
        } else {
            echo '
                <script>
                    alert("Xóa danh mục thất bại");
                    window.location.href = "danhmuc.php?tentaikhoan=' . $tentaikhoan .'";
                </script>
            ';
        }
    }
?>

<?php include_once('footer.php'); ?>
