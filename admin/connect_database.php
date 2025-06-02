<?php
$conn = mysqli_connect("localhost","root","","ql_webmaytinh");
if (!$conn){
    echo "Kết nối không thành công!" .mysqli_connect_error(); 
}
else{
    $query = "SELECT * FROM tbl_sanpham";
    $result = mysqli_query($conn,$query);
}
?>
