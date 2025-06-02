<?php include_once('header.php'); ?>
<?php include 'connect_database.php'; ?>

<?php
    
    $id = $_GET['id'];

    $conn = mysqli_connect("localhost", "root", "", "ql_webmaytinh");
    if (!$conn) {
        echo "Kết nối không thành công!";
    } else {
        // Truy vấn để xóa 
       $query = "DELETE FROM tbl_taikhoan WHERE tentaikhoan='" . $id . "'"; //Lệnh Truy Vấn Sql
        $result = mysqli_query($conn, $query);

        // Kiểm tra kết quả truy vấn
        if ($result>0) {
            echo '
                <script>
                    alert("Xóa tài khoản thành công");
                    window.location.href = "taikhoan.php?tentaikhoan=' . $tentaikhoan .'";
                </script>
            ';
        } else {
            echo '
                <script>
                    alert("Xóa tài khoản thất bại");
                    window.location.href = "taikhoan.php?tentaikhoan=' . $tentaikhoan .'";
                </script>
            ';
        }
    }
?>

<?php include_once('footer.php'); ?>
