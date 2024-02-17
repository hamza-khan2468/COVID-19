-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2024 at 04:50 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covidtmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `image` varchar(400) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` varchar(500) NOT NULL,
  `dt` varchar(255) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `image`, `name`, `content`, `dt`) VALUES
(4, 'images/222.avif', 'DR MUSKAN KHAN', 'General and Breast Surgeon at Northwest General Hospital. Dr. Tarbia has graduated from Khyber Medical College and has completed her postgraduate training, initially, from Khyber Teaching Hospital and later,', '2024-02-15 11:52:29'),
(5, 'images/54545.webp', 'Dr. MEHWISH KHAN', 'Dr. MEHWISH KHAN (MBBS, FCPS) has joined as Junior Consultant, General and Breast Surgeon Consultant, General and Breast Surgeon Consultant, General and Breast Surgeon at Northwest General Hospital.\r\n', '2024-02-15 16:01:32'),
(6, 'images/522.jpg', 'DR HAMZA', 'General and Breast Surgeon at Northwest General Hospital. Dr. Tarbia has graduated from Khyber Medical College and has completed her postgraduate training, initially, from Khyber Teaching Hospital and later, ', '2024-02-16 11:09:55'),
(8, 'images/151.avif', 'DR ABUBAKAR BAIG', 'Dr abubakar is the best vaccation to covid', '2024-02-16 20:18:29');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(500) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fname`, `lname`, `email`, `subject`, `message`, `dt`) VALUES
(2, 'Abubakar', 'Baig', 'abubakar192005@gmail.com', 'for School Principle', 'work ', '2024-02-16 11:44:31'),
(3, 'Abubakar', 'Baig', 'abubakar192005@gmail.com', 'COVID VACCATION TEST', 'COVID VACCATION TESTING FOR ME.......', '2024-02-16 16:28:29'),
(4, 'Abubakar', 'Baig', 'abubakar192005@gmail.com', 'COVID VACCATION TEST', 'covid vaccation for mee\r\n', '2024-02-16 20:12:06');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(11) NOT NULL,
  `AdminName` varchar(120) DEFAULT NULL,
  `AdminuserName` varchar(20) NOT NULL,
  `MobileNumber` varchar(10) NOT NULL,
  `Email` varchar(120) NOT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `AdminuserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(2, 'Admin', 'Admin', '1234567890', 'admin@gmail.com', '1234', '2021-04-19 18:30:00'),
(3, 'Abubakar', 'Abubakar', '312208235', 'Abubakar192005@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2024-02-14 15:39:27'),
(5, 'Admin', 'Abubakar Baig', '6564665655', 'abubakar192005@gmail.com', '757575', '2024-02-14 15:42:35'),
(6, 'Admin', 'Abubakar Baig', '2147483647', 'abubakar192005@gmail.com', '1515151', '2024-02-14 15:45:47'),
(9, 'Admin', 'Mehmood Baig', '3122856545', 'mehmood2010@gmail.com', '5454', '2024-02-16 15:17:13');

-- --------------------------------------------------------

--
-- Table structure for table `tblpatients`
--

CREATE TABLE `tblpatients` (
  `id` int(11) NOT NULL,
  `FullName` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(12) DEFAULT NULL,
  `DateOfBirth` date DEFAULT NULL,
  `GovtIssuedIdNo` varchar(150) DEFAULT NULL,
  `FullAddress` varchar(255) DEFAULT NULL,
  `State` varchar(200) DEFAULT NULL,
  `RegistrationDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblpatients`
--

INSERT INTO `tblpatients` (`id`, `FullName`, `MobileNumber`, `DateOfBirth`, `GovtIssuedIdNo`, `FullAddress`, `State`, `RegistrationDate`) VALUES
(1, 'Abubakar Baig', 3122082355, '2024-02-16', '424019456575', 'Sector 1/D orangi town karachi', 'Sindh', '2024-02-16 10:46:31'),
(2, 'Abubakar Baig', 923122082355, '2024-02-16', '424019456575', 'Sector 1/D orangi town karachi', 'Sindh', '2024-02-16 10:51:47'),
(3, 'Abubakar Baig', 923122082355, '2024-02-16', '424019456575', 'Sector 1/D orangi town karachi', 'Sindh', '2024-02-16 11:27:32'),
(4, 'Abubakar Baig', 923122082355, '2024-02-16', '424019456575', 'Sector 1/D orangi town karachi', 'Sindh', '2024-02-16 15:12:32');

-- --------------------------------------------------------

--
-- Table structure for table `tblphlebotomist`
--

CREATE TABLE `tblphlebotomist` (
  `id` int(11) NOT NULL,
  `EmpID` varchar(100) DEFAULT NULL,
  `FullName` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(12) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblphlebotomist`
--

INSERT INTO `tblphlebotomist` (`id`, `EmpID`, `FullName`, `MobileNumber`, `RegDate`) VALUES
(9, '4545454585', 'Jinnah Hospital Karachi', 2199201300, '2024-02-16 08:24:27'),
(10, '525865414', 'Abbassi Shaheed Hospital', 262190400, '2024-02-16 10:14:50'),
(11, '4562158333', 'Aga Khan University Hospital', 21111911911, '2024-02-16 10:15:39'),
(12, '789658', 'Ziauddin Hospital', 2136648237, '2024-02-16 10:19:28'),
(13, '454575', 'Ruth KM Pfau Civil Hospital Karachi', 2199215740, '2024-02-16 10:20:37'),
(14, '8545845', 'A.O. Hospital', 2136685560, '2024-02-16 10:21:32'),
(15, '454545212', 'Burhani Hospital', 2132212572, '2024-02-16 10:22:20'),
(16, '78745451', 'Bahria Hospital Karachi', 2132212572, '2024-02-16 10:22:49'),
(17, '4512512', 'Hill Park Hospital Karachi', 2132212572, '2024-02-16 10:26:10'),
(18, '45421215212', 'SIUT', 21111000313, '2024-02-16 10:27:32'),
(19, '48454212', 'LIAQUAT NATIONAL ALI HOSPITAL', 21111456456, '2024-02-16 10:29:51');

