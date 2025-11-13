-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2024 at 09:18 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qldetainckh`
--

-- --------------------------------------------------------

--
-- Table structure for table `detai`
--

CREATE TABLE `detai` (
  `MaDeTai` varchar(20) NOT NULL,
  `MaNhom` varchar(5) NOT NULL,
  `TenDeTai` text NOT NULL,
  `GhiChu` text DEFAULT NULL,
  `NgayThucHien` date NOT NULL,
  `NgayKetThuc` date NOT NULL,
  `KinhPhiDuKien` double NOT NULL,
  `TrangThai` bit(1) NOT NULL DEFAULT b'0',
  `GVCoVan` varchar(10) NOT NULL,
  `isNghiemThu` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detai`
--

INSERT INTO `detai` (`MaDeTai`, `MaNhom`, `TenDeTai`, `GhiChu`, `NgayThucHien`, `NgayKetThuc`, `KinhPhiDuKien`, `TrangThai`, `GVCoVan`, `isNghiemThu`) VALUES
('31/HĐKHCNCKSV-ĐHKG', 'N0001', 'Test ', NULL, '2024-01-21', '2024-06-21', 5000000, b'1', 'KGU0100', b'1'),
('32/HĐKHCNCKSV-ĐHKG', 'N0002', 'Web lưu trữ đề tài nghiên cứu khoa học', 'không', '2023-12-01', '2024-07-09', 4900000, b'1', 'KGU0100', b'1'),
('33/HĐKHCNCKSV-ĐHKG', 'N0001', 'Xây dựng Robot trợ lý ảo nói tiếng Việt bằng Ngôn Ngữ Python ', 'không', '2023-01-01', '2024-07-20', 5000000, b'1', 'KGU0116', b'0'),
('34/HĐKHCNCKSV-ĐHKG', 'N0001', 'Website quản lý thông tin Đảng viên', 'không', '2023-01-01', '2023-06-01', 5000000, b'0', 'KGU0100', b'0'),
('40/HĐKHCNCKSV-ĐHKG', 'N0001', 'Nhận dạng văn bản từ hình ảnh bằng python', 'không', '2023-01-01', '2023-06-01', 5000000, b'0', 'KGU0100', b'0'),
('41/HĐKHCNCKSV-ĐHKG', 'N0001', 'Ứng dụng điều khiển máy tính từ xa', 'không', '2023-01-01', '2023-06-01', 5000000, b'0', 'KGU0116', b'0'),
('42/HĐKHCNCKSV-ĐHKG', 'N0001', 'Ứng dụng cảnh báo cháy rừng', 'không', '2023-01-01', '2023-06-01', 5000000, b'0', 'KGU0100', b'0'),
('43/HĐKHCNCKSV-ĐHKG', 'N0001', 'Cảm biến cảnh báo khí gas và khắc phục', 'không', '2023-01-01', '2023-06-01', 5000000, b'0', 'KGU0100', b'0'),
('44/HĐKHCNCKSV-ĐHKG', 'N0002', 'Kiểm tra chất lương không khí', 'không', '2024-06-01', '2024-12-01', 5000000, b'1', 'KGU0116', b'1'),
('45/HĐKHCNCKSV-ĐHKG', 'N0002', 'Quản lý độ mặn ao cá', 'không', '2024-07-03', '2024-12-03', 4500000, b'1', 'KGU0116', b'1'),
('46/HĐKHCNCKSV-ĐHKG', 'N0001', 'Tự động cảnh báo độ Ph trong nước', 'không', '2024-07-13', '2024-12-13', 4980000, b'0', 'KGU0100', b'0'),
('47/HĐKHCNCKSV-ĐHKG', 'N0001', 'Chatbot hổ trợ viết code', 'không', '2024-05-20', '2024-12-13', 4870000, b'1', 'KGU0100', b'0'),
('48/HĐKHCNCKSV-ĐHKG', 'N0003', 'HIHI', '', '2024-07-14', '2024-09-20', 4900000, b'1', 'KGU0100', b'1'),
('50/HĐKHCNCKSV-ĐHKG', 'N0004', 'Web quản lý ', 'không', '2024-07-17', '2024-12-17', 5000000, b'1', 'KGU0100', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `detaigiangvien`
--

CREATE TABLE `detaigiangvien` (
  `MaDeTaiGV` varchar(20) NOT NULL,
  `MaNhomGV` varchar(5) NOT NULL,
  `TenDeTai` text NOT NULL,
  `GhiChu` text DEFAULT NULL,
  `NgayThucHien` date NOT NULL,
  `NgayKetThuc` date NOT NULL,
  `KinhPhiDuKien` double NOT NULL,
  `TrangThai` bit(1) NOT NULL DEFAULT b'0',
  `CoVan` varchar(10) NOT NULL,
  `isNghiemThu` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detaigiangvien`
--

INSERT INTO `detaigiangvien` (`MaDeTaiGV`, `MaNhomGV`, `TenDeTai`, `GhiChu`, `NgayThucHien`, `NgayKetThuc`, `KinhPhiDuKien`, `TrangThai`, `CoVan`, `isNghiemThu`) VALUES
('31/HĐKHCNCTGV-ĐHKG', 'NG002', 'Deep Learing nhận diện chữ viết tay Python', 'không', '2022-01-01', '2024-07-20', 10000000, b'0', 'KGU0116', b'0'),
('32/HĐKHCNCTGV-ĐHKG', 'NG001', 'AI nhận dạng giọng nói', 'không ', '2023-01-01', '2023-12-01', 10000000, b'1', 'KGU0100', b'0'),
('33/HĐKHCNCTGV-ĐHKG', 'NG002', 'Smarthome ứng dụng thị giác máy tính', 'không ', '2023-01-01', '0000-00-00', 10000000, b'0', 'KGU0100', b'0'),
('34/HĐKHCNCTGV-ĐHKG', 'NG001', 'Xây dựng website quản lý trường đại học', 'không ', '2023-01-01', '0000-00-00', 10000000, b'0', 'KGU0116', b'0'),
('35/HĐKHCNCTGV-ĐHKG', 'NG002', 'Ứng dụng thị giác máy tính nhận dạng bệnh ngoài da', 'không ', '2023-01-01', '0000-00-00', 10000000, b'0', 'KGU0100', b'0'),
('36/HĐKHCNCTGV-ĐHKG', 'NG001', 'Xây dựng website quản lý giảng viên', 'không ', '2023-01-01', '0000-00-00', 10000000, b'1', 'KGU0116', b'1'),
('37/HĐKHCNCTGV-ĐHKG', 'NG002', 'Xe tự hành cảm biến vật thể', 'không', '2024-07-13', '2025-01-01', 10000000, b'0', 'KGU0116', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `giahandt`
--

CREATE TABLE `giahandt` (
  `MaGiaHan` int(11) NOT NULL,
  `MaDeTai` varchar(20) NOT NULL,
  `NgayGiaHan` date NOT NULL,
  `NgayHoanThanh` date NOT NULL,
  `LyDo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `giahandt`
--

INSERT INTO `giahandt` (`MaGiaHan`, `MaDeTai`, `NgayGiaHan`, `NgayHoanThanh`, `LyDo`) VALUES
(3, '33/HĐKHCNCKSV-ĐHKG', '2024-07-10', '2024-07-20', 'không kịp làm '),
(4, '47/HĐKHCNCKSV-ĐHKG', '2024-07-13', '2024-12-13', 'Xin thêm 1 tháng'),
(5, '48/HĐKHCNCKSV-ĐHKG', '2024-08-31', '2024-09-20', 'HAHA');

-- --------------------------------------------------------

--
-- Table structure for table `giahandtgv`
--

CREATE TABLE `giahandtgv` (
  `MaGiaHanDTGV` int(11) NOT NULL,
  `MaDeTaiGV` varchar(20) NOT NULL,
  `NgayGiaHan` date NOT NULL,
  `NgayHoanThanh` date NOT NULL,
  `LyDo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `giahandtgv`
--

INSERT INTO `giahandtgv` (`MaGiaHanDTGV`, `MaDeTaiGV`, `NgayGiaHan`, `NgayHoanThanh`, `LyDo`) VALUES
(1, '31/HĐKHCNCTGV-ĐHKG', '2024-07-10', '2024-07-20', 'Còn thiếu vài chức năng'),
(2, '32/HĐKHCNCTGV-ĐHKG', '2023-04-01', '2023-12-01', 'Làm không kịp');

-- --------------------------------------------------------

--
-- Table structure for table `giangvien`
--

CREATE TABLE `giangvien` (
  `MaGiangVien` varchar(10) NOT NULL,
  `HoTenGV` text NOT NULL,
  `MaNganh` varchar(10) NOT NULL,
  `TrinhDo` varchar(5) NOT NULL,
  `NgaySinh` date NOT NULL,
  `GioiTinh` text NOT NULL,
  `DiaChi` text NOT NULL,
  `MaAccount` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `giangvien`
--

INSERT INTO `giangvien` (`MaGiangVien`, `HoTenGV`, `MaNganh`, `TrinhDo`, `NgaySinh`, `GioiTinh`, `DiaChi`, `MaAccount`) VALUES
('KGU0100', 'Châu Ngọc Nhung', 'CNTT1', 'ThS', '1982-02-18', 'Nữ', 'Châu Thành Kiên Giang', 'KGU0100'),
('KGU0116', 'Võ Hoàng Nhân', 'CNTT1', 'ThS', '1986-04-10', 'Nam', 'Kiên Giang', 'KGU0116');

-- --------------------------------------------------------

--
-- Table structure for table `hoidong`
--

CREATE TABLE `hoidong` (
  `MaHoiDong` varchar(10) NOT NULL,
  `MaGiangVien` varchar(10) NOT NULL,
  `VaiTro` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hoidong`
--

INSERT INTO `hoidong` (`MaHoiDong`, `MaGiangVien`, `VaiTro`) VALUES
('HD001', 'KGU0100', 'Chủ Tịch'),
('HD001', 'KGU0116', 'Phản Biện');

-- --------------------------------------------------------

--
-- Table structure for table `nganh`
--

CREATE TABLE `nganh` (
  `MaNganh` varchar(10) NOT NULL,
  `TenNganh` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nganh`
--

INSERT INTO `nganh` (`MaNganh`, `TenNganh`) VALUES
('CNTT1', 'Công Nghệ Thông Tin'),
('KTMT1', 'Kỹ Thuật Máy Tính'),
('KTPM1', 'Kỹ Thuật Phần Mềm');

-- --------------------------------------------------------

--
-- Table structure for table `nghiemthudt`
--

CREATE TABLE `nghiemthudt` (
  `MaDeTai` varchar(20) NOT NULL,
  `MaHoiDong` varchar(10) NOT NULL,
  `NgayNghiemThu` date NOT NULL,
  `Diem` float NOT NULL,
  `DanhGia` text NOT NULL,
  `FileBaoCao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nghiemthudt`
--

INSERT INTO `nghiemthudt` (`MaDeTai`, `MaHoiDong`, `NgayNghiemThu`, `Diem`, `DanhGia`, `FileBaoCao`) VALUES
('31/HĐKHCNCKSV-ĐHKG', 'HD001', '2024-06-30', 7, 'Cũng ok rồi', 'Báo cáo Đồ Án Lập Trình Python.pdf'),
('32/HĐKHCNCKSV-ĐHKG', 'HD001', '2024-07-04', 8, 'Khá tốt', 'CauTrucCay.pdf'),
('44/HĐKHCNCKSV-ĐHKG', 'HD001', '2024-07-01', 9, 'Đề tài làm rất tốt', '[CT428] Ch2 - Ngon ngu HTML.pdf'),
('45/HĐKHCNCKSV-ĐHKG', 'HD001', '2024-07-11', 7, 'okok', 'CauTrucCay.pdf'),
('48/HĐKHCNCKSV-ĐHKG', 'HD001', '2024-09-23', 6, 'KKK', '[CT428] Ch1 - Gioi thieu WWW.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `nghiemthudtgv`
--

CREATE TABLE `nghiemthudtgv` (
  `MaDeTaiGV` varchar(20) NOT NULL,
  `MaHoiDong` varchar(10) NOT NULL,
  `NgayNghiemThu` date NOT NULL,
  `Diem` float NOT NULL,
  `DanhGia` text NOT NULL,
  `FileBaoCao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nghiemthudtgv`
--

INSERT INTO `nghiemthudtgv` (`MaDeTaiGV`, `MaHoiDong`, `NgayNghiemThu`, `Diem`, `DanhGia`, `FileBaoCao`) VALUES
('36/HĐKHCNCTGV-ĐHKG', 'HD001', '2024-07-11', 9, 'Rất tốt', '[CT428] Ch1 - Gioi thieu WWW.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `nhom`
--

CREATE TABLE `nhom` (
  `MaNhom` varchar(5) NOT NULL,
  `MaSinhVien` varchar(11) NOT NULL,
  `VaiTro` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nhom`
--

INSERT INTO `nhom` (`MaNhom`, `MaSinhVien`, `VaiTro`) VALUES
('N0001', '21072006138', 'Chủ Nhiệm'),
('N0001', '21072006142', 'Thành Viên'),
('N0001', '21072006158', 'Thư Ký'),
('N0002', '21072006142', 'Thành Viên'),
('N0002', '21072006158', 'Thư Ký'),
('N0003', '21072006158', 'Thư Ký'),
('N0004', '21072006142', 'Thành Viên');

-- --------------------------------------------------------

--
-- Table structure for table `nhomgv`
--

CREATE TABLE `nhomgv` (
  `MaNhomGV` varchar(5) NOT NULL,
  `MaGiangVien` varchar(10) NOT NULL,
  `VaiTro` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nhomgv`
--

INSERT INTO `nhomgv` (`MaNhomGV`, `MaGiangVien`, `VaiTro`) VALUES
('NG001', 'KGU0100', 'Chủ Nhiệm'),
('NG001', 'KGU0116', 'Thư Ký'),
('NG002', 'KGU0100', 'Tất Cả');

-- --------------------------------------------------------

--
-- Table structure for table `sinhvien`
--

CREATE TABLE `sinhvien` (
  `MaSinhVien` varchar(11) NOT NULL,
  `HoTen` text NOT NULL,
  `MaNganh` varchar(10) NOT NULL,
  `NgaySinh` date NOT NULL,
  `CCCD` varchar(12) NOT NULL,
  `TKNganHang` varchar(20) NOT NULL,
  `SDT` varchar(10) NOT NULL,
  `GioiTinh` text NOT NULL,
  `DiaChi` text NOT NULL,
  `NienKhoa` varchar(11) NOT NULL,
  `Lop` varchar(10) NOT NULL,
  `ChiNhanhNH` text NOT NULL,
  `MaAccount` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sinhvien`
--

INSERT INTO `sinhvien` (`MaSinhVien`, `HoTen`, `MaNganh`, `NgaySinh`, `CCCD`, `TKNganHang`, `SDT`, `GioiTinh`, `DiaChi`, `NienKhoa`, `Lop`, `ChiNhanhNH`, `MaAccount`) VALUES
('21072006138', 'Đặng Thành Phát', 'CNTT1', '2003-03-22', '091234567890', '01111222233', '0123456789', 'Nam', 'Hòn Đất - Kiên Giang', '2021-2025', 'B021TT3', 'Kiên Giang', '21072006138'),
('21072006142', 'Huỳnh Quang Huy', 'CNTT1', '2003-03-15', '091203003080', '070130339891', '0984337042', 'Nam', 'Rạch Giá tỉnh Kiên Giang', '2021-2025', 'B021TT3', 'Chi nhánh Rạch Giá', '21072006142'),
('21072006158', 'Trình Thúy Quỳnh', 'CNTT1', '2003-05-18', '001122334455', '0123123123', '0123456788', 'Nữ', 'An Biên - Kiên Giang', '2021-2025', 'B021TT3', 'Kiên Giang', '21072006158');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `MaAccount` varchar(11) NOT NULL,
  `Username` varchar(11) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `LoaiTK` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`MaAccount`, `Username`, `Password`, `Email`, `LoaiTK`) VALUES
('QTV01', 'QTV01', 'c4ca4238a0b923820dcc509a6f75849b', 'qtv01@vnkgu.edu.vn', 'QTV');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detai`
--
ALTER TABLE `detai`
  ADD PRIMARY KEY (`MaDeTai`),
  ADD KEY `MaGiangVien` (`GVCoVan`),
  ADD KEY `MaNhom` (`MaNhom`);

--
-- Indexes for table `detaigiangvien`
--
ALTER TABLE `detaigiangvien`
  ADD PRIMARY KEY (`MaDeTaiGV`),
  ADD KEY `CoVan` (`CoVan`);

--
-- Indexes for table `giahandt`
--
ALTER TABLE `giahandt`
  ADD PRIMARY KEY (`MaGiaHan`),
  ADD KEY `MaDeTai` (`MaDeTai`);

--
-- Indexes for table `giahandtgv`
--
ALTER TABLE `giahandtgv`
  ADD PRIMARY KEY (`MaGiaHanDTGV`),
  ADD KEY `MaDeTaiGV` (`MaDeTaiGV`);

--
-- Indexes for table `giangvien`
--
ALTER TABLE `giangvien`
  ADD PRIMARY KEY (`MaGiangVien`),
  ADD KEY `Nganh` (`MaNganh`),
  ADD KEY `MaAccount` (`MaAccount`);

--
-- Indexes for table `hoidong`
--
ALTER TABLE `hoidong`
  ADD PRIMARY KEY (`MaHoiDong`,`MaGiangVien`),
  ADD KEY `MaGiangVien` (`MaGiangVien`);

--
-- Indexes for table `nganh`
--
ALTER TABLE `nganh`
  ADD PRIMARY KEY (`MaNganh`);

--
-- Indexes for table `nghiemthudt`
--
ALTER TABLE `nghiemthudt`
  ADD PRIMARY KEY (`MaDeTai`,`MaHoiDong`),
  ADD KEY `MaHoiDong` (`MaHoiDong`);

--
-- Indexes for table `nghiemthudtgv`
--
ALTER TABLE `nghiemthudtgv`
  ADD PRIMARY KEY (`MaDeTaiGV`,`MaHoiDong`),
  ADD KEY `MaHoiDong` (`MaHoiDong`);

--
-- Indexes for table `nhom`
--
ALTER TABLE `nhom`
  ADD PRIMARY KEY (`MaNhom`,`MaSinhVien`),
  ADD KEY `MaSinhVien` (`MaSinhVien`);

--
-- Indexes for table `nhomgv`
--
ALTER TABLE `nhomgv`
  ADD PRIMARY KEY (`MaNhomGV`,`MaGiangVien`),
  ADD KEY `MaGiangVien` (`MaGiangVien`);

--
-- Indexes for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`MaSinhVien`),
  ADD KEY `MaNganh` (`MaNganh`),
  ADD KEY `MaAccount` (`MaAccount`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`MaAccount`),
  ADD KEY `MaLoaiTK` (`LoaiTK`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `giahandt`
--
ALTER TABLE `giahandt`
  MODIFY `MaGiaHan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `giahandtgv`
--
ALTER TABLE `giahandtgv`
  MODIFY `MaGiaHanDTGV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detai`
--
ALTER TABLE `detai`
  ADD CONSTRAINT `detai_ibfk_2` FOREIGN KEY (`GVCoVan`) REFERENCES `giangvien` (`MaGiangVien`),
  ADD CONSTRAINT `detai_ibfk_3` FOREIGN KEY (`MaNhom`) REFERENCES `nhom` (`MaNhom`);

--
-- Constraints for table `detaigiangvien`
--
ALTER TABLE `detaigiangvien`
  ADD CONSTRAINT `detaigiangvien_ibfk_1` FOREIGN KEY (`CoVan`) REFERENCES `giangvien` (`MaGiangVien`);

--
-- Constraints for table `giahandt`
--
ALTER TABLE `giahandt`
  ADD CONSTRAINT `giahandt_ibfk_1` FOREIGN KEY (`MaDeTai`) REFERENCES `detai` (`MaDeTai`);

--
-- Constraints for table `giahandtgv`
--
ALTER TABLE `giahandtgv`
  ADD CONSTRAINT `giahandtgv_ibfk_1` FOREIGN KEY (`MaDeTaiGV`) REFERENCES `detaigiangvien` (`MaDeTaiGV`);

--
-- Constraints for table `giangvien`
--
ALTER TABLE `giangvien`
  ADD CONSTRAINT `giangvien_ibfk_2` FOREIGN KEY (`MaNganh`) REFERENCES `nganh` (`MaNganh`);

--
-- Constraints for table `hoidong`
--
ALTER TABLE `hoidong`
  ADD CONSTRAINT `hoidong_ibfk_1` FOREIGN KEY (`MaGiangVien`) REFERENCES `giangvien` (`MaGiangVien`);

--
-- Constraints for table `nghiemthudt`
--
ALTER TABLE `nghiemthudt`
  ADD CONSTRAINT `nghiemthudt_ibfk_1` FOREIGN KEY (`MaDeTai`) REFERENCES `detai` (`MaDeTai`),
  ADD CONSTRAINT `nghiemthudt_ibfk_2` FOREIGN KEY (`MaHoiDong`) REFERENCES `hoidong` (`MaHoiDong`);

--
-- Constraints for table `nghiemthudtgv`
--
ALTER TABLE `nghiemthudtgv`
  ADD CONSTRAINT `nghiemthudtgv_ibfk_1` FOREIGN KEY (`MaDeTaiGV`) REFERENCES `detaigiangvien` (`MaDeTaiGV`),
  ADD CONSTRAINT `nghiemthudtgv_ibfk_2` FOREIGN KEY (`MaHoiDong`) REFERENCES `hoidong` (`MaHoiDong`);

--
-- Constraints for table `nhom`
--
ALTER TABLE `nhom`
  ADD CONSTRAINT `nhom_ibfk_1` FOREIGN KEY (`MaSinhVien`) REFERENCES `sinhvien` (`MaSinhVien`);

--
-- Constraints for table `nhomgv`
--
ALTER TABLE `nhomgv`
  ADD CONSTRAINT `nhomgv_ibfk_1` FOREIGN KEY (`MaGiangVien`) REFERENCES `giangvien` (`MaGiangVien`);

--
-- Constraints for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD CONSTRAINT `sinhvien_ibfk_2` FOREIGN KEY (`MaNganh`) REFERENCES `nganh` (`MaNganh`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
