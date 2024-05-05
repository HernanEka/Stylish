-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2024 at 01:16 AM
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
-- Database: `stylish`
--

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `product_id` int(12) NOT NULL,
  `jumlah` int(12) NOT NULL,
  `total` int(12) NOT NULL,
  `ukuran` varchar(255) NOT NULL,
  `user_id` int(12) NOT NULL,
  `status` int(12) NOT NULL DEFAULT 1,
  `bukti` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `nama`, `deskripsi`, `harga`, `gambar`, `kategori`) VALUES
(1, 'Baju Koko Pria', 'Baju koko lengan pendek khusus pria', 45000, '59067646_baju koko pria.png', 'Pria'),
(2, 'Baju Gamis Muslim Wanita', 'Baju gamis wanita abaya', 100000, '986074229_BAJU-GAMIS-MUSLIM-WANITA-ABAYA.jpg', 'Wanita');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `level` int(11) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`, `no_hp`, `alamat`, `level`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', '081326265545', 'Purwokerto Utara, Banyumas', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
