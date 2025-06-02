<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khuyến Mãi</title>
    <link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <style>
        /* Khuyến mãi */
        .promotions-container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            padding: 30px;
            gap: 20px;
        }

        .promotion-card {
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: calc(33.333% - 20px); /* Đảm bảo 3 ô trên một hàng */
            background-color: #fff;
            font-family: 'Roboto', sans-serif;
            transition: transform 0.3s;
        }

        .promotion-card img {
            width: 100%;
            height: auto;
            border-bottom: 1px solid #ddd;
        }

        .promotion-details {
            padding: 10px;
            text-align: left;
        }

        .promotion-details h3 {
            font-size: 1.2em;
            margin: 0 0 10px;
        }

        .promotion-details p {
            margin: 0;
            color: #666;
        }

        .promotion-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

    </style>
</head>
<body>
    
    <?php include 'header.php'; ?>
        <h1 align="center">Chương trình khuyến mãi</h1>
    <div class="promotions-container">
        <div class="promotion-card">
            <img src="/baitaplon/anhweb/khuyenmai.png" alt="Promotion 1">
            <div class="promotion-details">
                <h3>Chương trình khuyến mãi Build PC tặng ngay tiền mặt</h3>
                <p>Từ nay cho đến khi có thông báo mới</p>
            </div>
        </div>
        <div class="promotion-card">
            <img src="/baitaplon/anhweb/khuyenmai2.png" alt="Promotion 2">
            <div class="promotion-details">
                <h3>CƠ HỘI TRÚNG QUÀ CỰC CHẤT KHI MUA MÀN HÌNH THÁNG 4</h3>
                <p>Từ ngày 01/04/2024 đến hết ngày 30/04/2024</p>
            </div>
        </div>
        <div class="promotion-card">
            <img src="/baitaplon/anhweb/khuyenmai3.png" alt="Promotion 3">
            <div class="promotion-details">
                <h3>Đến HACOM vệ sinh máy tính MIỄN PHÍ</h3>
                <p>Từ nay đến 30/06/2024</p>
            </div>
        </div>
        <div class="promotion-card">
            <img src="/baitaplon/anhweb/khuyenmai4.jpg" alt="Promotion 4">
            <div class="promotion-details">
                <h3>ĐẠI TIỆC QUÀ TẶNG DÀNH CHO GAME THỦ</h3>
                <p>Từ nay đến 30/06/2024</p>
            </div>
        </div>
        <div class="promotion-card">
            <img src="/baitaplon/anhweb/khuyenmai5.png" alt="Promotion 5">
            <div class="promotion-details">
                <h3>MUA SỚM GIẢM NHIỀU DÀNH CHO FAN CÔNG NGHỆ</h3>
                <p>Cơ hội để mua các dòng sản phẩm laptop gaming, laptop văn phòng với chi phí tiết kiệm nhất và nhiều quà tặng ưu đãi dành cho bạn</p>
            </div>
        </div>
        <div class="promotion-card">
            <img src="/baitaplon/anhweb/khuyenmai6.png" alt="Promotion 6">
            <div class="promotion-details">
                <h3>KỈ NIỆM 20 NĂM LAPTOP MSI - TẶNG MÔ HÌNH KATANA CỰC NGẦU</h3>
                <p>01/6/2024 đến 31/7/2024</p>
            </div>
        </div>
        <div class="promotion-card">
            <img src="/baitaplon/anhweb/khuyenmai7.png" alt="Promotion 7">
            <div class="promotion-details">
                <h3>CHỌN LOA CHẤT, NHẬN FREE TÚI ĐỰNG BOONA</h3>
                <p></p>
            </div>
        </div>
        <div class="promotion-card">
            <img src="/baitaplon/anhweb/khuyenmai8.png" alt="Promotion 8">
            <div class="promotion-details">
                <h3>CHÁY CÙNG EURO 2024 - GIẢI TRÍ TẠI GIA - KHÔNG LO VỀ GIÁ</h3>
                <p>Khuyến mại khi mua các sản phẩm trong danh sách CHVA001 / CHMN013 / CHMN014 / CHYB001</p>
            </div>
        </div>
        <div class="promotion-card">
            <img src="/baitaplon/anhweb/khuyenmai9.png" alt="Promotion 9">
            <div class="promotion-details">
                <h3>[KHUYẾN MÃI] MUA CHUỘT ROG KERIS TẶNG NGAY BÀN LÓT CHUỘT</h3>
                <p></p>
            </div>
        </div>
    </div>



    <?php include 'footer.php'; ?>
</body>
</html>
