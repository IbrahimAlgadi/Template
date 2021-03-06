-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2017 at 07:19 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;

--
-- Database: `i3m`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_payables`
--

CREATE TABLE `account_payables` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `end_date` date NOT NULL,
  `cheque_number` int(11) NOT NULL,
  `cheque_date` date NOT NULL,
  `bank_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `account_payables`
--

INSERT INTO `account_payables` (`id`, `name`, `end_date`, `cheque_number`, `cheque_date`, `bank_id`, `amount`) VALUES
(2, '12122', '2015-01-07', 123211, '2017-01-03', 1, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `account_receiveables`
--

CREATE TABLE `account_receiveables` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `end_date` date NOT NULL,
  `cheque_number` int(11) NOT NULL,
  `cheque_date` date NOT NULL,
  `bank_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `account_receiveables`
--

INSERT INTO `account_receiveables` (`id`, `name`, `end_date`, `cheque_number`, `cheque_date`, `bank_id`, `amount`) VALUES
(1, 'acc3', '2017-07-05', 1, '2017-07-29', 1, 20000),
(2, 'acc2', '2017-12-12', 2, '2019-05-05', 1, 19999),
(3, 'Rights', '2015-01-04', 12122, '2017-01-03', 1, 3000);

-- --------------------------------------------------------

--
-- Table structure for table `allowances`
--

CREATE TABLE `allowances` (
  `id` int(11) NOT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `allow_date` date NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `allowances`
--

INSERT INTO `allowances` (`id`, `emp_id`, `allow_date`, `amount`) VALUES
(1, 2, '2017-07-05', 500),
(2, 3, '2017-07-07', 900),
(3, 4, '2017-07-07', 200),
(4, 3, '2017-02-02', 6000),
(5, 2, '2017-09-09', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `apoint_date` date NOT NULL,
  `apoint_type` varchar(10) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `notes` text NOT NULL,
  `labcomments` text NOT NULL,
  `imgcomments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `patient_id`, `doctor_id`, `apoint_date`, `apoint_type`, `status`, `notes`, `labcomments`, `imgcomments`) VALUES
(3, 1, 100, '2016-02-02', 'wipping', 1, 'wip to death', 'need 100 ', 'wipping will work');

-- --------------------------------------------------------

--
-- Table structure for table `appointments_symptoms`
--

CREATE TABLE `appointments_symptoms` (
  `appointment_id` int(11) NOT NULL,
  `symptom_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `automotives`
--

CREATE TABLE `automotives` (
  `id` int(11) NOT NULL,
  `label` text,
  `model` text,
  `insurance` text,
  `period` text,
  `expiry_date` date DEFAULT NULL,
  `oil_change` int(11) DEFAULT NULL,
  `license_expiry_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `automotives`
--

INSERT INTO `automotives` (`id`, `label`, `model`, `insurance`, `period`, `expiry_date`, `oil_change`, `license_expiry_date`) VALUES
(1, 'gcjgvjgk', 'llikjasl6aksdj', 'shikan', '1 year', '2017-07-31', 6, '2017-07-15'),
(2, 'Toyota', '531FF2', 'I give you insurance now', '5 years', '2020-10-10', 4, '2015-02-02'),
(3, 'visto', 'hh1232', 'muda', '2 years', '2016-05-05', 8, '2017-02-02');

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `contact` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`id`, `name`, `contact`) VALUES
(1, 'Altadamon', 999099909);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'tChirts'),
(2, 'Shawerma');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contracts`
--

CREATE TABLE `contracts` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `contract_type` int(11) NOT NULL,
  `period` text NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contracts`
--

INSERT INTO `contracts` (`id`, `name`, `contract_type`, `period`, `start_date`, `end_date`, `description`) VALUES
(1, 'Shikan', 1, '1 year', '2015-07-08', '2018-07-31', 'This Is a new Description'),
(2, 'Islamic Insurance', 2, '2 years', '2012-01-21', '2015-01-04', 'Made for fun');

-- --------------------------------------------------------

--
-- Table structure for table `curriculums`
--

