-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2017 at 04:17 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bowakeer`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts_payable`
--

CREATE TABLE `accounts_payable` (
  `Id` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Cheque_number` int(11) NOT NULL,
  `Cheque_date` date NOT NULL,
  `Bank_id` int(11) NOT NULL,
  `Amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `account_reciveable`
--

CREATE TABLE `account_reciveable` (
  `Id` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Cheque_number` int(11) NOT NULL,
  `Cheque_date` date NOT NULL,
  `Bank_id` int(11) NOT NULL,
  `Amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `allowences`
--

CREATE TABLE `allowences` (
  `Id` int(11) NOT NULL,
  `Emp_id` int(11) DEFAULT NULL,
  `Allow_date` text,
  `Amout` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `Id` int(11) NOT NULL,
  `Patient_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Type` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `automotive`
--

CREATE TABLE `automotive` (
  `Id` int(11) NOT NULL,
  `Label` text,
  `Modul` int(11) DEFAULT NULL,
  `Insurance` text,
  `Period` text,
  `Expiary_date` date DEFAULT NULL,
  `Oil_change` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `Id` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Contact` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `Id` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `Id` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contracts`
--

CREATE TABLE `contracts` (
  `Id` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Type` int(11) NOT NULL,
  `Period` text NOT NULL,
  `Start_date` date NOT NULL,
  `End_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `Id` int(11) NOT NULL,
  `Name` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `Id` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Age` int(11) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Specialization` varchar(30) DEFAULT NULL,
  `Department_id` int(11) NOT NULL,
  `Marital_staues` varchar(30) DEFAULT NULL,
  `Phone` int(11) NOT NULL,
  `Address` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Id` int(11) NOT NULL,
  `Phone` int(11) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Qualifications` text,
  `Date_of_birth` date DEFAULT NULL,
  `Next_of_kin` varchar(255) DEFAULT NULL,
  `Annual_leave` int(11) DEFAULT NULL,
  `SSID` text,
  `Driving_license` text,
  `Payroll_id` int(11) DEFAULT NULL,
  `Work_zone` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `emp_car`
--

CREATE TABLE `emp_car` (
  `Id` int(11) NOT NULL,
  `Emp_id` int(11) DEFAULT NULL,
  `Auto_id` int(11) DEFAULT NULL,
  `Start_date` date DEFAULT NULL,
  `End_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `end_vouchers`
--

CREATE TABLE `end_vouchers` (
  `Id` int(11) NOT NULL,
  `Payroll_id` int(11) DEFAULT NULL,
  `End_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `Id` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Amount` int(11) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `expenses_category`
--

CREATE TABLE `expenses_category` (
  `Id` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `exports`
--

CREATE TABLE `exports` (
  `Id` int(11) NOT NULL,
  `Emp_id` int(11) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `export_details`
--

CREATE TABLE `export_details` (
  `Id` int(11) NOT NULL,
  `Product_id` int(11) NOT NULL,
  `Quantity` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `import`
--

CREATE TABLE `import` (
  `Id` int(11) NOT NULL,
  `Company_id` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Payment_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `import_details`
--

CREATE TABLE `import_details` (
  `Id` int(11) NOT NULL,
  `Product_id` int(11) NOT NULL,
  `Batch_number` int(11) NOT NULL,
  `Expiry_date` date NOT NULL,
  `Quantity` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `Id` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Amount` int(11) NOT NULL,
  `Description` text NOT NULL,
  `Category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `income_category`
--

CREATE TABLE `income_category` (
  `Id` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `laboratory`
--

CREATE TABLE `laboratory` (
  `Id` int(11) NOT NULL,
  `Test` varchar(25) DEFAULT NULL,
  `reference_range` text NOT NULL,
  `unit` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Id` int(11) NOT NULL,
  `Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `Id` int(11) NOT NULL,
  `Product_id` int(11) NOT NULL,
  `Quantity` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `Id` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Age` int(11) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Occupation` varchar(20) DEFAULT NULL,
  `Address` varchar(30) DEFAULT NULL,
  `Phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `payroll`
--

CREATE TABLE `payroll` (
  `Id` int(11) NOT NULL,
  `Start_date` date DEFAULT NULL,
  `Salary` int(11) DEFAULT NULL,
  `Period` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Id` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Cat_id` int(11) NOT NULL,
  `Unit_price` int(11) NOT NULL,
  `Sell_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts_payable`
--
ALTER TABLE `accounts_payable`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Bank_id` (`Bank_id`);

--
-- Indexes for table `account_reciveable`
--
ALTER TABLE `account_reciveable`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Bank_id` (`Bank_id`);

--
-- Indexes for table `allowences`
--
ALTER TABLE `allowences`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Emp_id` (`Emp_id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Patient_id` (`Patient_id`),
  ADD KEY `doctor_id` (`doctor_id`);

--
-- Indexes for table `automotive`
--
ALTER TABLE `automotive`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `contracts`
--
ALTER TABLE `contracts`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Department_id` (`Department_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Payroll_id` (`Payroll_id`);

--
-- Indexes for table `emp_car`
--
ALTER TABLE `emp_car`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Emp_id` (`Emp_id`),
  ADD KEY `Auto_id` (`Auto_id`);

--
-- Indexes for table `end_vouchers`
--
ALTER TABLE `end_vouchers`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Payroll_id` (`Payroll_id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `expenses_category`
--
ALTER TABLE `expenses_category`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `exports`
--
ALTER TABLE `exports`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `export_details`
--
ALTER TABLE `export_details`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Product_id` (`Product_id`);

--
-- Indexes for table `import`
--
ALTER TABLE `import`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Company_id` (`Company_id`);

--
-- Indexes for table `import_details`
--
ALTER TABLE `import_details`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Product_id` (`Product_id`);

--
-- Indexes for table `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Category_id` (`Category_id`);

--
-- Indexes for table `income_category`
--
ALTER TABLE `income_category`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `laboratory`
--
ALTER TABLE `laboratory`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Product_id` (`Product_id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `payroll`
--
ALTER TABLE `payroll`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Cat_id` (`Cat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts_payable`
--
ALTER TABLE `accounts_payable`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `account_reciveable`
--
ALTER TABLE `account_reciveable`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `allowences`
--
ALTER TABLE `allowences`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `automotive`
--
ALTER TABLE `automotive`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contracts`
--
ALTER TABLE `contracts`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `emp_car`
--
ALTER TABLE `emp_car`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `end_vouchers`
--
ALTER TABLE `end_vouchers`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `expenses_category`
--
ALTER TABLE `expenses_category`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `exports`
--
ALTER TABLE `exports`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `export_details`
--
ALTER TABLE `export_details`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `import`
--
ALTER TABLE `import`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `import_details`
--
ALTER TABLE `import_details`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `income`
--
ALTER TABLE `income`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `income_category`
--
ALTER TABLE `income_category`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `laboratory`
--
ALTER TABLE `laboratory`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `payroll`
--
ALTER TABLE `payroll`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
