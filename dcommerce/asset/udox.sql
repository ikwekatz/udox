-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 01, 2021 at 05:20 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `udox`
--

-- --------------------------------------------------------

--
-- Table structure for table `activation_db`
--

CREATE TABLE `activation_db` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `address_db`
--

CREATE TABLE `address_db` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pNumber` varchar(16) NOT NULL,
  `pinCode` varchar(16) NOT NULL,
  `country` varchar(255) NOT NULL,
  `Region` varchar(255) DEFAULT NULL,
  `disc` varchar(255) DEFAULT NULL,
  `ward` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admin_db`
--

CREATE TABLE `admin_db` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `active` varchar(255) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `buyer_db`
--

CREATE TABLE `buyer_db` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `paymentM` varchar(255) DEFAULT NULL,
  `shopPin` varchar(255) DEFAULT NULL,
  `shipPin` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `buyhabit`
--

CREATE TABLE `buyhabit` (
  `id` int(11) NOT NULL,
  `idp` int(11) NOT NULL,
  `nums` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `categoryName` varchar(255) NOT NULL,
  `categoryD` varchar(255) DEFAULT NULL,
  `creationDate` varchar(255) NOT NULL,
  `updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `expenseDate` varchar(255) NOT NULL,
  `expenseItem` varchar(255) NOT NULL,
  `noteDate` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `exa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orderTracking`
--

CREATE TABLE `orderTracking` (
  `id` int(11) NOT NULL,
  `ido` int(11) NOT NULL,
  `detail` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_db`
--

CREATE TABLE `order_db` (
  `id` int(11) NOT NULL,
  `idp` int(11) NOT NULL,
  `idb` int(11) NOT NULL,
  `orderStatus` varchar(255) NOT NULL,
  `remark` varchar(255) NOT NULL,
  `postingDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pdel`
--

CREATE TABLE `pdel` (
  `id` int(11) NOT NULL,
  `idp` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `poductd`
--

CREATE TABLE `poductd` (
  `id` int(11) NOT NULL,
  `idp` int(11) NOT NULL,
  `descr` varchar(4000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pReview`
--

CREATE TABLE `pReview` (
  `id` int(11) NOT NULL,
  `idb` int(11) NOT NULL,
  `idp` int(11) NOT NULL,
  `quality` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `summary` varchar(255) DEFAULT NULL,
  `reviewDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE `price` (
  `id` int(11) NOT NULL,
  `idp` int(11) NOT NULL,
  `priceb` varchar(255) NOT NULL,
  `pricea` varchar(255) NOT NULL,
  `shipcharge` varchar(255) NOT NULL,
  `pricest` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `id2` int(11) NOT NULL,
  `idc` int(11) NOT NULL,
  `ids` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `pCompany` int(255) DEFAULT NULL,
  `postingDate` varchar(255) NOT NULL,
  `updationDate` varchar(255) DEFAULT NULL,
  `idst` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `productp`
--

CREATE TABLE `productp` (
  `id` int(11) NOT NULL,
  `idp` int(11) NOT NULL,
  `photo1` varchar(255) DEFAULT NULL,
  `photo2` varchar(255) DEFAULT NULL,
  `photo3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `productq`
--

CREATE TABLE `productq` (
  `id` int(11) NOT NULL,
  `idp` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `productst`
--

CREATE TABLE `productst` (
  `id` int(11) NOT NULL,
  `idp` int(11) NOT NULL,
  `state` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pVoucher`
--

CREATE TABLE `pVoucher` (
  `id` int(11) NOT NULL,
  `idst` int(11) NOT NULL,
  `idb` int(11) NOT NULL,
  `reason` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reviewimg`
--

CREATE TABLE `reviewimg` (
  `id` int(11) NOT NULL,
  `idr` int(11) NOT NULL,
  `img1` varchar(255) DEFAULT NULL,
  `img2` varchar(255) DEFAULT NULL,
  `img3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sellerb_db`
--

CREATE TABLE `sellerb_db` (
  `id` int(11) NOT NULL,
  `id2` int(11) NOT NULL,
  `bName` varchar(255) NOT NULL,
  `acName` varchar(255) DEFAULT NULL,
  `bAddress` varchar(255) NOT NULL,
  `acNo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sellerd`
--

CREATE TABLE `sellerd` (
  `id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seller_db`
--

CREATE TABLE `seller_db` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `bLicence` varchar(255) NOT NULL,
  `taxid` varchar(255) NOT NULL,
  `unicId` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `simgcred`
--

CREATE TABLE `simgcred` (
  `id` int(11) NOT NULL,
  `id2` int(11) NOT NULL,
  `file1V` varchar(255) NOT NULL,
  `file2B` varchar(255) NOT NULL,
  `idtype` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `storef_db`
--

CREATE TABLE `storef_db` (
  `id` int(11) NOT NULL,
  `ids` int(11) NOT NULL,
  `idb` int(11) DEFAULT NULL,
  `reaction` int(11) DEFAULT NULL,
  `view` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `store_db`
--

CREATE TABLE `store_db` (
  `id` int(11) NOT NULL,
  `id2` int(11) NOT NULL,
  `storeName` varchar(255) NOT NULL,
  `id1` int(11) DEFAULT NULL,
  `id23` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subCategory_db`
--

CREATE TABLE `subCategory_db` (
  `id` int(11) NOT NULL,
  `id2` int(11) NOT NULL,
  `subcategoryName` varchar(255) NOT NULL,
  `subcategoryD` varchar(255) DEFAULT NULL,
  `creationDate` varchar(255) NOT NULL,
  `updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `userfile_db`
--

CREATE TABLE `userfile_db` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `picture` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `userLog`
--

CREATE TABLE `userLog` (
  `Id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `loginTime` varchar(255) NOT NULL,
  `logoutTime` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `action` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_db`
--

CREATE TABLE `user_db` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `regDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updationDate` varchar(255) DEFAULT NULL,
  `activation` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `postingDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activation_db`
--
ALTER TABLE `activation_db`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `address_db`
--
ALTER TABLE `address_db`
  ADD PRIMARY KEY (`id`),
  ADD KEY `address_db_ibfk_1` (`email`);

--
-- Indexes for table `admin_db`
--
ALTER TABLE `admin_db`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_db_ibfk_1` (`email`);

--
-- Indexes for table `buyer_db`
--
ALTER TABLE `buyer_db`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `buyhabit`
--
ALTER TABLE `buyhabit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idp` (`idp`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `orderTracking`
--
ALTER TABLE `orderTracking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ido` (`ido`);

--
-- Indexes for table `order_db`
--
ALTER TABLE `order_db`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idp` (`idp`),
  ADD KEY `order_db_ibfk_2` (`idb`);

--
-- Indexes for table `pdel`
--
ALTER TABLE `pdel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idp` (`idp`);

--
-- Indexes for table `poductd`
--
ALTER TABLE `poductd`
  ADD PRIMARY KEY (`id`),
  ADD KEY `poductd_ibfk_1` (`idp`);

--
-- Indexes for table `pReview`
--
ALTER TABLE `pReview`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idb` (`idb`),
  ADD KEY `idp` (`idp`);

--
-- Indexes for table `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idp` (`idp`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id2` (`id2`),
  ADD KEY `idc` (`idc`),
  ADD KEY `ids` (`ids`);

--
-- Indexes for table `productp`
--
ALTER TABLE `productp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idp` (`idp`);

--
-- Indexes for table `productq`
--
ALTER TABLE `productq`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idp` (`idp`);

--
-- Indexes for table `productst`
--
ALTER TABLE `productst`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idp` (`idp`);

--
-- Indexes for table `pVoucher`
--
ALTER TABLE `pVoucher`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idb` (`idb`),
  ADD KEY `pVoucher_ibfk_2` (`idst`);

--
-- Indexes for table `reviewimg`
--
ALTER TABLE `reviewimg`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idr` (`idr`);

--
-- Indexes for table `sellerb_db`
--
ALTER TABLE `sellerb_db`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id2` (`id2`);

--
-- Indexes for table `sellerd`
--
ALTER TABLE `sellerd`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sid` (`sid`);

--
-- Indexes for table `seller_db`
--
ALTER TABLE `seller_db`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `simgcred`
--
ALTER TABLE `simgcred`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id2` (`id2`);

--
-- Indexes for table `storef_db`
--
ALTER TABLE `storef_db`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idb` (`idb`),
  ADD KEY `ids` (`ids`);

--
-- Indexes for table `store_db`
--
ALTER TABLE `store_db`
  ADD PRIMARY KEY (`id`),
  ADD KEY `store_db_ibfk_1` (`id1`),
  ADD KEY `id2` (`id2`),
  ADD KEY `id23` (`id23`);

--
-- Indexes for table `subCategory_db`
--
ALTER TABLE `subCategory_db`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id2` (`id2`);

--
-- Indexes for table `userfile_db`
--
ALTER TABLE `userfile_db`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `userLog`
--
ALTER TABLE `userLog`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `user_db`
--
ALTER TABLE `user_db`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bid` (`bid`),
  ADD KEY `pid` (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activation_db`
--
ALTER TABLE `activation_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `address_db`
--
ALTER TABLE `address_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_db`
--
ALTER TABLE `admin_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `buyer_db`
--
ALTER TABLE `buyer_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `buyhabit`
--
ALTER TABLE `buyhabit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orderTracking`
--
ALTER TABLE `orderTracking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_db`
--
ALTER TABLE `order_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pdel`
--
ALTER TABLE `pdel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `poductd`
--
ALTER TABLE `poductd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pReview`
--
ALTER TABLE `pReview`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `price`
--
ALTER TABLE `price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `productp`
--
ALTER TABLE `productp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `productq`
--
ALTER TABLE `productq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `productst`
--
ALTER TABLE `productst`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pVoucher`
--
ALTER TABLE `pVoucher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviewimg`
--
ALTER TABLE `reviewimg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sellerb_db`
--
ALTER TABLE `sellerb_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sellerd`
--
ALTER TABLE `sellerd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seller_db`
--
ALTER TABLE `seller_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `simgcred`
--
ALTER TABLE `simgcred`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `storef_db`
--
ALTER TABLE `storef_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `store_db`
--
ALTER TABLE `store_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subCategory_db`
--
ALTER TABLE `subCategory_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userfile_db`
--
ALTER TABLE `userfile_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userLog`
--
ALTER TABLE `userLog`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activation_db`
--
ALTER TABLE `activation_db`
  ADD CONSTRAINT `activation_db_ibfk_1` FOREIGN KEY (`email`) REFERENCES `user_db` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `address_db`
--
ALTER TABLE `address_db`
  ADD CONSTRAINT `address_db_ibfk_1` FOREIGN KEY (`email`) REFERENCES `user_db` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `admin_db`
--
ALTER TABLE `admin_db`
  ADD CONSTRAINT `admin_db_ibfk_1` FOREIGN KEY (`email`) REFERENCES `user_db` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `buyer_db`
--
ALTER TABLE `buyer_db`
  ADD CONSTRAINT `buyer_db_ibfk_1` FOREIGN KEY (`email`) REFERENCES `user_db` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `buyhabit`
--
ALTER TABLE `buyhabit`
  ADD CONSTRAINT `buyhabit_ibfk_1` FOREIGN KEY (`idp`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `expense`
--
ALTER TABLE `expense`
  ADD CONSTRAINT `expense_ibfk_1` FOREIGN KEY (`email`) REFERENCES `user_db` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orderTracking`
--
ALTER TABLE `orderTracking`
  ADD CONSTRAINT `orderTracking_ibfk_1` FOREIGN KEY (`ido`) REFERENCES `order_db` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_db`
--
ALTER TABLE `order_db`
  ADD CONSTRAINT `order_db_ibfk_1` FOREIGN KEY (`idp`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_db_ibfk_2` FOREIGN KEY (`idb`) REFERENCES `buyer_db` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pdel`
--
ALTER TABLE `pdel`
  ADD CONSTRAINT `pdel_ibfk_1` FOREIGN KEY (`idp`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `poductd`
--
ALTER TABLE `poductd`
  ADD CONSTRAINT `poductd_ibfk_1` FOREIGN KEY (`idp`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pReview`
--
ALTER TABLE `pReview`
  ADD CONSTRAINT `pReview_ibfk_1` FOREIGN KEY (`idb`) REFERENCES `buyer_db` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pReview_ibfk_2` FOREIGN KEY (`idp`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `price`
--
ALTER TABLE `price`
  ADD CONSTRAINT `price_ibfk_1` FOREIGN KEY (`idp`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id2`) REFERENCES `seller_db` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`idc`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_ibfk_3` FOREIGN KEY (`ids`) REFERENCES `subCategory_db` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `productp`
--
ALTER TABLE `productp`
  ADD CONSTRAINT `productp_ibfk_1` FOREIGN KEY (`idp`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `productq`
--
ALTER TABLE `productq`
  ADD CONSTRAINT `productq_ibfk_1` FOREIGN KEY (`idp`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `productst`
--
ALTER TABLE `productst`
  ADD CONSTRAINT `productst_ibfk_1` FOREIGN KEY (`idp`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pVoucher`
--
ALTER TABLE `pVoucher`
  ADD CONSTRAINT `pVoucher_ibfk_1` FOREIGN KEY (`idb`) REFERENCES `buyer_db` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pVoucher_ibfk_2` FOREIGN KEY (`idst`) REFERENCES `store_db` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reviewimg`
--
ALTER TABLE `reviewimg`
  ADD CONSTRAINT `reviewimg_ibfk_1` FOREIGN KEY (`idr`) REFERENCES `pReview` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sellerb_db`
--
ALTER TABLE `sellerb_db`
  ADD CONSTRAINT `sellerb_db_ibfk_1` FOREIGN KEY (`id2`) REFERENCES `seller_db` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sellerd`
--
ALTER TABLE `sellerd`
  ADD CONSTRAINT `sellerd_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `seller_db` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `seller_db`
--
ALTER TABLE `seller_db`
  ADD CONSTRAINT `seller_db_ibfk_1` FOREIGN KEY (`email`) REFERENCES `user_db` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `simgcred`
--
ALTER TABLE `simgcred`
  ADD CONSTRAINT `simgcred_ibfk_1` FOREIGN KEY (`id2`) REFERENCES `seller_db` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `storef_db`
--
ALTER TABLE `storef_db`
  ADD CONSTRAINT `storef_db_ibfk_1` FOREIGN KEY (`idb`) REFERENCES `buyer_db` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `storef_db_ibfk_2` FOREIGN KEY (`ids`) REFERENCES `store_db` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `store_db`
--
ALTER TABLE `store_db`
  ADD CONSTRAINT `store_db_ibfk_1` FOREIGN KEY (`id1`) REFERENCES `category` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `store_db_ibfk_2` FOREIGN KEY (`id2`) REFERENCES `sellerb_db` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `store_db_ibfk_3` FOREIGN KEY (`id23`) REFERENCES `subCategory_db` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `subCategory_db`
--
ALTER TABLE `subCategory_db`
  ADD CONSTRAINT `subCategory_db_ibfk_1` FOREIGN KEY (`id2`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `userfile_db`
--
ALTER TABLE `userfile_db`
  ADD CONSTRAINT `userfile_db_ibfk_1` FOREIGN KEY (`email`) REFERENCES `user_db` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `userLog`
--
ALTER TABLE `userLog`
  ADD CONSTRAINT `userLog_ibfk_1` FOREIGN KEY (`email`) REFERENCES `user_db` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`bid`) REFERENCES `buyer_db` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
