-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2025 at 06:33 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ql_webmaytinh`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `tendanhmuc` varchar(50) NOT NULL,
  `duongdan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`tendanhmuc`, `duongdan`) VALUES
('a\'bc', 'abc.php'),
('Laptop', 'laptop.php'),
('Linh kiện máy tính', 'linhkienmaytinh.php'),
('Màn hình máy tính', 'manhinhmaytinh.php'),
('Nội thất Gaming', 'noithatgaming.php'),
('PC', 'tatcasanphampc.php'),
('Phụ kiện', 'phukien.php'),
('Phụ kiện rời', 'phukienroi.php');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_danhmuccon`
--

CREATE TABLE `tbl_danhmuccon` (
  `tendanhmuccon` varchar(200) NOT NULL,
  `tendanhmuc` varchar(200) NOT NULL,
  `duongdan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_danhmuccon`
--

INSERT INTO `tbl_danhmuccon` (`tendanhmuccon`, `tendanhmuc`, `duongdan`) VALUES
('Bàn Gaming', 'Nội thất Gaming', 'bangaming.php'),
('Bàn phím', 'Phụ kiện', 'banphim.php'),
('Chuột', 'Phụ kiện', 'chuot.php'),
('CPU - Bộ vi xử lý', 'Linh kiện máy tính', 'cpu.php'),
('Ghế Gaming', 'Nội thất Gaming', 'ghegaming.php'),
('Laptop Acer', 'Laptop', 'laptopacer.php'),
('Laptop Dell', 'Laptop', 'laptopdell.php\r\n'),
('Laptop Gaming', 'Laptop', 'laptopgaming.php'),
('Laptop HP', 'Laptop', 'laptophp.php'),
('Laptop Lenovo', 'Laptop', 'laptoplenovo.php'),
('Macbook', 'Laptop', 'macbook.php'),
('Màn hình Gaming', 'Màn hình máy tính', 'mangaming.php'),
('Màn hình văn phòng', 'Màn hình máy tính', 'manvanphong.php'),
('Ổ cứng', 'Linh kiện máy tính', 'ocung.php'),
('PC Gaming', 'PC', 'pcgaming.php'),
('PC Văn phòng, Làm việc', 'PC', 'pcvanphonglamviec.php'),
('RAM - Bộ nhớ trong', 'Linh kiện máy tính', 'ram.php'),
('Tai nghe', 'Phụ kiện', 'tainghe.php'),
('Tản nhiệt', 'Phụ kiện rời', 'tannhiet.php'),
('Tay cầm', 'Phụ kiện rời', 'taycam.php');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_donhang`
--

CREATE TABLE `tbl_donhang` (
  `madonhang` int(50) NOT NULL,
  `tensanpham` varchar(50) NOT NULL,
  `anh` varchar(200) NOT NULL,
  `soluong` int(50) NOT NULL,
  `dongia` int(50) NOT NULL,
  `ngaymua` date NOT NULL,
  `trangthai` varchar(50) NOT NULL,
  `tentaikhoan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_donhang`
--

INSERT INTO `tbl_donhang` (`madonhang`, `tensanpham`, `anh`, `soluong`, `dongia`, `ngaymua`, `trangthai`, `tentaikhoan`) VALUES
(50, 'LAPTOP HP PROBOOK 440 G8', 'hp13.png', 1, 15999000, '2024-07-09', 'Đã nhận hàng', 'duonguser'),
(51, 'LAPTOP ACER ASPIRE 3 A315-59-38PG', 'acer14.png', 1, 10699000, '2024-07-09', 'Đang giao', 'datuser'),
(52, 'HACOM APOLLO I01 (POWERED BY ASUS)', 'pcgame5.jpg', 1, 63499000, '2024-07-09', 'Đang giao', 'datuser'),
(53, 'CPU AMD RYZEN 9 7900X3D', 'cpu3.jpg', 2, 14299000, '2024-07-09', 'Đang giao', 'datuser'),
(54, 'BÀN NÂNG HẠ WARRIOR – PALADIN SERIES – WGT604 BLAC', 'ban2.jpg', 1, 3689000, '2024-07-09', 'Đang giao', 'donguser'),
(55, 'BÀN PHÍM GAMING KHÔNG DÂY ASUS ROG AZOTH NX', 'phim3.jpg', 1, 5999000, '2024-07-09', 'Đang giao', 'donguser'),
(56, 'MÀN HÌNH ASUS ROG STRIX XG259QNS-W', 'mangame3.jpg', 1, 11199000, '2024-07-09', 'Đang giao', 'donguser'),
(57, 'TAY CẦM CHƠI GAME 8BITDO SN30 PRO BLUETOOTH', 'tay5.jpg', 1, 999000, '2024-07-09', 'Đang giao', 'donguser'),
(58, 'MÀN HÌNH DAHUA DHI-LM22-B200S', 'manvan4.jpg', 1, 1649000, '2024-07-09', 'Đang giao', 'tiendatuser'),
(59, 'CHUỘT GAME LOGITECH G102 GEN2 WHITE', 'chuot2.jpg', 1, 399000, '2024-07-09', 'Đang giao', 'tiendatuser'),
(60, 'CPU AMD RYZEN 9 7900X3D', 'cpu3.jpg', 1, 14299000, '2024-07-09', 'Đang giao', 'tiendatuser'),
(61, 'RAM DESKTOP KINGSTON FURY BEAST RGB WHITE', 'ram5.jpg', 2, 3599000, '2024-07-09', 'Đang giao', 'tiendatuser'),
(62, 'MÀN HÌNH GAMING AOC AGON PRO PORSCHE PD27S/74', 'mangame1.jpg', 1, 9099000, '2024-07-09', 'Đang giao', 'duongadmin'),
(63, 'MÀN HÌNH GAMING AOC AGON PRO PORSCHE PD27S/74', 'mangame1.jpg', 1, 9099000, '2024-07-09', 'Đang giao', 'duongadmin'),
(64, 'CHUỘT GAMING CÓ DÂY ASUS TUF M3 GEN II', '', 1, 439000, '2025-06-02', 'Đang giao', 'datuser');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `ID` int(12) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `ParentMenuId` int(12) NOT NULL,
  `UrlControl` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`ID`, `Name`, `ParentMenuId`, `UrlControl`) VALUES
