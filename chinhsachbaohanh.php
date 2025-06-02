<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chính Sách Bảo Hành</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .baohanh-container {
            display: flex;
            justify-content: space-between;
            padding-top: 20px;
            padding-left: 50px;
            flex: 1;
            align-items: center; 
        }

        .warranty-policy {
            text-align: left;
            flex: 1; 
            padding-right: 20px; 
        }

        .warranty-policy h1 {
            color: red;
            font-size: 2.5em;
        }

        .warranty-policy h2 {
            font-size: 1.5em;
        }

        .warranty-policy p {
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

    <div class="baohanh-container">
        <div class="warranty-policy">
            <h1>CHÍNH SÁCH BẢO HÀNH</h1>
            <h2>DÀNH CHO KHÁCH HÀNG HACOM</h2>
            <p>Nếu Quý Khách gặp khó khăn trong việc liên hệ Trung Tâm Bảo Hành, vui lòng liên hệ với bộ phận Chăm sóc Khách hàng của HACOM theo thông tin sau để được hỗ trợ:</p>
            <p><b>Email: </b>dichvukhachhang@hacom.vn</p>
            <p><b>Hotline: </b>1900 1903</p>
            <p>- Các ngày <b>thứ 2,3,4,6,7</b> - Thời gian làm việc từ: <b> 08:00 - 17:30</b></p>
            <p>- Các ngày <b>thứ 5 & Chủ nhật</b> - Thời gian làm việc từ: <b>08:30 - 17:30</b></p>
        </div>
        <div class="side-image">
            <img src="/baitaplon/anhweb/chinhsachbaohanh.png" alt="Side Image">
        </div>
    </div>
     
    <div class="steps-container">
        <h1>Các bước bảo hành Sản phẩm</h1>
        <img src="/baitaplon/anhweb/cacbuocbaohanh.png" alt="Các bước bảo hành sản phẩm" class="steps-image">
    </div>

    <div class="baohanh-container">
        <div class="warranty-policy">
            <h1>Điều kiện bảo hành Sản phẩm</h1>
            <h2>Các sản phẩm đủ điều kiện bảo hành</h2>
            <p>- Sản phẩm nếu còn tem niêm phong (seal) trên sản phẩm thì tem niêm phong phải còn nguyên vẹn.</p>
            <p>- Đối với sản phẩm bảo hành trên hộp: sản phẩm còn đầy đủ hộp.</p>
            <p>- Sản phẩm không trầy xước, cấn móp, bể, vỡ, biến dạng so với ban đầu.</p>
        </div>
        <div class="side-image">
            <img src="/baitaplon/anhweb/baohanhbuoc4.png" alt="Step 4 Image">
        </div>
    </div>

    <div class="baohanh-container">
        <div class="warranty-policy">
            <h2>Các sản phẩm không đủ điều kiện bảo hành</h2>
            <p>- Hết thời hạn bảo hành.</p>
            <p>- Không còn tem niêm phong, hoặc bị xóa, không còn nguyên dạng ban đầu.</p>
            <p>- Bị tác động vật lý làm trầy xước, cong vênh, rạn nứt, bể vỡ trong quá trình sử dụng.</p>
            <p>- Bị hư hỏng do tự ý tháo mở, sửa chữa, thay đổi cấu trúc sản phẩm bên trong mà chưa có sự xác nhận đồng ý hoặc giám sát bởi kỹ thuật viên HACOM.</p>
            <p>- Bị hư hỏng do các tình trạng xâm nhập (chuột, gián, kiến, mối...).</p>
            <p>- Bị hư hỏng do thiên tai, hoả hoạn, lụt lội, sét đánh, rỉ sét, hao mòn do môi trường gây ra.</p>
        </div>
        <div class="side-image">
            <img src="/baitaplon/anhweb/baohanhbuoc5.png" alt="Step 5 Image">
        </div>
    </div>

    
    <div class="thank-you-box">
        HACOM CHÂN THÀNH CẢM ƠN QUÝ KHÁCH
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