CREATE TABLE `curriculums` (
  `id` int(11) NOT NULL,
  `course_name` varchar(25) CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `semesters` int(11) NOT NULL,
  `credit_hours` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `name` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`) VALUES
(1, 'Oncology'),
(2, 'Surgery');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `specialization` varchar(30) DEFAULT NULL,
  `department_id` int(11) NOT NULL,
  `marital_status` varchar(30) DEFAULT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `age`, `gender`, `specialization`, `department_id`, `marital_status`, `phone`, `address`) VALUES
(1, 'Simeone', 22, 'Male', 'MD', 1, 'Single', 234233423, 'Burri'),
(2, 'Guardiola', 33, 'Male', 'MSc', 2, 'Married', 98798988, 'Hongkong');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `qualifications` text,
  `date_of_birth` date DEFAULT NULL,
  `next_of_kin` varchar(25) DEFAULT NULL,
  `next_of_kin_phone` int(11) DEFAULT NULL,
  `annual_leave` varchar(15) DEFAULT NULL,
  `ssid` text,
  `driving_license` text,
  `payroll_id` int(11) DEFAULT NULL,
  `work_zone` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `phone`, `address`, `qualifications`, `date_of_birth`, `next_of_kin`, `next_of_kin_phone`, `annual_leave`, `ssid`, `driving_license`, `payroll_id`, `work_zone`) VALUES
(2, 'Messi', 912345678, 'Rosario', 'Secondary', '0000-00-00', 'Hisham', 919718181, '8', '1221', 'Still', 1, 'Spain'),
(3, 'Ibrahim', 899071898, 'Nasir', 'MD', '0000-00-00', 'Messi', 908989877, 'November', '131230', 'd23222-0', 1, 'Bahri'),
(4, 'Rashad Altayeb', 2147483647, 'Wonderful', 'inline', '2017-02-09', 'Homeless', 2147483647, 'askdsl', '89iuo8u', 'knkl', 2, 'sudia'),
(5, 'Mubarak', 2147483647, 'hvjgv h', 'jbnkhjb', '0000-00-00', 'jbhjhkb', 980989, 'kjkjnkj', 'onnkjnb', 'jnljnj', 1, 'jhslkjnhjs');

-- --------------------------------------------------------

--
-- Table structure for table `employee_cars`
--

CREATE TABLE `employee_cars` (
  `id` int(11) NOT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `auto_id` int(11) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `employee_cars`
--

INSERT INTO `employee_cars` (`id`, `emp_id`, `auto_id`, `start_date`, `end_date`) VALUES
(1, 2, 1, '2017-07-01', '2017-07-31'),
(4, 2, 2, '2017-12-02', '2017-12-12'),
(5, 4, 3, '2016-06-06', '2017-06-06');

-- --------------------------------------------------------

--
-- Table structure for table `end_vouchers`
--

CREATE TABLE `end_vouchers` (
  `id` int(11) NOT NULL,
  `payroll_id` int(11) DEFAULT NULL,
  `end_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `end_vouchers`
--

INSERT INTO `end_vouchers` (`id`, `payroll_id`, `end_date`) VALUES
(3, 1, '2017-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` int(11) NOT NULL,
  `expense_date` date NOT NULL,
  `amount` int(11) NOT NULL,
  `description` text NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `expense_date`, `amount`, `description`, `cat_id`) VALUES
(1, '2017-07-01', 92000, 'This is the first expense i withold', 2),
(2, '2013-01-03', 312131, 'Electricity', 1);

-- --------------------------------------------------------

--
-- Table structure for table `expense_categories`
--

CREATE TABLE `expense_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `exports`
--

CREATE TABLE `exports` (
  `id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `export_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `exports`
--

INSERT INTO `exports` (`id`, `emp_id`, `export_date`) VALUES
(1, 1, '2015-02-01');

-- --------------------------------------------------------

--
-- Table structure for table `export_details`
--

CREATE TABLE `export_details` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `id` int(11) NOT NULL,
  `name` varchar(25) CHARACTER SET utf8 NOT NULL,
  `location` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `imports`
--

CREATE TABLE `imports` (
  `id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `import_date` date NOT NULL,
  `payment_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `imports`
--

INSERT INTO `imports` (`id`, `company_id`, `import_date`, `payment_type`) VALUES
(1, 2, '2015-01-10', 'No Type');

-- --------------------------------------------------------

--
-- Table structure for table `import_details`
--

CREATE TABLE `import_details` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `batch_number` int(11) NOT NULL,
  `expiry_date` date NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `incomes`
--

CREATE TABLE `incomes` (
  `id` int(11) NOT NULL,
  `income_date` date NOT NULL,
  `amount` int(11) NOT NULL,
  `description` text NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `incomes`
--

INSERT INTO `incomes` (`id`, `income_date`, `amount`, `description`, `cat_id`) VALUES
(1, '2017-07-01', 100000, 'Not Stolen', 1),
(2, '2016-04-04', 20000, 'Descripe your ripe', 1);

-- --------------------------------------------------------

--
-- Table structure for table `income_categories`
--

CREATE TABLE `income_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `labcategories`
--

CREATE TABLE `labcategories` (
  `id` int(100) NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lab_tests`
--

CREATE TABLE `lab_tests` (
  `id` int(11) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `reference_range` text NOT NULL,
  `unit` varchar(10) DEFAULT NULL,
  `cat_id` int(11) NOT NULL,
  `price` double NOT NULL,
  `status` tinyint(1) NOT NULL,
  `request` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `generic_name` varchar(90) NOT NULL,
  `unit_price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `product_id`, `quantity`) VALUES
(1, 1, 4),
(2, 1, 3),
(7, 2365, 46);

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `occupation` varchar(20) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `age`, `gender`, `occupation`, `address`, `phone`) VALUES
(2, 'Mustafa', 12, 'Male', 'farmers', 'Burri', 918931222),
(3, 'Elhag', 22, 'Male', 'Pharmacist', 'Nyala', 912312322);