-- --------------------------------------------------------

--
-- Table structure for table `tblreporttracking`
--

CREATE TABLE `tblreporttracking` (
  `id` int(11) NOT NULL,
  `OrderNumber` bigint(40) DEFAULT NULL,
  `Remark` varchar(255) DEFAULT NULL,
  `Status` varchar(120) DEFAULT NULL,
  `PostingTime` timestamp NULL DEFAULT current_timestamp(),
  `RemarkBy` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblreporttracking`
--

INSERT INTO `tblreporttracking` (`id`, `OrderNumber`, `Remark`, `Status`, `PostingTime`, `RemarkBy`) VALUES
(1, 290762084, 'okay test send', 'On the Way for Collection', '2024-02-16 10:47:23', 3),
(2, 290762084, 'sample collected', 'Sample Collected', '2024-02-16 10:47:44', 3),
(3, 290762084, 'okay send to lab', 'Sent to Lab', '2024-02-16 10:48:01', 3),
(4, 290762084, 'vaccation complete', 'Delivered', '2024-02-16 10:48:46', 3),
(5, 503101082, 'RIDER ON THE WAY', 'On the Way for Collection', '2024-02-16 11:31:08', 3),
(6, 503101082, 'OAKY', 'Sample Collected', '2024-02-16 11:31:42', 3),
(7, 503101082, 'OKAY SEND TO LAB', 'Sent to Lab', '2024-02-16 11:32:01', 3),
(8, 503101082, 'VACCATION COMPLETE', 'Delivered', '2024-02-16 11:32:20', 3),
(9, 602802626, 'rider on the way', 'On the Way for Collection', '2024-02-16 15:14:47', 3),
(10, 602802626, 'sample collected sir', 'Sample Collected', '2024-02-16 15:15:17', 3),
(11, 602802626, 'sent to covid vaccation testing to lab', 'Sent to Lab', '2024-02-16 15:15:44', 3),
(12, 602802626, 'vaccation completed', 'Delivered', '2024-02-16 15:16:08', 3),
(13, 869090892, '52', 'On the Way for Collection', '2024-02-16 15:44:19', 3),
(14, 869090892, '52', 'Sample Collected', '2024-02-16 15:45:28', 3),
(15, 869090892, '52', 'Sent to Lab', '2024-02-16 15:45:47', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbltestrecord`
--

CREATE TABLE `tbltestrecord` (
  `id` int(11) NOT NULL,
  `OrderNumber` bigint(14) DEFAULT NULL,
  `PatientMobileNumber` bigint(14) DEFAULT NULL,
  `TestType` varchar(100) DEFAULT NULL,
  `TestTimeSlot` varchar(120) DEFAULT NULL,
  `ReportStatus` varchar(100) DEFAULT NULL,
  `FinalReport` varchar(150) DEFAULT NULL,
  `ReportUploadTime` varchar(200) DEFAULT NULL,
  `RegistrationDate` timestamp NULL DEFAULT current_timestamp(),
  `AssignedtoEmpId` varchar(150) DEFAULT NULL,
  `AssigntoName` varchar(180) DEFAULT NULL,
  `AssignedTime` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbltestrecord`
--

INSERT INTO `tbltestrecord` (`id`, `OrderNumber`, `PatientMobileNumber`, `TestType`, `TestTimeSlot`, `ReportStatus`, `FinalReport`, `ReportUploadTime`, `RegistrationDate`, `AssignedtoEmpId`, `AssigntoName`, `AssignedTime`) VALUES
(1, 290762084, 3122082355, 'Covid-19', '2024-02-16T15:46', 'Delivered', 'f0c12c98252cfd51b33b681a943b2ea71708080526.pdf', '16-02-2024 03:48:46 PM', '2024-02-16 10:46:31', '4545454585', 'Jinnah Hospital Karachi', '16-02-2024 03:47:03 PM'),
(2, 869090892, 923122082355, 'Covid-19', '2024-02-16T15:51', 'Sent to Lab', NULL, NULL, '2024-02-16 10:51:47', '4545454585', 'Jinnah Hospital Karachi', '16-02-2024 08:07:05 PM'),
(3, 503101082, 923122082355, 'Covid-19', '2024-02-16T16:27', 'Delivered', 'f0c12c98252cfd51b33b681a943b2ea71708083140.pdf', '16-02-2024 04:32:20 PM', '2024-02-16 11:27:32', '4545454585', 'Jinnah Hospital Karachi', '16-02-2024 04:30:40 PM'),
(4, 602802626, 923122082355, 'Covid-19', '2024-02-16T20:12', 'Delivered', 'f0c12c98252cfd51b33b681a943b2ea71708096568.pdf', '16-02-2024 08:16:08 PM', '2024-02-16 15:12:32', '4545454585', 'Jinnah Hospital Karachi', '16-02-2024 08:14:14 PM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpatients`
--
ALTER TABLE `tblpatients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblphlebotomist`
--
ALTER TABLE `tblphlebotomist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblreporttracking`
--
ALTER TABLE `tblreporttracking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbltestrecord`
--
ALTER TABLE `tbltestrecord`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblpatients`
--
ALTER TABLE `tblpatients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblphlebotomist`
--
ALTER TABLE `tblphlebotomist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tblreporttracking`
--
ALTER TABLE `tblreporttracking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbltestrecord`
--
ALTER TABLE `tbltestrecord`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
