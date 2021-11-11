-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2021 at 09:20 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `djynews`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(11) NOT NULL,
  `comment` varchar(250) NOT NULL,
  `id_news` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` enum('avail','delete') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id_invoice` int(11) NOT NULL,
  `id_subscription_history` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `id_paymentuser` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `metodepembayaran`
--

CREATE TABLE `metodepembayaran` (
  `id_payment` int(11) NOT NULL,
  `method_payment` enum('debit','credit') NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id_news` int(11) NOT NULL,
  `headline` varchar(50) NOT NULL,
  `story` text NOT NULL,
  `image` varchar(50) NOT NULL,
  `news_status` enum('Pending','Published','Cancelled','') NOT NULL,
  `total_read` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_news_category` int(11) NOT NULL,
  `id_rating` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `newscategory`
--

CREATE TABLE `newscategory` (
  `id_news_category` int(11) NOT NULL,
  `news_category` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaranuser`
--

CREATE TABLE `pembayaranuser` (
  `id_paymentuser` int(11) NOT NULL,
  `id_payment` int(11) NOT NULL,
  `status_payment` enum('pending','paid','cancelled') NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `penilaiannews`
--

CREATE TABLE `penilaiannews` (
  `id_rate_news` int(11) NOT NULL,
  `id_news` int(11) NOT NULL,
  `total_like` int(11) NOT NULL,
  `total_dislike` int(11) NOT NULL,
  `last_time_like` datetime NOT NULL,
  `last_time_dislike` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `penilaianuser`
--

CREATE TABLE `penilaianuser` (
  `id_rate_user` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_news` int(11) NOT NULL,
  `reaction` enum('like','dislike','neutral') NOT NULL,
  `reaction_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `id_subscription` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `susbcription_type` enum('normal','premium') NOT NULL,
  `subscription_start` datetime NOT NULL,
  `subscription_end` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subscriptionhistory`
--

CREATE TABLE `subscriptionhistory` (
  `id_subscription_history` int(11) NOT NULL,
  `id_subscription` int(11) NOT NULL,
  `subscription_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `user_level` enum('admin','reader','off_by_admin','off_by_reader') NOT NULL,
  `nama_depan` varchar(50) NOT NULL,
  `nama_belakang` varchar(50) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `id_subscription` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `id_news` (`id_news`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id_invoice`),
  ADD KEY `id_subscription_history` (`id_subscription_history`),
  ADD KEY `id_paymentuser` (`id_paymentuser`);

--
-- Indexes for table `metodepembayaran`
--
ALTER TABLE `metodepembayaran`
  ADD PRIMARY KEY (`id_payment`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_news_category` (`id_news_category`),
  ADD KEY `id_rating` (`id_rating`);

--
-- Indexes for table `newscategory`
--
ALTER TABLE `newscategory`
  ADD PRIMARY KEY (`id_news_category`);

--
-- Indexes for table `pembayaranuser`
--
ALTER TABLE `pembayaranuser`
  ADD PRIMARY KEY (`id_paymentuser`),
  ADD KEY `id_payment` (`id_payment`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `penilaiannews`
--
ALTER TABLE `penilaiannews`
  ADD PRIMARY KEY (`id_rate_news`),
  ADD KEY `id_news` (`id_news`);

--
-- Indexes for table `penilaianuser`
--
ALTER TABLE `penilaianuser`
  ADD PRIMARY KEY (`id_rate_user`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_news` (`id_news`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`id_subscription`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `subscriptionhistory`
--
ALTER TABLE `subscriptionhistory`
  ADD PRIMARY KEY (`id_subscription_history`),
  ADD KEY `id_subscription` (`id_subscription`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_subscription` (`id_subscription`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`id_news`) REFERENCES `news` (`id_news`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_ibfk_1` FOREIGN KEY (`id_subscription_history`) REFERENCES `subscriptionhistory` (`id_subscription_history`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `invoice_ibfk_2` FOREIGN KEY (`id_paymentuser`) REFERENCES `pembayaranuser` (`id_paymentuser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `news_ibfk_2` FOREIGN KEY (`id_news_category`) REFERENCES `newscategory` (`id_news_category`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pembayaranuser`
--
ALTER TABLE `pembayaranuser`
  ADD CONSTRAINT `pembayaranuser_ibfk_1` FOREIGN KEY (`id_payment`) REFERENCES `metodepembayaran` (`id_payment`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penilaiannews`
--
ALTER TABLE `penilaiannews`
  ADD CONSTRAINT `penilaiannews_ibfk_1` FOREIGN KEY (`id_news`) REFERENCES `news` (`id_news`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penilaianuser`
--
ALTER TABLE `penilaianuser`
  ADD CONSTRAINT `penilaianuser_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subscription`
--
ALTER TABLE `subscription`
  ADD CONSTRAINT `subscription_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
