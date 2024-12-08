-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 08, 2024 lúc 09:35 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dbchamsocoto`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbdichvu`
--

CREATE TABLE `tbdichvu` (
  `MADV` varchar(10) NOT NULL,
  `TENDV` varchar(100) NOT NULL,
  `LOAIDV` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbdichvu`
--

INSERT INTO `tbdichvu` (`MADV`, `TENDV`, `LOAIDV`) VALUES
('DV0', '', ''),
('DV1', 'Bảo dưỡng', 'SỬA CHỮA CHUNG'),
('DV10', 'Gò sửa căn chỉnh các vết móp, xước thân xe', 'ĐỒNG (GÒ HÀN)'),
('DV11', 'Kéo nắn phục hồi xe va chạm tai nạn', 'ĐỒNG (GÒ HÀN)'),
('DV12', 'Gò sửa căn chỉnh các sai lệch khiếm khuyết thân xe', 'ĐỒNG (GÒ HÀN)'),
('DV13', 'Sửa chữa phục hồi các loại, thân xe tổ hợp, thân xe dạng dầm', 'ĐỒNG (GÒ HÀN)'),
('DV14', 'Thay mới các chi tiết thân vỏ', 'ĐỒNG (GÒ HÀN)'),
('DV15', 'Lắp thêm phụ kiện....độ xe', 'ĐỒNG (GÒ HÀN)'),
('DV16', 'Sơn mới, sơn quây toàn bộ xe', 'SỬA CHỮA SƠN'),
('DV17', 'Sơn sửa chữa các loại, sơn 2 lớp, sơn 3 lớp, sơn ngọc trai, sơn mica...', 'SỬA CHỮA SƠN'),
('DV18', 'Đánh bòng hiệu chỉnh bề mặt sơn', 'SỬA CHỮA SƠN'),
('DV19', 'Phụ tùng chính hãng', 'PHỤ TÙNG'),
('DV2', 'Sửa chữa', 'SỬA CHỮA CHUNG'),
('DV20', 'Phụ tùng OEM', 'PHỤ TÙNG'),
('DV21', 'Phụ tùng theo Order', 'PHỤ TÙNG'),
('DV22', 'Phụ tùng tháo xe', 'PHỤ TÙNG'),
('DV23', 'Phụ tùng liên doanh', 'PHỤ TÙNG'),
('DV24', 'Tai nạn đâm đụng', 'CARCHECK'),
('DV25', 'Thủy kích ngập nước', 'CARCHECK'),
('DV26', 'Động cơ có còn zin không', 'CARCHECK'),
('DV27', 'Hộp số có còn nguyên bản', 'CARCHECK'),
('DV28', 'Hệ thống điện, điện điều khiển có báo lỗi', 'CARCHECK'),
('DV29', 'Keo chỉ trên xe còn zin', 'CARCHECK'),
('DV3', 'Chuẩn đoán lỗi hệ thống điện điều khiển', 'SỬA CHỮA CHUNG'),
('DV30', 'Test Chạy thử xe trên đường xem động cơ hộp số chuyển số có mượt mà không', 'CARCHECK'),
('DV4', 'Hệ thống điện thân xe', 'SỬA CHỮA CHUNG'),
('DV5', 'Hệ thông điều hòa', 'SỬA CHỮA CHUNG'),
('DV6', 'Hệ thống lái', 'SỬA CHỮA CHUNG'),
('DV7', 'Hệ thống phanh', 'SỬA CHỮA CHUNG'),
('DV8', 'Hệ thống gầm, treo', 'SỬA CHỮA CHUNG'),
('DV9', 'Hệ thống truyền động(Hộp số sàn hộp số tự động)', 'SỬA CHỮA CHUNG');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbdonhang`
--

CREATE TABLE `tbdonhang` (
  `MADH` varchar(10) NOT NULL,
  `MAKH` varchar(10) NOT NULL,
  `MADV` varchar(10) NOT NULL,
  `TIENDV` double NOT NULL DEFAULT 0,
  `NGAY` date NOT NULL DEFAULT current_timestamp(),
  `TRANGTHAI` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbdonhang`
--

INSERT INTO `tbdonhang` (`MADH`, `MAKH`, `MADV`, `TIENDV`, `NGAY`, `TRANGTHAI`) VALUES
('DH1', 'KH5', 'DV8', 100000, '2023-12-04', 1),
('DH2', 'KH1', 'DV10', 150000, '2023-10-10', 1),
('DH3', 'KH2', 'DV14', 200000, '2023-01-11', 1),
('DH4', 'KH5', 'DV20', 120000, '2023-05-23', 1),
('DH5', 'KH6', 'DV22', 100000, '2023-04-24', 1),
('DH6', 'KH4', 'DV24', 80000, '2023-12-10', 1),
('DH7', 'KH7', 'DV25', 200000, '2023-02-22', 1),
('DH8', 'KH8', 'DV27', 250000, '2023-10-20', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbdonhang_detail`
--

CREATE TABLE `tbdonhang_detail` (
  `ID` int(11) NOT NULL,
  `MADH` varchar(10) NOT NULL,
  `MAPK` varchar(10) NOT NULL,
  `SOLUONG` int(11) NOT NULL,
  `NGAY` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbdonhang_detail`
--

INSERT INTO `tbdonhang_detail` (`ID`, `MADH`, `MAPK`, `SOLUONG`, `NGAY`) VALUES
(1, 'DH1', 'PK4', 1, '2024-01-05'),
(2, 'DH1', 'PK1', 1, '2024-01-05'),
(3, 'DH2', 'PK1', 1, '2024-01-05'),
(4, 'DH3', 'PK18', 1, '2024-01-05'),
(5, 'DH4', 'PK11', 4, '2024-01-05'),
(6, 'DH5', 'PK24', 2, '2024-01-05'),
(7, 'DH6', 'PK11', 1, '2024-01-05'),
(8, 'DH7', 'PK21', 1, '2024-01-05'),
(9, 'DH8', 'PK7', 1, '2024-01-05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbkhachhang`
--

CREATE TABLE `tbkhachhang` (
  `MAKH` varchar(10) NOT NULL,
  `TENKH` varchar(50) NOT NULL,
  `DIACHIKH` varchar(100) NOT NULL,
  `GIOITINH` int(1) NOT NULL DEFAULT 0,
  `SDT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbkhachhang`
--

INSERT INTO `tbkhachhang` (`MAKH`, `TENKH`, `DIACHIKH`, `GIOITINH`, `SDT`) VALUES
('KH1', 'Nguyễn Văn A', 'Hà Nội', 0, 867129512),
('KH10', 'Đỗ Kim Q', 'Nam Định', 1, 612572145),
('KH2', 'Vũ Văn B', 'Nam Định', 0, 581029185),
('KH3', 'Hoàng Văn C', 'Hà Nội', 0, 582175291),
('KH4', 'Trần Văn D', 'Thanh Hóa', 0, 572968172),
('KH5', 'Đỗ Văn Y', 'Hà Nội', 1, 185968271),
('KH6', 'Trần Văn T', 'Hà Nội', 0, 712583124),
('KH7', 'Trần Kim L', 'TP Hồ Chí Minh', 1, 736124612),
('KH8', 'Vũ Văn S', 'Nam Định', 0, 725124671),
('KH9', 'Nguyễn Đình M', 'Thái Bình', 0, 612467231);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblich`
--

CREATE TABLE `tblich` (
  `MALICH` varchar(10) NOT NULL,
  `MADV` varchar(10) NOT NULL,
  `MAKH` varchar(10) NOT NULL,
  `THOIGIAN` date NOT NULL,
  `TINHTRANG` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tblich`
--

INSERT INTO `tblich` (`MALICH`, `MADV`, `MAKH`, `THOIGIAN`, `TINHTRANG`) VALUES
('LI1', 'DV5', 'KH3', '2023-10-18', 1),
('LI10', 'DV15', 'KH1', '2023-03-17', 1),
('LI2', 'DV8', 'KH2', '2022-05-25', 1),
('LI3', 'DV1', 'KH5', '2023-07-25', 1),
('LI4', 'DV12', 'KH6', '2023-11-11', 1),
('LI5', 'DV20', 'KH4', '2023-10-25', 1),
('LI6', 'DV24', 'KH7', '2023-12-25', 1),
('LI7', 'DV30', 'KH8', '2023-04-07', 1),
('LI8', 'DV26', 'KH10', '2023-01-10', 1),
('LI9', 'DV3', 'KH9', '2023-01-23', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbmessenger`
--

CREATE TABLE `tbmessenger` (
  `ID` int(11) NOT NULL,
  `TENKH` varchar(50) NOT NULL,
  `DIACHIKH` varchar(100) NOT NULL,
  `GIOITINH` varchar(10) NOT NULL DEFAULT '0',
  `SDT` int(11) NOT NULL,
  `MESS` varchar(500) NOT NULL,
  `NGAY` date NOT NULL DEFAULT current_timestamp(),
  `XACNHAN` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbmessenger`
--

INSERT INTO `tbmessenger` (`ID`, `TENKH`, `DIACHIKH`, `GIOITINH`, `SDT`, `MESS`, `NGAY`, `XACNHAN`) VALUES
(1, 'Hoàng Văn C', 'hn', '0', 996464863, 'fuck', '2024-01-06', 1),
(2, 'Vũ Xuân Việt', 'nd', 'nam', 51525152, 'hello', '2024-01-06', 0),
(11, 'vjajg', 'hn', '0', 89511512, 'Tên sản phẩm: Bọc ghế ô tô bằng da thật sự nhiên<br> Số lượng: 1<br>Ngày: 2024-01-29', '2024-01-29', 1),
(12, 'gajha', 'nd', '0', 975195221, 'Loại dịch vụ: SỬA CHỮA CHUNG <br> Tên dịch vụ: Hệ thông điều hòa<br>Ngày: 2024-01-29', '2024-01-29', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbphukien`
--

CREATE TABLE `tbphukien` (
  `MAPK` varchar(10) NOT NULL,
  `TENPK` varchar(100) NOT NULL,
  `IMG` char(50) NOT NULL,
  `LOAIPK` varchar(50) NOT NULL,
  `SOLUONG` int(11) NOT NULL,
  `GIAPK` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbphukien`
--

INSERT INTO `tbphukien` (`MAPK`, `TENPK`, `IMG`, `LOAIPK`, `SOLUONG`, `GIAPK`) VALUES
('PK1', 'Bọc ghế ô tô bằng da thật sự nhiên', 'pk_g1.jpg', 'DA BỌC GHẾ', 30, 10000),
('PK10', 'Bộ đệm lót ghế ô tô cao cấp, sang trọng, thoáng khí bốn mùa', 'pk_l1.jpg', 'LÓT GHẾ XE Ô TÔ', 60, 9000),
('PK11', 'Tấm lót ghế ô tô bằng da bò cao cấp', 'pk_l2.jpg', 'LÓT GHẾ XE Ô TÔ', 50, 15000),
('PK12', 'Lót ghế ô tô thoáng khí thương hiệu cao cấp Cicido thoáng mát 4 mùa', 'pk_l3.jpg', 'LÓT GHẾ XE Ô TÔ', 55, 12000),
('PK13', 'Đèn led dán trần xe ô tô có thể đổi 3 màu', 'pk_d1.jpg', 'ĐÈN DÁN XE Ô TÔ', 50, 8000),
('PK14', 'Đèn led dán trần xe ô tô, sạc được', 'pk_d2.jpg', 'ĐÈN DÁN XE Ô TÔ', 55, 7800),
('PK15', 'Đèn led cảnh báo không dây dán cánh cửa xe ô tô MS-64', 'pk_d3.jpg', 'ĐÈN DÁN XE Ô TÔ', 60, 8200),
('PK16', 'Dầu nhớt Castrol', 'pk_d1.jpg', 'DẦU', 60, 11000),
('PK17', 'Dầu nhớt Mobil', 'pk_d2.jpg', 'DẦU', 60, 12000),
('PK18', 'Dầu nhớt Shell', 'pk_d3.jpg', 'DẦU', 60, 12500),
('PK19', 'Cửa thông thường', 'pk_c1.jpg', 'CỬA', 60, 22500),
('PK2', 'Bọc ghế ô tô da Microfiber', 'pk_g2.jpg', 'DA BỌC GHẾ', 20, 20000),
('PK20', 'Cửa cắt kéo', 'pk_c2.jpg', 'CỬA', 55, 35000),
('PK21', 'Kính chống nắng', 'pk_k1.jpg', 'KÍNH', 60, 12000),
('PK22', 'Kính thường', 'pk_k2.jpg', 'KÍNH', 90, 10000),
('PK23', 'Gương chiếu hậu Toyota', 'pk_guong1.jpg', 'GƯƠNG', 70, 100000),
('PK24', 'Gương chống chói', 'pk_guong2.jpg', 'GƯƠNG', 50, 80000),
('PK3', 'Bọc ghế ô tô bằng da công nghiệp PU', 'pk_g3.jpg', 'DA BỌC GHẾ', 30, 15000),
('PK4', 'Logo kim loại cờ Việt Nam 3D dán xe ô tô MS-123', 'pk_dc3.jpg', 'DECAL DÁN XE Ô TÔ, TEM DÁN XE Ô TÔ', 80, 800),
('PK5', 'Tem sport mind trang trí ô tô, decal dán nắp capo ô tô MS-01', 'pk_dc2.jpg', 'DECAL DÁN XE Ô TÔ, TEM DÁN XE Ô TÔ', 60, 1000),
('PK6', 'Logo đôi cánh thiên thần kim loại dán trang trí logo ô tô MS-26', 'pk_dc1.jpg', 'DECAL DÁN XE Ô TÔ, TEM DÁN XE Ô TÔ', 50, 900),
('PK7', 'Bọc Vô Lăng Da Thật, Họa Tiết Da Rắn Cao Cấp', 'pk_bvl1.jpg', 'BỌC VÔ LĂNG Ô TÔ', 48, 10000),
('PK8', 'Bọc Vô Lăng Da Bò Cao Cấp Màu Đen Chỉ Xanh', 'pk_bvl2.jpg', 'BỌC VÔ LĂNG Ô TÔ', 40, 10000),
('PK9', 'Bọc vô lăng Sparco chính hãng SPS102BKS', 'pk_bvl3.jpg', 'BỌC VÔ LĂNG Ô TÔ', 50, 10000);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbdichvu`
--
ALTER TABLE `tbdichvu`
  ADD PRIMARY KEY (`MADV`);

--
-- Chỉ mục cho bảng `tbdonhang`
--
ALTER TABLE `tbdonhang`
  ADD PRIMARY KEY (`MADH`),
  ADD KEY `FK_tbdonhang_tbdichvu` (`MADV`) USING BTREE,
  ADD KEY `FK_tbdonhang_tbkhachhang` (`MAKH`);

--
-- Chỉ mục cho bảng `tbdonhang_detail`
--
ALTER TABLE `tbdonhang_detail`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FK_tbdonhang_detail_tbdonhang` (`MADH`),
  ADD KEY `FK_tbdonhang_detail_tbphukien` (`MAPK`);

--
-- Chỉ mục cho bảng `tbkhachhang`
--
ALTER TABLE `tbkhachhang`
  ADD PRIMARY KEY (`MAKH`);

--
-- Chỉ mục cho bảng `tblich`
--
ALTER TABLE `tblich`
  ADD PRIMARY KEY (`MALICH`),
  ADD KEY `FK_tblich_tbdichvu` (`MADV`),
  ADD KEY `FK_tblich_tbkhachhang` (`MAKH`);

--
-- Chỉ mục cho bảng `tbmessenger`
--
ALTER TABLE `tbmessenger`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `tbphukien`
--
ALTER TABLE `tbphukien`
  ADD PRIMARY KEY (`MAPK`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbdonhang_detail`
--
ALTER TABLE `tbdonhang_detail`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `tbmessenger`
--
ALTER TABLE `tbmessenger`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbdonhang`
--
ALTER TABLE `tbdonhang`
  ADD CONSTRAINT `FK_tbdonhang_tbdichvu` FOREIGN KEY (`MADV`) REFERENCES `tbdichvu` (`MADV`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tbdonhang_tbkhachhang` FOREIGN KEY (`MAKH`) REFERENCES `tbkhachhang` (`MAKH`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbdonhang_detail`
--
ALTER TABLE `tbdonhang_detail`
  ADD CONSTRAINT `FK_tbdonhang_detail_tbdonhang` FOREIGN KEY (`MADH`) REFERENCES `tbdonhang` (`MADH`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tbdonhang_detail_tbphukien` FOREIGN KEY (`MAPK`) REFERENCES `tbphukien` (`MAPK`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tblich`
--
ALTER TABLE `tblich`
  ADD CONSTRAINT `FK_tblich_tbdichvu` FOREIGN KEY (`MADV`) REFERENCES `tbdichvu` (`MADV`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tblich_tbkhachhang` FOREIGN KEY (`MAKH`) REFERENCES `tbkhachhang` (`MAKH`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
