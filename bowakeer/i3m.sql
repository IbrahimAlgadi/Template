-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 29, 2017 at 11:58 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `i3m`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_payables`
--

CREATE TABLE IF NOT EXISTS `account_payables` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `end_date` date NOT NULL,
  `cheque_number` int(11) NOT NULL,
  `cheque_date` date NOT NULL,
  `bank_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `bank_id` (`bank_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `account_payables`
--

INSERT INTO `account_payables` (`id`, `name`, `end_date`, `cheque_number`, `cheque_date`, `bank_id`, `amount`) VALUES
(2, '12122', '2015-01-04', 123211, '2017-01-03', 1, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `account_receiveables`
--

CREATE TABLE IF NOT EXISTS `account_receiveables` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `end_date` date NOT NULL,
  `cheque_number` int(11) NOT NULL,
  `cheque_date` date NOT NULL,
  `bank_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `bank_id` (`bank_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT AUTO_INCREMENT=4 ;

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

CREATE TABLE IF NOT EXISTS `allowances` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) DEFAULT NULL,
  `allow_date` date NOT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `emp_id` (`emp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT AUTO_INCREMENT=6 ;

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

CREATE TABLE IF NOT EXISTS `appointments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `apoint_date` date NOT NULL,
  `apoint_type` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `patient_id` (`patient_id`),
  KEY `doctor_id` (`doctor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `appointments`
--


-- --------------------------------------------------------

--
-- Table structure for table `automotives`
--

CREATE TABLE IF NOT EXISTS `automotives` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` text,
  `model` text,
  `insurance` text,
  `period` text,
  `expiry_date` date DEFAULT NULL,
  `oil_change` int(11) DEFAULT NULL,
  `license_expiry_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT AUTO_INCREMENT=4 ;

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

CREATE TABLE IF NOT EXISTS `banks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `contact` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`id`, `name`, `contact`) VALUES
(1, 'Altadamon', 999099909);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

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

CREATE TABLE IF NOT EXISTS `companies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `companies`
--


-- --------------------------------------------------------

--
-- Table structure for table `contracts`
--

CREATE TABLE IF NOT EXISTS `contracts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `contract_type` int(11) NOT NULL,
  `period` text NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

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

CREATE TABLE IF NOT EXISTS `curriculums` (
  `id` int(11) NOT NULL,
  `course_name` varchar(25) CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `semesters` int(11) NOT NULL,
  `credit_hours` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `curriculums`
--


-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE IF NOT EXISTS `departments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

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

CREATE TABLE IF NOT EXISTS `doctors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `specialization` varchar(30) DEFAULT NULL,
  `department_id` int(11) NOT NULL,
  `marital_status` varchar(30) DEFAULT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `department_id` (`department_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

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

CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `work_zone` text,
  PRIMARY KEY (`id`),
  KEY `payroll_id` (`payroll_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

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

CREATE TABLE IF NOT EXISTS `employee_cars` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) DEFAULT NULL,
  `auto_id` int(11) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `emp_id` (`emp_id`),
  KEY `auto_id` (`auto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT AUTO_INCREMENT=6 ;

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

CREATE TABLE IF NOT EXISTS `end_vouchers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `payroll_id` int(11) DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `payroll_id` (`payroll_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `end_vouchers`
--

INSERT INTO `end_vouchers` (`id`, `payroll_id`, `end_date`) VALUES
(3, 1, '2017-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE IF NOT EXISTS `expenses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `expense_date` date NOT NULL,
  `amount` int(11) NOT NULL,
  `description` text NOT NULL,
  `cat_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

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

CREATE TABLE IF NOT EXISTS `expense_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `expense_categories`
--


-- --------------------------------------------------------

--
-- Table structure for table `exports`
--

CREATE TABLE IF NOT EXISTS `exports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `export_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `exports`
--


-- --------------------------------------------------------

--
-- Table structure for table `export_details`
--

CREATE TABLE IF NOT EXISTS `export_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `export_details`
--


-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE IF NOT EXISTS `faculties` (
  `id` int(11) NOT NULL,
  `name` varchar(25) CHARACTER SET utf8 NOT NULL,
  `location` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculties`
--


-- --------------------------------------------------------

--
-- Table structure for table `imports`
--

CREATE TABLE IF NOT EXISTS `imports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL,
  `import_date` date NOT NULL,
  `payment_type` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `company_id` (`company_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `imports`
--


-- --------------------------------------------------------

--
-- Table structure for table `import_details`
--

CREATE TABLE IF NOT EXISTS `import_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `batch_number` int(11) NOT NULL,
  `expiry_date` date NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `import_details`
--


-- --------------------------------------------------------

--
-- Table structure for table `incomes`
--

CREATE TABLE IF NOT EXISTS `incomes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `income_date` date NOT NULL,
  `amount` int(11) NOT NULL,
  `description` text NOT NULL,
  `cat_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT AUTO_INCREMENT=3 ;

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

CREATE TABLE IF NOT EXISTS `income_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `income_categories`
--


-- --------------------------------------------------------

--
-- Table structure for table `lab_tests`
--

CREATE TABLE IF NOT EXISTS `lab_tests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `test` varchar(25) DEFAULT NULL,
  `reference_range` text NOT NULL,
  `unit` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `lab_tests`
--

INSERT INTO `lab_tests` (`id`, `test`, `reference_range`, `unit`) VALUES
(2, 'HCT', '2 - 5', 'g/dl'),
(3, 'Hb', '2 - 5', 'g/dl');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `orders`
--


-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE IF NOT EXISTS `order_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

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

CREATE TABLE IF NOT EXISTS `patients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `occupation` varchar(20) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `phone` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

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

CREATE TABLE IF NOT EXISTS `payrolls` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `start_date` date DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `period` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `payrolls`
--

INSERT INTO `payrolls` (`id`, `start_date`, `salary`, `period`) VALUES
(1, '2017-07-11', 1000, '7 years'),
(2, '2017-07-20', 12100, '5 years');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `unit_price` int(11) NOT NULL,
  `sell_price` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `products`
--


-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `amount` int(11) NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--


-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL,
  `name` varchar(25) CHARACTER SET utf8 NOT NULL,
  `phone` int(11) NOT NULL,
  `admission_date` date NOT NULL,
  `next_of_kin` varchar(25) CHARACTER SET utf8 NOT NULL,
  `nok_phone` int(11) NOT NULL,
  `address` varchar(25) CHARACTER SET utf8 NOT NULL,
  `nationality` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--


-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE IF NOT EXISTS `suppliers` (
  `id` int(11) NOT NULL,
  `name` varchar(25) CHARACTER SET utf8 NOT NULL,
  `address` varchar(25) CHARACTER SET utf8 NOT NULL,
  `personnel` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `homepage` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suppliers`
--


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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
