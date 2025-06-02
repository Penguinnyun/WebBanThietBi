<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sự Kiện</title>
    <link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <style>

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
            width: 30%;
            background-color: #fff;
            font-family: 'Roboto', sans-serif;
        }

        .promotion-card img {
            width: 100%;
            height: auto;
            border-bottom: 1px solid #ddd;
        }
        .promotion-card:hover{
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s;
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
        .events-container {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            margin: 0 20px;
            gap: 10px; 
        }

        .events-left {
            width: 65%; /* Tăng chiều rộng phần bên trái */
        }

        .events-right {
            width: 33%; /* Giảm chiều rộng phần bên phải */
        }

        .events-section {
            margin-bottom: 20px;
        }

        .section-title {
            background-color: #0044cc;
            color: white;
            padding: 10px;
            border-radius: 10px;
            text-align: center;
        }

        .event, .highlighted-article {
            display: flex;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            background-color: white;
        }

        .event img, .highlighted-article img {
            width: 40%;
            height: auto;
        }

        .event-details, .highlighted-details {
            padding: 10px;
            text-align: left;
        }

        .event-details h3, .highlighted-details h3 {
            font-size: 1.2em;
            margin: 0 0 10px;
        }

        .event-details p, .highlighted-details p {
            margin: 0;
            color: #666;
        }
        .event:hover{
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s;
        }
        .highlighted-article:hover{
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s;
        }


    </style>
</head>
<body>
    
    <?php include 'header.php'; ?>

    <h1 align="center">Sự kiện</h1>
    <div class="promotions-container">
        <div class="promotion-card">
            <img src="/baitaplon/anhweb/sukien1.jpg" alt="Promotion 1">
            <div class="promotion-details">
                <h3>COMCO KHÔNG DÂY CHẤT LỪ - NHỎ GỌN, NHANH NHẠY, CHÍNH XÁC TUYỆT ĐỐI</h3>
                <p>Từ 03/05/2024 đến 03/07/2024, Hạn chót đăng ký nhận quà là 05/07/2024</p>
            </div>
        </div>
        <div class="promotion-card">
            <img src="/baitaplon/anhweb/sukien2.jpg" alt="Promotion 2">
            <div class="promotion-details">
                <h3>HÈ SANG RỘN RÀNG CÙNG MÁY IN HP NHẬN QUÀ SIÊU HẤP DẪN</h3>
                <p>Từ ngày 15/5/2024 đến 15/6/2024</p>
            </div>
        </div>
        <div class="promotion-card">
            <img src="/baitaplon/anhweb/sukien3.jpg" alt="Promotion 3">
            <div class="promotion-details">
                <h3>ĐẠI HỘI KHUYẾN MÃI LINH KIỆN MÁY TÍNH ASUS</h3>
                <p>NHẬN NGAY QUÀ CHẤT KHI CÁC SẢN PHẨM CASE, NGUỒN, TẢN ASUS/ ASUS ROG TỪ NGÀY 03/05/2024 ĐẾN 03/07/2024</p>
            </div>
        </div>
    </div>

    <div class="events-container">
        <div class="events-left">
            <div class="events-section">
                <h2 class="section-title">TIN CÔNG NGHỆ</h2>
                <div class="event">
                    <img src="/baitaplon/anhweb/event1.jpg" alt="Event 1">
                    <div class="event-details">
                        <h3>MSI đối đầu với ASUS trong cuộc chiến giá cả bằng màn hình OLED mới</h3>
                        <p>Cuộc chiến màn hình 4K OLED trở nên gay cấn bởi các động thái giữa hai hãng công nghệ ASUS và MSI. Phân khúc màn gaming cao cấp sẽ có thể...</p>
                    </div>
                </div>
                <div class="event">
                    <img src="/baitaplon/anhweb/event3.jpg" alt="Event 2">
                    <div class="event-details">
                        <h3>Đánh giá màn hình Mini-LED Acer Predator Z57 với độ phân giải DUAL-4K 120Hz</h3>
                        <p>Acer ra mắt dòng màn hình 57 inch độ phân giải khủng với tần số quét 120Hz. Giúp game thủ đắm chìm trong thế giới "AAA" một cách chân...</p>
                    </div>
                </div>
                <div class="event">
                    <img src="/baitaplon/anhweb/event4.png" alt="Event 3">
                    <div class="event-details">
                        <h3>LAPTOP chuẩn Intel Evo đem lại những lợi ích gì?</h3>
                        <p>Trên các mẫu laptop đời mới hiện nay thường có một qui chuẩn mới là Intel Evo. Nhưng khi sở hữu những chiếc laptop đạt chứng chỉ này bạn sẽ...</p>
                    </div>
                </div>
                <div class="event">
                    <img src="/baitaplon/anhweb/event5.png" alt="Event 4">
                    <div class="event-details">
                        <h3>RAM DDR5 là gì? Nó có ưu điểm gì hơn RAMDDR4?</h3>
                        <p>Là bộ nhớ RAM tiên tiến nhất hiện nay, RAM DDR5 mang lại những ưu việt gì so với thế hệ cũ?</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="events-right">
            <div class="events-section">
                <h2 class="section-title">BÀI VIẾT NỔI BẬT</h2>
                <div class="highlighted-article">
                    <img src="/baitaplon/anhweb/noibat1.png" alt="Highlighted Article">
                    <div class="highlighted-details">
                        <h3>Số lõi hay tốc độ xung nhịp quan trọng hơn với CPU?</h3>
                        <p>Chia sẻ</p>
                    </div>
                </div>
                <div class="highlighted-article">
                    <img src="/baitaplon/anhweb/noibat2.png" alt="Highlighted Article">
                    <div class="highlighted-details">
                        <h3>Build cấu hình máy tính làm Photoshop CC tối ưu</h3>
                        <p>Chia sẻ</p>
                    </div>
                </div>
                <div class="highlighted-article">
                    <img src="/baitaplon/anhweb/noibat4.png" alt="Highlighted Article">
                    <div class="highlighted-details">
                        <h3>Cách chọn cấu hình chạy Lumion 11&12 tốt nhất</h3>
                        <p>Chia sẻ</p>
                    </div>
                </div>
                <div class="highlighted-article">
                    <img src="/baitaplon/anhweb/noibat3.png" alt="Highlighted Article">
                    <div class="highlighted-details">
                        <h3>TOP cấu hình đáng đầu tư nhất cho dân thiết kế đồ họa</h3>
                        <p>Chia sẻ</p>
                    </div>
                </div>
                <div class="highlighted-article">
                    <img src="/baitaplon/anhweb/noibat5.png" alt="Highlighted Article">
                    <div class="highlighted-details">
                        <h3>5 Điều phải làm ngay khi sử dụng ổ cứng SSD</h3>
                        <p>Chia sẻ</p>
                    </div>
                </div>
                <div class="highlighted-article">
                    <img src="/baitaplon/anhweb/noibat6.png" alt="Highlighted Article">
                    <div class="highlighted-details">
                        <h3>Vì sao mức sử dụng GPU tăng đột biến lên 100%?</h3>
                        <p>Chia sẻ</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
