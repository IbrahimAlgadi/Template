<?php

// Define the core paths
// Define them as absolute paths to make sure that require_once works as expected

// DIRECTORY_SEPARATOR is a PHP pre-defined constant
// (\ for Windows, / for Unix)
defined('DS') ? null : define('DS', '/');

defined('SITE_ROOT') ? null : 
//C:\xampp\htdocs\git\Template\i3m
	define('SITE_ROOT', DS.'xampp2'.DS.'htdocs'.DS.'git'.DS.'Template'.DS.'bowakeer');


defined('LIB_PATH') ? null : define('LIB_PATH', SITE_ROOT.DS.'includes');

// load config file first
require_once(LIB_PATH.DS.'config.php');

// load basic functions next so that everything after can use them
require_once(LIB_PATH.DS.'functions.php');

// load core objects
require_once(LIB_PATH.DS.'session.php');
require_once(LIB_PATH.DS.'database.php');
require_once(LIB_PATH.DS.'database_object.php');
require_once(LIB_PATH.DS.'pagination.php');

// load database-related classes
require_once(LIB_PATH.DS.'user.php');
require_once(LIB_PATH.DS.'employee.php');
require_once(LIB_PATH.DS.'payroll.php');
require_once(LIB_PATH.DS.'end_voucher.php');
require_once(LIB_PATH.DS.'account_payable.php');
require_once(LIB_PATH.DS.'account_receiveable.php');
require_once(LIB_PATH.DS.'contract.php');
require_once(LIB_PATH.DS.'income.php');
require_once(LIB_PATH.DS.'expense.php');
require_once(LIB_PATH.DS.'category.php');
require_once(LIB_PATH.DS.'order.php');
require_once(LIB_PATH.DS.'order_detail.php');
require_once(LIB_PATH.DS.'doctor.php');
require_once(LIB_PATH.DS.'department.php');
require_once(LIB_PATH.DS.'lab_test.php');
require_once(LIB_PATH.DS.'patient.php');
require_once(LIB_PATH.DS.'export.php');
require_once(LIB_PATH.DS.'import.php');
//require_once(LIB_PATH.DS.'appointment.php');

?>