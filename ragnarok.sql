-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2024 at 09:01 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ragnarok`
--

-- --------------------------------------------------------

--
-- Table structure for table `map`
--

CREATE TABLE `map` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `moTa` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `map`
--

INSERT INTO `map` (`id`, `name`, `image`, `moTa`) VALUES
(1, 'Đấu  Trường Trên Không', 'map1.png', '       <h4>Một hòn đảo cổ nơi các thân linh từng ngự trị ở đây khi các chiến binh đang tìm kiếm một vật gì đó thì đụng chạm nhau và xảy ra cuộc chiến vô cùng khốc liệt.</h4>');

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE `tintuc` (
  `id` int(11) NOT NULL,
  `tieuDe` varchar(100) NOT NULL,
  `moTa` varchar(100) NOT NULL,
  `noiDung` longtext NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`id`, `tieuDe`, `moTa`, `noiDung`, `image`) VALUES
(1, 'Ra mắt tướng Công nương Lucial', 'Đây là một ví tướng nữ khá đẹp và kỹ năng mạnh', ' <div class=\"content\">\n                            <h2>Cốt truyện</h2>\n                            <p><strong>Xuất thân:</strong> Công nương Lucial là con gái duy nhất của Vua Solaris và Hoàng hậu Selene. Ngay từ nhỏ, cô đã được đào tạo võ thuật và nghệ thuật chiến đấu, cùng với kiến thức sâu rộng về chiến lược và lãnh đạo.\n                                Lucial nổi bật với lòng dũng cảm và tài năng chiến đấu, trở thành một biểu tượng của hy vọng và sức mạnh cho người dân Sunland.</p>\n                            <p><strong>Tính cách:</strong> Lucial là một người phụ nữ mạnh mẽ, quyết đoán và thông minh. Cô luôn sẵn lòng chiến đấu vì công lý và bảo vệ người dân. Dù có vẻ ngoài cứng rắn, Lucial cũng có một trái tim nhân hậu và luôn quan\n                                tâm đến những người yếu thế.</p>\n                            <p><strong>Khả Năng Đặc Biệt:</strong> Nhờ vào sự kết nối với mặt trời, Lucial sở hữu sức mạnh điều khiển ánh sáng. Cô có thể tạo ra các luồng ánh sáng mạnh mẽ để tấn công kẻ thù, cũng như tạo ra các lá chắn ánh sáng để bảo vệ\n                                bản thân và đồng đội.</p>\n                            <h2>Khả năng chiến đấu</h2>\n                            <h3>Skill 1 (H): Đạn Ánh Sáng</h3>\n                            <p><strong>Mô tả:</strong> Lucial bắn ra một viên đạn lửa từ súng đôi của mình, gây sát thương lửa cho đối thủ.</p>\n                            <h3>Skill 2 (J): Khiên Ánh Sáng</h3>\n                            <p><strong>Mô tả:</strong> Lucial tạo ra một khiên ánh sáng bảo vệ mình khỏi các đòn tấn công của đối thủ trong vài giây.</p>\n                            <h3>Skill 3 (K): Cơn Mưa Ánh Sáng</h3>\n                            <p><strong>Mô tả:</strong> Lucial bắn ra một loạt đạn lửa từ súng đôi, gây sát thương diện rộng cho tất cả đối thủ trong tầm bắn.</p>\n                            <h3>Tuyệt kỹ (L): Nhật Thực</h3>\n                            <p><strong>Mô tả:</strong> Lucial kích hoạt sức mạnh tối thượng, khiến súng đôi của cô phát sáng rực rỡ và bắn ra một loạt đạn ánh sáng và lửa, gây sát thương mạnh lên tất cả đối thủ xung quanh.</p>\n                            <h2>Hình ảnh về nhân vật</h2>\n                            <img src=\"lucial-1.jpg\" alt=\"Công nương Lucial\" class=\"character-image\">\n                            <img src=\"lucial-2.jpg\" alt=\"Công nương Lucial chiến đấu\" class=\"character-image\">\n                            <img src=\"lucial-3.jpg\" alt=\"Kỹ năng của Lucial\" class=\"character-image\">\n                        </div>', 'tintuc1.png');

-- --------------------------------------------------------

--
-- Table structure for table `tuong`
--

CREATE TABLE `tuong` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `STtay` int(11) NOT NULL,
  `doKho` int(11) NOT NULL,
  `moTa` varchar(1000) NOT NULL,
  `image` varchar(50) NOT NULL,
  `H` varchar(200) NOT NULL,
  `J` varchar(200) NOT NULL,
  `K` varchar(200) NOT NULL,
  `L` varchar(200) NOT NULL,
  `sinhMenh` int(4) NOT NULL,
  `heToc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tuong`
--

INSERT INTO `tuong` (`id`, `name`, `STtay`, `doKho`, `moTa`, `image`, `H`, `J`, `K`, `L`, `sinhMenh`, `heToc`) VALUES
(1, ' Công nương Lucial ', 5, 4, '<ul>\n<li><p><h2>Xuất Thân:</h2>\nSelene. Ngay từ nhỏ, cô đã được đào tạo võ thuật và nghệ thuật chiến đấu, cùng với kiến thức sâu rộng về chiến lược và lãnh đạo. Lucial nổi bật với lòng dũng cảm và tài năng chiến đấu, trở thành một biểu tượng của hy vọng và sức mạnh cho người dân Sunland.</P>\n</li>\n<li><p><h2>Tính cách:</h2>\n	 Lucial là một người phụ nữ mạnh mẽ, quyết đoán và thông minh. Cô luôn sẵn lòng chiến đấu vì công lý và bảo vệ người dân. Dù có vẻ ngoài cứng rắn, Lucial cũng có một trái tim nhân hậu và luôn quan tâm đến những người yếu thế.\n</p> </li>\n<li><p><h2>Khả Năng Đặc Biệt:</h2>	 Nhờ vào sự kết nối với mặt trời, Lucial sở hữu sức mạnh điều khiển ánh sáng và lửa. Cô có thể tạo ra các luồng lửa mạnh mẽ để tấn công kẻ thù, cũng như tạo ra các lá chắn ánh sáng để bảo vệ bản thân và đồng đội.\n</p></li>\n\n</ul>', 'nv1.png', '<h2>Đạn Ánh Sắng</h2>\n<p>Đòn tấn công tầm xa, gây sát thương lửa và đốt cháy đối thủ.</p>', '<h2>Khiên Ánh Sáng</h2>\r\n<p>Kỹ năng phòng thủ mạnh mẽ, bảo vệ Lucial khỏi các đòn tấn công. </p>', '<h2>Cơn Mưa Ánh Sáng</h2>\r\n<p> Đòn tấn công diện rộng, gây sát thương nhiều lần cho đối thủ trong tầm bắn.</p>', '<h2>Nhật Thực</h2>\r\n<p> Kỹ năng tăng cường toàn diện, gây sát thương diện rộng và tăng cường sức mạnh trong thời gian ngắn.</p>', 3, 'Công chúa nước Sunland'),
(2, 'Ryujin', 3, 3, '<ul>\r\n<li><p><h2>Xuất Thân:</h2>\r\nRyujin là một kiếm sĩ với bộ vest đen bí ẩn, sở hữu một kiếm katana mạnh mẽ. Anh ta mang trên mình gánh nặng của quá khứ đau buồn, một cuộc hành trình đi tìm sức mạnh để vượt qua những khó khăn của cuộc sống. Sự mạnh mẽ của anh ta không chỉ nằm trong kỹ năng chiến đấu, mà còn là sức mạnh tinh thần và ý chí kiên cường để đối mặt với mọi thử thách. Ryujin đại diện cho sự kiên định và quyết tâm, là nguồn cảm hứng cho những ai đang tìm kiếm ý nghĩa và mục tiêu trong cuộc sống.</P>\r\n</li>\r\n<li><p><h2>Tính cách:</h2>\r\n	 Trầm lắng.\r\n</p> </li>\r\n<li><p><h2>Khả Năng Đặc Biệt:</h2>	 Di chuyển với tốc độ cực nhanh, để lại hình ảnh ảo của mình trên chiến trường. Những hình ảnh ảo này không chỉ khiến đối thủ khó lòng nhận ra vị trí thật sự của samurai mà còn có khả năng tấn công như bản thể thực.\r\n</p></li>\r\n\r\n</ul>\r\n', 'nv2.png', '<h2>Shadow Step (Bước Ảo Ảnh)</h2>\r\n<p>Ryujin di chuyển với tốc độ cực nhanh, để lại một hình ảnh ảo đứng yên tại vị trí cũ.</p>', '<h2>Phantom Slash (Cắt Hồn Ảnh)</h2>\r\n<p>Ryujin lao tới đối thủ với tốc độ cực nhanh, thực hiện một đòn chém mạnh bằng katana, tạo ra một làn sóng kiếm khí gây sát thương.</p>', '<h2>Illusion Strike (Đòn Ảo Ảnh)</h2>\r\n<p>Ryujin tạo ra nhiều hình ảnh ảo xung quanh đối thủ và tất cả các hình ảnh ảo đều tấn công đồng loạt.</p>', '<h2>Spirit Blade (Kiếm Hồn)</h2>\r\n<p>Ryujin tập trung tinh thần và sức mạnh vào thanh katana, thực hiện một đòn chém tối thượng với sức mạnh hủy diệt.</p>', 5, 'Hiệp sĩ'),
(3, 'Kị sĩ Paladin', 4, 5, '<ul>\r\n<li><p><h2>Xuất Thân:</h2>\r\ncon trai của Đại tướng Cedric Draven và nữ hiệp sĩ Althea Draven, sinh ra trong gia đình quý tộc danh giá ở vương quốc Eldoria. Từ nhỏ, anh đã được huấn luyện nghiêm khắc và bộc lộ tài năng vượt trội trong cưỡi ngựa và chiến đấu. Sau khi thất bại trên chiến trường và gia tộc anh tan rã thì oán niệm đã bám lên người anh và biến anh thành 1 bóng ma kĩ sĩ .</P>\r\n</li>\r\n<li><p><h2>Tính cách:</h2>\r\n	Dũng cảm, kiên cường, thông minh và quyết đoán.\r\n</p> </li>\r\n<li><p><h2>Khả Năng Đặc Biệt:</h2>	 khả năng đặc biệt của bóng ma kị sĩ, cho phép anh ta sử dụng bóng tối để tăng cường sức mạnh và gây khiếp sợ cho kẻ thù. Khi kích hoạt, kị sĩ sẽ bao phủ trong một màn sương đen, khiến anh ta trở nên vô hình và vô hiệu hóa đối thủ trong một thời gian ngắn.\r\n</p></li>\r\n\r\n</ul>', 'nv3.png', '<h2>Dark Veil (Màn Sương Đen)</h2>\r\n<p>Mô tả: Bóng Ma Kỵ Sĩ bao phủ mình trong một màn sương đen, trở nên vô hình trong một khoảng thời gian ngắn.</p>', '<h2>Phantom Charge (Xung Kích Bóng Ma)</h2>\r\n<p> Bóng Ma Kỵ Sĩ lao tới đối thủ với tốc độ cực nhanh, gây sát thương và đẩy lùi đối thủ.</p>', '<h2> Nightmarish Presence (Hiện Diện Kinh Hoàng)</h2>\r\n<p>Bóng Ma Kỵ Sĩ tỏa ra một luồng khí đen xung quanh, gây hoảng sợ cho kẻ thù gần đó và giảm khả năng tấn công của chúng.</p>', '<h2>Shadow Strike (Đòn Tấn Công Bóng Tối)</h2>\r\n<p>Bóng Ma Kỵ Sĩ triệu hồi sức mạnh bóng tối, tung ra một đòn tấn công mạnh mẽ bằng kiếm, gây sát thương lớn và hiệu ứng suy yếu lên kẻ thù.</p>', 4, 'Chiến binh long tộc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `map`
--
ALTER TABLE `map`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tuong`
--
ALTER TABLE `tuong`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `map`
--
ALTER TABLE `map`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tuong`
--
ALTER TABLE `tuong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
