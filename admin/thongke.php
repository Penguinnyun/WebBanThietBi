<?php include_once('header.php');
include_once('connect_database.php'); ?>

<?php
function demSoLuong($tenbang, $connect)
{
    $query = "SELECT COUNT(*) AS total_rows FROM $tenbang;";
    $result = mysqli_query($connect, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        return (int)$row["total_rows"];
    }
}

function tinhTong($tenbang, $connect, $tencot)
{
    $query = "SELECT SUM($tencot) AS total_quantity FROM $tenbang;";
    $result = mysqli_query($connect, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        return (int)$row["total_quantity"];
    }
}
?>


<div class="row">
    <a href="taikhoan.php?tentaikhoan=<?php echo $tentaikhoan ?>" style="color:black;">
        <div class="col-md-3">
            <div class="panel panel-box clearfix">
                <div class="panel-icon pull-left bg-secondary1">
                    <i class="glyphicon glyphicon-user"></i>
                </div>
                <div class="panel-value pull-right">
                    <h2 class="margin-top"> <?php echo demSoLuong("tbl_taikhoan", $conn); ?></h2>
                    <p class="text-muted">Tài khoản</p>
                </div>
            </div>
        </div>
    </a>

    <a href="danhmuc.php?tentaikhoan=<?php echo $tentaikhoan ?>" style="color:black;">
        <div class="col-md-3">
            <div class="panel panel-box clearfix">
                <div class="panel-icon pull-left bg-red">
                    <i class="glyphicon glyphicon-th-large"></i>
                </div>
                <div class="panel-value pull-right">
                    <h2 class="margin-top"> <?php echo demSoLuong("tbl_danhmuc", $conn); ?></h2>
                    <p class="text-muted">Danh mục</p>
                </div>
            </div>
        </div>
    </a>
    <a href="danhmuc.php?tentaikhoan=<?php echo $tentaikhoan ?>" style="color:black;">
        <div class="col-md-3">
            <div class="panel panel-box clearfix">
                <div class="panel-icon pull-left bg-yellow">
                    <i class="glyphicon glyphicon-th-large"></i>
                </div>
                <div class="panel-value pull-right">
                    <h2 class="margin-top"> <?php echo demSoLuong("tbl_danhmuccon", $conn); ?></h2>
                    <p class="text-muted">Danh mục con</p>
                </div>
            </div>
        </div>
    </a>

    <a href="sanpham.php?tentaikhoan=<?php echo $tentaikhoan ?>" style="color:black;">
        <div class="col-md-3">
            <div class="panel panel-box clearfix">
                <div class="panel-icon pull-left bg-blue2">
                    <i class="glyphicon glyphicon-shopping-cart"></i>
                </div>
                <div class="panel-value pull-right">
                    <h2 class="margin-top"> <?php echo demSoLuong("tbl_sanpham", $conn); ?> </h2>
                    <p class="text-muted">Sản phẩm</p>
                </div>
            </div>
        </div>
    </a>
    <a href="sanpham.php?tentaikhoan=<?php echo $tentaikhoan ?>" style="color:black;">
        <div class="col-md-3">
            <div class="panel panel-box clearfix">
                <div class="panel-icon pull-left bg-red">
                    <i class="glyphicon glyphicon-shopping-cart"></i>
                </div>
                <div class="panel-value pull-right">
                    <h2 class="margin-top"> <?php echo (tinhTong("tbl_sanpham", $conn, "soluong")); ?> </h2>
                    <p class="text-muted">Tổng Số Lượng Sản phẩm</p>
                </div>
            </div>
        </div>
    </a>
    <a href="donhang.php?tentaikhoan=<?php echo $tentaikhoan ?>" style="color:black;">
        <div class="col-md-3">
            <div class="panel panel-box clearfix">
                <div class="panel-icon pull-left bg-blue">
                    <i class="glyphicon glyphicon-credit-card"></i>
                </div>
                <div class="panel-value pull-right">
                    <h2 class="margin-top"> <?php echo demSoLuong("tbl_donhang", $conn); ?> </h2>
                    <p class="text-muted">Đơn Hàng</p>
                </div>
            </div>
        </div>
    </a>
    <a href="donhang.php?tentaikhoan=<?php echo $tentaikhoan ?>" style="color:black;">
        <div class="col-md-3">
            <div class="panel panel-box clearfix">
                <div class="panel-icon pull-left bg-blue2">
                    <i class="glyphicon glyphicon-shopping-cart"></i>
                </div>
                <div class="panel-value pull-right">
                    <h2 class="margin-top"> <?php echo (tinhTong("tbl_donhang", $conn, "soluong")); ?> </h2>
                    <p class="text-muted">Tổng Số Lượng Sản phẩm Đã Bán</p>
                </div>
            </div>
        </div>
    </a>

    <a href="sales.php" style="color:black;">
        <div class="col-md-3">
            <div class="panel panel-box clearfix">
                <div class="panel-icon pull-left bg-green">
                    <i class="glyphicon glyphicon-usd"></i>
                </div>
                <div class="panel-value pull-right">
                    <h2 class="margin-top"> 1000</h2>
                    <p class="text-muted">Thống kê khác</p>
                </div>
            </div>
        </div>
    </a>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <strong>
                    <span class="glyphicon glyphicon-th"></span>
                    <span>Các tài khoản user</span>
                </strong>
            </div>
            <div class="panel-body">
                <table class="table table-striped table-bordered table-condensed">
                    <thead>
                        <tr>
                            <th>Tên tài khoản</th>
                            <th>Mật khẩu</th>
                            <th>Email</th>
                        <tr>
                    </thead>
                    <tbody>
                    <?php
                        $query = "SELECT * FROM tbl_taikhoan WHERE loaitaikhoan ='user'";
                        $result = mysqli_query($conn, $query);

                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '
                                <tr>
                                    <td>' . $row["tentaikhoan"] . '</td>
                                    <td>' . $row["matkhau"] . '</td>
                                    <td>' . $row["email"] . '</td>
                                </tr>
                            ';
                        }
                        ?>
                    <tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <strong>
                    <span class="glyphicon glyphicon-th"></span>
                    <span>Các tài khoản admin</span>
                </strong>
            </div>
            <div class="panel-body">
                <table class="table table-striped table-bordered table-condensed">
                    <thead>
                        <tr>
                            <th>Tên tài khoản</th>
                            <th>Mật khẩu</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $query = "SELECT * FROM tbl_taikhoan WHERE loaitaikhoan ='admin'";
                        $result = mysqli_query($conn, $query);

                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '
                                <tr>
                                    <td>' . $row["tentaikhoan"] . '</td>
                                    <td>' . $row["matkhau"] . '</td>
                                    <td>' . $row["email"] . '</td>
                                </tr>
                            ';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <strong>
                    <span class="glyphicon glyphicon-th"></span>
                    <span>Recently Added Products</span>
                </strong>
            </div>
            <div class="panel-body">

                <div class="list-group">
                    <a class="list-group-item clearfix" href="suasanpham.php">
                        <h4 class="list-group-item-heading">
                            <?php if (1 + 1 == 2) : ?>
                                <img class="img-avatar img-circle" src="uploads/products/no_image.png" alt="">
                            <?php else : ?>
                                <img class="img-avatar img-circle" src="uploads/products/" alt="" />
                            <?php endif; ?>
                            <?php echo "test"; ?>
                            <span class="label label-warning pull-right">
                                <?php echo "100000" ?>
                            </span>
                        </h4>
                        <span class="list-group-item-text pull-right">
                            <?php "test"; ?>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">

</div>