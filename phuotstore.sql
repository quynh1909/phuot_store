-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 19, 2023 lúc 05:45 PM
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
-- Cơ sở dữ liệu: `phuotstore`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `id_sanpham` int(11) DEFAULT NULL,
  `soluong` int(11) NOT NULL,
  `tongtien` decimal(10,2) NOT NULL,
  `id_khachhang` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `id_sanpham`, `soluong`, `tongtien`, `id_khachhang`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 390000.00, 9, '2023-11-19 06:07:06', '2023-11-19 06:07:06'),
(2, 1, 1, 390000.00, 9, '2023-11-19 06:13:46', '2023-11-19 06:13:46'),
(3, 2, 3, 1200000.00, 9, '2023-11-19 06:14:12', '2023-11-19 06:14:12'),
(4, 1, 1, 390000.00, 9, '2023-11-19 06:14:20', '2023-11-19 06:14:20'),
(8, 2, 3, 1200000.00, 9, '2023-11-19 06:44:39', '2023-11-19 06:44:39'),
(11, 1, 1, 390000.00, 9, '2023-11-19 07:16:18', '2023-11-19 07:16:18'),
(12, 2, 1, 400000.00, 9, '2023-11-19 07:16:32', '2023-11-19 07:16:32'),
(13, 2, 1, 400000.00, 9, '2023-11-19 07:18:14', '2023-11-19 07:18:14'),
(14, 2, 1, 400000.00, 9, '2023-11-19 07:19:39', '2023-11-19 07:19:39'),
(15, 2, 5, 2000000.00, 9, '2023-11-19 07:20:17', '2023-11-19 07:20:17'),
(16, 2, 3, 1200000.00, 9, '2023-11-19 07:21:13', '2023-11-19 07:21:13'),
(17, 1, 1, 390000.00, 9, '2023-11-19 08:27:56', '2023-11-19 08:27:56'),
(18, 1, 1, 390000.00, 9, '2023-11-19 09:08:37', '2023-11-19 09:08:37'),
(19, 2, 1, 400000.00, 9, '2023-11-19 09:33:43', '2023-11-19 09:33:43');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `tenbv` varchar(255) NOT NULL,
  `noidungbv` text DEFAULT NULL,
  `hinhanhbv` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `tenbv`, `noidungbv`, `hinhanhbv`, `user_id`, `created_at`, `updated_at`) VALUES
