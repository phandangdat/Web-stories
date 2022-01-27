SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE database webtruyen;
use webtruyen;
CREATE TABLE `admin` (
  `user` varchar(12) NOT NULL,
  `pass` varchar(12) NOT NULL,
  `email` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user`, `pass`, `email`) VALUES
('admin', 'admin', 'admin@gmail.com'),
('nhanma', 'nhanma', 'nhanma@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbltruyen`
--

CREATE TABLE `tbltruyen` (
  `id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `subtile` varchar(20) NOT NULL,
  `style` varchar(20) NOT NULL,
  `linkImg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbltruyen`
--

INSERT INTO `tbltruyen` (`id`, `title`, `subtile`, `style`, `linkImg`) VALUES
(2, 'A Bad Friend', 'Yeom', 'School life / Action', 'img/bac-kiem-giang-ho.jpg'),
(3, 'A Bad Friend', 'Yeom', 'School life / Action', 'img/chi-ton-toan-nang.jpg'),
(4, 'A Bad Friend', 'Yeom', 'School life / Action', 'img/chua-te-hoc-duong.jpg'),
(5, 'A Bad Friend', 'Yeom', 'School life / Action', 'img/dau-la-dai-luc.jpg'),
(6, 'A Bad Friend', 'Yeom', 'School life / Action', 'img/dice.jpg'),
(7, 'A Bad Friend', 'Yeom', 'School life / Action', 'img/dien-thoai-cua-ta-thong-tam-gioi.jpg'),
(8, 'A Bad Friend', 'Yeom', 'School life / Action', 'img/duong-dich-vi-hoan.jpg'),
(9, 'A Bad Friend', 'Yeom', 'School life / Action', 'img/het-nhu-han-quang-gap-nang-gat.jpg'),
(10, 'A Bad Friend', 'Yeom', 'School life / Action', 'img/ngao-thi-thien-dia.jpg'),
(11, 'A Bad Friend', 'Yeom', 'School life / Action', 'img/phap-su-khong-phep-thuat.jpg'),
(12, 'A Bad Friend', 'Yeom', 'School life / Action', 'img/than-vo-thien-ton.jpg'),
(13, 'A Bad Friend', 'Yeom', 'School life / Action', 'img/thau-thi-chi-nhan.jpg'),
(14, 'A Bad Friend', 'Yeom', 'School life / Action', 'img/thon-phe-vinh-hang.jpg'),
(15, 'A Bad Friend', 'Yeom', 'School life / Action', 'img/trong-sinh-dai-ngoan-gia.jpg'),
(16, 'A Bahh', 'Yeom', 'School life / Action', 'img/truong-hoc-sieu-anh-hung.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbltruyen`
--
ALTER TABLE `tbltruyen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbltruyen`
--
ALTER TABLE `tbltruyen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