-- --------------------------------------------------------

--
-- Table structure for table `payrolls`
--

CREATE TABLE `payrolls` (
  `id` int(11) NOT NULL,
  `start_date` date DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `period` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payrolls`
--

INSERT INTO `payrolls` (`id`, `start_date`, `salary`, `period`) VALUES
(1, '2017-07-11', 1000, '7 years'),
(2, '2017-07-20', 12100, '5 years');

-- --------------------------------------------------------

--
-- Table structure for table `pharm_categories`
--

CREATE TABLE `pharm_categories` (
  `id` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prescriptions`
--

CREATE TABLE `prescriptions` (
  `appointment_id` int(11) NOT NULL,
  `medicine_id` int(11) NOT NULL,
  `notes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `unit_price` int(11) NOT NULL,
  `sell_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `amount` int(11) NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(25) CHARACTER SET utf8 NOT NULL,
  `phone` int(11) NOT NULL,
  `admission_date` date NOT NULL,
  `next_of_kin` varchar(25) CHARACTER SET utf8 NOT NULL,
  `nok_phone` int(11) NOT NULL,
  `address` varchar(25) CHARACTER SET utf8 NOT NULL,
  `nationality` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(11) NOT NULL,
  `name` varchar(25) CHARACTER SET utf8 NOT NULL,
  `address` varchar(25) CHARACTER SET utf8 NOT NULL,
  `personnel` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `homepage` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `symptoms`
--

CREATE TABLE `symptoms` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `symptom_categories`
--

CREATE TABLE `symptom_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `xrays`
--

CREATE TABLE `xrays` (
  `id` int(11) NOT NULL,
  `appointment_id` int(11) NOT NULL,
  `path` varchar(100) NOT NULL,
  `comments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_payables`
--
ALTER TABLE `account_payables`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bank_id` (`bank_id`);

--
-- Indexes for table `account_receiveables`
--
ALTER TABLE `account_receiveables`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bank_id` (`bank_id`);

--
-- Indexes for table `allowances`
--
ALTER TABLE `allowances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emp_id` (`emp_id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_id` (`patient_id`),
  ADD KEY `doctor_id` (`doctor_id`);

--
-- Indexes for table `appointments_symptoms`
--
ALTER TABLE `appointments_symptoms`
  ADD PRIMARY KEY (`appointment_id`,`symptom_id`),
  ADD KEY `ap_sympp` (`symptom_id`);

--
-- Indexes for table `automotives`
--
ALTER TABLE `automotives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contracts`
--
ALTER TABLE `contracts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payroll_id` (`payroll_id`);

--
-- Indexes for table `employee_cars`
--
ALTER TABLE `employee_cars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emp_id` (`emp_id`),
  ADD KEY `auto_id` (`auto_id`);

--
-- Indexes for table `end_vouchers`
--
ALTER TABLE `end_vouchers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payroll_id` (`payroll_id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `expense_categories`
--
ALTER TABLE `expense_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exports`
--
ALTER TABLE `exports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `export_details`
--
ALTER TABLE `export_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `imports`
--
ALTER TABLE `imports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_id` (`company_id`);

--
-- Indexes for table `import_details`
--
ALTER TABLE `import_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `incomes`
--
ALTER TABLE `incomes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `income_categories`
--
ALTER TABLE `income_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `labcategories`
--
ALTER TABLE `labcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lab_tests`
--
ALTER TABLE `lab_tests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `medicines`
--
ALTER TABLE `medicines`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pharmcat_catid` (`cat_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payrolls`
--
ALTER TABLE `payrolls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pharm_categories`
--
ALTER TABLE `pharm_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prescriptions`
--
ALTER TABLE `prescriptions`
  ADD PRIMARY KEY (`appointment_id`,`medicine_id`),
  ADD KEY `pres_medd` (`medicine_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `symptoms`
--
ALTER TABLE `symptoms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `catid_symcat` (`cat_id`);

--
-- Indexes for table `symptom_categories`
--
ALTER TABLE `symptom_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `xrays`
--
ALTER TABLE `xrays`
  ADD PRIMARY KEY (`id`),
  ADD KEY `xmedrepid_medrep` (`appointment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_payables`
--
ALTER TABLE `account_payables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `account_receiveables`
--
ALTER TABLE `account_receiveables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `allowances`
--
ALTER TABLE `allowances`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `automotives`
--
ALTER TABLE `automotives`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contracts`
--
ALTER TABLE `contracts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `employee_cars`
--
ALTER TABLE `employee_cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `end_vouchers`
--
ALTER TABLE `end_vouchers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `expense_categories`
--
ALTER TABLE `expense_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `exports`
--
ALTER TABLE `exports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `export_details`
--
ALTER TABLE `export_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `imports`
--
ALTER TABLE `imports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `import_details`
--
ALTER TABLE `import_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `incomes`
--
ALTER TABLE `incomes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `income_categories`
--
ALTER TABLE `income_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lab_tests`
--
ALTER TABLE `lab_tests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `payrolls`
--
ALTER TABLE `payrolls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `account_payables`
--
ALTER TABLE `account_payables`
  ADD CONSTRAINT `account_payables_ibfk_1` FOREIGN KEY (`bank_id`) REFERENCES `banks` (`id`);

--
-- Constraints for table `account_receiveables`
--
ALTER TABLE `account_receiveables`
  ADD CONSTRAINT `account_receiveables_ibfk_1` FOREIGN KEY (`bank_id`) REFERENCES `banks` (`id`);

--
-- Constraints for table `allowances`
--
ALTER TABLE `allowances`
  ADD CONSTRAINT `allowances_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `employees` (`id`);

--
-- Constraints for table `appointments_symptoms`
--
ALTER TABLE `appointments_symptoms`
  ADD CONSTRAINT `ap_sympp` FOREIGN KEY (`symptom_id`) REFERENCES `symptoms` (`id`),
  ADD CONSTRAINT `symp_app` FOREIGN KEY (`appointment_id`) REFERENCES `appointments` (`id`);

--
-- Constraints for table `employee_cars`
--
ALTER TABLE `employee_cars`
  ADD CONSTRAINT `employee_cars_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `employees` (`id`),
  ADD CONSTRAINT `employee_cars_ibfk_2` FOREIGN KEY (`auto_id`) REFERENCES `automotives` (`id`);

--
-- Constraints for table `end_vouchers`
--
ALTER TABLE `end_vouchers`
  ADD CONSTRAINT `end_vouchers_ibfk_1` FOREIGN KEY (`payroll_id`) REFERENCES `payrolls` (`id`);

--
-- Constraints for table `expenses`
--
ALTER TABLE `expenses`
  ADD CONSTRAINT `expenses_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `incomes`
--
ALTER TABLE `incomes`
  ADD CONSTRAINT `incomes_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `lab_tests`
--
ALTER TABLE `lab_tests`
  ADD CONSTRAINT `lab_tests_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `labcategories` (`id`);

--
-- Constraints for table `medicines`
--
ALTER TABLE `medicines`
  ADD CONSTRAINT `pharmcat_catid` FOREIGN KEY (`cat_id`) REFERENCES `pharm_categories` (`id`);

--
-- Constraints for table `prescriptions`
--
ALTER TABLE `prescriptions`
  ADD CONSTRAINT `pres_app` FOREIGN KEY (`appointment_id`) REFERENCES `appointments` (`id`),
  ADD CONSTRAINT `pres_medd` FOREIGN KEY (`medicine_id`) REFERENCES `medicines` (`id`);

--
-- Constraints for table `symptoms`
--
ALTER TABLE `symptoms`
  ADD CONSTRAINT `catid_symcat` FOREIGN KEY (`cat_id`) REFERENCES `symptom_categories` (`id`);

--
-- Constraints for table `xrays`
--
ALTER TABLE `xrays`
  ADD CONSTRAINT `xmedrepid_medrep` FOREIGN KEY (`appointment_id`) REFERENCES `appointments` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
