<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chính Sách Đổi Trả</title>
    <link rel="stylesheet" href="style.css"> 
    <style>
        .return-policy-container {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            flex: 1;
            align-items: center; 
            margin-bottom: 20px;
            padding-left: 50px; 
        }

        .return-policy-container.reverse {
            flex-direction: row-reverse;
        }

        .policy-header, .policy-details {
            text-align: left;
            flex: 1; 
            padding-right: 20px; 
        }

        .policy-header h1, .policy-details h1 {
            color: red;
            font-size: 2.5em;
        }

        .policy-header h2, .policy-details h2 {
            font-size: 1.5em;
        }

        .policy-header p, .policy-details p {
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
            width: 80%;
            height: auto; 
            max-height: 300px; 
            border-radius: 10px;
        }
        .steps-container {
            text-align: center;
            padding: 20px;
            margin-top: 40px; /
        }

        .steps-container h1 {
            color: red;
            font-size: 2em;
        }

        .steps-image {
            width: 100%;
            max-width: 1000px; 
            height: auto;
            margin-top: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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

    <div class="return-policy-container">
        <div class="policy-header">
            <h1>CHÍNH SÁCH ĐỔI TRẢ</h1>
            <h2>DÀNH CHO KHÁCH HÀNG HACOM</h2>
            <p>Nếu Quý Khách gặp khó khăn trong việc đổi trả sản phẩm, vui lòng liên hệ với bộ phận Chăm sóc Khách hàng của HACOM theo thông tin sau để được hỗ trợ:</p>
            <p><b>Email: </b>dichvukhachhang@hacom.vn</p>
            <p><b>Hotline: </b>1900 1903</p>
            <p>- Các ngày <b>thứ 2,3,4,6,7</b> - Thời gian làm việc từ: <b> 08:00 - 17:30</b></p>
            <p>- Các ngày <b>thứ 5 & Chủ nhật</b> - Thời gian làm việc từ: <b>08:30 - 17:30</b></p>
        </div>
        <div class="side-image">
            <img src="/baitaplon/anhweb/doitra1.png" alt="Return Policy Image">
        </div>
    </div>
     
    <div class="return-policy-container">
        <div class="policy-details">
            <h1>Điều kiện đổi trả sản phẩm</h1>
            <h2>Các sản phẩm đủ điều kiện đổi trả</h2>
            <p>- Sản phẩm còn nguyên vẹn, không bị hư hỏng, còn đầy đủ bao bì và phụ kiện.</p>
            <p>- Sản phẩm chưa qua sử dụng, chưa được kích hoạt hoặc đăng ký bảo hành.</p>
            <p>- Sản phẩm còn nguyên tem niêm phong của nhà sản xuất (nếu có).</p>
        </div>
        <div class="side-image">
            <img src="/baitaplon/anhweb/doitra2.png" alt="Return Step 1 Image">
        </div>
    </div>

    <div class="return-policy-container reverse">
        <div class="policy-details">
            <h2>Các sản phẩm không đủ điều kiện đổi trả</h2>
            <p>- Sản phẩm đã qua sử dụng, bị trầy xước, hư hỏng.</p>
            <p>- Sản phẩm không còn nguyên bao bì, phụ kiện, hoặc mất tem niêm phong.</p>
            <p>- Sản phẩm đã được kích hoạt hoặc đăng ký bảo hành.</p>
        </div>
        <div class="side-image">
            <img src="/baitaplon/anhweb/doitra3.png" alt="Return Step 2 Image">
        </div>
    </div>

    
    <div class="thank-you-box">
        HACOM CHÂN THÀNH CẢM ƠN QUÝ KHÁCH
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
