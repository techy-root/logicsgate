-- SQL Dump
-- Host: 127.0.0.1:3306
-- MySql Server version: 5.7.28
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


--
-- Database: `social_account`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

DROP TABLE IF EXISTS `user_details`;
CREATE TABLE IF NOT EXISTS `user_details` (
  `username` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` text NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`username`, `password`, `contact`, `email`, `address`) VALUES
('Ajay', 'Singh', 9210000586, '100rab.singh@gmail.com', ''),
('saurabh', '100rab', 9560747404, 'techy.root@gmail.com', '');
COMMIT;
