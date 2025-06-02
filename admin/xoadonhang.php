<?php include_once('header.php'); ?>
<?php include 'connect_database.php'; ?>

<?php
    // Lấy id  từ URL
    $madonhang = $_GET['madonhang'];

    $conn = mysqli_connect("localhost","root","","ql_webmaytinh");
    if (!$conn){
        echo "Kết nối không thành công!";
    } else {
        // Truy vấn để xóa sản phẩm dựa trên id
        $query = "DELETE FROM tbl_donhang WHERE madonhang='" . $madonhang . "'"; //Lệnh Truy Vấn Sql
        $result = mysqli_query($conn, $query);

        // Kiểm tra kết quả truy vấn
        if ($result > 0){
            echo '
                <script>
                    alert("Xoá đơn hàng thành công");
                    window.location.href = "donhang.php?tentaikhoan=' . $tentaikhoan .'";
                </script>
            ';
        } else {
            echo "Xoá đơn hàng thất bại";
        }
    }
?>

<?php include_once('footer.php'); ?>