<?php
session_start();
session_destroy();
session_unset(); // Xóa tất cả các biến phiên
header('Location: dangnhap.php');
exit();
?>
