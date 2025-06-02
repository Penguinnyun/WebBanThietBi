<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hỗ Trợ</title>
    <link rel="stylesheet" href="style.css"> 
    <style>
        .support-container {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            flex: 1;
            align-items: center; 
            margin-bottom: 20px;
            padding-left: 50px; 
        }

        .support-content {
            text-align: left;
            flex: 1; 
            padding-right: 20px; 
        }

        .support-content h1 {
            color: red;
            font-size: 2.5em;
        }

        .support-content h2 {
            font-size: 1.5em;
        }

        .support-content p {
            font-size: 1em;
            line-height: 1.5;
        }

        .side-image {
            flex: 1; 
            max-width: 50%; 
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .side-image img {
            width: 100%;
            height: auto; 
            max-height: 300px; 
            border-radius: 10px;
        }

        .thank-you-box {
            background-color: red;
            color: white;
            text-align: center;
            padding: 20px;
            font-size: 1.5em;
            font-weight: bold;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    
    <?php include 'header.php'; ?>

    <div class="support-container">
        <div class="support-content">
            <h1>HỖ TRỢ KHÁCH HÀNG</h1>
            <h2>Liên hệ với chúng tôi</h2>
            <p>Nếu Quý Khách gặp khó khăn hoặc có bất kỳ câu hỏi nào, vui lòng liên hệ với bộ phận Chăm sóc Khách hàng của HACOM theo thông tin sau để được hỗ trợ:</p>
            <p><b>Email: </b>dichvukhachhang@hacom.vn</p>
            <p><b>Hotline: </b>1900 1903</p>
            <p>- Các ngày <b>thứ 2,3,4,6,7</b> - Thời gian làm việc từ: <b>08:00 - 17:30</b></p>
            <p>- Các ngày <b>thứ 5 & Chủ nhật</b> - Thời gian làm việc từ: <b>08:30 - 17:30</b></p>
        </div>
        <div class="side-image">
            <img src="/baitaplon/anhweb/hotro.png" alt="Support Image">
        </div>
    </div>

    <div class="thank-you-box">
        HACOM CHÂN THÀNH CẢM ƠN QUÝ KHÁCH
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
