-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2021 at 05:30 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_thypestor`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_design`
--

CREATE TABLE `db_design` (
  `id` varchar(50) NOT NULL,
  `bg_color_login` text NOT NULL,
  `bg_img_login` text NOT NULL,
  `ukuran_logo_login` text NOT NULL,
  `color_footer` text NOT NULL,
  `color_btn_login` text NOT NULL,
  `bg_btn_login` text NOT NULL,
  `bg_btn_login_hover` text NOT NULL,
  `bg_notifikasi_valid` text NOT NULL,
  `color_notifikasi_valid` text NOT NULL,
  `bg_notifikasi_invalid` text NOT NULL,
  `color_notifikasi_invalid` text NOT NULL,
  `bg_loader` text NOT NULL,
  `waktu_loader` text NOT NULL,
  `form_bg_judul` text NOT NULL,
  `form_bg_body` text NOT NULL,
  `bg_body` text NOT NULL,
  `bg_menu` text NOT NULL,
  `color_dasar` text NOT NULL,
  `bg_dasar` text NOT NULL,
  `hover_bg_dasar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_design`
--

INSERT INTO `db_design` (`id`, `bg_color_login`, `bg_img_login`, `ukuran_logo_login`, `color_footer`, `color_btn_login`, `bg_btn_login`, `bg_btn_login_hover`, `bg_notifikasi_valid`, `color_notifikasi_valid`, `bg_notifikasi_invalid`, `color_notifikasi_invalid`, `bg_loader`, `waktu_loader`, `form_bg_judul`, `form_bg_body`, `bg_body`, `bg_menu`, `color_dasar`, `bg_dasar`, `hover_bg_dasar`) VALUES
('design', '#fafafa', '5830_bg-login.jpg', '140', '#495057', '#fff', '#f03c34', '#d8362f', '#4cc989', '#fff', '#d23636', '#fff', '#f03c34', '1000', '#989998', '#eee', '#f5f5f5', '#f7dfda', '#f03c34', '#f03c34', '#d8362f');

-- --------------------------------------------------------

--
-- Table structure for table `db_inventori`
--

CREATE TABLE `db_inventori` (
  `id` varchar(50) NOT NULL,
  `tanggal` datetime NOT NULL,
  `kategori` text NOT NULL,
  `produk` text NOT NULL,
  `stok` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_inventori`
--

INSERT INTO `db_inventori` (`id`, `tanggal`, `kategori`, `produk`, `stok`) VALUES
('PRD-000001', '0000-00-00 00:00:00', '', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `db_inventori_kategori`
--

CREATE TABLE `db_inventori_kategori` (
  `id` varchar(50) NOT NULL,
  `produk` text NOT NULL,
  `kategori` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `db_media`
--

CREATE TABLE `db_media` (
  `id` varchar(50) NOT NULL,
  `file` text NOT NULL,
  `tipe` text NOT NULL,
  `ukuran` text NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_media`
--

INSERT INTO `db_media` (`id`, `file`, `tipe`, `ukuran`, `tanggal`) VALUES
('img_000001', '4105_favicon.png', 'image/png', '4150', '2021-04-25 23:15:49'),
('img_000002', '518_logo.png', 'image/png', '10033', '2021-04-25 23:16:02'),
('img_000003', '8190_bg_login.jpg', 'image/jpeg', '60237', '2021-04-25 23:16:15'),
('img_000004', '5830_bg-login.jpg', 'image/jpeg', '832898', '2021-04-25 23:16:25');

-- --------------------------------------------------------

--
-- Table structure for table `db_pemasukan`
--

CREATE TABLE `db_pemasukan` (
  `username` varchar(50) NOT NULL,
  `id` varchar(50) NOT NULL,
  `tanggal` datetime NOT NULL,
  `produk` text NOT NULL,
  `harga` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `db_pengeluaran`
--

CREATE TABLE `db_pengeluaran` (
  `id` varchar(50) NOT NULL,
  `tanggal` datetime NOT NULL,
  `jenis` text NOT NULL,
  `jumlah` text NOT NULL,
  `keterangan` text NOT NULL,
  `metode` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `db_penjualan`
--

CREATE TABLE `db_penjualan` (
  `id` varchar(50) NOT NULL,
  `tanggal` datetime NOT NULL,
  `produk` text NOT NULL,
  `harga` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `db_usermanager`
--

CREATE TABLE `db_usermanager` (
  `tipe` text NOT NULL,
  `id` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `nama` text NOT NULL,
  `no_telp` text NOT NULL,
  `foto` text NOT NULL,
  `tgl_daftar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_usermanager`
--

INSERT INTO `db_usermanager` (`tipe`, `id`, `username`, `password`, `nama`, `no_telp`, `foto`, `tgl_daftar`) VALUES
('admin', 'admin', 'admin@admin.com', '50bd8c5697cba12aac4a242f15e44b8c', 'Admin', '0', '5524_favicon.png', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `db_website`
--

CREATE TABLE `db_website` (
  `tipe` varchar(50) NOT NULL,
  `url` text NOT NULL,
  `perusahaan` text NOT NULL,
  `tagline` text NOT NULL,
  `favicon` text NOT NULL,
  `logo` text NOT NULL,
  `telp_web` text NOT NULL,
  `email_web` text NOT NULL,
  `alamat_web` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_website`
--

INSERT INTO `db_website` (`tipe`, `url`, `perusahaan`, `tagline`, `favicon`, `logo`, `telp_web`, `email_web`, `alamat_web`) VALUES
('website', 'https://t-hypestor.com/', 'T-Hyperstor', 'Tagline T-Hyperstor', '4105_favicon.png', '518_logo.png', '0', 'mail@t-hypestor.com', 'Bandung');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_design`
--
ALTER TABLE `db_design`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_inventori`
--
ALTER TABLE `db_inventori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_inventori_kategori`
--
ALTER TABLE `db_inventori_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_media`
--
ALTER TABLE `db_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_pemasukan`
--
ALTER TABLE `db_pemasukan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_pengeluaran`
--
ALTER TABLE `db_pengeluaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_penjualan`
--
ALTER TABLE `db_penjualan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_usermanager`
--
ALTER TABLE `db_usermanager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_website`
--
ALTER TABLE `db_website`
  ADD PRIMARY KEY (`tipe`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