(1, 'Laptop', -1, 'tatcasanphamlaptop.php'),
(2, 'PC', -1, 'tatcasanphampc.php'),
(4, 'Laptop Acer', 1, 'laptopacer.php'),
(5, 'Laptop Dell', 1, 'laptopdell.php'),
(6, 'Laptop HP', 1, 'laptophp.php'),
(7, 'Laptop Lenovo', 1, 'laptoplenovo.php'),
(8, 'Laptop Gaming', 1, 'laptopgaming.php'),
(9, 'Macbook', 1, 'macbook.php'),
(11, 'PC Gaming', 2, 'pcgaming.php'),
(12, 'PC Văn phòng, Làm Việc', 2, 'pcvanphonglamviec.php'),
(13, 'Màn hình máy tính', -1, 'manhinhmaytinh.php'),
(14, 'Chuột', -1, 'chuot.php'),
(15, 'Bàn phím', -1, 'banphim.php'),
(16, 'Linh kiện máy tính', -1, 'linhkienmaytinh.php'),
(17, 'Bàn Gaming', -1, 'bangaming.php'),
(18, 'Ghế Gaming', -1, 'ghegaming.php'),
(19, 'Loa', -1, 'loa.php'),
(20, 'Tai nghe', -1, 'tainghe.php'),
(21, 'Tản nhiệt', -1, 'tannhiet.php'),
(22, 'Phụ kiện', -1, 'phukien.php');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `product_code` varchar(50) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `menu_ID` int(20) NOT NULL,
  `price` double(10,0) NOT NULL DEFAULT 0,
  `specifications` text NOT NULL,
  `product_img` char(20) NOT NULL,
  `parentmenu_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `product_code`, `product_name`, `menu_ID`, `price`, `specifications`, `product_img`, `parentmenu_ID`) VALUES
(4, 'LTAU835', 'ASUS Vivobook 15', 1, 10199000, '- CPU: Intel® Core i3-1215U\r\n- RAM: 8GB DDR4 \r\n-  Ổ cứng: 512GB M.2 NVMe™ PCIe® 3.0 SSD\r\n- VGA: Intel UHD Graphics\r\n- Màn hình: 15.6\" 16:9 aspect ratio, 60Hz\r\n- Màu: Bạc\r\n- OS: Windows 11 Home', 'sp1.png', -1),
(5, 'Laptop02', 'Laptop acer mới nhất', 4, 5600000, 'Laptop acer mới và rẻ nhất trên thị trường', 'sp2.png', 1),
(6, 'Laptop 03', 'Laptop Dell', 5, 6000000, 'Laptop dell mới nhất', 'sp2.png', 1),
(10, 'Laptop 06', 'Laptop Lenovo', 7, 99900000, 'moi', 'sp1.png', 1),
(11, 'Laptop 07', 'Laptop Acer ', 4, 5000000, '- CPU: AMD Ryzen™ R5 7520U\r\n- Ram: 16GB LPDDR5 (hàn liền)\r\nỔ cứng: 512GB M.2 NVMe™\r\nVGA: AMD Radeon™ Graphics\r\nDisplay: 14 inch FHD (1920 x', 'sp1.png', 1),
(12, 'PC01', 'PC Gaming', 2, 4500000, 'moi nhat', 'sp2.png', -1),
(13, 'Laptop 08', 'Laptop HP', 6, 500000, 'moi hien dai', 'sp1.png', 1),
(14, 'Laptop 08', 'Laptop HP', 1, 500000, 'moi hien dai', 'sp1.png', -1),
(15, 'PC02', 'PC Gaming 2', 11, 450000, 'hiendai', 'sp1.png', 2),
(16, 'LTAU835', 'Laptop Acer ', 4, 1000000, 'moi nhat', 'sp1.png', 1),
(17, 'Laptop 03', 'Laptop Acer ', 4, 34500000, 'moi', 'sp1.png', 1),
(18, 'PC01', 'PC Gaming', 12, 3450000000, 'nhat', 'sp2.png', 2),
(19, 'TN01', 'Tai nghe', 20, 23500000, 'tai nghe moi', 'sp2.png', NULL),
(20, 'PC03', 'PC Gaming 3', 11, 6000000, 'pc gaming 3', 'sp2.png', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `masanpham` varchar(50) NOT NULL,
  `tensanpham` varchar(50) NOT NULL,
  `anh` varchar(500) NOT NULL,
  `tendanhmuc` varchar(50) NOT NULL,
  `tendanhmuccon` varchar(200) NOT NULL,
  `soluong` int(50) NOT NULL,
  `gia` int(50) NOT NULL,
  `thongso` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`masanpham`, `tensanpham`, `anh`, `tendanhmuc`, `tendanhmuccon`, `soluong`, `gia`, `thongso`) VALUES
(' CPUA272', 'CPU AMD RYZEN 9 7900X3D', 'cpu3.jpg', 'Linh kiện máy tính', 'CPU - Bộ vi xử lý', 17, 14299000, '- CPU AMD Ryzen 7000 X3D Series mới\r\n- Số nhân (Cores): 12\r\n- Số luồng (Threads): 24\r\n- Xung cơ bản 4.4GHz, xung tối đa 5.6GHz'),
(' GPSO039 ', 'TAY CẦM CHƠI GAME SONY PS5 DUALSENSE ', 'tay3.jpg', 'Phụ kiện rời', 'Tay cầm', 20, 1599000, '- Tay cầm chơi Game Sony PS5 DualSense\r\n- Phiên bản giới hạn Nova Pink cực đẹp\r\n -Tay cầm chơi game thế hệ mới cùng với máy PS5 của Sony\r\n- Tính năng Haptic Feedback cho phản hồi rung chân thực\r\n- Tính năng Adaptive Trigger cho trải nghiệm lực và độ căng khác nhau ở nút cò Trigger (Tuỳ game PS5 hỗ trợ)\r\n- Tích hợp Jack Audio kiêm Micro trên tay cầm\r\n- Tích hợp loa trên tay cầm\r\n- Nút tắt bật mic tiện lợi'),
(' KBAS077 ', 'BÀN PHÍM GAMING ASUS ROG AZOTH NX', 'phim5.jpg', 'Phụ kiện', 'Bàn phím', 20, 5999000, '- Bàn phím Gaming ASUS ROG AZOTH NX RED\r\n- Bàn phím Gaming ASUS ROG AZOTH TRẮNG\r\n- Thiết kế gasket mount độc đáo: Kết hợp gasket mount silicone với ba lớp bọt giảm chấn tạo ra trải nghiệm gõ phím tuyệt vời.\r\nKết nối tri-mode: Sử dụng Bluetooth® để kết nối và chuyển đổi giữa ba thiết bị cùng lúc, công nghệ không dây ROG SpeedNova cung cấp hơn 2.000 giờ chơi game độ trễ thấp trong chế độ không dây RF 2,4 GHz (tắt OLED và RGB) hoặc sử dụng kết nối chuẩn USB.'),
(' LAHP095', 'LAPTOP HP PROBOOK 440 G8', 'hp13.png', 'Laptop', 'Laptop HP', 18, 15999000, '- CPU: Intel Core i5 1135G7\r\n- RAM: 16GB\r\n- Ổ cứng: 512GB SSD\r\n- VGA: Onboard\r\n- Màn hình: 14 inch HD\r\n- HĐH: Win10 pro\r\n- Màu: bạc'),
(' LAHP180', 'LAPTOP HP PAVILION X360 14-EK1047TU', 'hp14.jpg', 'Laptop', 'Laptop HP', 20, 25399000, '- CPU: Intel® Core™ i7-1355U\r\n- RAM: 16 GB DDR4-3200 MHz (Hàn liền không nâng cấp được)\r\n- Ổ cứng: 512GB SSD PCIe NVMe\r\n- VGA: Intel® UHD Graphics\r\n- Màn hình: 14\" FHD(1920 x 1080),FHD (1920 x 1080)IPS, cảm ứng đa điểm,250nits, 45% NTSC\r\n- Màu: Vàng hồng (Rose Gold)\r\n- Chất liệu: Kim loại (Mặt A),nhựa\r\n- OS: Windows 11'),
(' LAHP203', 'LAPTOP HP ELITEBOOK 630 G9 (6M145PA) ', 'hp10.jpg', 'Laptop', 'Laptop HP', 20, 19999000, '- CPU: Intel® Core™ i7-1255U\r\n- RAM: 8 GB DDR4-3200 MHz RAM (1x8GB)(Còn trống 1 khe)\r\n- Ổ cứng: 512GB SSD PCIe NVMe\r\n- VGA: Intel® UHD Graphics\r\n- Màn hình: 13.3\" FHD (1920 x 1080), IPS,250nits, 45% NTSC\r\n- Màu: Bạc\r\n- Chất liệu: Kim loại\r\n- OS: Windows 11'),
(' LAHP223 ', 'LAPTOP HP 15-FD0235TU (9Q970PA)', 'hp4.jpg', 'Laptop', 'Laptop HP', 20, 16799000, '- CPU: Intel® Core i5-1334U\r\n- RAM: 16GB DDR4 3200MHz (2x8GB) (Tối đa 16GB)\r\n- Ổ cứng: SSD 512GB PCIe NVMe M.2\r\n- VGA: Intel® Iris Xe Graphics\r\n- Màn hình: 15.6\" FHD micro-edge Anti-glare 250nits 45%NTSC\r\n- Màu: Bạc\r\n- OS: Windows 11 Home'),
(' LTAC789', 'LAPTOP ACER SWIFT 3 SF314-511-55QE', 'acer12.png', 'Laptop', 'Laptop Acer', 20, 14299000, '- CPU: Intel Core i5-1135G7\r\n- RAM: 16GB\r\n- Ổ cứng: 512GB SSD\r\n- VGA: Onboard\r\n- Màn hình: 14.0 inch FHD IPS 100% sRGB\r\n- HĐH: Win10\r\n- Màu: Bạc'),
(' LTAC821', 'LAPTOP ACER ASPIRE 3 A315-59-38PG', 'acer14.png', 'Laptop', 'Laptop Acer', 19, 10699000, '- CPU: Intel® Core i3-1215U(6 nhân, 8 luồng, upto 4.40 GHz, 10MB)\r\n- RAM: 8GB(1*8GB 2 khe rời) DDR4 2400Mhz (nâng cấp tối đa 32GB)\r\n- Ổ cứng: 512GB PCIe NVMe SSD(nâng cấp tối đa 1TB HDD và 1TBSSD PCIe NVMe)\r\n- VGA: Intel UHD Graphics\r\n- Màn hình: 15.6 inch FHD(1920 x 1080) 60Hz,LED-backlit TFT LCD\r\n- Màu: Bạc\r\n- OS: Windows 11 Home'),
(' LTAC880', 'LAPTOP ACER ASPIRE 5 A515-58M-79R7', 'acer9.jpg', 'Laptop', 'Laptop Acer', 20, 19899000, '- CPU: Intel® Core™ i7-13620H\r\n- RAM: 16GB SO-DIMM LPDDR5-4800MHz (Hàn liền không nâng cấp được)\r\n- Ổ cứng: 512GB PCIe NVMe SSD (Nâng cấp thay thế) Tối đa 1TB\r\n- VGA: Intel® UHD Graphics\r\n- Màn hình: 15.6\" FHD IPS SlimBezel(1920x1080) 250nits, 60Hz,Acer ComfyView\r\n- Màu: Xám\r\n- Chất liệu : Mặt A Kim loại, Nhựa\r\n- OS: Windows 11'),
(' LTAC883', 'LAPTOP ACER NITRO V ANV15-51-72VS', 'lapgame1.jpg', 'Laptop', 'Laptop Gaming', 20, 24499000, '- CPU: Intel® Core™ i7-13620H\r\n- RAM: 16GB (8GB*2) SO-DIMM DDR5-5200MHz (Còn trống 1 khe, tối đa 32GB)\r\n- Ổ cứng: 512GB PCIe NVMe SSD (Còn trống 1 khe) Tối đa 2TB\r\n- VGA: NVIDIA® GeForce RTX™ 2050 4GB\r\n- Màn hình: 15.6\" FHD IPS 144Hz SlimBezel FHD(1920 x 1080) 45% NTSC Acer ComfyView™\r\n- Màu: Đen\r\n- Chất liệu : Nhựa\r\n- OS: Windows 11'),
(' LTAC884', 'LAPTOP ACER SWIFT X SFX14-71G-78SY', 'acer6.jpg', 'Laptop', 'Laptop Acer', 20, 39999000, '- CPU: Intel® Core™ i7-13700H\r\n- RAM: 32GBLPDDR5 DDR5-4800MHz (Hàn liền,không nâng cấp được)\r\n- Ổ cứng: 1TB PCIe NVMe SSD (Tối đa 1TB)\r\n- VGA: NVIDIA® GeForce RTX™ Graphics 4050 6GB\r\n- Màn hình: 14.5\" 2.8K OLED DCI-P3 100% 120Hz WQXGA+ (2880x1800) 400 nits\r\n- Màu: Đen\r\n- Chất liệu : Nhôm\r\n- OS: Windows 11 Home'),
(' LTAC886', 'LAPTOP ACER GAMING PREDATOR HELIOS NEO ', 'lapgame11.jpg', 'Laptop', 'Laptop Gaming', 20, 35999000, '- VGA: NVIDIA® GeForce RTX™ 4060 8GB GDDR6\r\n- CPU: Intel® Core™ i5-13500HX\r\n- RAM: 16GB (2x 8GB) SO-DIMM DDR5-4800MHz (Tối đa 32GB)\r\n- Ổ cứng: 512GB PCIe NVMe SSD (Còn trống 1 khe)(Tối đa 2TB)\r\n- Màn hình: 16\" WUXGA IPS SlimBezel 165Hz DDS,WQXGA (1920x1200),400 nits,sRGB 100%,Acer ComfyView\r\n- Chất liệu : Nhựa, Nhôm (Mặt A)\r\n- Màu: Đen\r\n- OS: Windows 11 Home'),
(' LTAU878', 'LAPTOP ASUS GAMING ROG ZEPHYRUS', 'lapgame14.jpg', 'Laptop', 'Laptop Gaming', 20, 54999000, '- CPU: Bộ xử lý AMD Ryzen™ 9 8945HS 4GHz (Bộ nhớ đệm 24MB, lên tới 5.2 GHz, 8 nhân, 16 luồng)\r\n- RAM: 2 RAM 16GB LPDDR5X 6400 Onboard\r\n- Ổ cứng: 1TB PCIe® 4.0 NVMe™ M.2 SSD (Nâng cấp thay thế)\r\n- VGA: GPU NVIDIA® GeForce RTX™ 4060\r\n- Màn hình: 14\" 3K (2880 x 1800) 16:10, OLED, 120Hz/0.2ms, DCI-P3: 100%, Pantone Validated, Glossy display, 500nits, G-Sync / Adaptive-Sync, Dolby vision, ROG Nebula Display\r\n- Màu:Xám\r\n- OS: Windows 11 Home'),
(' LTAU884', 'LAPTOP ASUS GAMING ROG STRIX G614JU-N4132W', 'lapgame9.jpg', 'Laptop', 'Laptop Gaming', 20, 37999000, '- CPU: Intel® Core™ i7-13650HX\r\n- RAM: 16GB DDR5-4800Mhz (Còn trống 1 khe)\r\n- Ổ cứng: 512GB PCIe® 4.0 NVMe™ M.2 (Còn trống 1 khe M2)\r\n- VGA: NVIDIA GeForce RTX 4050 6GB GDDR6\r\n- Màn hình: 16\" QHD+ 16:10, 240Hz, 100% DCI-P3, Anti-glare, ROG Nebula Display\r\n- Màu: Đen\r\n- OS: Windows 11 Home'),
(' LTAU887', 'LAPTOP ASUS GAMING ROG STRIX G614JI-N4125W', 'lapgame7.jpg', 'Laptop', 'Laptop Gaming', 20, 51999000, '- VGA: NVIDIA GeForce RTX 4070 8GB GDDR6\r\n- CPU: Intel Core i7-13650HX\r\n- RAM: 16GB DDR5 DDR5-4800 SO-DIMM (8GBx2)(Tối đa 32GB)\r\n- Ổ cứng: 512GB SSD PCIe® NVMe™ M.2 Gen 4.0 (Còn trống 1 khe)\r\n- Màn hình: 16\" QHD 240hz 3ms,500nits,DCI-P3 100% Màn hình chống chói,G-Sync\r\nROG Nebula Display,Dolby Vision HDR\r\n- Màu: Xám\r\n- OS: Windows 11 Home'),
(' LTDL418', 'LAPTOP DELL VOSTRO 3520', 'dell11.png', 'Laptop', 'Laptop Dell', 20, 11799000, '- CPU: Intel Core i3 1215U (upto 4.4Ghz/10MB cache)\r\n- RAM: 8GB DDR4 2666Mhz (1*8GB)\r\n- Ổ cứng: 256GB PCIe NVMe SSD\r\n- VGA: Intel UHD Graphics\r\n- Màn hình: 15.6 inch FHD (1920 x 1080) 250 nits WVA Anti-Glare LED Backlit\r\n- Màu sắc: Xám\r\n- OS: Win11 home SL + Office HS21'),
(' LTDL459', 'LAPTOP DELL LATITUDE 3520', 'dell15.jpg', 'Laptop', 'Laptop Dell', 20, 14499000, '- CPU: Intel Core™ i5-1135G7\r\n- RAM: 8GB (1x 8GB) DDR4-3200MHz\r\n- Ổ cứng: 256GB M.2 PCIe NVMe\r\n- VGA: Intel® Iris® Xe Graphics\r\n- Màn hình: 15.6 inch FullHD (1920 x 1080) AG Non-Touch, 250nits\r\n- Màu: Đen\r\n- OS: Ubuntu'),
(' LTDL466', 'LAPTOP AI DELL XPS 13 PLUS 9320', 'dell2.jpg', 'Laptop', 'Laptop Dell', 20, 49999000, '- CPU: Intel® Core i5 1340P\r\n- RAM: 16GB LPDDR5-5200 MHz (Hàn liền,không nâng cấp được)\r\n- Ổ cứng: 512GB SSD PCIe NVMe\r\n- VGA: Intel Iris Xe Graphics\r\n- Màn hình: 13.4\" 3.5K Organic Light Emitting Diode (OLED),DCI-P3 100%,400nits\r\n- Màu: Bạc\r\n- OS: Windows 11 Home/Office Home & Student 2021'),
(' LTDL482', 'LAPTOP DELL VOSTRO 15 3530', 'dell13.jpg', 'Laptop', 'Laptop Dell', 20, 12199000, '- CPU: Intel® Core i3 1305U\r\n- RAM: 8GB DDR4 3200 Mhz (1*8GB) ( Còn trống 1 khe )\r\n- Ổ cứng: 256GB PCIe NVMe SSD (Nâng cấp thay thế)\r\n- VGA: Intel UHD Graphics\r\n- Màn hình: 15.6 inch FHD (1920 x 1080) 120Hz 250 nits\r\n- Màu: Xám\r\n- OS: Windows 11 Home'),
(' LTDL505', 'LAPTOP DELL INSPIRON 3520', 'dell7.jpg', 'Laptop', 'Laptop Dell', 20, 13999000, '- CPU: Intel® Core™ i5-1235U\r\n- RAM: 8GB DDR4 2666Mhz (1*8GB) (Còn trống 1 khe)\r\n- Ổ cứng: 512GB SSD PCIe Gen3 x4 NVMe\r\n- VGA: Intel® Iris Xe Graphics (Dual channel RAM)\r\n- Màn hình: 15.6 inch FHD (1920 x 1080) 220nits WVA Anti- Glare, Touch\r\n- Màu: Đen\r\n- OS: Windows 11'),
(' LTDL531', 'LAPTOP DELL INSPIRON 16 5640', 'dell8.jpg', 'Laptop', 'Laptop Dell', 20, 22999000, '- CPU: Intel Core i5-120U (12MB, Up to 5.00GHz)\r\n- RAM: 16GB DDR5 5200MHz (2x8GB)\r\n- Ổ cứng: SSD 1TB M.2 PCIe NVMe\r\n- VGA: Intel Iris Xe Graphics\r\n- Màn hình: 16.0Inch FHD+ WVA 250nits\r\n- Màu: Xanh\r\n- OS: Windows 11 Home'),
(' LTDL545', 'LAPTOP DELL INSPIRON 3530', 'dell5.jpg', 'Laptop', 'Laptop Dell', 20, 20499000, '- CPU: Intel® Core™ i7-1355U\r\n- RAM: 16GB DDR4 2666MHz (2x8GB) ( có thể thay thế, nâng cấp, tối đa 32GB)\r\n- Ổ cứng: 512GB SSD M.2 PCIe NVMe Gen 3.0 ( có thể thay thế )\r\n- VGA: Intel® Iris® Xe Graphics\r\n- Màn hình: 15.6Inch FHD WVA 120Hz Anti-glare\r\n- Chất liệu: Nhựa mặt A, C, D\r\n- Màu: Đen\r\n- OS: Windows 11 Home + Office Home&Student 2021'),
(' LTHP861 ', 'LAPTOP HP PAVILION X360 14-DW1019TU', 'hp8.jpg', 'Laptop', 'Laptop HP', 20, 23299000, '- CPU: Intel Core i7 1165G7\r\n- RAM: 8GB\r\n- Ổ cứng: 512GB SSD\r\n- VGA: Onboard\r\n- Màn hình: 14 inch FHD cảm ứng\r\n- HĐH: Win 10\r\n- Màu: vàng'),
(' LTLE813 ', 'LAPTOP LENOVO THINKPAD X1 CARBON GEN 9', 'leno16.png', 'Laptop', 'Laptop Lenovo', 20, 51499000, '- CPU: Intel® Core™ 1165G7 2.8Ghz Up to 4.7Ghz 12Mb\r\n- RAM: 16Gb Soldered LPDDR4x\r\n- Ổ cứng: 512GB SSD M.2 2280 PCIe x4 NVMe, up to 2TB\r\n- VGA: Intel Iris Xe Graphics tích hợp\r\n- Màn hình: 14\" WUXGA (1920x1200) IPS 400nits Anti-glare\r\n- HĐH: Windows 11 Pro\r\n- Màu: Đen'),
(' LTLE950 ', 'LAPTOP LENOVO THINKBOOK 15 G4 (21DJ00CWVN)', 'leno4.jpg', 'Laptop', 'Laptop Lenovo', 20, 16999000, '- CPU: Intel Core i7-1255U\r\n- RAM: 8GB Soldered DDR4-3200 (còn trống 1 khe) Tối đa 40GB\r\n- Ổ cứng: 512GB SSD M.2 2242 PCIe® 3.0x4 NVMe® (Còn trống 1 khe M2 2280)\r\n- VGA: Integrated Intel Iris Xe Graphics\r\n- Màn hình: 15.6\" FHD (1920x1080) IPS 300nits Anti-glare, 45% NTSC\r\n- Màu sắc: Đen\r\n- Tính năng: Fingerprint Reader\r\n- OS: Windows® 11 Home'),
(' LTLE978 ', 'LAPTOP LENOVO THINKPAD L14 GEN 4', 'leno7.jpg', 'Laptop', 'Laptop Lenovo', 20, 24499000, '- CPU: Intel® Core™ i7-1360P, 12C (4P + 8E)\r\n- RAM: 16GB (8GBx2)SO-DIMM DDR4-3200 (Tối đa 64GB)\r\n- Ổ cứng: 512GB SSD PCIe NVMe (Nâng cấp thay thế,tối đa 1TB)\r\n- VGA: Intel® Iris® Xe Graphics\r\n- Màn hình: 14\" FHD (1920x1080) IPS 250nits Anti-glare, 45% NTSC\r\n- Màu: Đen\r\n- Chất liệu: Kim loại (Mặt A), Nhựa ABS\r\n- OS: Dos'),
(' LTLV007 ', 'LAPTOP LENOVO THINKPAD P53', 'leno2.jpg', 'Laptop', 'Laptop Lenovo', 20, 16699000, '- CPU: i7 9850H\r\n- RAM: 16GB\r\n- SSD: 256GB SSD\r\n- Màn hình : 15.6\"HD\r\n- Sản phẩm đã đi kèm sạc'),
(' LTLV077 ', 'LAPTOP LENOVO IDEAPAD SLIM 5 14IMH9', 'leno8.jpg', 'Laptop', 'Laptop Lenovo', 20, 23999000, '- CPU: Intel® Core™ Ultra 7 155H, 16C (6P + 8E + 2LPE)\r\n- RAM: 16GB Soldered LPDDR5x-7467\r\n- Ổ cứng: 512GB SSD M.2 2242 PCIe® 4.0x4 NVMe® (nâng cấp tối đa 1TB)\r\n- VGA: Integrated Intel® Arc™ Graphics\r\n- Màn hình: 14\" WUXGA (1920x1200) OLED 400nits Glossy, 100% DCI-P3, DisplayHDR™ True Black 500\r\n- Chất liệu: Nhôm\r\n- Màu: Xám\r\n- OS: Windows 11 Home'),
(' LTLV094', 'LAPTOP LENOVO LEGION PRO 7 16IRX9', 'lapgame4.jpg', 'Laptop', 'Laptop Gaming', 20, 63999000, '- CPU: Intel® Core™ i9-14900HX, 24C (8P + 16E)\r\n- RAM: 32GB (16GBx2) DDR5 5600MHz (Tối đa 64GB)\r\n- Ổ cứng: 1TB SSD M.2 2280 PCIe NVMe (Còn trống 1 khe)\r\n- VGA: NVIDIA® GeForce RTX™ 4070 8GB GDDR6\r\n- Màn hình: 16\" 3.2K (3200x2000) IPS 430nits Anti-glare, 100% DCI-P3, 165Hz, Dolby Vision®, G-SYNC®, Low Blue Light\r\n- Màu sắc: Trắng\r\n- Chất liệu : Nhôm\r\n- OS: Windows 11 Home'),
(' LTMA184 ', 'LAPTOP APPLE MACBOOK AIR (MRXV3SA/A)', 'mac7.jpg', 'Laptop', 'Macbook', 20, 27799000, '- CPU: Apple M3\r\n- RAM: 8GB\r\n- Ổ cứng: 256 GB SSD\r\n- VGA: Onboard\r\n- Màn hình: 13.6 inch Retina IPS (2560 x 1664) 500 nits\r\n- OS: Mac OS\r\n- Màu: Xám'),
(' LTMS526', 'LAPTOP MSI GAMING GF63 THIN', 'lapgame12.jpg', 'Laptop', 'Laptop Gaming', 20, 21489000, '- VGA: NVIDIA GeForce RTX 4050 6GB\r\n- CPU: Intel Core i5-12450H\r\n- RAM: 8GB DDR4 3200Mhz (Còn trống 1 khe)\r\n- Ổ cứng: 512GB SSD M.2 2280 PCIe 3.0x4 NVMe\r\n- Màn hình: 15.6 inch FHD (1920*1080), 144Hz IPS\r\n- Màu: Đen\r\n- OS: Windows 11 Home'),
(' NASY048', 'Ổ CỨNG HDD SYNOLOGY PLUS HAT3310', 'ocung2.jpg', 'Linh kiện máy tính', 'Ổ cứng', 20, 8699000, '- Model: HAT3310 12TB\r\n- Hãng: Synology\r\n- Chuẩn HDD: 3.5\" Inch SATA 6GB/s\r\n- Số vòng: 7200RPM'),
(' PCGM768 ', 'HACOM APOLLO I01 (POWERED BY ASUS)', 'pcgame5.jpg', 'PC', 'PC Gaming', 19, 63499000, '- VGA: GeForce RTX 4070 Ti\r\n- CPU : INTEL i7-14700K\r\n- MAIN : Z790M\r\n- RAM : 32GB (2x16GB) DDR5\r\n- SSD : 512GB SSD\r\n- NGUỒN : 850W\r\n- TẢN NHIỆT NƯỚC ASUS TUF LC 360 ARGB'),
(' PCVP348', 'PC HACOM BUSINESS I7137-16S5 V2', 'pclam1.jpg', 'PC', 'PC Văn phòng, Làm việc', 20, 16399000, '- Bộ VXL : Intel Core i7 13700\r\n- Bo mạch chủ : B760\r\n- Bộ nhớ Ram : 16GB DRR4\r\n- Ổ cứng : 500GB SSD\r\n- Os : Dos'),
(' TNAS050 ', 'TAI NGHE ASUS ROG CETRA TRUE WIRELESS WHITE', 'tai2.jpg', 'Phụ kiện', 'Tai nghe', 20, 1899000, '- Tai nghe Asus ROG Cetra True Wireless\r\n- Âm thanh kết nối không dây có độ trễ thấp: Chế độ chơi game mang đến khả năng đồng bộ hóa âm thanh với video tốt hơn\r\n- Công nghệ chống ồn chủ động (Active Noise Cancelation - ANC): Công nghệ chống ồn chủ động kép (Hybrid ANC) giúp phát hiện và lọc tiếng ồn từ bên trong và bên ngoài tai nghe, cho phép trải nghiệm âm thanh tuyệt vời\r\n- Thời lượng pin kéo dài: Với thời lượng pin sử dụng đến 27 giờ và công nghệ sạc nhanh\r\n- Sạc không dây: Có thể sạc không dây bằng hộp đựng đầy tiện lợi.\r\n- Điều khiển cảm ứng: Điều khiển cảm ứng nhanh đơn giản giúp bạn dễ dàng điều chỉnh tai nghe ngay khi đang game.\r\n- Khả năng chống nước: Áp dụng công nghệ chống nước bắn IPX4 giúp tăng thêm khả năng bảo vệ an toàn khi sử dụng.'),
('BANA031 ', 'BÀN GAMING LEGION LX01 BLACK ', 'ban1.jpg', 'Nội thất Gaming', 'Bàn Gaming', 20, 1849000, '- Bàn Gaming Legion LX01 Black \r\n- Chất liệu: Sợi Carbon / Thép\r\n- Kích thước: 120*60*75cm\r\n- Mặt bàn bằng kính cường lực\r\n- Thiết kế chịu tải cao, Dễ dàng lắp đặt'),
('BANA033 ', 'BÀN NÂNG HẠ WARRIOR – PALADIN SERIES – WGT604 BLAC', 'ban2.jpg', 'Nội thất Gaming', 'Bàn Gaming', 19, 3689000, '- Bàn nâng hạ WARRIOR – Paladin Series – WGT604 BLACK\r\n- Mặt bàn một mảnh, làm bằng sợi carbon P2PB dày 15mm\r\n- Màu sắc: Đen\r\n- Chân hợp kim nhôm, hình chữ T\r\n- Mặt bàn phủ vân carbon\r\n- Điều chỉnh độ cao bằng điện (73cm – 119cm)\r\n- Kích thước: Dài 1100mm x Rộng 600mm x Cao 730mm – 1190mm\r\n- Tải trọng tối đa của mặt bàn: 80kg'),
('BANA047 ', 'MẶT BÀN GỖ MDF 1M4 HYPERWORK ', 'ban3.jpg', 'Nội thất Gaming', 'Bàn Gaming', 20, 1089000, '- Mặt bàn gỗ MDF dày dặn\r\n- Tương thích với hệ sinh thái sản phẩm HyperWork'),
('BANA050 ', 'MẶT BÀN GỖ MDF 1M2 HYPERWORK', 'ban5.jpg', 'Nội thất Gaming', 'Bàn Gaming', 20, 889000, '- Mặt bàn gỗ MDF dày dặn\r\n- Tương thích với hệ sinh thái sản phẩm HyperWork'),
('CPUA265', 'CPU AMD RYZEN 9 7900X', 'cpu1.jpg', 'Linh kiện máy tính', 'CPU - Bộ vi xử lý', 20, 12099000, '- Số nhân: 12\r\n- Số luồng: 24 luồng\r\n- Xung nhịp boost tối đa: 5.6 GHz\r\n- Hỗ trợ PCI-e 5.0\r\n- Hỗ trợ ép xung'),
('CPUA273 ', 'CPU AMD RYZEN 7 7800X3D', 'cpu5.jpg', 'Linh kiện máy tính', 'CPU - Bộ vi xử lý', 20, 10699000, '- CPU AMD Ryzen 7000 X3D Series mới\r\n- Số nhân: 8 nhân\r\n- Số luồng: 16 luồng\r\n- Xung nhịp: 4.2Ghz (boost tối đa 5.0 GHz)\r\n- Total Cache: 104MB\r\n- TDP: 120W\r\n- Hỗ trợ PCI-e 5.0\r\n- Có hỗ trợ ép xung\r\n- Công nghệ hỗ trợ: AMD \"Zen 4\" Core Architecture'),
('CPUI0006 ', 'CPU INTEL CORE I5-10400 (TRAY, KHÔNG VỎ HỘP)', 'cpu2.jpg', 'Linh kiện máy tính', 'CPU - Bộ vi xử lý', 20, 3299000, '- Dòng Core i thế hệ thứ 10 dành cho máy bàn của Intel\r\n6 nhân & 12 luồng\r\n- Xung nhịp: 2.9GHz (Cơ bản) / 4.3GHz (Boost)\r\n- Socket: LGA1200\r\n- Đã kèm sẵn tản nhiệt từ hãng'),
('CPUI544 ', 'CPU INTEL CORE I9-14900KS', 'cpu4.jpg', 'Linh kiện máy tính', 'CPU - Bộ vi xử lý', 20, 18599000, '- CPU: Intel Core i9-14900KS\r\n- Socket: LGA1700\r\n- Số lõi/luồng: 24(8P-Core|16E-Core)/32 luồng\r\n- Xung cơ bản: 6.2 GHz\r\n- TDP: 150W'),
('CSLA032 ', 'BÀN GAMING DESK LIAN-LI DK-04FX', 'bân4.jpg', 'Nội thất Gaming', 'Bàn Gaming', 20, 35999000, '- Bàn gaming cao cấp kiêm vỏ case với chất liệu kết hợp nhôm cao cấp và thép\r\n- Mặt kính trong suốt với đèn RGB, cực đẹp khi được lắp đặt tản nhiệt nước Custom bên trong.\r\n- Có thể đổi từ kính trong suốt sang kính mờ nhờ vào một công tắc điện tử tích hợp\r\n- Điều chỉnh được chiều cao của bàn bằng hệ thống điện tử'),
('FANA589', 'FAN CASE ID COOLING DF-12025-ARGB', 'tan1.jpg', 'Phụ kiện rời', 'Tản nhiệt', 20, 769000, '- Đồng bộ led RGB với main board bằng phần mềm: AURA SYNC, MYSTIC LIGHT SYNC, RGB FUSION…\r\n- Điều khiển tay bằng remote control\r\n- Tốc độ quạt lớn, tối ưu cho việc tản nhiệt case\r\n- Quạt có khả năng khử rung, khử ồn trong quá trình vận hành hiệu quả\r\n- Phiên bản màu trắng mang lại màu sắc mới cho bộ máy của bạn'),
('FANA653', 'FAN CASE TẢN NHIỆT NZXT F120RGB DUO WHITE', 'tan2.jpg', 'Phụ kiện rời', 'Tản nhiệt', 20, 2249000, '- Ánh sáng RGB rực rỡ từ mọi góc độ với 20 đèn LED có thể tùy chỉnh\r\n- Thiết kế cánh quạt mang lại sự cân bằng tối ưu giữa luồng không khí và áp suất tĩnh cao, phù hợp để lắp ở nhiều vị trí khác nhau\r\n- Trục bi chất lỏng (FDB) đảm bảo hoạt động trơn tru và yên tĩnh với tuổi thọ cao\r\n- Cao su ở các góc giảm tiếng ồn và rung khi ử dụng\r\n- Có thể kết hợp sử dụng với quạt NZXT F120/F140 RGB\r\n- Cá nhân hóa hiệu ứng ánh sáng RGB và điều chỉnh quạt thông qua NZXT CAM\r\n- Kích thước 120mm\r\n- Bộ sản phẩm gồm 3 quạt tản nhiệt'),
('FANC739', 'TẢN NHIỆT KHÍ NOCTUA NH-D15 CHROMAX BLACK', 'tan4.jpg', 'Phụ kiện rời', 'Tản nhiệt', 20, 3389000, '- Tản nhiệt khí Noctua NH-D15 với hiệu năng tản nhiệt vượt trội\r\n- Cải tiến từ huyền thoại NH-D14 đánh bại hiệu năng tản nước\r\n- Chất liệu: Nhôm, Đồng\r\n- 6 ống dẫn nhiệt với tháp tản đôi, nâng cao hiệu quả tản nhiệt\r\n- Quạt NF-A15 luôn được lựa chọn hàng đầu trong việc ép xung\r\n- Socket tương thích: Intel LGA2066, LGA2011-0 & LGA2011-3, LGA1156, LGA1155, LGA1151, LGA1150, LGA 1700\r\n- Socket tương thích: AMD AM2, AM2+, AM3, AM3+, FM1, FM2, FM2+, AM4,AM5\r\n- Phiên bản màu đen tạo cảm giác khỏe khoắn\r\n'),
('FAND004 ', 'TẢN NHIỆT KHÍ JONSBO HX4170D WHITE', 'tan5.jpg', 'Phụ kiện rời', 'Tản nhiệt', 20, 699000, '- Thiết kế dạng topdown\r\n- Tổng chiều cao là 45,3mm phù hợp với các loại case ITX\r\n- Sử dụng nền tảng mạnh mẽ của các cánh tản nhiệt hoàn toàn và đáy bằng đồng với 4 ống dẫn nhiệt chịu tải cao.\r\n- Hỗ trợ TDP ở mức 170W'),
('FAND083 ', 'TẢN NHIỆT KHÍ DEEPCOOL AK620 WH DIGITAL', 'tan3.jpg', 'Phụ kiện rời', 'Tản nhiệt', 20, 1999000, '- Tản nhiệt Deepcool thế hệ mới AK620 Digital được trang bị màn hình led giúp hiển thị thông tin nhiệt độ hệ thống giúp bạn nắm bắt được tình trạng hệ thống một cách dễ dàng nhất\r\n- Thiết kế dạng đen nguyên khối toàn bộ tháp đôi\r\n- Hiệu ứng led ARGB đặc sắc dễ dàng đồng bộ\r\n- Dễ dàng lắp đặt không lo bị cấn RAM\r\n- Chiều cao tản khí 162mm'),
('GHEG665', 'GHẾ CHƠI GAME E-DRA HUNTER GAMING CHAIR', 'ghe1.jpg', 'Nội thất Gaming', 'Ghế Gaming', 20, 4489000, '- Ghế game E-Dra Hunter Gaming Chair - EGC 206 White\r\n- Có chức năng tuỳ chỉnh độ cong của lung ghế để bảo vệ cột sống\r\n- Đệm Siêu Dày, Da PU cao cấp\r\n- Bộ Khung thép siêu bền\r\n- Bệ đỡ con ếch cao cấp nhất'),
('GHEG750 ', 'GHẾ CHƠI GAME E-DRA HERA EGC224 ', 'ghe3.jpg', 'Nội thất Gaming', 'Ghế Gaming', 20, 3089000, '- GHẾ CHƠI GAME E-DRA HERA EGC224\r\n- Chất liệu da PU cao cấp\r\n- Tay ghế 2D\r\n- Góc ngả tối đa 180 độ\r\n- Trọng tải tối đa 150kg'),
('GHEG841', 'GHẾ GAME CENTAUR AKALI - GRAY', 'ghe4.jpg', 'Nội thất Gaming', 'Ghế Gaming', 20, 3689000, '- Ghế Game Centaur Akali\r\n- Chất liệu: Da PU\r\n- Chất liệu khung: Kim loại\r\n- Đệm ngồi đúc nguyên khối mật độ cao, đàn hồi tốt\r\n- Độ ngả lưng tối đa: 180 độ\r\n- Kê tay 4D\r\n- Bệ đỡ con cóc\r\n- Chân ghế kim loại\r\n- Tải trọng tối đa 150kg'),
('GHEG845 ', 'GHẾ GAME E-DRA FRESH EGC230 PLUS BLUE', 'ghe5.jpg', 'Nội thất Gaming', 'Ghế Gaming', 20, 4459000, '- Ghế game E-Dra Fresh EGC230 Plus Blue\r\n- Chất liệu: Vải Fabric\r\n- Đệm cao su: nguyên khối\r\n- Kê tay: 4D\r\n- Trụ thủy lực: Class 4\r\n- Góc nằm max: 160°\r\n- Góc quay điểm tựa tay: 360°\r\n- Khung-chân: Khung kim loại, chân nhựa chịu lực cao, bánh xe được thiết kế ko gây tiếng ồn.\r\n- Trọng tải theo góc đứng: 150kg\r\n- Trang bị sẵn bộ gối cao cấp Memory Foam'),
('GHEG915 ', 'GHẾ GAME WARRIOR RAIDER SERIES - WGC207', 'ghe2.jpg', 'Nội thất Gaming', 'Ghế Gaming', 20, 2989000, '- Ghế dành cho game thủ\r\n- Chất liệu da PVC\r\n- Trục thủy lực Class 4 với độ ổn định cao\r\n- Bệ đỡ: Kiểu cánh bướm\r\n- Đệm mông ghế và lưng ghế được làm bằng foam nguyên chất dầy dặn cho độ đàn hồi và thoải mái khi sử dụng (ORIGINAL FOAM)\r\n- Ghế có khả năng ngả 135 độ giúp người dùng thoải mái giải trí\r\n- Tay ghế 2D\r\n- Khung kim loại tạo nên sự chắc chắn, ổn định khi sử dụng\r\n- Bánh xe nhựa 60mm được thiết kế giúp giảm thiểu tiếng ồn trong quá trình sử dụng\r\n- Chân kim loại gia tăng độ chắc chắn khi sử dụng'),
('GPBD027 ', 'TAY CẦM CHƠI GAME 8BITDO SN30 PRO BLUETOOTH', 'tay5.jpg', 'Phụ kiện rời', 'Tay cầm', 19, 999000, '- Tay cầm chơi game 8BitDo SN30 Pro Bluetooth Crystal Purple\r\n- Chuẩn kết nối: Bluetooh / Dây USB\r\n- Tương thích với: Nintendo Switch / PC / Android / MacOS / SteamOS\r\n- Tích hợp Rung\r\n- Tích hợp cảm biến chuyển động\r\n- Tính năng phím Turbo\r\n- Dung lượng pin 480mAh'),
('GPIN015', 'TAY CẦM CHƠI GAME IINE DRAGON BALL SPLIT', 'tay4.jpg', 'Phụ kiện rời', 'Tay cầm', 20, 599000, '- Tay cầm chơi game IINE Split Pad Pro Joycon cho Nintendo Switch\r\n- Tay cầm thay thế cho Joycon của máy chơi game Nintendo Switch\r\n- Tính năng Wake Up cho Nintendo Switch\r\n- Tích hợp con quay hồi chuyển, mô tơ rung\r\n- Nút Turbo và các nút phụ có thể tuỳ chỉnh\r\n- Tích hợp led ở phần cần Analog\r\n- Dung lượng pin: 500mAh\r\n- Thời gian sử dụng lên đến 5h\r\n- Tương thích Nintendo Switch / Nintendo Switch Lite'),
('GPMI052', 'TAY CẦM CHƠI GAME KHÔNG DÂY XBOX SERIES X', 'tay2.jpg', 'Phụ kiện rời', 'Tay cầm', 20, 1599000, '- Tay cầm chơi game Xbox Series X Controller - Robot White\r\n- Phiên bản nâng cấp của tay cầm Xbox One S Controller\r\n- Tương thích với máy chơi game Xbox One Series X|S, các thiết bị chạy Windows 10\r\n- Kết nối Bluetooth / Dây cáp USB Type-C\r\n- Bổ sung thêm nút Share\r\n- Thiết kế cụm D-pad Hybrid mới. Thêm lớp phủ nhám ở nút cò Triggers\r\n- Tính năng Impulse Triggers với mô tơ rung ở các nút cò cung cấp phản hồi chính xác\r\n- Đi kèm 02 Pin AA'),
('GPRP006 ', 'TAY CẦM CHƠI GAME CÓ DÂY RAPOO V600', 'tay1.jpg', 'Phụ kiện rời', 'Tay cầm', 20, 449000, '- Tay cầm chơi game có dây của hãng Rapoo\r\n- Giao tiếp qua USB\r\n- Thiết kế công thái học với chống trượt\r\n- Giao diện nút bấm dễ thao tác nhanh\r\n- Tương thích các thể loại game hỗ trợ gamepad trên mọi nền tảng Windows & Android'),
('HDSE159', 'Ổ CỨNG HDD SEAGATE IRONWOLF 8TB 3.5 INCH', 'ocung1.jpg', 'Linh kiện máy tính', 'Ổ cứng', 20, 6999000, '- Bộ nhớ đệm 256 MB\r\n- Cổng giao tiếp SATA 6Gb/s\r\n- Dung lượng 8TB\r\n- Kích thước 3.5 inch\r\n- Tốc độ vòng quay 7200rpm'),
('HDSE285', 'Ổ CỨNG HDD SEAGATE SKYHAWK AI', 'ocung3.jpg', 'Linh kiện máy tính', 'Ổ cứng', 20, 12599000, '- Ổ cứng chuyên dụng cho nhu cầu lưu trữ lớn: Camera HD, Lưu trữ, ...\r\n- Dung lượng: 16TB\r\n- Tốc độ quay: 7200 RPM\r\n- Cache: 256 MB\r\n- Kết nối: SATA III\r\n- Miễn phí cứu dữ liệu 1 lần trong vòng 3 năm tại Seagate'),
('HDSE349', 'Ổ CỨNG HDD SEAGATE IRONWOLF PRO 20TB', 'ocung6.jpg', 'Linh kiện máy tính', 'Ổ cứng', 20, 19899000, '- Seagate Ironwolf Pro hỗ trợ hệ thống NAS 1-24 bay\r\n- Thiết kế đi kèm tính năng AgileArray tối ưu Tốc độ và độ bền cho ổ cứng.\r\n- Cảm biến rung (RV) được tích hợp với mọi phiên bản giúp cho hệ thống NAS nhiều khay đĩa hoạt động êm ái nhất một cách có thể\r\n- Cho phép khối lượng công việc người dùng sử dụng lên đến 300TB/ năm\r\n- Quản lí điện năng tiên tiến giúp cho hệ thống của bạn hoạt động tốt mà vẫn tiết kiệm năng lượng.\r\n- Hỗ trợ phần mềm Health Management IronWolf giúp quản lý ổ cứng trong hệ thống NAS để quản lý và phục hồi dữ liệu.\r\n- Dịch vụ cứu dữ liệu miễn phí 1 lần trong 3 năm đầu tiên tại hãng Seagate'),
('HDWD500', 'Ổ CỨNG HDD WD PURPLE 8TB 3.5 INCH (WD85PURZ)', 'ocung4.jpg', 'Linh kiện máy tính', 'Ổ cứng', 20, 5699000, '- Ổ cứng HDD cao cấp chuyên nghiệp cho hệ thông Camera\r\n- Dung lượng: 8TB\r\n- Kết nối: SATA III\r\n- Cache: 256MB'),
('KBAS070 ', 'BÀN PHÍM GAMING KHÔNG DÂY ASUS ROG AZOTH NX', 'phim3.jpg', 'Phụ kiện', 'Bàn phím', 19, 5999000, '- Thiết kế gasket mount độc đáo: Kết hợp gasket mount silicone với ba lớp bọt giảm chấn tạo ra trải nghiệm gõ phím tuyệt vời.\r\n- Kết nối tri-mode: Sử dụng Bluetooth® để kết nối và chuyển đổi giữa ba thiết bị cùng lúc, công nghệ không dây ROG SpeedNova cung cấp hơn 2.000 giờ chơi game độ trễ thấp trong chế độ không dây RF 2,4 GHz (tắt OLED và RGB) hoặc sử dụng kết nối chuẩn USB.\r\n- Màn hình OLED và điều khiển trực quan: Xem thông tin hệ thống và cài đặt bàn phím một cách dễ dàng; nút xoay tích hợp cho phép điều chỉnh cài đặt nhanh chóng.'),
('KBAS087', 'BÀN PHÍM CƠ ASUS TUF K3 GEN II BLACK', 'phim1.jpg', 'Phụ kiện', 'Bàn phím', 20, 1479000, '- Kích thước: 96%\r\n- Kết nối: USB 2.0\r\n- Led: Đèn LED RGB cho mỗi phím\r\n- Aura sync\r\n- Keycap: ABS doubleshot'),
('KBLO145 ', 'BÀN PHÍM CƠ CÓ DÂY LOGITECH G713 RGB TKL OFF WHITE', 'phim4.jpg', 'Phụ kiện', 'Bàn phím', 20, 2999000, '- Bàn phím cơ có dây Logitech G713 RGB TKL Off White\r\n- Chuẩn kết nối: Dây USB\r\n- Layout TKL 87 phím\r\n- Công nghệ Switch GX (Tactile) cao cấp đến từ Logitech\r\n- Keycao PBT Doubleshot\r\n- Led RGB Lightsync\r\n- Đi kèm kê tay mềm mại, độc đáo'),
('KBLO150', 'BÀN PHÍM CƠ LOGITECH PRO X 60 LIGHTSPEED WIRELESS ', 'phim2.jpg', 'Phụ kiện', 'Bàn phím', 20, 4299000, '- Bàn phím cơ Logitech Pro X 60 Lightspeed Wireless\r\n- Chuẩn kết nối: Wireless 2.4Ghz LightSpeed /Bluetooth / Dây USB\r\n- Layout Mini 60%\r\n- Switch quang học GX Optical Tactile\r\n- Keycap PBT DoubleShot\r\n- Led RGB LIGHTSYNC\r\n- Tích hợp nút cuộn chỉnh âm thanh\r\n- Thời lượng pin (có thể sạc lại): lên tới 65 giờ'),
('LAHP020 ', 'LAPTOP HP GAMING VICTUS 16-E0170AX (4R0U7PA)', 'hp17.jpeg', 'Laptop', 'Laptop HP', 20, 26349000, '- CPU: AMD Ryzen™ 7-5800H (3.2GHz upto 4.4GHz, 16MB)\r\n- RAM: 8GB(2 x 4GB) DDR4-3200 MHz(2 khe)\r\n- Ổ cứng: 512GB PCIe® NVMe™ TLC M.2 SSD\r\n- VGA: NVIDIA® GeForce RTX™ 3050 4GB GDDR6\r\n- Màn hình: 16.1 inch FHD (1920 x 1080), 144 Hz, IPS, micro-edge, anti-glare, Low Blue Light, 300 nits\r\n- Màu: Đen\r\n- Tính năng: Đèn nền bàn phím\r\n- OS: Windows 11 Home SL'),
('LAHP049', 'LAPTOP HP PROBOOK 430 G8 (51X35PA)', 'hp6.jpg', 'Laptop', 'Laptop HP', 20, 17999000, '- CPU: Intel Core i5 1135G7\r\n- RAM: 4GB (2 khe ram)\r\n- Ổ cứng: 256GB SSD (không còn khe trống, nâng cấp thay thế)\r\n- VGA: Onboard\r\n- Màn hình: 13.3 inch FHD\r\n- HĐH: Win\r\n- Màu: Bạc'),
('LAHP130 ', 'LAPTOP HP ENVY X360 13-BF0090TU ', 'hp5.png', 'Laptop', 'Laptop HP', 20, 26999000, '- CPU: Intel Core i7 1250U (upto 4.70 GHz, 12MB)\r\n- RAM: 16GB DDR4 4267 MHz\r\n- Ổ cứng: 512GB PCIe Gen4 NVMe TLC M.2 SSD\r\n- VGA: Intel Iris Xe Graphics\r\n- Màn hình: 13.3 inch 2.8K (2880 x 1800) OLED, 100% DCI-P3 - Cảm ứng (có bút)\r\n- Tính năng: Đèn nền bàn phím\r\n- Màu sắc: Xanh\r\n- OS: Windows 11 Home SL'),
('LAHP149 ', 'LAPTOP HP PAVILION 14-DV2075TU(7C0W2PA)', 'hp12.png', 'Laptop', 'Laptop Gaming', 20, 17399000, '- CPU: Intel® Core™ i5-1235U (3.30 GHz upto 4.40 GHz, 12MB)\r\n- RAM: 8GB DDR4-3200 MHz RAM (2 khe ram)\r\n- Ổ cứng: 512GB PCIe® NVMe™ M.2 SSD\r\n- VGA: Intel® Iris® Xᵉ Graphics\r\n- Màn hình: 14 inch FHD (1920 x 1080), IPS, 250 nits, 45% NTSC\r\n- Màu sắc: Bạc\r\n- OS: Windows 11 Home 64'),
('LAHP153 ', 'LAPTOP HP PAVILION X360 14-EK0134TU', 'hp7.png', 'Laptop', 'Laptop HP', 20, 18699000, '- CPU: Intel Core i5 1235U (3.0 Ghz upto 4.4 GHz, 12MB)\r\n- RAM: 8GB DDR4 3200 MHz\r\n- Ổ cứng: 512GB PCIe® NVMe™ M.2 SSD\r\n- VGA: Intel Iris Xe Graphics\r\n- Màn hình: 14 inch FHD (1920 x 1080), IPS, 45% NTSC, cảm ứng\r\n- Tính năng: Đèn nền bàn phím, nhận diện vân tay, có bút cảm ứng\r\n- Màu : Vàng hồng (Rose Gold)\r\n- OS: Windows 11 Home'),
('LAHP182 ', 'LAPTOP HP 14-DQ5121TU (8W355PA)', 'hp15.jpg', 'Laptop', 'Laptop HP', 20, 10799000, '- CPU: Intel® Core i3 1215U\r\n- RAM: 8GB DDR4 3200Mhz\r\n- Ổ cứng: 512GB SSD M.2 2280 PCIe NVMe\r\n- VGA: Intel UHD Graphics\r\n- Màn hình: 14\"FHD,IPS,narrow bezel,anti-glare,250 nits,45% NTSC,60Hz\r\n- Màu: Bạc\r\n- OS: Windows 11 Home'),
('LAHP190', 'LAPTOP HP PAVILION 15-EG3111TU', 'hp1.jpg', 'Laptop', 'Laptop HP', 20, 18999000, '- CPU: Intel® Core i5 1335U\r\n- RAM: 16GB DDR4 3200Mhz\r\n- Ổ cứng: 512GB SSD M.2 2280 PCIe NVMe\r\n- VGA: Intel® Iris Xe Graphics (Dual channel)\r\n- Màn hình:15.6\"FHD,IPS,narrow bezel,anti-glare,250 nits,45% NTSC,60Hz\r\n- Màu: Bạc\r\n- OS: Windows 11 Home'),
('LAHP202', 'LAPTOP HP 250 G9 (6S797EA)', 'hp16.jpg', 'Laptop', 'Laptop HP', 20, 8999000, '- CPU: Intel Core™ i3-1215U\r\n- RAM: 8 GB DDR4-3200 MHz (Còn trống 1 khe)(Tối đa 16GB)\r\n- Ổ cứng: 256 GB PCIe® NVMe™ SSD (Nâng cấp thay thế)\r\n- VGA: Intel UHD Graphics\r\n- Màn hình: 15.6\" diagonal, FHD (1920 x 1080), SVA, narrow bezel, anti-glare, 250 nits, 45% NTSC\r\n- Chất liệu : Nhựa\r\n- Màu: Bạc\r\n- OS: DOS'),
('LAHP222 ', 'LAPTOP HP PROBOOK 440 G10 (9H8U1PT)', 'hp3.jpg', 'Laptop', 'Laptop HP', 20, 14999000, '- CPU: Intel® Core™ i3-1315U\r\n- RAM: 8GB DDR4-3200 MHz RAM (1x8GB)(Còn trống 1 khe)\r\n- Ổ cứng: 256 GB PCIe® NVMe™ M.2 SSD (Nâng cấp thay thế)\r\n- VGA: Intel UHD Graphics\r\n- Màn hình: 14.0 inch FHD IPS Anti-Glare\r\n- Màu: Bạc\r\n- OS: Windows 11 Home'),
('LAHP224 ', 'LAPTOP HP 15-FD0237TU (9Q972PA)', 'hp2.jpg', 'Laptop', 'Laptop HP', 20, 15999000, '- CPU: Intel® Core i5-1334U\r\n- RAM: 8GB DDR4 3200Mhz (4GBx2)\r\n- Ổ cứng: 512GB SSD M.2 2280 PCIe 3.0x4 NVMe\r\n- VGA: Intel® Iris Xe Graphics\r\n- Màn hình: 15.6inch (1920x1080) FHD Anti-glare 250nits 45% NTSC Micro-edge\r\n- Màu: Bạc\r\n- Chất liệu : Nhựa\r\n- OS: Windows 11 Home'),
('LAHP226 ', 'LAPTOP HP ELITEBOOK 630 G10 (9J0B7PT)', 'hp11.jpg', 'Laptop', 'Laptop HP', 20, 24999000, '- CPU: Intel Core i7-1355U Processor\r\n- RAM: 16GB DDR4 3200MHz (còn trống 1 khe )\r\n- Ổ cứng: 512GB SSD PCIe® NVMe™ (có thể tháo lắp tối đa 2TB)\r\n- VGA: Intel UHD Graphics\r\n- Màn hình: 13.3\" FHD, cảm ứng, 250 nits, 45% NTSC\r\n- Chất liệu: Nhôm\r\n- Màu: Bạc\r\n- OS: Windows 11 Home'),
('LTAC776', 'LAPTOP ACER ASPIRE A514-54-5127', 'acer13.jpg', 'Laptop', 'Laptop Acer', 20, 14499000, '- CPU: Intel Core i5 1135G7\r\n- RAM: 8GB\r\n- Ổ cứng: 512GB SSD\r\n- VGA: Onboard\r\n- Màn hình: 14 inch FHD\r\n- HĐH: Win 11\r\n- Màu: Bạc'),
('LTAC803', 'LAPTOP ACER TRAVELMATE P4', 'acer16.png', 'Laptop', 'Laptop Acer', 20, 28999000, '- CPU: Intel Core i7 1165G7\r\n- RAM: 16GB (2*8GB)\r\n- Ổ cứng: 1TB SSD\r\n- VGA: Onboard\r\n- Màn hình: 14 FHD IPS\r\n- HĐH: Win 11\r\n- Màu: Xanh'),
('LTAC829', 'LAPTOP ACER SWIFT 3 SUPER SF314-71-74WD', 'acer8.png', 'Laptop', 'Laptop Acer', 20, 31499000, '- CPU: Intel® Core™ i7-12700H\r\n- RAM: 16GB onboard (không nâng cấp được)\r\n- Ổ cứng: 1TB PCIe NVMe\r\n- VGA: Intel® Iris® Xe Graphics\r\n- Màn hình: 14inch WQ2.8K (2880x1800) OLED Adobe 100%, 90Hz\r\n- Màu sắc: Gold\r\n- Tính năng: bảo mật vân tay\r\n- OS: Windows 11 Home'),
('LTAC853', 'LAPTOP ACER ASPIRE 3 A314-36M-34AP', 'acer11.jpg', 'Laptop', 'Laptop Acer', 20, 10499000, '- CPU: Intel® Core™ i3-N305\r\n- RAM: 8GB LPDDR5-5200Mhz (Hàn liền không nâng cấp được)\r\n- Ổ cứng: 512GB SSD PCIe Gen3 x4 NVMe (Nâng cấp thay thế,tối đa 1TB)\r\n- VGA: Intel® UHD Graphics\r\n- Màn hình: 14\" FHD(1920 x 1080) 60Hz Acer ComfyView™ IPS LED LCD\r\n- Màu: Xanh\r\n- Chất liệu: Kim loại (Mặt A), nhựa (Mặt B,C,D)\r\n- OS: Windows 11'),
('LTAC858', 'LAPTOP ACER ASPIRE 7 A715-76-53PJ', 'acer1.jpg', 'Laptop', 'Laptop Acer', 20, 14999000, '- CPU: Intel® Core™ i5-12450H\r\n- RAM: 16GB (8GBx2) DDR4 3200 MHz (Tối đa 32GB)\r\n- Ổ cứng: 512GB SSD PCIe NVMe (Nâng cấp thay thế,tối đa 1TB)(Còn trống 1 khe)\r\n- VGA: Intel® UHD Graphics\r\n- Màn hình: 15.6\" FHD IPS SlimBezel IPS 60Hz Acer ComfyView™\r\n- Màu: Đen\r\n- Chất liệu: Nhôm (Mặt A),Nhựa\r\n- OS: Windows 11'),
('LTAC868', 'LAPTOP ACER SWIFT GO SFG14-41-R5JK', 'acer7.jpg', 'Laptop', 'Laptop Acer', 20, 18499000, '- CPU: AMD Ryzen™ 5 7530U\r\n- RAM: 16GB LPDDR4X (Hàn liền không nâng cấp được)\r\n- Ổ cứng: 1TB PCIe NVMe SSD (Nâng cấp thay thế)\r\n- VGA: AMD Radeon Graphics\r\n- Màn hình: 14\" FHD(1920 x 1080) 60hz,100% sRGB,300nits,Acer ComfyView LED-backlit TFT LCD\r\n- Chất liệu : Nhựa, Nhôm (Mặt A/C/D)\r\n- Màu: Bạc\r\n- OS: Windows 11 Home'),
('LTAC879', 'LAPTOP ACER ASPIRE 5 A515-58M-56YX', 'acer4.jpg', 'Laptop', 'Laptop Acer', 20, 16499000, '- CPU: Intel® Core™ i5-13420H\r\n- RAM: 16GB SO-DIMM LPDDR5-4800MHz (Hàn liền không nâng cấp được)\r\n- Ổ cứng: 512GB PCIe NVMe SSD (Nâng cấp thay thế) Tối đa 1TB\r\n- VGA: Intel® UHD Graphics\r\n- Màn hình: 15.6\" FHD IPS SlimBezel(1920x1080) 250nits, 60Hz,Acer ComfyView\r\n- Màu: Xám\r\n- Chất liệu : Mặt A Kim loại, Nhựa\r\n- OS: Windows 11'),
('LTAC889', 'LAPTOP ACER ASPIRE 3 A315-59-51X8', 'acer3.jpg', 'Laptop', 'Laptop Acer', 20, 12999000, '- CPU: Intel® Core™ i5-1235U\r\n- RAM: 8GB DDR4 2400 (Tối đa 32GB)\r\n- Ổ cứng: 512GB PCIe NVMe SSD (Nâng cấp thay thế) (Còn trống 1 khe HDD 2.5\") Tối đa 1TB\r\n- VGA: Intel® UHD Graphics\r\n- Màn hình: 15.6\" FHD Acer ComfyView LED LCD\r\n- Màu: Bạc\r\n- Chất liệu : Nhựa\r\n- OS: Windows 11 Home'),
('LTAC891', 'LAPTOP ACER GAMING PREDATOR HELIOS 16', 'lapgame15.jpg', 'Laptop', 'Laptop Gaming', 20, 56799000, '- CPU: Intel® Core™ i9-14900HX\r\n- RAM: 16GB (1x16GB) SO-DIMM DDR5-5600MHz (Tối đa 32GB)\r\n- Ổ cứng: 1024GB PCIe NVMe SED SSDPCIe Gen4 (Tối đa 2TB mỗi khe, còn trống 1)\r\n- VGA: NVIDIA® GeForce RTX™ 4070 8GB\r\n- Màn hình: 16\"WQXGA 240Hz DCI-P3 100%,WQXGA (2560 x 1600),500 nits, \"Acer ComfyView™ LED-backlit TFT LCD Nvidia Advanced Optimus capable\"\r\n- Chất liệu : Nhôm (Mặt A,C), nhựa ABS\r\n- Màu: Đen\r\n- OS: Windows 11 Home'),
('LTAC897', 'LAPTOP ACER SWIFT GO AI GEN 2 SFG14-73-71ZX', 'acer10.jpg', 'Laptop', 'Laptop Acer', 20, 26499000, '- CPU: Intel® Core™ Ultra 7-155H\r\n- RAM: 16GB(16GBx1) LPDDR5X 6400Mhz (Hàn liền không nâng cấp được)\r\n- Ổ cứng: 512GB PCIe NVMe SSD (Còn trống 1 khe, tối đa 4TB)\r\n- VGA: Intel® ARC™ Graphics\r\n- Màn hình: 14\" 2.8K IPS sRGB100% 2.8K,400 nits,sRGB 100%,60~120Hz\r\n- Màu: Bạc\r\n- Chất liệu : Nhôm (Mặt A,C,D)\r\n- OS: Windows 11'),
('LTAC900', 'LAPTOP ACER GAMING ASPIRE 5 A515-58GM-598J', 'acer5.jpg', 'Laptop', 'Laptop Acer', 20, 18799000, '- CPU: Intel® Core™ i5-13420H\r\n- RAM: 16GB (2x8GB) DDR4 3200MHz ( Có thể thay thế, tối đa 32GB )\r\n- Ổ cứng: 512GB SSD PCIe NVMe Gen4 16Gb/s ( Còn trống 1 khe, có thể thay thế, tối đa 2TB SSD)\r\n- VGA: NVIDIA® GeForce® RTX™ 2050 4GB GDDR6\r\n- Màn hình: 15.6inch FHD IPS\r\n- Chất liệu: Kim loại, nhựa cứng\r\n- Màu: Xám\r\n- OS: Windows 11 Home'),
('LTAC901', 'LAPTOP ACER TRAVELMATE P2', 'acer15.jpg', 'Laptop', 'Laptop Acer', 20, 18599000, '- CPU: Intel Core i5-1335U\r\n- RAM: 8GB RAM\r\n- Ổ cứng: 512GB M.2 PCIe NVMe SSD\r\n- VGA: Intel UHD Graphics\r\n- Màn hình: 14\" FHD (1920 x 1080) 60hz\r\n- Màu sắc: Xám\r\n- OS: Windows 11 Home'),
('LTAC902 ', 'LAPTOP ACER ASPIRE LITE AL16-51P-596H', 'acer17.jpg', 'Laptop', 'Laptop Acer', 20, 12999000, '- CPU: Intel Core i5 1235U\r\n- RAM: 8GB (1x 8GB) DDR5-4800MHz (Còn trống 1 khe) (Tối đa 32GB)\r\n- Ổ cứng: 512GB SSD M.2 2280 PCIe (Nâng cấp thay thê)\r\n- VGA: Intel® UHD Graphics\r\n- Màn hình: 16 inch WUXGA (1920 x 1200) 300 nits 60Hz 45% NTSC\r\n- Màu: Xám\r\n- OS: Windows 11 Home'),
('LTAC903', 'LAPTOP ACER ASPIRE LITE AL16-51P-55N7', 'acer2.jpg', 'Laptop', 'Laptop Acer', 20, 14299000, '- CPU: Intel® Core™ i5-1235U\r\n- RAM: 16GB (16GBx1) DDR5 4800 MHz (Tối đa 64GB)\r\n- Ổ cứng: 512GB SSD PCIe NVMe (Nâng cấp thay thế,tối đa 2TB)\r\n- VGA: Intel® UHD Graphics\r\n- Màn hình: 16\" IPS FHD+ 16:10 WUXGA (1920 x 1200) 300 nits 45% NTSC 60Hz Acer ComfyView™\r\n- Màu: Đen\r\n- Chất liệu: Nhựa\r\n- OS: Windows 11'),
('LTAU851', 'LAPTOP ASUS GAMING TUF FX507VU-LP198W', 'lapgame3.jpg', 'Laptop', 'Laptop Gaming', 20, 27999000, '- VGA: NVIDIA® GeForce RTX™ 4050 6GB Laptop GPU\r\n- CPU: Intel Core i7-13620H\r\n- RAM: 8GB DDR5 4800MHz (Còn trống 1 khe, tối đa 32GB)\r\n- Ổ cứng: 512GB PCIe® 4.0 NVMe™ M.2 SSD (Còn trống 1 khe)\r\n- Màn hình: 15.6\" FullHD (1920 x 1080), 144Hz, G-sync, IPS Panel\r\n- Màu: Xám\r\n- OS: Windows 11 Home'),
('LTAU859', 'LAPTOP ASUS GAMING TUF FA506NC-HN011W ', 'lapgame2.jpg', 'Laptop', 'Laptop Gaming', 20, 17799000, '- CPU: AMD Ryzen™ 5 7535HS\r\n- RAM: 8GB DDR5 4800MHz (Còn trống 1 khe, tối đa 32 GB )\r\n- Ổ cứng: 512GB PCIe® 4.0 NVMe™ M.2 SSD (Còn trống 1 khe SSD M.2 PCIE)\r\n- VGA: NVIDIA® GeForce RTX™ 3050 4GB Laptop GPU\r\n- Màn hình: 15.6-inch FHD (1920 x 1080) 16:9, 144Hz, Value IPS-level, 250nits, 45% NTSC, 62.5% sRGB, Anti-glare display, Adaptive-Sync\r\n- Màu: Đen\r\n- OS: Windows 11 Home'),
('LTDL411', 'LAPTOP DELL LATITUDE 5430 ', 'dell14.png', 'Laptop', 'Laptop Dell', 20, 20599000, '- CPU: Intel Core i5-1235U (upto 4.40 GHz, 12MB)\r\n- RAM: 8GB(8GBx1) DDR4 3200MHz\r\n- Ổ cứng: 256GB M.2 256GB PCIe NVMe\r\n- VGA: Intel Iris Xe Graphics\r\n- Màn hình: 14.0 inch FHD (1920x1080) Anti Glare, Non-Touch, WVA, 250 nits\r\n- OS:Ubuntu'),
('LTDL425', 'LAPTOP DELL INSPIRON 14 7430', 'dell10.png', 'Laptop', 'Laptop Dell', 20, 27290000, '- CPU: Intel® Core™ i7 1355U\r\n- RAM: 16GB (onboard)\r\n- Ổ cứng: 512GB M.2 PCIe NVMe SSD\r\n- VGA: Intel Iris Xe\r\n- Màn hình: 14.0 inch 16:10 FHD+ (1920 x 1200) Touch 250nits WVA Display with ComfortView Support\r\n- Màu sắc: Bạc\r\n- OS: Windows 11 Home + Office HS 2021'),
('LTDL470', 'LAPTOP DELL VOSTRO 16 5630', 'dell12.jpg', 'Laptop', 'Laptop Dell', 20, 22699000, '- CPU: Intel Core i5-1335u\r\n- RAM: 16GB Onboard LPDDR5 4800MHz (Hàn liền,không nâng cấp được)\r\n- Ổ cứng: 512GB M.2 PCIe NVMe SSD\r\n- VGA: Intel Iris Xe Graphics\r\n- Màn hình: 16.0 inch FHD+ WVA Anti-glare 16:10 250nits\r\n- Màu sắc: Xám\r\n- Chất liệu : Vỏ nhôm\r\n- OS: Windows 11 Home + Office HS 2021'),
('LTDL472', 'LAPTOP DELL INSPIRON 16 5630', 'dell16.jpg', 'Laptop', 'Laptop Dell', 20, 28599000, '- CPU: Intel® Core i7 1360P\r\n- RAM: 16GB DDR5-4800 MHz (Tối đa 16GB)\r\n- Ổ cứng: 512GB SSD PCIe NVMe (Nâng cấp thay thế)\r\n- VGA: NVIDIA GeForce RTX 2050 4GB GDDR6\r\n- Màn hình: 16.0-inch 16:10 FHD+ (1920 x 1200) Anti-Glare Non-Touch 300 nits WVA Display with ComfortView Support\r\n- Màu: Bạc\r\n- OS: Windows 11 Home/Office Home &Student 2021'),
('LTDL476', 'LAPTOP DELL VOSTRO 15 3530', 'dell6.jpg', 'Laptop', 'Laptop Dell', 20, 12299000, '- CPU: Intel® Core™ i3-1305U\r\n- RAM: 8GB DDR4 2666Mhz (8GBx1) (Còn trống 1 khe)\r\n- Ổ cứng: 512GB SSD PCIe Gen3 x4 NVMe (Nâng cấp thay thế)\r\n- VGA: Intel® UHD Graphics\r\n- Màn hình: 15.6 inch FHD (1920 x 1080) 120Hz 250 nits WVA Anti- Glare LED Backlit  Narrow Border Display\r\n- Màu: Xám\r\n- OS: Windows 11'),
('LTDL487 ', 'LAPTOP DELL WORKSTATION MOBILE PRECISION', 'dell17.jpg', 'Laptop', 'Laptop Dell', 20, 52849000, '- CPU: Intel Core i7-13800H\r\n- RAM: 32GB (16GBx2) SO-DIMM DDR5-4800MHz (Tối đa 64GB)\r\n- Ổ cứng: 1TB SSD M.2 PCIe 4.0x4 NVMe (Còn trống 1 khe)\r\n- VGA: NVIDIA® GeForce RTX™ A500 6GB GDDR6\r\n- Màn hình: 15.6\" FHD (1920x1080) IPS 250 nits Anti-glare\r\n- Màu: Xám\r\n- OS: Windows 11 Pro'),
('LTDL523', 'LAPTOP DELL VOSTRO 3430', 'dell9.jpg', 'Laptop', 'Laptop Dell', 20, 17999000, '- CPU: Intel Core i5-1335U\r\n- RAM: 16GB DDR4 3200MHz (2x8GB)\r\n- Ổ cứng: 512GB M.2 PCIe NVMe SSD\r\n- VGA: Intel Iris Xe Graphics\r\nMàn hình: 14.0-inch FHD (1920 x 1080) Anti-Glare LED Backlight Non-Touch Narrow Border WVA Display\r\n- Màu sắc: Xám\r\n- OS: Windows 11 Home / Office Home and Student 2021'),
('LTDL527', 'LAPTOP AI DELL XPS 13 9340', 'dell3.jpg', 'Laptop', 'Laptop Dell', 20, 51499000, '- CPU: Intel Core Ultra 5 125H\r\n- RAM: 16GB LPDDR5X 7467MHz\r\n- Ổ cứng: SSD 1TB M.2 PCIe NVMe\r\n- VGA: Intel Arc Graphics\r\n- Màn hình: 13.4Inch FHD+ Anti-Glare 500nits EyeSafe\r\n- Màu: Bạc\r\n- OS: Windows 11 Home'),
('LTDL537', 'LAPTOP AI DELL INSPIRON 14 5440', 'dell4.jpg', 'Laptop', 'Laptop Dell', 20, 25499000, '- CPU: Intel® Core™ 5 120U\r\n- RAM: 16GB DDR5 5200MHz (2x8GB)\r\n- Ổ cứng: 512GB SSD M.2 PCIe NVMe\r\n- VGA: NVIDIA® GeForce® MX570A 2GB GDDR6\r\n- Màn hình: 14.0Inch 2.2K WVA Anti-Glare Non-Touch 300nits Comfort View Plus - Support 16:10\r\n- Chất liệu:\r\n- Màu: Xanh\r\n- OS: Windows 11 Home 64bit + Microsoft Office Home and Student 2021'),
('LTDL554', 'LAPTOP DELL LATITUDE 3540 (71038102)', 'dell1.jpg', 'Laptop', 'Laptop Dell', 20, 25499000, '- CPU: Intel® Core™ i7-1355U\r\n- RAM: 16GB (16GBx1) (Còn trống 1 khe) (Tối đa 32GB)\r\n- Ổ cứng: 512GB SSD M.2 2242 PCIe® 3.0x4 NVMe® (Nâng cấp thay thế)\r\n- VGA: Intel® Iris Xe Graphics\r\n- Màn hình: 15.6 inch FHD 1920x1080, 60Hz, WVA/IPS, Non-Touch, Anti-Glare, 250 nit, - NTSC 45%\r\n- Màu sắc: Xám\r\n- OS: Windows® 11 Home'),
('LTGI040', 'LAPTOP GIGABYTE GAMING G5', 'lapgame13.jpg', 'Laptop', 'Laptop Gaming', 20, 21999000, '- VGA:NVIDIA® GeForce® RTX 4050 6GB GDDR6\r\n- CPU: Intel Core i5-13500H\r\n- RAM: 16GB (8GBx2) (Nâng cấp tối đa 64GB)\r\n- Ổ cứng: 512GB SSD PCIe Gen4x4 (Còn trống 1 khe)\r\n- Màn hình: 15.6 inch FHD (1920x1080) 144hz IPS-level Anti-glare\r\n- Màu: Đen\r\n- OS: Windows 11 Home'),
('LTGI047', 'LAPTOP GIGABYTE GAMING G5', 'lapgame5.jpg', 'Laptop', 'Laptop Gaming', 20, 20499000, '- CPU: Intel® Core™ i5-12500H\r\n- RAM: 16GB DDR4 3200MHz (Còn 1 khe trống, nâng cấp tối đa 64GB)\r\n- Ổ cứng: 512GB SSD PCIe Gen4x4 Slot ( Còn trống 1 khe SSD M.2 PCIE G3x4)\r\n- VGA: NVidia Geforce RTX 4050 6GB GDDR6\r\n- Màn hình: 15.6inch FHD 144Hz\r\n- Màu: Đen\r\n- OS: Windows 11 Home'),
('LTHP603', 'LAPTOP WORKSTATION HP ZBOOK 15 G5 3AX12AV', 'hp9.png', 'Laptop', 'Laptop HP', 20, 49989000, '- Bộ vi xử lý Coffeelake i7-8750H (2.2 GHz, up to 4.1 GHz with Turbo Boost, 9MB cache, 6 core)\r\n- Chipset Intel® CM246\r\n- Bộ nhớ trong 16GB DDR4 2666Mhz (1*16GB)\r\n- VGA NVIDIA Quadro P2000 4GB\r\n- Ổ cứng 256GB SSD PCIe NVMe TLC\r\n- Ổ quang\r\n- Card Reader 1x SD (XC/HC)\r\n- Bảo mật, công nghệ Finger Print\r\n- Màn hình 15.6 Full HD 1920x1080 Anti-Glare LED UWVA'),
('LTHP732', 'LAPTOP HP PROBOOK 450 G6 (6FG93PA)', 'hp15.jpg', 'Laptop', 'Laptop HP', 20, 23739000, '- CPU: Intel Core i7 8565U\r\n- RAM: 8GB RAM\r\n- VGA: NVIDIA MX250 2GB\r\n- Ổ cứng: 1TB HDD\r\n- Màn hình: 15.6\" FHD\r\n- Hệ điều hành: Dos\r\n- Màu sắc: Bạc'),
('LTLE580', 'LAPTOP LENOVO THINKBOOK 15-IML', 'leno15.jpg', 'Laptop', 'Laptop Lenovo', 20, 14549000, '- PU: Intel Core i5 10210U\r\n- RAM: 4GB Soldered DDR4-2666 (Còn trống 1 khe,tối đa 36GB)\r\n- Ổ cứng: 256GB SSD M.2 2280 PCIe® 3.0x4 NVMe® (Còn trống 1 khe 2,5\"HDD)\r\n- VGA:Intel® UHD Graphics\r\n- Màn hình: 15.6\" FHD (1920x1080) TN 220nits Anti-glare\r\n- Chất liệu: Nhôm (Mặt trên), Nhựa PC ABS (Mặt dưới)\r\n- Màu sắc: Xám\r\n- Hệ điều hành: DOS'),
('LTLE965 ', 'LAPTOP LENOVO YOGA PRO 7 14IRH8', 'leno14.png', 'Laptop', 'Laptop Lenovo', 20, 33999000, '- CPU: Intel® Core™ i7-13700H\r\n- RAM: 16GB Soldered LPDDR5-5200 (Hàn liền,không nâng cấp được)\r\n- Ổ cứng: 512GB SSD M.2 2280 PCIe® 4.0x4 NVMe®\r\n- VGA: NVIDIA® GeForce RTX™ 4050 6GB GDDR6\r\n- Màn hình: 14.5\" 3K (3072x1920) IPS 400nits Anti-glare, 100% DCI-P3, 120Hz, Eyesafe®, Dolby® Vision™, TCON\r\n- Màu: Xanh\r\n- Chất liệu: Nhôm\r\n- OS: Windows 11 Home'),
('LTLE984 ', 'LAPTOP LENOVO IDEAPAD SLIM 5 PRO 16ARH7', 'leno13.jpg', 'Laptop', 'Laptop Lenovo', 20, 18829000, '- CPU: AMD Ryzen™ 5 6600HS Creator Edition\r\n- RAM: 16GB Soldered LPDDR5-6400 (Không nâng cấp được)\r\n- Ổ cứng: 512GB SSD M.2 2242 PCIe® 4.0x4 NVMe®\r\n- VGA: NVIDIA® GeForce RTX™ 3050 Ti 4GB GDDR6\r\n- Màn hình: 16\" 2.5K (2560x1600) IPS 350nits Anti-glare, 100% sRGB, 120Hz, G-SYNC®, TÜV Low Blue Light, TCON\r\n -Chất liệu: Nhôm\r\n- Màu: Xám'),
('LTLE992 ', 'LAPTOP LENOVO IDEAPAD GAMING 3 15ARH7', 'leno12.jpg', 'Laptop', 'Laptop Lenovo', 20, 16999000, '- CPU: AMD Ryzen™ 5 6600H (6C/12T)\r\n- RAM: 16GB (2x 8GB) SO-DIMM DDR5-4800MHz (Tối đa 16GB)\r\n- Ổ cứng: 512GB SSD M.2 2242 PCIe 4.0x4 NVMe (Còn trống 1)\r\n- VGA: NVIDIA® GeForce RTX™ 3050 4GB GDDR6, Boost Clock 1740MHz, TGP 85W\r\n- Màn hình: 15.6\" FHD (1920x1080) IPS 250nits Anti-glare, 45% NTSC, 120Hz, FreeSync™\r\n- Chất liệu : Nhựa PC-ABS\r\n- Màu: Xám\r\n- OS: Windows 11 Home'),
('LTLE996 ', 'LAPTOP LENOVO IDEAPAD SLIM 5 16AIH8', 'leno11.jpg', 'Laptop', 'Laptop Lenovo', 20, 17299000, '- CPU: Intel® Core™ i5-12450H, 8C (4P + 4E)\r\n- RAM: 16GB Soldered LPDDR5-4800 (Hàn liền không nâng cấp được)\r\n- Ổ cứng: 1TB SSD M.2 2242 PCIe® 4.0x4 NVMe®\r\n- VGA: Intel UHD Graphics\r\n- Màn hình: 16\" WUXGA (1920x1200) IPS 300nits Anti-glare, 45% NTSC, TÜV Low Blue Light\r\n- Chất liệu : Nhôm (Mặt A), Nhựa\r\n- Màu: Xám\r\n- OS: Windows 11'),
('LTLV008 ', 'LAPTOP LENOVO THINKPAD X1 CARBON', 'leno1.jpg', 'Laptop', 'Laptop Lenovo', 20, 12999000, '- CPU: i5 10310U\r\n- RAM: 16GB\r\n- SSD: 256GB SSD\r\n- Màn hình : 14\" FHD Cảm ứng\r\n- Sản phẩm đã đi kèm sạc'),
('LTLV025 ', 'LAPTOP LENOVO YOGA 9 PRO 14IRP9', 'leno10.jpg', 'Laptop', 'Laptop Lenovo', 20, 49999000, '- CPU: Intel® Core™ i9-13905H, 14C (6P + 8E)\r\n- RAM: 32GB Soldered LPDDR5x-6400(Hàn liền không nâng cấp được)\r\n- Ổ cứng: 1TB SSD M.2 2280 PCIe® 4.0x4 NVMe® (Nâng cấp thay thế,tối đa 1TB)\r\n- VGA: NVIDIA® GeForce RTX™ 4060 8GB GDDR6\r\n- Màn hình: 14.5\" 3K (3072x1920) Mini LED 1200nits Glossy / Anti-fingerprint, 100% P3, 100% Adobe® RGB, 100% sRGB, 165Hz, Eyesafe®, Dolby® Vision™, DisplayHDR™ 1000, Glass, Touch, TCON\r\n- Màu: Xám\r\n- Chất liệu: Nhôm\r\n- OS: Windows 11'),
('LTLV038 ', 'LAPTOP LENOVO YOGA 6 14IRH8', 'leno9.jpg', 'Laptop', 'Laptop Lenovo', 20, 23949000, '- CPU: Intel® Core™ i7-13700H, 14C (6P + 8E)\r\n- RAM: 16GB Soldered LPDDR5x-5200 (Hàn liền không nâng cấp được)\r\n- Ổ cứng: 512GB SSD PCIe Gen3 x4 NVMe (Nâng cấp thay thế,tối đa 1TB)\r\n- VGA: Intel® Iris® Xe Graphics\r\n- Màn hình: 14\" WUXGA (1920x1200) OLED 400nits Glossy, 100% DCI-P3, 60Hz, Eyesafe®, Dolby® Vision™, DisplayHDR™ True Black 500\r\n- Màu: Xám\r\n- Chất liệu: Kim loại (Mặt A), kim loại\r\n- OS: Windows 11'),
('LTLV039', 'LAPTOP LENOVO GAMING LOQ 15IAX9', 'lapgame8.jpg', 'Laptop', 'Laptop Gaming', 20, 20999000, '- CPU: Intel® Core™ i5-12450HX, 8C (4P + 4E)\r\n- RAM: 1x 12GB SO-DIMM DDR5-4800 (Còn trống 1 khe, tối đa 32GB)\r\n- Ổ cứng: 512GB SSD M.2 2280 PCIe 4.0x4 NVMe (Còn trống 1)\r\n- VGA: NVIDIA® GeForce RTX™ 3050 6GB GDDR6\r\n- Màn hình: 15.6\" FHD (1920x1080) IPS 300nits Anti-glare, 100% sRGB, 144Hz, G-SYNC®\r\n- Chất liệu : Nhôm ( Mặt A ), nhựa PC-ABS\r\n- Màu: Xám\r\n- OS: Windows 11 Home'),
('LTLV055 ', 'LAPTOP LENOVO YOGA BOOK 9 13IMU9', 'leno17.jpg', 'Laptop', 'Laptop Lenovo', 20, 63949000, '- CPU: Intel® Core™ Ultra 7 155U, 4.8hz\r\n- RAM: 32GB Soldered LPDDR5x-7467 (Tối đa 32gb)\r\n- Ổ cứng: SSD 1TB M.2 2242 PCIe® 4.0x4 NVMe\r\n- VGA: VGA Intel® Graphics\r\n- Màn hình: 2x 13.3\" 2.8K (2880x1800) OLED 400nits Glossy / Anti-fingerprint, 100% DCI-P3, 60Hz, Eyesafe®, Dolby Vision®, DisplayHDR™ True Black 500\r\n- Màu: Xanh\r\n- OS: Windows 11 Home'),
('LTLV066', 'LAPTOP LENOVO IDEAPAD SLIM 3 15IAH8', 'leno6.jpg', 'Laptop', 'Laptop Lenovo', 20, 14799000, '- CPU: Intel® Core™ i5-12450H, 8C (4P + 4E)\r\n- RAM: 16GB Soldered LPDDR5-4800 (Hàn liền không nâng cấp được)\r\n- Ổ cứng: 1TB SSD M.2 2242 PCIe® 4.0x4 NVMe®\r\n- VGA: Intel® UHD Graphics\r\n- Màn hình: 15.6\" FHD (1920x1080) IPS 300nits Anti-glare\r\n- Màu: Xám\r\n- Chất liệu : Nhựa\r\n- OS: Windows 11 Home'),
('LTLV096 ', 'LAPTOP LENOVO IDEAPAD 3 15AIU7', 'leno5.jpg', 'Laptop', 'Laptop Lenovo', 20, 10999000, '- CPU: Intel® Core™ i3-1215U, 6C (2P + 4E)\r\n- RAM: 16GB (8GB Soldered DDR4-3200 + 8GB SO-DIMM DDR4-3200)\r\n- Ổ cứng: 512GB SSD M.2 2280 PCIe 4.0x4 NVMe (Nâng cấp thay thế)\r\n- VGA: Intel® UHD Graphics\r\n- Màn hình: 15.6\" FHD (1920x1080) IPS 300nits Anti-glare\r\n- Chất liệu : Nhựa PC-ABS\r\n- Màu: Xám\r\n- OS: Windows 11 Home'),
('LTLV099 ', 'LAPTOP LENOVO THINKPAD T14 GEN 4', 'leno3.jpg', 'Laptop', 'Laptop Lenovo', 20, 26999000, '- CPU: Core i5 1335U\r\n- RAM: 16GB (Onboard) DDR5 5600 (Hàn liền không nâng cấp được\r\n- Ổ cứng: 512GB SSD\r\n- VGA: Intel Iris Xe Graphics\r\n- Màn hình: 14\" WUXGA (1920x1200)\r\n- Màu: Đen\r\n- OS: No OS'),
('LTMA082 ', 'LAPTOP APPLE MACBOOK AIR 13 (MGN63SA/A)', 'mac9.png', 'Laptop', 'Macbook', 20, 18499000, '- CPU: Apple M1\r\n- RAM: 8GB\r\n- Ổ cứng: 256GB SSD\r\n- VGA: Onboard\r\n- Màn hình: 13.3 inch Retina IPS\r\n- HĐH: Mac OS\r\n- Màu: Xám'),
('LTMA118', 'LAPTOP APPLE MACBOOK PRO 13 (MNEP3SA/A)', 'mac10.png', 'Laptop', 'Macbook', 20, 29499000, '- CPU: Apple M2\r\n- RAM: 8GB\r\n- Ổ cứng: 256GB SSD\r\n- VGA: Onboard\r\n- Màn hình: 13.3 inch Retina IPS\r\n- HĐH: Mac OS\r\n- Màu: Bạc'),
('LTMA128 ', 'LAPTOP APPLE MACBOOK AIR (MLXW3SA/A)', 'mac4.png', 'Laptop', 'Macbook', 20, 24199000, '- CPU: Apple M2\r\n- RAM: 8GB\r\n- Ổ cứng: 256GB SSD\r\n- VGA: Onboard\r\n- Màn hình: 13.6 inch Retina IPS\r\n- HĐH: Mac OS\r\n- Màu: Xám'),
('LTMA129 ', 'LAPTOP APPLE MACBOOK AIR (MLXY3SA/A)', 'mac5.png', 'Laptop', 'Macbook', 20, 24199000, '- CPU: Apple M2\r\n- RAM: 8GB\r\n- Ổ cứng: 256GB SSD\r\n- VGA: Onboard\r\n- Màn hình: 13.6 inch Retina IPS\r\n- HĐH: Mac OS\r\n- Màu: Bạc\r\n');
INSERT INTO `tbl_sanpham` (`masanpham`, `tensanpham`, `anh`, `tendanhmuc`, `tendanhmuccon`, `soluong`, `gia`, `thongso`) VALUES
('LTMA130', 'LAPTOP APPLE MACBOOK AIR (Z16000051)', 'mac8.png', 'Laptop', 'Macbook', 20, 30099000, '- CPU: Apple M2\r\n- RAM: 16GB\r\n- Ổ cứng: 256GB SSD\r\n- VGA: Onboard\r\n- Màn hình: 13.6 inch Retina IPS\r\n- HĐH: Mac OS\r\n- Màu: Bạc'),
('LTMA183', 'LAPTOP APPLE MACBOOK PRO 14 (MXE13SA/A)', 'mac3.jpg', 'Laptop', 'Macbook', 20, 48999000, '- CPU: Apple M3 8 core\r\n- RAM: 16GB\r\n- Ổ cứng: 1TB SSD\r\n- VGA: VGA Apple - 10 core GPU\r\n- Màn hình: 14.2 inch Retina\r\n- HĐH: Mac OS\r\n- Màu: Bạc'),
('LTMA185 ', 'LAPTOP APPLE MACBOOK AIR (MRXT3SA/A)', 'mac6.jpg', 'Laptop', 'Macbook', 20, 27799000, '- CPU: Apple M3\r\n- RAM: 8GB\r\n- Ổ cứng: 256 GB SSD\r\n- VGA: Onboard\r\n- Màn hình: 13.6 inch Retina IPS (2560 x 1664) 500 nits\r\n- OS: Mac OS\r\n- Màu: Trắng'),
('LTMA196', 'LAPTOP APPLE MACBOOK AIR (Z15S006J7)', 'mac2.jpg', 'Laptop', 'Macbook', 20, 29999000, 'CPU: Apple M2\r\nRAM: 16GB RAM\r\nỔ cứng: 256GB SSD\r\nVGA: Card tích hợp\r\nMàn hình: 13.6Inch\r\nChất liệu: Vỏ kim\r\nMàu: Xám\r\nOS: Mac OS'),
('LTMA197', 'LAPTOP APPLE MACBOOK AIR (Z15W005J9)', 'mac1.jpg', 'Laptop', 'Macbook', 20, 29999000, '- CPU: Apple M2\r\n- RAM: 16GB RAM\r\n- Ổ cứng: 256GB SSD\r\n- VGA: Card tích hợp\r\n- Màn hình: 13.6Inch\r\n- Chất liệu: Vỏ kim\r\n- Màu: Bạc\r\n- OS: Mac OS'),
('LTMS548', 'LAPTOP MSI GAMING SWORD 16 HX B14VFKG-045VN', 'lapgame10.jpg', 'Laptop', 'Laptop Gaming', 20, 39990000, '- VGA: NVIDIA® GeForce RTX™ 4060 Laptop GPU 8GB GDDR6\r\n- CPU: Intel® Core™ i7-14700HX\r\n- RAM: 16GB DDR5 5600Mhz (8GBx2)(Tối đa 96GB)\r\n- Ổ cứng: 1TB NVMe PCIe Gen4x4\r\n- Màn hình: 16\" 16:10 QHD+(2560 x 1600), 240Hz, 100% DCI-P3, IPS-level panel\r\n- Màu: Xám\r\n- OS: Windows 11'),
('LTMS551', 'LAPTOP MSI GAMING STEALTH 18 AI STUDIO', 'lapgame16.jpg', 'Laptop', 'Laptop Gaming', 20, 93999000, '- CPU: Intel® Core™ Ultra 9-185H Processor\r\n- RAM: 32GB DDR5-5600 ( Tối đa 96GB )\r\n- Ổ cứng: 2TB SSD PCIe 4.0 (Nâng cấp thay thế)\r\n- VGA: NVIDIA® GeForce RTX™ 4080 Laptop GPU 12GB GDDR6\r\n- Màn hình: 18\" 16:10 UHD+ (3840x2400), MiniLED, 120Hz, 100% DCI-P3 IPS\r\n- Màu: Đen\r\n- OS: Windows 11'),
('LTMS570', 'LAPTOP MSI THIN 15 (B12UCX-1419VN)', 'lapgame6.jpg', 'Laptop', 'Laptop Gaming', 20, 16999000, '- CPU: Intel® Core i5-12450H Gen 12th\r\n- RAM: 8GB (1 x 8GB) DDR5 4800MHz (Còn trống 1 khe) (Tối đa 64GB)\r\n- Ổ cứng: 512GB NVMe PCIe SSD Gen4x4 (Nâng cấp thay thế)\r\n- VGA: NVIDIA® GeForce RTX™ 2050 Laptop GPU 4GB\r\n- Màn hình: 15.6\" FHD (1920x1080), 144Hz, IPS-Level, 45% NTSC, 65% sRGB\r\n- Màu: Xám\r\n- OS: Windows 11 Home'),
('MEAS086', 'CHUỘT GAMING CÓ DÂY ASUS TUF M3 GEN II', 'chuot1.jpg', 'Phụ kiện', 'Chuột', 19, 439000, '- Thiết kế tiện dụng, siêu nhẹ: Chỉ nặng 59 gram, với lớp vỏ được chế tạo đặc biệt cho các game thủ thuận tay phải\r\n- Khả năng chống bụi và nước IP56: Lớp phủ bảo vệ đảm bảo độ bền lâu dài\r\n- ASUS Antibacterial Guard: Ức chế sự phát triển của vi khuẩn để giữ cho bề mặt và các nút của chuột luôn sạch sẽ\r\n- Kiểm soát hoàn toàn: Feet chuột PTFE đảm bảo lướt nhanh và mượt mà\r\n- Cài đặt có thể tùy chỉnh: Hoàn toàn linh hoạt với sáu nút xúc giác, có thể lập trình và ba cấu hình bộ nhớ tích hợp\r\n- Cấu hình dễ dàng: Phần mềm Armory Crate cho phép cấu hình trực quan và khả năng chiếu sáng vô hạn'),
('MELO149', 'CHUỘT GAME LOGITECH G102 GEN2 WHITE', 'chuot2.jpg', 'Phụ kiện', 'Chuột', 19, 399000, '- Mouse Logitech G102 Lightsync RGB White\r\n- Phiên bản nâng cấp của chuột chơi game \"quốc dân\" G102 Prodigy\r\n- Độ phân giải : 8000 DPI\r\n- Led RGB 16.8 triệu màu với tính năng Lightsync đồng bộ led của Logitech\r\n- Bổ sung hiệu ứng sóng cho dải led RGB của chuột\r\n- Mắt đọc được nâng cấp cho gia tốc tốt hơn\r\n- Sử dụng switch Omron cho độ bền cao hơn'),
('MELO162', 'CHUỘT KHÔNG DÂY LOGITECH PRO X SUPERLIGHT WHITE', 'chuot3.jpg', 'Phụ kiện', 'Chuột', 20, 2749000, '- Chuột không dây Logitech Pro X Superlight White\r\n- Phiên bản nâng cấp của Gpro Wireless nổi tiếng\r\n- Trọng lượng siêu nhẹ chỉ 63g\r\n- Kết nối không dây Lightspeed độ trễ cực thấp\r\n- Mắt cảm biến Hero 25k DPI cho hiệu năng cao và tiết kiệm pin'),
('MELO196 ', 'CHUỘT KHÔNG DÂY LOGITECH LIFT ', 'chuot5.jpg', 'Phụ kiện', 'Chuột', 20, 1299000, '- Chuột không dây Logitech Lift Vertical Ergonomic\r\n- Thiết kế công thái học đặc biệt\r\n- Chuẩn kết nối: Bluetooth / Wireless 2.4GHz thông qua đầu thu Logi Bolt\r\n- Tính năng SmartWheel\r\n- Tuỳ chỉnh nút dễ dàng với phần mềm Logi Option+'),
('MELO201', 'CHUỘT GAME LOGITECH G502X TRẮNG', 'chuot4.jpg', 'Phụ kiện', 'Chuột', 20, 1559000, '- Chuột game Logitech G502X\r\n- Phiên bản nâng cấp thiết kế từ Logitech G502\r\n- Chuẩn kết nối: Dây USB\r\n- Switch LIGHTFORCE với công nghệ lai giữa quang học và cơ học\r\n- Mắt cảm biến Hero 25k DPI cao cấp'),
('MOAO188', 'MÀN HÌNH GAMING AOC AGON PRO PORSCHE PD27S/74', 'mangame1.jpg', 'Màn hình máy tính', 'Màn hình Gaming', 18, 9099000, '- Kích thước: 27 inch\r\n- Độ phân giải: WQHD 2560 x 1440\r\n- Tấm nền: IPS\r\n- Tần số quét: 170Hz\r\n- Thời gian phản hồi: 1ms\r\n- Độ sáng: 350cd/m2\r\n- Tỉ lệ tương phản: 1000:1\r\n- VESA: 100x100mm\r\n- Tích hợp loa: 2x 5W\r\n- Cổng kết nối: HDMI 2.0 x2, DisplayPort 1.4 x2, USB x5, Audio 3.5mm'),
('MOAO207', 'MÀN HÌNH AOC 24B3CA2', 'manvan5.jpg', 'Màn hình máy tính', 'Màn hình văn phòng', 20, 2899000, '- Kích thước: 23.8 inch\r\n- Độ phân giải: FHD 1920 x 1080\r\n- Tấm nền: IPS\r\n- Tần số quét: 100Hz\r\n- Thời gian phản hồi: 1ms\r\n- Độ sáng: 250 nits\r\n- Tỉ lệ tương phản: 1000:1\r\n- Tương thích VESA: 100x100mm\r\n- Tích hợp loa: 2x 2W\r\n- Kết nối: 1 x Type-C (Alt Mode PD 65W), 1 x HDMI (2.0), USB3.2 Gen1 × 2, Audio 3.5mm'),
('MOAS311 ', 'MÀN HÌNH ASUS ROG STRIX XG259QNS-W', 'mangame3.jpg', 'Màn hình máy tính', 'Màn hình Gaming', 19, 11199000, '- Kích thước: 24.5 inch\r\n- Độ phân giải: FHD 1920 x 1080\r\n- Tấm nền: FAST IPS\r\n- Tần số quét: 380Hz\r\n- Thời gian phản hồi: 0.3ms\r\n- Độ sáng: 400 nits\r\n- Tỉ lệ tương phản: 1000:1\r\n- Tương thích VESA: 100x100mm\r\n- Cổng kết nối:\r\n- DisplayPort 1.4 x1\r\n- HDMI(v2.0) x 2\r\n- USB Hub : 2x USB 3.2 Gen 1 Type-A'),
('MODH035 ', 'MÀN HÌNH DAHUA DHI-LM22-B200S', 'manvan4.jpg', 'Màn hình máy tính', 'Màn hình văn phòng', 19, 1649000, '- Kích thước: 21.45 inch\r\n- Độ phân giải: FHD 1920 x 1080\r\n- Tấm nền: VA\r\n- Tần số quét: 100Hz\r\n- Thời gian phản hồi: 5ms\r\n- Độ sáng: 250 nits\r\n- Tích hợp loa: 2x 1W\r\n- Độ tương phản: 3000:1\r\n- Kết nối: HDMI x1, VGA x1\r\n- Phụ kiện: Cáp nguồn, cáp HDMI'),
('MOLG246', 'MÀN HÌNH GAMING LG 27GR75Q-B', 'mangame4.jpg', 'Màn hình máy tính', 'Màn hình Gaming', 20, 6379000, ' -Kích thước: 27 inch\r\n- Độ phân giải: QHD 2560 x 1440\r\n- Tấm nền: IPS\r\n- Tần số quét: 165Hz\r\n- Thời gian phản hồi: 1ms\r\n- Tỉ lệ tương phản: 1000:1\r\n- Độ sáng: 300 nits\r\n- VESA: 100x100mm\r\n- Cổng kết nối: HDMI, DisplayPort, Audio 3.5mm'),
('MOLG251', 'MÀN HÌNH LG 32UR500-B', 'manvan3.jpg', 'Màn hình máy tính', 'Màn hình văn phòng', 20, 6899000, '- Kích thước: 31.5 inch\r\n- Tấm nền: VA\r\n- Độ phân giải: UHD 3840 x 2160\r\n- Thời gian phản hồi: 4ms\r\n- Tần số quét: 60Hz\r\n- Độ sáng: 350 nits\r\n- VESA: 100x100mm\r\n- Tích hợp loa: 2x 5W\r\n- Tỉ lệ tương phản: 3000:1\r\n- Cổng kết nối: DisplayPort, HDMI'),
('MOLG253 ', 'MÀN HÌNH LG 24MR400-B', 'manvan1.jpg', 'Màn hình máy tính', 'Màn hình văn phòng', 20, 2299000, '- Kích thước: 23.8 inch\r\n- Độ phân giải: FHD 1920 x 1080\r\n- Tấm nền: IPS\r\n- Tần số quét: 100Hz\r\n- Thời gian phản hồi: 5ms\r\n- Độ sáng: 250 nits\r\n- Tỉ lệ tương phản: 3000:1\r\n- VESA: 100x100mm\r\n- Cổng kết nối: HDMI x1, VGA x1'),
('MOPH077 ', 'MÀN HÌNH PHILIPS 27M2N3200S/01', 'mangame2.jpg', 'Màn hình máy tính', 'Màn hình Gaming', 20, 3689000, '- Kích thước: 27 inch\r\n- Độ phân giải: FHD 1920 x 1080\r\n- Tấm nền: IPS\r\n- Tần số quét: 180Hz\r\n- Thời gian phản hồi: 1ms GtG, 0.5 MPRT\r\n- Độ sáng: 300 nits\r\n- Tỉ lệ tương phản: 1000:1\r\n- Tích hợp dải loa: 2x 2W\r\n- Tương thích VESA: 100x100mm\r\n- Kết nối: HDMI 2.0 x2, DP 1.4 x1'),
('MOVI218', 'MÀN HÌNH VIEWSONIC VA220-H', 'manvan2.jpg', 'Màn hình máy tính', 'Màn hình văn phòng', 20, 1699000, '- Kích thước: 21.5 inch\r\n- Độ phân giải: FHD 1920 x 1080\r\n- Tấm nền: VA\r\n- Tần số quét: 100Hz\r\n- Thời gian phản hồi: 1ms\r\n- Độ sáng: 250 nits\r\n- Tỉ lệ tương phản: 4000:1\r\n- Tương thích VESA: 75x75mm\r\n- Kết nối: HDMI x1, VGA x1'),
('MOVI221', 'MÀN HÌNH VIEWSONIC VX2528', 'mangame5.jpg', 'Màn hình máy tính', 'Màn hình Gaming', 20, 3199000, '- Kích thước: 24.5 inch\r\n- Độ phân giải: FHD 1920 x 1080\r\n- Tấm nền: IPS\r\n- Tần số quét: 180Hz\r\n- Thời gian phản hồi: 0.5ms\r\n- Tỉ lệ tương phản: 1000:1\r\n- Độ sáng: 250 nits\r\n- Tích hợp loa: 2x 2W\r\n- Cổng kết nối:\r\n- Audio 3.5mm x1\r\n- HDMI 2.0 x2\r\n- DisplayPort x1'),
('PCAS213 ', 'PC ASUS ROG STRIX G35DX (G35DX-VN003W)', 'pcgame9.jpg', 'PC', 'PC Gaming', 20, 26999000, '- CPU: AMD Ryzen 7 5800X\r\n- RAM: 16GB\r\n- Ổ cứng: 1 TB SSD\r\n- VGA: RTX 3070\r\n- Wifi: Có\r\n- Bluetooth: Có\r\n- Hệ điều hành: Windows 11'),
('PCDE910', 'PC DELL INSPIRON 3020 ', 'pclam4.jpg', 'PC', 'PC Văn phòng, Làm việc', 20, 32999000, '- CPU: Intel Core i7-13700\r\n- RAM: 1x 16GB\r\n- Ổ cứng: 512GB SSD + 1TB HDD\r\n- VGA: Nvidia RTX 3050 8GB\r\n- Kết nối: WLAN + Bluetooth\r\n- Phụ kiện: Phím & chuột\r\n- OS: Windows 11 Home SL'),
('PCGM662', 'HACOM TIGER T29 (I3 12100F/GTX 1650)', 'pcgame4.jpg', 'PC', 'PC Gaming', 20, 12299000, '- CPU : INTEL i3 12100F\r\n- MAIN : H610\r\n- RAM : 8GB DDR4\r\n- SSD : 250GB SSD\r\n- VGA: GTX 1650'),
('PCGM692', 'HACOM POSEIDON (I7 13700F/RTX 4070)', 'pcgame3.jpg', 'PC', 'PC Gaming', 20, 50599000, '- CPU : INTEL i7-13700F\r\n- MAIN : Z690\r\n- RAM : 32GB (2x16G) DDR4\r\n- SSD : 1TB SSD\r\n- VGA: RTX 4070 12G'),
('PCGM740 ', 'HACOM MINI C2 WHITE V2 (I5 12400F/GTX 1660 SUPER)', 'pcgame2.jpg', 'PC', 'PC Gaming', 20, 15499000, '- CPU : INTEL i5-12400F\r\n- MAIN : B660M\r\n- RAM : 8GB (1x8G) DDR4\r\n- SSD : 500 GB SSD\r\n- VGA: GTX 1660 Super'),
('PCGM845', 'HACOM APOLLO I14 (GEFORCE RTX 4070TI SUPER)', 'pcgame6.jpg', 'PC', 'PC Gaming', 20, 81999000, '- VGA: GeForce RTX 4070TI Super\r\n- PC GAMING tản nước custom cao cấp Fitting Corsair x EKWB\r\n- CPU : Intel Core i7-14700K\r\n- RAM : 32GB DDR5 ( 16x2)\r\n- SSD : 500GB'),
('PCGM848 ', 'HACOM X ASUS POSEIDON V1 ( POWER BY ASUS )', 'pcgame8.jpg', 'PC', 'PC Gaming', 20, 147899000, '- PC GAMING đạt tiêu chuẩn Power By Asus\r\n- CPU : Intel i9-14900K\r\n- MAIN : Z790\r\n- RAM : 64GB ( 32x2) DDR5\r\n- SSD : 1000GB\r\n- VGA : RTX 4090\r\n- NGUỒN : 1600W\r\n- TẢN NHIỆT NƯỚC ASUS ROG RYUJIN III 360 ARGB WHT (Màu trắng)'),
('PCGM856', 'HACOM X MSI PZ APOLLO I17 ( POWERED BY MSI )', 'pcgame7.jpg', 'PC', 'PC Gaming', 20, 50499000, '- VGA: GeForce RTX 4070 Super\r\n- CPU: Intel i7-14700F\r\n- Mainboard: B760M\r\n- RAM: 32GB RAM DDR5 (16x2)\r\n- SSD: 500GB\r\n- Nguồn: 850W\r\n- Tản nhiệt nước AIO MSI MAG MAG CORELIQUID E360 WHITE'),
('PCHC003 ', 'PC GAMING HACOM SNIPER I5 V2', 'pcgame1.jpg', 'PC', 'PC Gaming', 20, 20973000, '- Tuỳ chọn tất cả Linh kiện theo nhu cầu của bạn\r\n- Linh kiện được gợi ý sẵn để tối ưu về giá tiền và hiệu năng\r\n- Tất cả linh kiện đều luôn sẵn hàng\r\n- Cam kết giá tốt nhất thị trường\r\n- Mainboard ASROCK B760M Pro RS/D4\r\n- CPU Intel Core i5-13400F (up to 4.6Ghz, 10 nhân 16 luồng, 20MB Cache, ...\r\n- Ram Desktop Kingston Fury Beast (KF432C16BB1/16) 16GB (1x16GB) DDR4 3200Mhz\r\n- Ổ cứng SSD PNY CS1031 500GB M.2 2280 PCIe NVMe Gen 3x4 (Đọc 2200MB/s ...\r\n- Ổ cứng HDD Seagate BarraCuda 1TB, 3.5 inch, 7200RPM, SATA, 256MB Cache ...\r\n- Nguồn Gigabyte P650G 650W (80 Plus Gold/Màu Đen)\r\n- Tản nhiệt khí Thermalright Dual-Tower Frost Commander 140 White\r\n- Vỏ Case máy tính HACOM PREMIUM (ATX/Mid Tower/Màu Đen/3 Fan)\r\n- Card màn hình Colorful GeForce RTX 4060 NB DUO 8GB-V'),
('PCHP858', 'PC HP M01-F3005D ( 8C5S1PA)', 'pclam5.jpg', 'PC', 'PC Văn phòng, Làm việc', 20, 16199000, 'CPU: Intel Core i7-13700\r\nRam: 1x 8GB\r\n- Ổ cứng: 256GB\r\n- Ổ quang: không có\r\n- Tính năng: WLAN + Bluetooh\r\n- Phụ kiện: Phím & chuột\r\n- OS: Windows 11 Home SL'),
('PCVP376 ', 'PC HACOM BUSINESS V3 I5124-16GS500', 'pclam2.jpg', 'PC', 'PC Văn phòng, Làm việc', 20, 9199000, '- Bộ VXL : Intel Core i5 12400\r\n- Bo mạch chủ : H610\r\n- Bộ nhớ Ram : 16GB DRR4\r\n- Ổ cứng : 500GB SSD\r\n- Os : Dos'),
('PCVP387', 'PC HACOM BUSINESS V3 I5134-16GS500', 'pclam3.jpg', 'PC', 'PC Văn phòng, Làm việc', 20, 10899000, '- Bộ VXL : Intel Core i5 13400\r\n- Bo mạch chủ : H610\r\n- Bộ nhớ Ram : 16GB DRR4\r\n- Ổ cứng : 500GB SSD\r\n- Os : Dos'),
('RAGS523', 'RAM DESKTOP GSKILL TRIDENT Z RGB SILVER', 'ram4.jpg', 'Linh kiện máy tính', 'RAM - Bộ nhớ trong', 20, 7899000, '- Dung lượng: 64GB (2 x 352GB)\r\n- Chuẩn: DDR5\r\n- Bus: 6400 MHz\r\n- Độ trễ: CL32-39-39-102'),
('RAKT349 ', 'RAM DESKTOP KINGSTON FURY BEAST RGB WHITE', 'ram5.jpg', 'Linh kiện máy tính', 'RAM - Bộ nhớ trong', 18, 3599000, '- Dung lượng: 32GB (2 x 16GB)\r\n- Chuẩn: DDR5\r\n- Bus: 5600MHz\r\n- Điện áp: 1.1 - 1.25v'),
('RAKT364', 'RAM DESKTOP KINGSTON FURY BEAST', 'ram3.jpg', 'Linh kiện máy tính', 'RAM - Bộ nhớ trong', 20, 2259000, '- Dòng RAM DDR4 phổ thông với hiệu năng cao\r\n- Dung lượng: 32GB\r\n- Số lượng: 1 thanh (1x32GB)\r\n- Bus: 3200 Mhz'),
('RAKT368', 'RAM DESKTOP KINGSTON FURY BEAST', 'ram2.jpg', 'Linh kiện máy tính', 'RAM - Bộ nhớ trong', 20, 1699000, '- Loại RAM: Ram PC DDR4\r\n- Dung lượng: 16GB (2*8GB)\r\n- Bus: 3200Mhz\r\n- Độ trễ: CL17-17-17\r\n- Kích thước: 133.35 x 43 x 8.2mm'),
('RAPY009 ', 'RAM DESKTOP PNY XLR8 RGB SILVER', 'ram1.jpg', 'Linh kiện máy tính', 'RAM - Bộ nhớ trong', 20, 639000, '- Loại RAM: Ram máy tính để bàn DDR4\r\n- Dung lượng: 8Gb ( 1x8GB)\r\n- Bus: 3200\r\n- Tản nhiệt: Có RGB'),
('TNAS030 ', 'TAI NGHE CHƠI GAME ASUS TUF GAMING H3 RED', 'tai1.png', 'Phụ kiện', 'Tai nghe', 20, 849000, '- Tai nghe chơi game Asus TUF GAMING H3 Đen Đỏ\r\n- Màng loa ASUS Essence 50 mm và công nghệ buồng cách âm độc quyền để mang lại trải nghiệm âm thanh đắm chìm\r\n- Hệ thống âm thanh vòm ảo 7.1 được hỗ trợ bởi Windows Sonic\r\n- Vòng đeo và cặp bằng thép không gỉ để tăng độ bền và độ ổn định\r\n- Thiết kế với trọng lượng nhẹ đảm bảo sự thoải mái khi chơi game\r\n- Hỗ trợ đa nền tảng gồm PC, Mac, PS4, Nintendo Switch, Xbox và điện thoại di động\r\n- Micro hỗ trợ giao tiếp trong game rõ ràng'),
('TNAS048', 'TAI NGHE ASUS ROG DELTA S EVA', 'tai4.jpg', 'Phụ kiện', 'Tai nghe', 20, 4799000, '- Tai nghe Asus ROG Delta S EVA Edition\r\n- Phiên bản đặc biệt lấy cảm hứng từ Gundam Evangelion\r\n- Tích hợp chip xử lý âm thanh Quad DAC™ ESS 9281 độ phân giải cao\r\n- Micrô chống ồn AI thông minh AI Noise-Canceling cao cấp\r\n- Led RGB với nhiều hiệu ứng tuỳ chỉnh\r\n- Thiết kế siêu nhẹ chỉ 300 gram mang lại sự thoải mái tối đa\r\n- Đệm tai thiết kế công thái học dạng chữ D và khả năng làm mát nhanh đảm bảo vừa vặn hoàn hảo với đôi tai bạn\r\n- Cáp USB-C® đảm bảo khả năng tương thích với PC, Mac, thiết bị di động và máy chơi game console như Nintendo Switch™ và Sony PlayStation®\r\n'),
('TNLO078 ', 'TAI NGHE KHÔNG DÂY LOGITECH ZONE 300 ', 'tai5.jpg', 'Phụ kiện', 'Tai nghe', 20, 1599000, '- Model: Zone 300 Graphite\r\n- Hãng sản xuất: LOGITECH\r\n- Kết nối: Bluetooth\r\n- Màu: Đen\r\n- Pin (thời gian trò chuyện): 16 giờ'),
('TNRA149 ', 'TAI NGHE GAMING CÓ DÂY RAZER BLACKSHARK ', 'tai3.jpg', 'Phụ kiện', 'Tai nghe', 20, 1099000, '- Driver Razer TriForce 50mm cho hiệu suất âm thanh cao cấp: Thiết kế độc quyền mới, tiên tiến của chúng tôi chia trình điều khiển thành 3 phần để điều chỉnh riêng các âm cao, âm trung và âm trầm—tạo ra âm thanh sáng hơn, rõ ràng hơn với âm cao phong phú hơn và âm trầm mạnh mẽ hơn.\r\n- Razer HyperClear Cardioid Mic để tăng cường khả năng thu âm giọng nói: Kiểu thu âm cải tiến đảm bảo nhiều giọng nói hơn và ít tiếng ồn hơn khi thuôn dần về phía sau và hai bên của micrô, với điểm thu âm dễ dàng đặt ở miệng bạn nhờ thiết kế có thể uốn cong của micrô.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_taikhoan`
--