(37, 'Tràng An - Ninh Bình', 'Trong số các địa điểm du lịch Việt Nam ẩn chứa nhiều giá trị văn hoá - lịch sử nhất, chắc chắn Tràng An - Ninh Bình là cái tên hàng đầu. Khu di tích này đã được UNESCO công nhận là Di sản văn hoá và thiên nhiên thế giới vào 2014.\r\n\r\nKhu thắng cảnh này tập hợp các kiến trúc gắn liền với cố đô Hoa Lư hào hùng xưa, ẩn sâu trong các dãy núi đá vôi tráng lệ và dòng sông uốn lượn mơ màng. Nếu bạn là tín đồ du lịch văn hoá hoặc tâm linh, một số kiến trúc sau sẽ khiến bạn “động lòng\": đền Trần Ninh Bình, đền Tứ Trụ, đền Suối Tiên,...', 'dia-diem-du-lich-viet-nam-10-853x1024.webp', 3, '2023-11-18 01:28:32', '2023-11-18 08:26:36'),
(38, 'Hội An - Đà Nẵng', 'Có mấy ai đi du lịch Việt Nam mà có thể bỏ qua Đà Nẵng, và cũng có mấy ai đến Đà Nẵng mà không ghé thăm Hội An? Thị trấn ngay cửa biển này mang nhiều chất thơ hơn bất kỳ nơi nào trên đất Việt, với những dãy nhà 2 tầng thấp vàng rực, những giàn hoa giấy nở trước cửa, các con đường lát đá mơ màng và sông Hoài chạy xuyên qua thị trấn.\r\n\r\nChỉ cần đặt một tấm vé máy bay đến Đà Nẵng là bạn có thể khám phá thành phố xinh đẹp này. Sau đó, bạn có thể tiếp tục đón xe khách/taxi hoặc thuê xe máy để di chuyển đến Hội An chỉ trong 1 giờ xe chạy.', 'dia-diem-du-lich-viet-nam-19-819x1024.webp', 3, '2023-11-18 01:29:14', '2023-11-18 08:27:49'),
(39, 'Mù Cang Chải - Yên Bái', 'Cách Hà Nội những 300km nhưng các tín đồ du lịch vẫn không thôi mê đắm Mù Cang Chải, Yên Bái. Đây là một trong những cái tên nổi bật nhất khi người ta muốn ghé thăm, tận hưởng vẻ đẹp của núi rừng Tây Bắc. Không chỉ các du khách trong nước, các “thị trấn vàng” ở đây còn thu hút rất nhiều tín đồ vi vu bốn phương.\r\n\r\nĐến Mù Cang Chải, bạn nên canh chuẩn mùa lúa chín từ tháng 9 đến 10. Các địa điểm ngắm “mùa vàng” tuyệt nhất là đồi Móng Ngựa (bản Sáng Nhù), xã Tú Lệ, La Pán Tẩn,... Với góc nhìn từ trên cao xuống, thung lũng phía dưới mở ra tráng lệ với từng mảng ruộng rực rỡ, kéo dài chạm đỉnh trời, xen lẫn các mái nhà nâu đơn sơ và những con suối mơ màng.', 'dia-diem-du-lich-viet-nam-3-820x1024.webp', 3, '2023-11-18 01:35:26', '2023-11-18 08:29:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `tensp` varchar(255) NOT NULL,
  `hinhanh` text NOT NULL,
  `motasp` text DEFAULT NULL,
  `giatien` decimal(10,0) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `tensp`, `hinhanh`, `motasp`, `giatien`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Áo khoác 3 lớp lót phao Amido cho nam và nữ', 'Picture1.png', 'Áo khoác 3 lớp lót phao Amido cho nam và nữ. Áo khoác gió thời trang nam nữ, với thiết kế đơn giản, thể thao. Là một Item không thể thiếu trong tủ đồ của những tín đồ xê dịch, phần hành trang, tư trang. Khi chuẩn bị cho những cơn gió đầu mùa, cái lạnh của mùa đông. Khi tận hưởng vào không khí của thiên nhiên!', 890000, 3, '2023-11-18 02:31:39', '2023-11-19 10:18:07'),
(2, 'Balo Trekking Naturehike 45L', 'Picture2.jpg', 'Balo Trekking Naturehike là dòng balo trekking cao cấp được nhiều người tin mua và sử dụng bởi những tính năng ưu việt mà nó mang lại.\r\nXu hướng trekking, hikking hay đơn giản với các hoạt động leo núi thể thao hiện nay được khá nhiều bạn trẻ tích cực tham gia. Cùng với đó, các sản phẩm chuyên dụng đồ phượt như balo phượt, balo du lịch lại càng nhận được nhiều sự quan tâm. Một chiếc balo phượt với đầy đủ tư trang hành lý sẽ có thể bảo quản và cung cấp cho người dùng các sản phẩm thiết yếu trong sinh hoạt.\r\n', 1600000, 3, '2023-11-18 02:31:54', '2023-11-19 10:26:08'),
(7, 'Võng siêu nhẹ Naturehike Cắm trại, đi rừng', 'Picture3.jpg', 'Võng siêu nhẹ Naturehike, với mục tiêu mang tới một kiểu thư giãn vô cùng thoải mái. Đu đưa nhẹ nhàng khi nghỉ ngơi trong tự nhiên, những cơn gió mát Chilling ban trưa. Và những giấc ngủ ngắn vô cùng giá trị khi đi chơi, lái xe du lịch đường dài.', 360000, 3, '2023-11-19 10:23:39', '2023-11-19 10:23:39'),
(8, 'Lều du lịch 6 người Tetragon', 'Picture4.jpg', 'Lều du lịch 6 người(6-8 người) thương hiệu Tetragon, được đánh giá là chiếc lều cắm trại có chất lượng sử dụng rất cao về độ bền cùng sự tiện lợi khi sử dụng. Với giá 1,45 triệu đồng đây là sản phẩm lều 6 người giá rẻ so với mặt bằng trung.', 1600000, 3, '2023-11-19 10:25:48', '2023-11-19 10:25:48'),
(9, 'Bếp cồn dã ngoại mini Alocs mang đi cắm trại', 'Picture5.jpg', 'Bếp cồn dã ngoại mini Alocs mang đi cắm trại. Với thiết kế, hoàn thiện bên ngoài từ hợp kim nhôm sơn nhám tĩnh điện. Một màu sơn xám, giúp cho bộ bếp mini sử dụng cồn, mang tới một hình thức vô cùng cứng cáp, bền bỉ.', 280000, 3, '2023-11-19 10:28:33', '2023-11-19 10:28:33');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `danhgia` text NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `id_baiviet` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','customer') NOT NULL,
  `sdt` varchar(20) DEFAULT NULL,
  `diachi` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `sdt`, `diachi`, `created_at`, `updated_at`) VALUES
