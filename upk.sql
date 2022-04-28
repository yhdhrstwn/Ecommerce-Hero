-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2022 at 04:25 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `upk`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `Username` varchar(64) NOT NULL,
  `Email` varchar(64) NOT NULL,
  `Password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Username`, `Email`, `Password`) VALUES
(1, 'User testing', 'testing@gmail.com', '598d4c200461b81522a3328565c25f7c');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `ID` int(11) NOT NULL,
  `Id_admin` int(11) NOT NULL,
  `Nama_barang` varchar(64) DEFAULT NULL,
  `Stok_barang` int(11) DEFAULT NULL,
  `Harga_barang` decimal(10,0) DEFAULT NULL,
  `Kategori` varchar(100) DEFAULT NULL,
  `Jenis` varchar(100) DEFAULT NULL,
  `Deskripsi` varchar(333) DEFAULT NULL,
  `Gambar` text DEFAULT NULL,
  `dilihat` int(11) NOT NULL,
  `slug` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`ID`, `Id_admin`, `Nama_barang`, `Stok_barang`, `Harga_barang`, `Kategori`, `Jenis`, `Deskripsi`, `Gambar`, `dilihat`, `slug`) VALUES
(67, 1, 'swallow', 42, '300000', 'Pria', 'Sendal', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo temporibus porro esse incidunt omnis nulla, labore exercitationem! Incidunt enim nobis culpa sint, cumque sed asperiores, aliquid nam saepe cum doloremque! Dicta enim autem doloribus ex provident assumenda, corporis sit laborum possimus voluptatem optio reiciendis. Neces', './assets/images/upload/product/b2d8f74c1161431e0689843aa0b77f23.jpg', 4, 'swallow'),
(68, 1, 'Sendal pantai', 31, '50000', 'Pria', 'Sendal', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo temporibus porro esse incidunt omnis nulla, labore exercitationem! Incidunt enim nobis culpa sint, cumque sed asperiores, aliquid nam saepe cum doloremque! Dicta enim autem doloribus ex provident assumenda, corporis sit laborum possimus voluptatem optio reiciendis. Neces', './assets/images/upload/product/82a753f7fc5561f7b0d0a7c2471bed0e.jpg', 0, 'Sendal-pantai'),
(69, 1, 'Sendal gentel', 84, '125000', 'Pria', 'Sendal', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo temporibus porro esse incidunt omnis nulla, labore exercitationem! Incidunt enim nobis culpa sint, cumque sed asperiores, aliquid nam saepe cum doloremque! Dicta enim autem doloribus ex provident assumenda, corporis sit laborum possimus voluptatem optio reiciendis. Neces', './assets/images/upload/product/8c848866bb41667d20374573e363f89f.jpg', 3, 'Sendal-gentel'),
(70, 1, 'Kosmos', 15, '63000', 'Pria', 'Sendal', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo temporibus porro esse incidunt omnis nulla, labore exercitationem! Incidunt enim nobis culpa sint, cumque sed asperiores, aliquid nam saepe cum doloremque! Dicta enim autem doloribus ex provident assumenda, corporis sit laborum possimus voluptatem optio reiciendis. Neces', './assets/images/upload/product/b543776d4834acbaac1ccf07fdf49cae.jpg', 2, 'Kosmos'),
(71, 1, 'Oisu', 72, '85000', 'Pria', 'Sendal', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo temporibus porro esse incidunt omnis nulla, labore exercitationem! Incidunt enim nobis culpa sint, cumque sed asperiores, aliquid nam saepe cum doloremque! Dicta enim autem doloribus ex provident assumenda, corporis sit laborum possimus voluptatem optio reiciendis. Neces', './assets/images/upload/product/59488401887c0884236feb3e8ee5f0d8.jpg', 1, 'Oisu'),
(72, 1, 'Isoa', 26, '75000', 'Pria', 'Sendal', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo temporibus porro esse incidunt omnis nulla, labore exercitationem! Incidunt enim nobis culpa sint, cumque sed asperiores, aliquid nam saepe cum doloremque! Dicta enim autem doloribus ex provident assumenda, corporis sit laborum possimus voluptatem optio reiciendis. Neces', './assets/images/upload/product/6e0ebbe8f4787a6ce1e0cbe5aad43e84.jpg', 2, 'Isoa'),
(73, 1, 'Jausa', 61, '71000', 'Pria', 'Sendal', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo temporibus porro esse incidunt omnis nulla, labore exercitationem! Incidunt enim nobis culpa sint, cumque sed asperiores, aliquid nam saepe cum doloremque! Dicta enim autem doloribus ex provident assumenda, corporis sit laborum possimus voluptatem optio reiciendis. Neces', './assets/images/upload/product/ea2bb016877694002d8965f33f8270a6.jpg', 0, 'Jausa'),
(74, 1, 'Yaosi', 42, '98000', 'Pria', 'Sendal', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo temporibus porro esse incidunt omnis nulla, labore exercitationem! Incidunt enim nobis culpa sint, cumque sed asperiores, aliquid nam saepe cum doloremque! Dicta enim autem doloribus ex provident assumenda, corporis sit laborum possimus voluptatem optio reiciendis. Neces', './assets/images/upload/product/b8aa15dbb48e8397e8440208d46bd87c.jpg', 0, 'Yaosi'),
(75, 1, 'Koasah', 26, '86000', 'Pria', 'Sendal', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo temporibus porro esse incidunt omnis nulla, labore exercitationem! Incidunt enim nobis culpa sint, cumque sed asperiores, aliquid nam saepe cum doloremque! Dicta enim autem doloribus ex provident assumenda, corporis sit laborum possimus voluptatem optio reiciendis. Neces', './assets/images/upload/product/04b1c271b33188667ca7a7ba326ee26b.jpg', 0, 'Koasah'),
(76, 1, 'Qisua', 53, '78500', 'Pria', 'Sendal', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo temporibus porro esse incidunt omnis nulla, labore exercitationem! Incidunt enim nobis culpa sint, cumque sed asperiores, aliquid nam saepe cum doloremque! Dicta enim autem doloribus ex provident assumenda, corporis sit laborum possimus voluptatem optio reiciendis. Neces', './assets/images/upload/product/1866a2e2e12e230b8930978dacaf1ac0.jpg', 0, 'Qisua'),
(77, 1, 'Swallow', 52, '45000', 'Wanita', 'Sendal', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo temporibus porro esse incidunt omnis nulla, labore exercitationem! Incidunt enim nobis culpa sint, cumque sed asperiores, aliquid nam saepe cum doloremque! Dicta enim autem doloribus ex provident assumenda, corporis sit laborum possimus voluptatem optio reiciendis. Neces', './assets/images/upload/product/18f0e74d064f913074af8a9a3aaa7df9.jpg', 2, 'Swallow'),
(78, 1, 'Sendal feminim', 42, '79000', 'Wanita', 'Sendal', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo temporibus porro esse incidunt omnis nulla, labore exercitationem! Incidunt enim nobis culpa sint, cumque sed asperiores, aliquid nam saepe cum doloremque! Dicta enim autem doloribus ex provident assumenda, corporis sit laborum possimus voluptatem optio reiciendis. Neces', './assets/images/upload/product/1adc5fd5aca80c2ae0b7c40dd12eb463.jpg', 0, 'Sendal-feminim'),
(79, 1, 'Koai', 53, '64000', 'Wanita', 'Sendal', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo temporibus porro esse incidunt omnis nulla, labore exercitationem! Incidunt enim nobis culpa sint, cumque sed asperiores, aliquid nam saepe cum doloremque! Dicta enim autem doloribus ex provident assumenda, corporis sit laborum possimus voluptatem optio reiciendis. Neces', './assets/images/upload/product/512fd1d1798bd729eafc1d7812e7d69c.jpg', 0, 'Koai'),
(80, 1, 'Juai', 42, '69000', 'Wanita', 'Sendal', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo temporibus porro esse incidunt omnis nulla, labore exercitationem! Incidunt enim nobis culpa sint, cumque sed asperiores, aliquid nam saepe cum doloremque! Dicta enim autem doloribus ex provident assumenda, corporis sit laborum possimus voluptatem optio reiciendis. Neces', './assets/images/upload/product/43d97561269aac141415c882e9314558.jpg', 1, 'Juai'),
(81, 1, 'Hiao', 13, '60500', 'Wanita', 'Sendal', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo temporibus porro esse incidunt omnis nulla, labore exercitationem! Incidunt enim nobis culpa sint, cumque sed asperiores, aliquid nam saepe cum doloremque! Dicta enim autem doloribus ex provident assumenda, corporis sit laborum possimus voluptatem optio reiciendis. Neces', './assets/images/upload/product/b8ff6885837142137b3f2745905f3ccc.jpg', 0, 'Hiao'),
(82, 1, 'Juwe', 82, '79000', 'Wanita', 'Sendal', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo temporibus porro esse incidunt omnis nulla, labore exercitationem! Incidunt enim nobis culpa sint, cumque sed asperiores, aliquid nam saepe cum doloremque! Dicta enim autem doloribus ex provident assumenda, corporis sit laborum possimus voluptatem optio reiciendis. Neces', './assets/images/upload/product/5bac732027e84323fee8d9ad11f54a13.jpg', 0, 'Juwe'),
(83, 1, 'Jioa', 58, '58000', 'Wanita', 'Sendal', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo temporibus porro esse incidunt omnis nulla, labore exercitationem! Incidunt enim nobis culpa sint, cumque sed asperiores, aliquid nam saepe cum doloremque! Dicta enim autem doloribus ex provident assumenda, corporis sit laborum possimus voluptatem optio reiciendis. Neces', './assets/images/upload/product/cd7c25ff4dfc2af457caccb5c0a53de5.jpg', 0, 'Jioa'),
(84, 1, 'Yoau', 42, '97000', 'Wanita', 'Sendal', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo temporibus porro esse incidunt omnis nulla, labore exercitationem! Incidunt enim nobis culpa sint, cumque sed asperiores, aliquid nam saepe cum doloremque! Dicta enim autem doloribus ex provident assumenda, corporis sit laborum possimus voluptatem optio reiciendis. Neces', './assets/images/upload/product/85bb6d93f87f862e939eaafe267a0703.jpg', 0, 'Yoau'),
(85, 1, 'Jijo', 63, '88000', 'Wanita', 'Sendal', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo temporibus porro esse incidunt omnis nulla, labore exercitationem! Incidunt enim nobis culpa sint, cumque sed asperiores, aliquid nam saepe cum doloremque! Dicta enim autem doloribus ex provident assumenda, corporis sit laborum possimus voluptatem optio reiciendis. Neces', './assets/images/upload/product/00c77331880632a54d6b9830646ca986.jpg', 0, 'Jijo'),
(86, 1, 'Homipet', 49, '386000', 'Pria', 'Sepatu', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo temporibus porro esse incidunt omnis nulla, labore exercitationem! Incidunt enim nobis culpa sint, cumque sed asperiores, aliquid nam saepe cum doloremque! Dicta enim autem doloribus ex provident assumenda, corporis sit laborum possimus voluptatem optio reiciendis. Neces', './assets/images/upload/product/7c6a1e6b66fd1d1f863ecad66ec424a8.jpg', 0, 'Homipet'),
(87, 1, 'Koai', 53, '257000', 'Pria', 'Sepatu', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo temporibus porro esse incidunt omnis nulla, labore exercitationem! Incidunt enim nobis culpa sint, cumque sed asperiores, aliquid nam saepe cum doloremque! Dicta enim autem doloribus ex provident assumenda, corporis sit laborum possimus voluptatem optio reiciendis. Neces', './assets/images/upload/product/400946929869ca9410c23ff09c8b870d.jpg', 0, 'Koai'),
(88, 1, 'Nikel', 83, '420000', 'Pria', 'Sepatu', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo temporibus porro esse incidunt omnis nulla, labore exercitationem! Incidunt enim nobis culpa sint, cumque sed asperiores, aliquid nam saepe cum doloremque! Dicta enim autem doloribus ex provident assumenda, corporis sit laborum possimus voluptatem optio reiciendis. Neces', './assets/images/upload/product/b409fa1f323fcadd7c848d26696887c0.jpg', 0, 'Nikel'),
(89, 1, 'Ardiles Ori', 71, '629000', 'Pria', 'Sepatu', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo temporibus porro esse incidunt omnis nulla, labore exercitationem! Incidunt enim nobis culpa sint, cumque sed asperiores, aliquid nam saepe cum doloremque! Dicta enim autem doloribus ex provident assumenda, corporis sit laborum possimus voluptatem optio reiciendis. Neces', './assets/images/upload/product/b218b82dd3d2d52f5b219cd0e9774ff5.jpg', 0, 'Ardiles-Ori'),
(90, 1, 'Snikers', 37, '510000', 'Pria', 'Sepatu', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo temporibus porro esse incidunt omnis nulla, labore exercitationem! Incidunt enim nobis culpa sint, cumque sed asperiores, aliquid nam saepe cum doloremque! Dicta enim autem doloribus ex provident assumenda, corporis sit laborum possimus voluptatem optio reiciendis. Neces', './assets/images/upload/product/32dc9dda1fc8b5d80adcb72041e852dd.jpg', 0, 'Snikers'),
(91, 1, 'Adidas', 19, '493000', 'Pria', 'Sepatu', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo temporibus porro esse incidunt omnis nulla, labore exercitationem! Incidunt enim nobis culpa sint, cumque sed asperiores, aliquid nam saepe cum doloremque! Dicta enim autem doloribus ex provident assumenda, corporis sit laborum possimus voluptatem optio reiciendis. Neces', './assets/images/upload/product/35a0925e48759e082b193f049b85f7c8.jpg', 0, 'Adidas'),
(92, 1, 'ProaTT', 48, '394000', 'Pria', 'Sepatu', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo temporibus porro esse incidunt omnis nulla, labore exercitationem! Incidunt enim nobis culpa sint, cumque sed asperiores, aliquid nam saepe cum doloremque! Dicta enim autem doloribus ex provident assumenda, corporis sit laborum possimus voluptatem optio reiciendis. Neces', './assets/images/upload/product/f9d11b1293bc27d89e3a9b252e92f183.jpg', 0, 'ProaTT'),
(93, 1, 'Ijose', 32, '412000', 'Pria', 'Sepatu', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo temporibus porro esse incidunt omnis nulla, labore exercitationem! Incidunt enim nobis culpa sint, cumque sed asperiores, aliquid nam saepe cum doloremque! Dicta enim autem doloribus ex provident assumenda, corporis sit laborum possimus voluptatem optio reiciendis. Neces', './assets/images/upload/product/7f7b3efc8ddb976b640e5192c7a597c8.jpg', 1, 'Ijose'),
(94, 1, 'Plaxa', 13, '395000', 'Pria', 'Sepatu', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo temporibus porro esse incidunt omnis nulla, labore exercitationem! Incidunt enim nobis culpa sint, cumque sed asperiores, aliquid nam saepe cum doloremque! Dicta enim autem doloribus ex provident assumenda, corporis sit laborum possimus voluptatem optio reiciendis. Neces', './assets/images/upload/product/b0de4276fe687ccb1aa4ce4b66aa49f8.jpg', 0, 'Plaxa'),
(95, 1, 'Palae', 62, '752000', 'Pria', 'Sepatu', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo temporibus porro esse incidunt omnis nulla, labore exercitationem! Incidunt enim nobis culpa sint, cumque sed asperiores, aliquid nam saepe cum doloremque! Dicta enim autem doloribus ex provident assumenda, corporis sit laborum possimus voluptatem optio reiciendis. Neces', './assets/images/upload/product/7f9e52bbad1a587786c3257b34671569.jpg', 0, 'Palae'),
(96, 1, 'Pumar', 25, '405000', 'Wanita', 'Sepatu', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo temporibus porro esse incidunt omnis nulla, labore exercitationem! Incidunt enim nobis culpa sint, cumque sed asperiores, aliquid nam saepe cum doloremque! Dicta enim autem doloribus ex provident assumenda, corporis sit laborum possimus voluptatem optio reiciendis. Neces', './assets/images/upload/product/7b5b882e592d69d19bbe397ca3e59da7.jpg', 0, 'Pumar'),
(97, 1, 'Opaya', 52, '492000', 'Wanita', 'Sepatu', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo temporibus porro esse incidunt omnis nulla, labore exercitationem! Incidunt enim nobis culpa sint, cumque sed asperiores, aliquid nam saepe cum doloremque! Dicta enim autem doloribus ex provident assumenda, corporis sit laborum possimus voluptatem optio reiciendis. Neces', './assets/images/upload/product/1d04a5f801a4f981313fcf64525fb2f1.jpg', 0, 'Opaya'),
(98, 1, 'Rose', 53, '750000', 'Wanita', 'Sepatu', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo temporibus porro esse incidunt omnis nulla, labore exercitationem! Incidunt enim nobis culpa sint, cumque sed asperiores, aliquid nam saepe cum doloremque! Dicta enim autem doloribus ex provident assumenda, corporis sit laborum possimus voluptatem optio reiciendis. Neces', './assets/images/upload/product/067e83cbc2be0e4b7807984e8ff1f56f.jpg', 0, 'Rose'),
(99, 1, 'Wiao', 42, '690000', 'Wanita', 'Sepatu', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo temporibus porro esse incidunt omnis nulla, labore exercitationem! Incidunt enim nobis culpa sint, cumque sed asperiores, aliquid nam saepe cum doloremque! Dicta enim autem doloribus ex provident assumenda, corporis sit laborum possimus voluptatem optio reiciendis. Neces', './assets/images/upload/product/2a724385f3c3a2851f24882318ebbc15.jpg', 0, 'Wiao'),
(100, 1, 'Uyasi', 51, '742000', 'Wanita', 'Sepatu', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo temporibus porro esse incidunt omnis nulla, labore exercitationem! Incidunt enim nobis culpa sint, cumque sed asperiores, aliquid nam saepe cum doloremque! Dicta enim autem doloribus ex provident assumenda, corporis sit laborum possimus voluptatem optio reiciendis. Neces', './assets/images/upload/product/2dc39a2b5a600a8f67a1bde7e497cf24.jpg', 0, 'Uyasi'),
(101, 1, 'Yakiniku', 41, '659000', 'Wanita', 'Sepatu', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo temporibus porro esse incidunt omnis nulla, labore exercitationem! Incidunt enim nobis culpa sint, cumque sed asperiores, aliquid nam saepe cum doloremque! Dicta enim autem doloribus ex provident assumenda, corporis sit laborum possimus voluptatem optio reiciendis. Neces', './assets/images/upload/product/c920cab55e77ba7e744700bfbd02dd4b.jpg', 0, 'Yakiniku'),
(102, 1, 'Huawai', 59, '831000', 'Wanita', 'Sepatu', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo temporibus porro esse incidunt omnis nulla, labore exercitationem! Incidunt enim nobis culpa sint, cumque sed asperiores, aliquid nam saepe cum doloremque! Dicta enim autem doloribus ex provident assumenda, corporis sit laborum possimus voluptatem optio reiciendis. Neces', './assets/images/upload/product/55cfb3147aa38e84b6d17709e4b29eb9.jpg', 0, 'Huawai'),
(103, 1, 'Thusi', 54, '320000', 'Wanita', 'Sepatu', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo temporibus porro esse incidunt omnis nulla, labore exercitationem! Incidunt enim nobis culpa sint, cumque sed asperiores, aliquid nam saepe cum doloremque! Dicta enim autem doloribus ex provident assumenda, corporis sit laborum possimus voluptatem optio reiciendis. Neces', './assets/images/upload/product/99336feb305cf59b3fe3171e207acfe3.jpg', 1, 'Thusi'),
(104, 1, 'Yisao', 46, '419000', 'Wanita', 'Sepatu', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo temporibus porro esse incidunt omnis nulla, labore exercitationem! Incidunt enim nobis culpa sint, cumque sed asperiores, aliquid nam saepe cum doloremque! Dicta enim autem doloribus ex provident assumenda, corporis sit laborum possimus voluptatem optio reiciendis. Neces', './assets/images/upload/product/47dda9081c18e131e06dccaa143f26d0.jpg', 0, 'Yisao'),
(105, 1, 'Tidau', 52, '451000', 'Wanita', 'Sepatu', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo temporibus porro esse incidunt omnis nulla, labore exercitationem! Incidunt enim nobis culpa sint, cumque sed asperiores, aliquid nam saepe cum doloremque! Dicta enim autem doloribus ex provident assumenda, corporis sit laborum possimus voluptatem optio reiciendis. Neces', './assets/images/upload/product/c83f3d587686f626fa15e202b521417a.jpg', 0, 'Tidau'),
(106, 1, 'Esata', 41, '642000', 'Pria', 'Sendal Sepatu', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo temporibus porro esse incidunt omnis nulla, labore exercitationem! Incidunt enim nobis culpa sint, cumque sed asperiores, aliquid nam saepe cum doloremque! Dicta enim autem doloribus ex provident assumenda, corporis sit laborum possimus voluptatem optio reiciendis. Neces', './assets/images/upload/product/197ef724570c8089000cab9a8b63d164.jpg', 0, 'Esata'),
(107, 1, 'Guasai', 41, '531000', 'Pria', 'Sendal Sepatu', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo temporibus porro esse incidunt omnis nulla, labore exercitationem! Incidunt enim nobis culpa sint, cumque sed asperiores, aliquid nam saepe cum doloremque! Dicta enim autem doloribus ex provident assumenda, corporis sit laborum possimus voluptatem optio reiciendis. Neces', './assets/images/upload/product/52d95fe25c3a58f149e87d925aa58bd6.jpg', 0, 'Guasai'),
(108, 1, 'Podai', 35, '644000', 'Pria', 'Sendal Sepatu', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo temporibus porro esse incidunt omnis nulla, labore exercitationem! Incidunt enim nobis culpa sint, cumque sed asperiores, aliquid nam saepe cum doloremque! Dicta enim autem doloribus ex provident assumenda, corporis sit laborum possimus voluptatem optio reiciendis. Neces', './assets/images/upload/product/618f03717ecd63142491eb44804d7e01.jpg', 0, 'Podai'),
(109, 1, 'Yado', 48, '642000', 'Pria', 'Sendal Sepatu', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo temporibus porro esse incidunt omnis nulla, labore exercitationem! Incidunt enim nobis culpa sint, cumque sed asperiores, aliquid nam saepe cum doloremque! Dicta enim autem doloribus ex provident assumenda, corporis sit laborum possimus voluptatem optio reiciendis. Neces', './assets/images/upload/product/f508ba06b524e1f9114953c6ff7c97da.jpg', 0, 'Yado'),
(110, 1, 'Rora', 57, '541000', 'Pria', 'Sendal Sepatu', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo temporibus porro esse incidunt omnis nulla, labore exercitationem! Incidunt enim nobis culpa sint, cumque sed asperiores, aliquid nam saepe cum doloremque! Dicta enim autem doloribus ex provident assumenda, corporis sit laborum possimus voluptatem optio reiciendis. Neces', './assets/images/upload/product/1cf4ef73437d5e5c60cf967eee57ec1f.jpg', 0, 'Rora'),
(111, 1, 'Poya', 49, '531000', 'Pria', 'Sendal Sepatu', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo temporibus porro esse incidunt omnis nulla, labore exercitationem! Incidunt enim nobis culpa sint, cumque sed asperiores, aliquid nam saepe cum doloremque! Dicta enim autem doloribus ex provident assumenda, corporis sit laborum possimus voluptatem optio reiciendis. Neces', './assets/images/upload/product/d740a51238e0fd1282cf3a54e9ef3b25.jpg', 0, 'Poya'),
(112, 1, 'Tsoda', 53, '469000', 'Pria', 'Sendal Sepatu', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo temporibus porro esse incidunt omnis nulla, labore exercitationem! Incidunt enim nobis culpa sint, cumque sed asperiores, aliquid nam saepe cum doloremque! Dicta enim autem doloribus ex provident assumenda, corporis sit laborum possimus voluptatem optio reiciendis. Neces', './assets/images/upload/product/e691b8ef50096050cadcd3212e8b8eb4.jpg', 0, 'Tsoda'),
(113, 1, 'Yidao', 52, '752000', 'Pria', 'Sendal Sepatu', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo temporibus porro esse incidunt omnis nulla, labore exercitationem! Incidunt enim nobis culpa sint, cumque sed asperiores, aliquid nam saepe cum doloremque! Dicta enim autem doloribus ex provident assumenda, corporis sit laborum possimus voluptatem optio reiciendis. Neces', './assets/images/upload/product/9c1b8c4604acc60aa7c772a27c37b769.jpg', 0, 'Yidao'),
(114, 1, 'Yoasi', 64, '429000', 'Pria', 'Sendal Sepatu', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo temporibus porro esse incidunt omnis nulla, labore exercitationem! Incidunt enim nobis culpa sint, cumque sed asperiores, aliquid nam saepe cum doloremque! Dicta enim autem doloribus ex provident assumenda, corporis sit laborum possimus voluptatem optio reiciendis. Neces', './assets/images/upload/product/ed8fb57cef87f74671eace0b18f86ece.jpg', 0, 'Yoasi'),
(115, 1, 'Yoasi', 64, '429000', 'Pria', 'Sendal Sepatu', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo temporibus porro esse incidunt omnis nulla, labore exercitationem! Incidunt enim nobis culpa sint, cumque sed asperiores, aliquid nam saepe cum doloremque! Dicta enim autem doloribus ex provident assumenda, corporis sit laborum possimus voluptatem optio reiciendis. Neces', './assets/images/upload/product/494e3fa476a3d21fc9800e45f8b7e9fc.jpg', 0, 'Yoasi'),
(116, 1, 'Diaso', 49, '530000', 'Pria', 'Sendal Sepatu', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo temporibus porro esse incidunt omnis nulla, labore exercitationem! Incidunt enim nobis culpa sint, cumque sed asperiores, aliquid nam saepe cum doloremque! Dicta enim autem doloribus ex provident assumenda, corporis sit laborum possimus voluptatem optio reiciendis. Neces', './assets/images/upload/product/4812e3abe04d7cec8b26c6215c87158b.jpg', 0, 'Diaso'),
(117, 1, 'Peday', 48, '539000', 'Wanita', 'Sendal Sepatu', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo temporibus porro esse incidunt omnis nulla, labore exercitationem! Incidunt enim nobis culpa sint, cumque sed asperiores, aliquid nam saepe cum doloremque! Dicta enim autem doloribus ex provident assumenda, corporis sit laborum possimus voluptatem optio reiciendis. Neces', './assets/images/upload/product/98188512553eac58e90aec1cc883663e.jpg', 0, 'Peday'),
(118, 1, 'Daudi', 20, '469000', 'Wanita', 'Sendal Sepatu', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo temporibus porro esse incidunt omnis nulla, labore exercitationem! Incidunt enim nobis culpa sint, cumque sed asperiores, aliquid nam saepe cum doloremque! Dicta enim autem doloribus ex provident assumenda, corporis sit laborum possimus voluptatem optio reiciendis. Neces', './assets/images/upload/product/da46aff62b3690d743ef47cc34373a93.jpg', 0, 'Daudi'),
(119, 1, 'Osuya', 46, '520500', 'Wanita', 'Sendal Sepatu', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo temporibus porro esse incidunt omnis nulla, labore exercitationem! Incidunt enim nobis culpa sint, cumque sed asperiores, aliquid nam saepe cum doloremque! Dicta enim autem doloribus ex provident assumenda, corporis sit laborum possimus voluptatem optio reiciendis. Neces', './assets/images/upload/product/0ac5e47d3d5350471a665275913648f8.jpg', 3, 'Osuya'),
(120, 1, 'Casdi', 42, '620900', 'Wanita', 'Sendal Sepatu', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo temporibus porro esse incidunt omnis nulla, labore exercitationem! Incidunt enim nobis culpa sint, cumque sed asperiores, aliquid nam saepe cum doloremque! Dicta enim autem doloribus ex provident assumenda, corporis sit laborum possimus voluptatem optio reiciendis. Neces', './assets/images/upload/product/68d95cd9ee7bfe7b06b6120e554f25d3.jpg', 0, 'Casdi'),
(121, 1, 'Udafa', 52, '487000', 'Wanita', 'Sendal Sepatu', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo temporibus porro esse incidunt omnis nulla, labore exercitationem! Incidunt enim nobis culpa sint, cumque sed asperiores, aliquid nam saepe cum doloremque! Dicta enim autem doloribus ex provident assumenda, corporis sit laborum possimus voluptatem optio reiciendis. Neces', './assets/images/upload/product/45d17252ff462a62d90538bd633e6f90.jpg', 1, 'Udafa'),
(122, 1, 'Rado', 42, '542000', 'Wanita', 'Sendal Sepatu', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo temporibus porro esse incidunt omnis nulla, labore exercitationem! Incidunt enim nobis culpa sint, cumque sed asperiores, aliquid nam saepe cum doloremque! Dicta enim autem doloribus ex provident assumenda, corporis sit laborum possimus voluptatem optio reiciendis. Neces', './assets/images/upload/product/a00e285465e9ec01d0a3c36c485a0c07.jpg', 0, 'Rado'),
(123, 1, 'Edas', 54, '427000', 'Wanita', 'Sendal Sepatu', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo temporibus porro esse incidunt omnis nulla, labore exercitationem! Incidunt enim nobis culpa sint, cumque sed asperiores, aliquid nam saepe cum doloremque! Dicta enim autem doloribus ex provident assumenda, corporis sit laborum possimus voluptatem optio reiciendis. Neces', './assets/images/upload/product/272da2a93c8a249f83dc2d690d8e1e49.jpg', 0, 'Edas'),
(124, 1, 'Tchuai', 46, '604200', 'Wanita', 'Sendal Sepatu', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo temporibus porro esse incidunt omnis nulla, labore exercitationem! Incidunt enim nobis culpa sint, cumque sed asperiores, aliquid nam saepe cum doloremque! Dicta enim autem doloribus ex provident assumenda, corporis sit laborum possimus voluptatem optio reiciendis. Neces', './assets/images/upload/product/6451f8fdaade7dc344f9ab53071b89ac.jpg', 0, 'Tchuai'),
(125, 1, 'Lodai', 51, '460420', 'Wanita', 'Sendal Sepatu', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo temporibus porro esse incidunt omnis nulla, labore exercitationem! Incidunt enim nobis culpa sint, cumque sed asperiores, aliquid nam saepe cum doloremque! Dicta enim autem doloribus ex provident assumenda, corporis sit laborum possimus voluptatem optio reiciendis. Neces', './assets/images/upload/product/d00ecaa3badf40de7895b201e6b895ed.jpg', 2, 'Lodai'),
(126, 1, 'Uxia', 72, '639000', 'Wanita', 'Sendal Sepatu', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo temporibus porro esse incidunt omnis nulla, labore exercitationem! Incidunt enim nobis culpa sint, cumque sed asperiores, aliquid nam saepe cum doloremque! Dicta enim autem doloribus ex provident assumenda, corporis sit laborum possimus voluptatem optio reiciendis. Neces', './assets/images/upload/product/28c6356c3fe6a4a65c989e4657f8f4bc.jpg', 2, 'Uxia');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `ID` int(11) NOT NULL,
  `Id_barang` int(11) NOT NULL,
  `Jumlah` int(11) NOT NULL,
  `Id_pengguna` int(11) NOT NULL,
  `Size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gambar_barang`
--

CREATE TABLE `gambar_barang` (
  `ID` int(11) NOT NULL,
  `Nama` varchar(64) DEFAULT NULL,
  `Gambar` text DEFAULT NULL,
  `Title` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gambar_barang`
--

INSERT INTO `gambar_barang` (`ID`, `Nama`, `Gambar`, `Title`) VALUES
(36, 'Sendal Sepatu', './assets/images/upload/bahan/8792980c6f326bb05e72c2466499adc5.jpg', 'Slider'),
(37, 'Sepatu', './assets/images/upload/bahan/e4b9a459b67bb55ca567e63fcb1c9738.jpg', 'Slider'),
(38, 'Sendal', './assets/images/upload/bahan/021cb276cdcef194dbff4ec611e44f8d.jpg', 'Slider'),
(39, 'Kontak', './assets/images/upload/bahan/925d21ce4214fb68212e0f548ddc1192.jpg', 'Jumbotron'),
(40, 'Tentang kami', './assets/images/upload/bahan/405a91383d2720abb42f8d3c97a5cd3e.jpg', 'Jumbotron'),
(41, 'Produk', './assets/images/upload/bahan/c0eead9725496ce60b8f85577dbd3643.jpg', 'Jumbotron'),
(42, 'Pria', './assets/images/upload/bahan/181eb4b0f49d3d26f5a68919ef4de273.jpg', 'Gender'),
(43, 'Wanita', './assets/images/upload/bahan/b24b97396453aa7678ba20bb2fe5766e.jpg', 'Gender');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_bank`
--

CREATE TABLE `jenis_bank` (
  `ID` int(11) NOT NULL,
  `bank` varchar(64) NOT NULL,
  `rek` varchar(64) NOT NULL,
  `an` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_bank`
--

INSERT INTO `jenis_bank` (`ID`, `bank`, `rek`, `an`) VALUES
(3, 'BRI', '01234567891', 'Yehuda'),
(4, 'BCA', '0987654321987', 'Hero'),
(5, 'MANDIRI', '017561835483', 'Setiawan');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `ID` int(11) NOT NULL,
  `Nama_lengkap` varchar(64) NOT NULL,
  `Email` varchar(64) NOT NULL,
  `No_HP` int(11) NOT NULL,
  `Pesan` text NOT NULL,
  `Gambar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`ID`, `Nama_lengkap`, `Email`, `No_HP`, `Pesan`, `Gambar`) VALUES
(22, 'kamu aja', 'kamu@gmail.com', 2147483647, 'Mau kasih masukan buat admin,nanti adain ganti foto profilenya', './admin/assets/images/upload/komen/dfecd379dc15e447aa8dfd7069facb93.png');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `ID` int(11) NOT NULL,
  `Id_pengguna` int(11) NOT NULL,
  `Id_pembelian` int(11) NOT NULL,
  `Gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`ID`, `Id_pengguna`, `Id_pembelian`, `Gambar`) VALUES
(83, 13, 86, './admin/assets/images/upload/bayar/4eb83df3fb9b70439087e39c14f219c3.jpg'),
(84, 14, 87, './admin/assets/images/upload/bayar/f29ec3a4baa83354741c4e09dfb38460.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `ID` int(11) NOT NULL,
  `Id_pengguna` int(11) NOT NULL,
  `Kode` varchar(64) NOT NULL,
  `Total` decimal(10,0) DEFAULT NULL,
  `Status` varchar(64) NOT NULL,
  `Note` text NOT NULL,
  `tanggal_beli` date DEFAULT NULL,
  `Gambar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`ID`, `Id_pengguna`, `Kode`, `Total`, `Status`, `Note`, `tanggal_beli`, `Gambar`) VALUES
(86, 13, 'P-2022042804173213-1', '425000', 'success', 'Barang dikemas', '2022-04-28', './assets/images/upload/transfer/268cdb307eb3ddf0dfd39ec70d22ac70.jpg'),
(87, 14, 'P-2022042804195214-2', '639000', 'failed', 'Barang habis!', '2022-04-28', './assets/images/upload/transfer/3bd503331521aeedf0d1079f12c98130.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_detail`
--

CREATE TABLE `pembelian_detail` (
  `ID` int(11) NOT NULL,
  `Id_pembelian` int(11) NOT NULL,
  `Id_barang` int(11) NOT NULL,
  `Jumlah` int(11) NOT NULL,
  `Size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembelian_detail`
--

INSERT INTO `pembelian_detail` (`ID`, `Id_pembelian`, `Id_barang`, `Jumlah`, `Size`) VALUES
(71, 86, 67, 1, 41),
(72, 86, 69, 1, 41),
(73, 87, 126, 1, 38);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `ID` int(11) NOT NULL,
  `Username` varchar(64) NOT NULL,
  `Nama_lengkap` varchar(64) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `No_HP` varchar(20) NOT NULL,
  `Email` varchar(64) NOT NULL,
  `Password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`ID`, `Username`, `Nama_lengkap`, `Alamat`, `No_HP`, `Email`, `Password`) VALUES
(13, 'akusiapa', 'siapa aja banh', 'di indonesa', '80192819373', 'aku@gmail.com', '202cb962ac59075b964b07152d234b70'),
(14, 'kamu siapa', 'kamu aja', 'di luar indonesia', '081927838217', 'kamu@gmail.com', 'caf1a3dfb505ffed0d024130f58c5cfa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Id_admin` (`Id_admin`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `gambar_barang`
--
ALTER TABLE `gambar_barang`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `jenis_bank`
--
ALTER TABLE `jenis_bank`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Id_pengguna` (`Id_pengguna`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Id_pengguna` (`Id_pengguna`);

--
-- Indexes for table `pembelian_detail`
--
ALTER TABLE `pembelian_detail`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `gambar_barang`
--
ALTER TABLE `gambar_barang`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `jenis_bank`
--
ALTER TABLE `jenis_bank`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `pembelian_detail`
--
ALTER TABLE `pembelian_detail`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`Id_admin`) REFERENCES `admin` (`ID`);

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`Id_pengguna`) REFERENCES `pengguna` (`ID`);

--
-- Constraints for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `pembelian_ibfk_3` FOREIGN KEY (`Id_pengguna`) REFERENCES `pengguna` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