CREATE TABLE `tbl_taikhoan` (
  `tentaikhoan` varchar(50) NOT NULL,
  `matkhau` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `loaitaikhoan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_taikhoan`
--

INSERT INTO `tbl_taikhoan` (`tentaikhoan`, `matkhau`, `email`, `loaitaikhoan`) VALUES
('datadmin', 'admin', 'datadmin@gmai.com', 'admin'),
('datuser', 'user', 'dat@gmai.com', 'user'),
('dongadmin', 'admin', 'dongadmin@gmai.com', 'admin'),
('donguser', 'user', 'dong@gmai.com', 'user'),
('duongadmin', 'admin', 'duongadmin@gmai.com', 'admin'),
('duonguser', 'user', 'duong@gmail.com', 'user'),
('tiendatadmin', 'admin', 'tiendatadmin@gmai.com', 'admin'),
('tiendatuser', 'user', 'tiendat@gmai.com', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_thongtintaikhoan`
--

CREATE TABLE `tbl_thongtintaikhoan` (
  `tentaikhoan` varchar(50) NOT NULL,
  `hovaten` varchar(50) NOT NULL,
  `sodienthoai` varchar(50) NOT NULL,
  `gioitinh` varchar(50) NOT NULL,
  `ngaysinh` date NOT NULL,
  `cccd` varchar(50) NOT NULL,
  `diachi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_thongtintaikhoan`
--

INSERT INTO `tbl_thongtintaikhoan` (`tentaikhoan`, `hovaten`, `sodienthoai`, `gioitinh`, `ngaysinh`, `cccd`, `diachi`) VALUES
('datuser', 'daoduydat', '098754232', 'nam', '2004-07-20', '09878956544', 'hanoi, vietnam'),
('donguser', 'nguyentiendong', '0987895656', 'nam', '2004-06-30', '0874564734', 'hanoi, vietnam'),
('duongadmin', 'Lê Trọng Hải Dương', '09685858585', 'nam', '0000-00-00', '123456789120', 'Hà Nội'),
('duonguser', 'letronghaiduong', '0987654321', 'nam', '2014-06-20', '09998887665', 'hanoi, vietnam'),
('tiendatuser', 'phamtiendat', '0987676677', 'nam', '2004-07-06', '0986756756', 'hanoi, vietnam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`tendanhmuc`);

--
-- Indexes for table `tbl_danhmuccon`
--
ALTER TABLE `tbl_danhmuccon`
  ADD PRIMARY KEY (`tendanhmuccon`),
  ADD KEY `tendanhmuc` (`tendanhmuc`);

--
-- Indexes for table `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  ADD PRIMARY KEY (`madonhang`),
  ADD KEY `tentaikhoan` (`tentaikhoan`);

--
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_ID` (`menu_ID`);

--
-- Indexes for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`masanpham`),
  ADD KEY `tendanhmuc` (`tendanhmuc`),
  ADD KEY `tendanhmuccon` (`tendanhmuccon`);

--
-- Indexes for table `tbl_taikhoan`
--
ALTER TABLE `tbl_taikhoan`
  ADD PRIMARY KEY (`tentaikhoan`);

--
-- Indexes for table `tbl_thongtintaikhoan`
--
ALTER TABLE `tbl_thongtintaikhoan`
  ADD PRIMARY KEY (`tentaikhoan`),
  ADD KEY `tentaikhoan` (`tentaikhoan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  MODIFY `madonhang` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_danhmuccon`
--
ALTER TABLE `tbl_danhmuccon`
  ADD CONSTRAINT `tbl_danhmuccon_ibfk_1` FOREIGN KEY (`tendanhmuc`) REFERENCES `tbl_danhmuc` (`tendanhmuc`);

--
-- Constraints for table `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  ADD CONSTRAINT `tbl_donhang_ibfk_1` FOREIGN KEY (`tentaikhoan`) REFERENCES `tbl_taikhoan` (`tentaikhoan`);

--
-- Constraints for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD CONSTRAINT `tbl_product_ibfk_1` FOREIGN KEY (`menu_ID`) REFERENCES `tbl_menu` (`ID`);

--
-- Constraints for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD CONSTRAINT `tbl_sanpham_ibfk_1` FOREIGN KEY (`tendanhmuc`) REFERENCES `tbl_danhmuc` (`tendanhmuc`),
  ADD CONSTRAINT `tbl_sanpham_ibfk_3` FOREIGN KEY (`tendanhmuccon`) REFERENCES `tbl_danhmuccon` (`tendanhmuccon`);

--
-- Constraints for table `tbl_thongtintaikhoan`
--
ALTER TABLE `tbl_thongtintaikhoan`
  ADD CONSTRAINT `tbl_thongtintaikhoan_ibfk_1` FOREIGN KEY (`tentaikhoan`) REFERENCES `tbl_taikhoan` (`tentaikhoan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
