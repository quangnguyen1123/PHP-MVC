-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 05, 2022 lúc 09:08 AM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlibanhang1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `clicksanpham`
--

CREATE TABLE `clicksanpham` (
  `id` int(11) NOT NULL,
  `idparent` int(11) NOT NULL,
  `timeclick` datetime NOT NULL,
  `type` enum('danhmuc','sanpham') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `clicksanpham`
--

INSERT INTO `clicksanpham` (`id`, `idparent`, `timeclick`, `type`) VALUES
(1, 4, '2022-10-05 13:00:09', 'sanpham'),
(2, 12, '2022-10-05 13:00:12', 'sanpham'),
(3, 13, '2022-10-05 13:00:15', 'sanpham'),
(4, 4, '2022-10-05 13:00:17', 'sanpham'),
(5, 2, '2022-10-05 13:00:59', 'sanpham'),
(6, 2, '2022-10-05 13:05:23', 'sanpham'),
(7, 1, '2022-10-05 13:05:25', 'sanpham'),
(8, 1, '2022-10-05 13:05:36', 'sanpham'),
(9, 1, '2022-10-05 13:07:09', 'danhmuc'),
(10, 2, '2022-10-05 13:07:11', 'danhmuc'),
(11, 1, '2022-10-05 13:07:23', 'danhmuc'),
(12, 1, '2022-10-05 13:07:31', 'sanpham'),
(13, 1, '2022-10-05 13:08:18', 'sanpham'),
(14, 1, '2022-10-05 13:08:20', 'danhmuc'),
(15, 1, '2022-10-05 13:10:54', 'danhmuc'),
(16, 9, '2022-10-05 13:34:47', 'danhmuc'),
(17, 9, '2022-10-05 13:38:44', 'danhmuc'),
(18, 1, '2022-10-05 13:38:54', 'danhmuc'),
(19, 2, '2022-10-05 13:38:56', 'danhmuc'),
(20, 9, '2022-10-05 13:38:58', 'danhmuc'),
(21, 10, '2022-10-05 13:38:59', 'danhmuc'),
(22, 11, '2022-10-05 13:39:01', 'danhmuc'),
(23, 1, '2022-10-05 13:39:02', 'danhmuc'),
(24, 2, '2022-10-05 13:39:04', 'danhmuc'),
(25, 3, '2022-10-05 13:39:07', 'danhmuc'),
(26, 3, '2022-10-05 13:47:56', 'danhmuc'),
(27, 3, '2022-10-05 13:50:16', 'danhmuc'),
(28, 29, '2022-10-05 13:52:06', 'sanpham'),
(29, 29, '2022-10-05 13:52:12', 'sanpham'),
(30, 29, '2022-10-05 13:52:13', 'sanpham'),
(31, 1, '2022-10-05 13:52:19', 'danhmuc'),
(32, 2, '2022-10-05 13:52:20', 'sanpham'),
(33, 2, '2022-10-05 13:52:25', 'sanpham'),
(34, 2, '2022-10-05 13:52:26', 'sanpham'),
(35, 2, '2022-10-05 13:52:59', 'sanpham'),
(36, 3, '2022-10-05 13:53:08', 'danhmuc'),
(37, 29, '2022-10-05 13:53:13', 'sanpham'),
(38, 29, '2022-10-05 13:53:18', 'sanpham'),
(39, 29, '2022-10-05 13:53:18', 'sanpham'),
(40, 1, '2022-10-05 14:07:43', 'danhmuc'),
(41, 2, '2022-10-05 14:07:45', 'sanpham');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `tendanhmuc` varchar(100) NOT NULL,
  `parent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `tendanhmuc`, `parent`) VALUES
(1, 'Áo', 0),
(2, 'Quần', 0),
(3, 'Phụ Kiện', 0),
(4, 'Áo Phông', 1),
(5, 'Áo Sơmi', 1),
(6, 'Áo Gió', 1),
(7, 'Áo Phao', 1),
(8, 'Áo Len', 1),
(9, 'Quần Âu', 2),
(10, 'Quần Short', 2),
(11, 'Quần Jean', 2),
(12, 'Vòng Cổ', 3),
(13, 'Lắc Tay', 3),
(14, 'Mũ', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `idgiohang` int(11) NOT NULL,
  `idspgiohang` int(11) NOT NULL,
  `idtaikhoan` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `size` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`idgiohang`, `idspgiohang`, `idtaikhoan`, `soluong`, `size`) VALUES
(3, 29, 2, 1, 'L');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `idsp` int(11) NOT NULL,
  `masp` varchar(100) NOT NULL,
  `tensp` varchar(100) NOT NULL,
  `ngaysx` date NOT NULL,
  `gia` float NOT NULL,
  `gianhap` float NOT NULL,
  `clicksanpham` int(11) NOT NULL,
  `iddanhmuc` int(11) NOT NULL,
  `tenanh` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`idsp`, `masp`, `tensp`, `ngaysx`, `gia`, `gianhap`, `clicksanpham`, `iddanhmuc`, `tenanh`) VALUES
(1, 'ap1', 'Áo Phông Nam', '2022-10-05', 150000, 100000, 3, 4, 'aophong1.jpg'),
(2, 'ap2', 'Áo Phông Nam', '2022-10-05', 200000, 100000, 5, 4, 'aophong2.jpg'),
(3, 'ap3', 'Áo Phông Nam', '2022-10-05', 250000, 120000, 0, 4, 'aophong3.jpg'),
(4, 'ap4', 'Áo Phông Nam', '2022-10-05', 250000, 100000, 0, 4, 'aophong4.jpg'),
(5, 'sm1', 'Somi Nam dáng đẹp', '2022-10-05', 300000, 120000, 0, 5, 'somi1.jpg'),
(6, 'sm2', 'Somi Nam cộc tay', '2022-10-05', 290000, 200000, 0, 5, 'somi2.jpg'),
(7, 'sm3', 'Somi Nam dáng đẹp', '2022-10-05', 300000, 120000, 0, 5, 'somi3.jpg'),
(8, 'ag1', 'Áo gió đẹp', '2022-10-05', 300000, 100000, 0, 6, 'aogio1.jpg'),
(9, 'ag2', 'Áo gió cho nam đẹp', '2022-10-05', 400000, 200000, 0, 6, 'aogio2.jpg'),
(10, 'ag3', 'Áo gió cho nam đẹp', '2022-10-05', 400000, 200000, 0, 6, 'aogio3.jpg'),
(11, 'aphao1', 'Áo phao Hàn Quốc', '2022-10-05', 400000, 200000, 0, 7, 'aophao1.jpg'),
(12, 'aphao2', 'Áo phao nam lông vũ', '2022-10-05', 500000, 200000, 0, 7, 'aophao2.jpg'),
(13, 'al1', 'Áo len cổ tròn', '2022-10-05', 200000, 100000, 0, 8, 'aolen1.jpg'),
(14, 'al2', 'Áo len Hàn Quốc', '2022-10-05', 200000, 100000, 0, 8, 'aolen2.jpg'),
(15, 'al3', 'Áo len cổ tim', '2022-10-05', 180000, 100000, 0, 8, 'aolen3.jpg'),
(16, 'al4', 'Áo len cổ lọ', '2022-10-05', 250000, 120000, 0, 8, 'aolen4.jpg'),
(17, 'qa1', 'Quần âu nam Hàn Quốc', '2022-10-05', 250000, 200000, 0, 9, 'quanau1.jpg'),
(18, 'qs1', 'Quần short đũi nam', '2022-10-05', 150000, 100000, 0, 10, 'quanshort1.jpg'),
(19, 'qj1', 'Quần jean nam ', '2022-10-05', 250000, 1500000, 0, 11, 'quanjean1.jpg'),
(20, 'vc1', 'Vòng cổ nam đẹp', '2022-10-05', 300000, 100000, 0, 12, 'vong1.jpg'),
(21, 'vc2', 'Vòng cổ nam titan', '2022-10-05', 350000, 100000, 0, 12, 'vong2.jpg'),
(22, 'vc3', 'Vòng cổ nam titan mặt XL', '2022-10-05', 350000, 100000, 0, 12, 'vong3.jpg'),
(23, 'vc4', 'Vòng cổ lập phương', '2022-10-05', 300000, 100000, 0, 12, 'vong4.jpg'),
(24, 'lt1', 'Lắc tay nam titan', '2022-10-05', 300000, 100000, 0, 13, 'lac1.jpg'),
(25, 'lt2', 'Lắc tay nam titan', '2022-10-05', 300000, 100000, 0, 13, 'lac2.jpg'),
(26, 'lt3', 'Lắc tay nam titan', '2022-10-05', 300000, 100000, 0, 13, 'lac3.jpg'),
(27, 'lt4', 'Lắc tay nam titan', '2022-10-05', 300000, 100000, 0, 13, 'lac4.jpg'),
(28, 'mu1', 'Mũ lười trai đẹp', '2022-10-05', 150000, 100000, 0, 14, 'mu1.jpg'),
(29, 'mu2', 'Mũ MLB', '2022-10-05', 200000, 100000, 6, 14, 'mu2.jpg'),
(30, 'mu3', 'Mũ Adidas', '2022-10-05', 200000, 100000, 0, 14, 'mu3.jpg'),
(31, 'mu4', 'Mũ lười trai hàn Quốc', '2022-10-05', 150000, 100000, 0, 14, 'mu4.webp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanphamdangchuyen`
--

CREATE TABLE `sanphamdangchuyen` (
  `Id` int(11) NOT NULL,
  `idtaikhoan` int(11) NOT NULL,
  `tenkh` varchar(100) NOT NULL,
  `diachi` varchar(100) NOT NULL,
  `sodt` varchar(10) NOT NULL,
  `anhsp` varchar(100) NOT NULL,
  `tensp` varchar(100) NOT NULL,
  `gia` float NOT NULL,
  `soluong` int(11) NOT NULL,
  `size` varchar(10) NOT NULL,
  `tongtien` float NOT NULL,
  `ghichu` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanphamdangchuyen`
--

INSERT INTO `sanphamdangchuyen` (`Id`, `idtaikhoan`, `tenkh`, `diachi`, `sodt`, `anhsp`, `tensp`, `gia`, `soluong`, `size`, `tongtien`, `ghichu`) VALUES
(1, 2, 'quang', 'tay tuu', '0374757231', 'aophong2.jpg', 'Áo Phông Nam', 200000, 1, 'L', 200000, 'đã hủy hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtinkh`
--

CREATE TABLE `thongtinkh` (
  `id` int(11) NOT NULL,
  `tenkh` varchar(200) NOT NULL,
  `sodt` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `diachi` varchar(50) NOT NULL,
  `anhsp` varchar(100) NOT NULL,
  `tensp` varchar(100) NOT NULL,
  `gia` float NOT NULL,
  `soluong` int(11) NOT NULL,
  `size` varchar(10) NOT NULL,
  `tongtien` float NOT NULL,
  `ghichu` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thongtinkh`
--

INSERT INTO `thongtinkh` (`id`, `tenkh`, `sodt`, `email`, `diachi`, `anhsp`, `tensp`, `gia`, `soluong`, `size`, `tongtien`, `ghichu`) VALUES
(1, 'quang', '0374757231', 'thienquang7744@gmail.com', 'tây tựu', 'mu2.jpg', 'Mũ MLB', 200000, 1, 'L', 200000, 'vbnm'),
(2, 'quang', '0374757231', 'thienquang7744@gmail.com', 'tây tựu', 'mu2.jpg', 'Mũ MLB', 200000, 1, 'L', 200000, 'vbnjm'),
(3, 'quang', '0374757231', 'thienquang7744@gmail.com', 'tay tuu', 'aophong2.jpg', 'Áo Phông Nam', 200000, 1, 'L', 200000, 'fghjk');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `timedangnhap`
--

CREATE TABLE `timedangnhap` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `timeuser` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `timedangnhap`
--

INSERT INTO `timedangnhap` (`id`, `userid`, `timeuser`) VALUES
(0, 2, '2022-10-05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `taikhoan` varchar(100) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `tenuser` varchar(100) NOT NULL,
  `tuoi` int(11) NOT NULL,
  `sodt` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `quyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`iduser`, `taikhoan`, `matkhau`, `tenuser`, `tuoi`, `sodt`, `email`, `quyen`) VALUES
(2, 'quang', '123', 'quangnguyen', 22, '0374757231', 'thienquang7744@gmail.com', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `clicksanpham`
--
ALTER TABLE `clicksanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`idgiohang`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`idsp`);

--
-- Chỉ mục cho bảng `sanphamdangchuyen`
--
ALTER TABLE `sanphamdangchuyen`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `thongtinkh`
--
ALTER TABLE `thongtinkh`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `timedangnhap`
--
ALTER TABLE `timedangnhap`
  ADD KEY `userid` (`userid`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `clicksanpham`
--
ALTER TABLE `clicksanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `idgiohang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `idsp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `sanphamdangchuyen`
--
ALTER TABLE `sanphamdangchuyen`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `thongtinkh`
--
ALTER TABLE `thongtinkh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `timedangnhap`
--
ALTER TABLE `timedangnhap`
  ADD CONSTRAINT `timedangnhap_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`iduser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
