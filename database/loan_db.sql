-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2023 at 12:54 PM
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
-- Database: `loan_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `birthday` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `email`, `password`, `firstname`, `surname`, `address`, `age`, `birthday`, `created_at`) VALUES
(1, 'admin', 'cardenoaldrin939@gmail.com', '$2y$10$GEB99C/70MhwT6MkUaQmgu9aTthDgjbUEVd7zwVTIktjUCqm8wPC2', 'ALDRIN', 'CARDEÑO', 'TAGUIG CITY', 25, '1997-10-16', '2023-07-04 06:20:06');

-- --------------------------------------------------------

--
-- Table structure for table `loan_application`
--

CREATE TABLE `loan_application` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `employment_status` varchar(255) NOT NULL,
  `house_no` int(11) NOT NULL,
  `street` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `zip_code` varchar(255) NOT NULL,
  `employer_name` varchar(255) NOT NULL,
  `nature_of_business` varchar(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `length_of_employment` varchar(255) NOT NULL,
  `monthly_income` decimal(10,2) NOT NULL,
  `loan_amount` decimal(10,2) NOT NULL,
  `loan_purpose` varchar(255) NOT NULL,
  `loan_term` int(11) NOT NULL,
  `repayment_source` varchar(255) NOT NULL,
  `debt_type` varchar(255) DEFAULT NULL,
  `outstanding_balance` decimal(10,2) DEFAULT NULL,
  `monthly_installment` decimal(10,2) DEFAULT NULL,
  `bank_name` varchar(255) NOT NULL,
  `account_type` varchar(255) NOT NULL,
  `account_number` varchar(255) NOT NULL,
  `bank_relationship_length` int(11) NOT NULL,
  `average_monthly_balance` decimal(10,2) NOT NULL,
  `how_did_you_hear` varchar(255) NOT NULL,
  `declared_bankruptcy` varchar(255) NOT NULL,
  `legal_judgments` varchar(255) NOT NULL,
  `pending_legal_cases` varchar(255) NOT NULL,
  `debt_consolidation` varchar(255) NOT NULL,
  `cosigner_guarantor` varchar(255) NOT NULL,
  `declaration_checked` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `declaration` text DEFAULT NULL,
  `application_status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loan_application`
--

INSERT INTO `loan_application` (`id`, `user_id`, `first_name`, `middle_name`, `last_name`, `birth_date`, `status`, `gender`, `email`, `contact_number`, `employment_status`, `house_no`, `street`, `city`, `province`, `country`, `region`, `zip_code`, `employer_name`, `nature_of_business`, `job_title`, `length_of_employment`, `monthly_income`, `loan_amount`, `loan_purpose`, `loan_term`, `repayment_source`, `debt_type`, `outstanding_balance`, `monthly_installment`, `bank_name`, `account_type`, `account_number`, `bank_relationship_length`, `average_monthly_balance`, `how_did_you_hear`, `declared_bankruptcy`, `legal_judgments`, `pending_legal_cases`, `debt_consolidation`, `cosigner_guarantor`, `declaration_checked`, `created_at`, `declaration`, `application_status`) VALUES
(7, NULL, 'ALDRIN', 'BAGSICAN', 'CARDEÑO', '1997-10-16', 'single', 'male', 'cardenoaldrin939@gmail.com', '+639602849937', 'employed', 143, 'love', 'makati city', 'Metro Manila', 'Philippines', '1', '1630', 'kodego', 'IT', 'IT', '2', 20000.00, 10000.00, 'bills payment', 6, 'salary', 'N/A', 0.00, 0.00, 'BDO', 'Savings', '123456', 1, 10000.00, 'Facebook Ads', 'No', 'No', 'No', 'No', 'No', 0, '2023-07-04 02:37:07', NULL, 'Rejected'),
(8, NULL, 'ALDRIN', 'BAGSICAN', 'CARDEÑO', '1997-10-16', 'single', 'male', 'cardenoaldrin939@gmail.com', '+639602849937', 'employed', 143, 'love', 'makati city', 'Metro Manila', 'Philippines', '1', '1630', 'kodego', 'IT', 'IT', '2', 20000.00, 10000.00, 'bills payment', 6, 'salary', 'N/A', 0.00, 0.00, 'BDO', 'Savings', '123456', 1, 10000.00, 'Facebook Ads', 'No', 'No', 'No', 'No', 'No', 0, '2023-07-04 02:39:23', NULL, 'Approved'),
(9, NULL, 'ALDRIN', 'BAGSICAN', 'CARDEÑO', '1997-10-16', 'single', 'male', 'cardenoaldrin939@gmail.com', '+639602849937', 'employed', 143, 'love', 'makati city', 'Metro Manila', 'Philippines', '1', '1630', 'kodego', 'IT', 'IT', '2', 20000.00, 10000.00, 'bills payment', 6, 'salary', 'N/A', 0.00, 0.00, 'BDO', 'Savings', '123456', 1, 10000.00, 'Facebook Ads', 'No', 'No', 'No', 'No', 'No', 0, '2023-07-04 04:55:55', NULL, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_test`
--

CREATE TABLE `tbl_test` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` varchar(25) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_test`
--

INSERT INTO `tbl_test` (`id`, `name`, `age`, `address`) VALUES
(1, 'ALDRIN BAGSICAN CARDENO', '25', 'TAGUIG CITY');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `birthday` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `profile_photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `surname`, `address`, `age`, `birthday`, `email`, `password`, `username`, `profile_photo`) VALUES
(3, 'Lorraine gay', 'Lapetahi', 'Purok 1 mibantang', 25, '1997-05-23', 'lorrainegay1989@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', NULL),
(7, 'realyn', 'CARDEÑO', 'TAGUIG CITY', 24, '1997-10-16', 'realyn@test.com', '$2y$10$HdkcccQSI/USrphDB.0ExOArEnkRfDxalCrGo1Wue22Prn/yqoB/S', '', NULL),
(14, 'ALDRIN', 'CARDEÑO', 'TAGUIG CITY', 25, '1997-10-16', 'cardenoaldrin939@gmail.com', '$2y$10$erylq3cs.7KdAsej0mszP.5dBJ3FA8EOoZiWSMgbk1lNAuheGduuO', 'alds123', 'uploads/284422490_5238815839557538_2318554317171821488_n.jpg'),
(15, 'arlene', 'bagsican', 'Purok 1 mibantang', 25, '1997-10-10', 'arlene@test.com', '$2y$10$y3XlQePxlf.PVH9g0N5uf.YFmM8ua5S3ULVtpAn.r2MjRsOzzaB4a', 'arlene', NULL),
(16, 'ALDRIN', 'CARDEÑO', 'TAGUIG CITY', 25, '1997-10-16', 'cardenoaldrin35@gmail.com', '$2y$10$.IjFA8AfVJrxR.ykfycZIeJjozyfYusPmHbGCYSKnrr0JpVhkdAhS', 'admin123', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan_application`
--
ALTER TABLE `loan_application`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbl_test`
--
ALTER TABLE `tbl_test`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `loan_application`
--
ALTER TABLE `loan_application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_test`
--
ALTER TABLE `tbl_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `loan_application`
--
ALTER TABLE `loan_application`
  ADD CONSTRAINT `loan_application_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
