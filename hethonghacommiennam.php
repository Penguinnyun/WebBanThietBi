<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hệ Thống HACOM Miền Nam</title>
    <link rel="stylesheet" href="style.css"> 
    <style>

        .hacom-container {
            padding: 20px;
            text-align: center;
        }
        .hacom-header-box {
            border: 3px solid red;
            padding: 10px;
            display: inline-block;
            border-radius: 10px;
            margin-bottom: 20px;
            margin-top: 20px;
        }

        .hacom-header-box h1 {
            color: black;
            margin: 0;
        }
        .hacom-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .hacom-card {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            width: 300px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: left;
            background-color: white;
        }

        .hacom-card h3 {
            background-color: #0044cc;
            color: white;
            padding: 10px;
            border-radius: 10px;
            margin-top: 0;
            margin-bottom: 15px;
            text-align: center;
        }

        .hacom-card p {
            display: flex;
            align-items: center;
            margin: 10px 0;
        }

        .hacom-card img {
            width: 20px;
            margin-right: 10px;
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

    <div class="hacom-container">
         <div class="hacom-header-box">
            <h1>HACOM MIỀN NAM</h1>
        </div>

        <div class="hacom-grid">
        <div class="hacom-card">
                <h3>1. HACOM - Q3, TP. HỒ CHÍ MINH</h3>
                <p><img src="/baitaplon/anhweb/locationicon.png" alt="Location Icon"> Số 478 Cách Mạng Tháng Tám - Quận 3 - TP. Hồ Chí Minh</p>
                <p><img src="/baitaplon/anhweb/phoneicon.png" alt="Phone Icon"> Tel: 1900 1903 (máy lẻ 25401) - (028) 73000322</p>
                <p><img src="/baitaplon/anhweb/mailicon.png" alt="Email Icon"> Email: kdbl.quan3@hacom.vn</p>
                <p><img src="/baitaplon/anhweb/clockicon.png" alt="Clock Icon"> Thời gian mở cửa: Từ 8h30-20h30 hàng ngày</p>
        </div>
        <div class="hacom-card">
                <h3>HỖ TRỢ TẠI TP. HỒ CHÍ MINH</h3>
                <p><img src="/baitaplon/anhweb/phoneicon.png" alt="Phone Icon"> Mr THÀNH: 0987676534</p>
                <img src="/baitaplon/anhweb/mailicon.png" alt="Email Icon"> Email: kdbl.thanh4@hacom.vn</p>
                <p><img src="/baitaplon/anhweb/phoneicon.png" alt="Phone Icon"> Mr ĐOÀN: 0987675567</p>
                <img src="/baitaplon/anhweb/mailicon.png" alt="Email Icon"> Email: kdbl.doan7@hacom.vn</p>
                <p><img src="/baitaplon/anhweb/phoneicon.png" alt="Phone Icon"> Mr HUY: 0987678653</p>
                <img src="/baitaplon/anhweb/mailicon.png" alt="Email Icon"> Email: kdbl.huy8@hacom.vn</p>

        </div>
            
        </div>
    </div>

    <div class="thank-you-box">
        HACOM CHÂN THÀNH CẢM ƠN QUÝ KHÁCH
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