(2, 'bách', 'admin@gmail.com', '$2y$10$IRBa/TyKynbFLW.jnuHVhuRNlHbnoKmZ2HWpKyF4.R2TpjAoG9b6u', 'admin', NULL, NULL, '2023-11-14 05:50:07', '2023-11-14 05:50:07'),
(3, 'B', 'B@gmail.com', '$2y$10$AiF74kbNIm7k71QxU7PgT.UZAFm5OFC9pgNsc7TZtMuDMamPoQfvi', 'admin', NULL, NULL, '2023-11-14 05:57:52', '2023-11-14 05:57:52'),
(4, 'A', 'AG@gmail.com', '$2y$10$lQ.hUBsbmfotG6316qj3H..5E2N0z4pSch.Z3r9LSYppMKtMQLFdC', 'admin', NULL, NULL, '2023-11-14 06:12:29', '2023-11-14 06:12:29'),
(5, 'bachs', 'C@gmail.com', '$2y$10$SvMDwsRSaKbjwvwTf2UsGu31YNw6vOEaz.mpzQfT5v6QpPo1.wkdG', 'admin', NULL, NULL, '2023-11-14 06:13:28', '2023-11-14 06:13:28'),
(6, 'D', 'D@gmail.com', '$2y$10$mud9kYVt6HLZzAOPy48PUu0CEAsNeskRWOhbzNxHk2C.MFwX.P2YO', 'customer', NULL, NULL, '2023-11-14 06:14:59', '2023-11-14 06:14:59'),
(7, 'qq', 'qq@gmail.com', '$2y$10$7XGvkNOitsLkA1RDcVUFEObCOeINT53s0fknV9KGFM5JrBWNefLu2', 'customer', NULL, NULL, '2023-11-14 12:19:18', '2023-11-14 12:19:18'),
(8, 'O', 'o@gmail.com', '$2y$10$GVf468tbZ2toRDyiIXi1Xuq5ZQTe1NkU8sXQYSGtuS2xaFcovY3Va', 'customer', NULL, NULL, '2023-11-15 03:42:31', '2023-11-15 03:42:31'),
(9, 'test', 'test@gmail.com', '$2y$10$2gN3BHcaUvPiVmGOMoPRw.wWOYcoCsz9ZlrTFdev/9m3obXu4gnAe', 'customer', NULL, NULL, '2023-11-18 06:00:33', '2023-11-18 06:00:33');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `khachhang_id` (`id_khachhang`),
  ADD KEY `sanpham_id` (`id_sanpham`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id_2` (`user_id`);

--
-- Chỉ mục cho bảng `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_baiviet` (`id_baiviet`),
  ADD KEY `id_khachhang` (`user_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `khachhang_id` FOREIGN KEY (`id_khachhang`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sanpham_id` FOREIGN KEY (`id_sanpham`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `user_id_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `id_baiviet` FOREIGN KEY (`id_baiviet`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_khachhang` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
