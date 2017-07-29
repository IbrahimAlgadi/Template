<!DOCTYPE html>
<html>
<title>3RP System</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="stylesheets/styles.css">
<link rel="stylesheet" href="stylesheets/color.css">
<link rel="stylesheet" href="stylesheets/font.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />-->

<style>
body {font-family: "Roboto", sans-serif}
.w3-bar-block .w3-bar-item{padding:16px;font-weight:bold}
</style>
<script type="text/javascript" src="javascripts/ajax.js"></script>

<body>
<nav class="w3-sidebar w3-bar-block w3-collapse w3-animate-left w3-card-2" style="z-index:3;width:250px;" id="mySidebar">
  
  <div class="w3-container" style="width:inherit; height:150px; padding:0px;position: relative; ">
    <img src="images/logo.jpg" style="width:inherit; height:inherit"> 
    <div id="accountpane" class="w3-center">
        <img src="images/user.png" style="width:25%; height:25%"> 
        <a href="#"><h4>Dubai company</h4></a>
    </div>
  </div>
 
  
  <a class="w3-bar-item w3-button w3-hide-large w3-large w3-animate-leftt" href="javascript:void(0)" onclick="w3_close()">Close <i class="fa fa-remove"></i></a>
  
  <a class="w3-bar-item w3-button w3-teal bolded-bar-title w3-animate-left" href="#"><i class="fa fa-home"></i> Home</a>
  
  <div>
    <a class="w3-bar-item w3-button bolded-bar-title w3-animate-left" onclick="myAccordion('demo')" href="javascript:void(0)"><i class="fa fa-hospital-o"></i> Clinics <i class="fa fa-caret-down w3-right"></i></a>
    <div id="demo" class="w3-hide w3-animate-zoom">
      <a class="w3-bar-item w3-button bolded-bar-subitems" href="#">&nbsp;&nbsp;<i class="fa fa-wheelchair"></i> Patients</a>	
      <a class="w3-bar-item w3-button bolded-bar-subitems" href="#">&nbsp;&nbsp;<i class="fa fa-user-md"></i> Doctors</a>
      <a class="w3-bar-item w3-button bolded-bar-subitems" href="#">&nbsp;&nbsp;<i class="fa fa-flask"></i> Laboratory</a>
      <a class="w3-bar-item w3-button bolded-bar-subitems" href="#">&nbsp;&nbsp;<i class="fa fa-calendar-check-o"></i> Appointments</a>
    </div>
  </div>
  
  <div>
    <a class="w3-bar-item w3-button bolded-bar-title w3-animate-left" onclick="myAccordion('acc')" href="javascript:void(0)"><i class="fa fa-calculator"></i> Accounting <i class="fa fa-caret-down w3-right"></i></a>
    <div id="acc" class="w3-hide w3-animate-zoom">
      <a class="w3-bar-item w3-button bolded-bar-subitems" href="accounts_payables.php">&nbsp;&nbsp;<i class="fa fa-credit-card"></i> Accounts Payable</a>
      <a class="w3-bar-item w3-button bolded-bar-subitems" href="accounts_reciveables.php">&nbsp;&nbsp;<i class="fa fa-usd"></i> Accounts Receivable</a>
      <a class="w3-bar-item w3-button bolded-bar-subitems" href="incomes.php">&nbsp;&nbsp;<i class="fa fa-money"></i> Income</a>
      <a class="w3-bar-item w3-button bolded-bar-subitems" href="expenses.php">&nbsp;&nbsp;<i class="fa fa-chain-broken"></i> Expenses</a>	
      <a class="w3-bar-item w3-button bolded-bar-subitems" href="contracts.php">&nbsp;&nbsp;<i class="fa fa-handshake-o"></i> Contracts</a>
    </div>
  </div>
  <div>
    <a class="w3-bar-item w3-button bolded-bar-title w3-animate-left" onclick="myAccordion('hr')" href="javascript:void(0)"><i class="fa fa-id-card-o"></i> Human Resources <i class="fa fa-caret-down w3-right"></i></a>
    <div id="hr" class="w3-hide w3-animate-zoom">
      <a class="w3-bar-item w3-button bolded-bar-subitems" href="employees.php">&nbsp;&nbsp;<i class="fa fa-group"></i> Employees</a>
      <a class="w3-bar-item w3-button bolded-bar-subitems" href="payrolls.php">&nbsp;&nbsp;<i class="fa fa-paypal"></i> Payroll</a>
    </div>
  </div>
  <div>
    <a class="w3-bar-item w3-button bolded-bar-title w3-animate-left" onclick="myAccordion('sm')" href="javascript:void(0)"><i class="fa fa-shopping-cart"></i> Sales and Marketing <i class="fa fa-caret-down w3-right"></i></a>
    <div id="sm" class="w3-hide w3-animate-zoom">
      <a class="w3-bar-item w3-button bolded-bar-subitems" href="orders.php">&nbsp;&nbsp;<i class="fa fa-bar-chart"></i> Sales</a>
      <a class="w3-bar-item w3-button bolded-bar-subitems" href="#">&nbsp;&nbsp;<i class="fa fa-chain"></i> Suppliers</a>
      <a class="w3-bar-item w3-button bolded-bar-subitems" href="#">&nbsp;&nbsp;<i class="fa fa-male"></i><i class="fa fa-female"></i> Customers</a>
      <a class="w3-bar-item w3-button bolded-bar-subitems" href="#">&nbsp;&nbsp;<i class="fa fa-retweet"></i> Refunds</a>
    </div>
  </div>
  <div>
    <a class="w3-bar-item w3-button bolded-bar-title w3-animate-left" onclick="myAccordion('inv')" href="javascript:void(0)"><i class="fa fa-archive"></i> Inventory <i class="fa fa-caret-down w3-right"></i></a>
    <div id="inv" class="w3-hide w3-animate-zoom">
      <a class="w3-bar-item w3-button bolded-bar-subitems" href="#">&nbsp;&nbsp;<i class="fa fa-sign-in"></i> Imports</a>
      <a class="w3-bar-item w3-button bolded-bar-subitems" href="#">&nbsp;&nbsp;<i class="fa fa-sign-out"></i> Exports</a>
    </div>
  </div>
  <div>
    <a class="w3-bar-item w3-button bolded-bar-title w3-animate-left" onclick="myAccordion('rep')" href="javascript:void(0)"><i class="fa fa-line-chart"></i> Reports <i class="fa fa-caret-down w3-right"></i></a>
    <div id="rep" class="w3-hide w3-animate-zoom">
      <a class="w3-bar-item w3-button bolded-bar-subitems" href="#">&nbsp;&nbsp;<i class="fa fa-file-text-o"></i> Patients</a>
      <a class="w3-bar-item w3-button bolded-bar-subitems" href="#">&nbsp;&nbsp;<i class="fa fa-dashboard"></i> Sales</a>
      <a class="w3-bar-item w3-button bolded-bar-subitems" href="#">&nbsp;&nbsp;<i class="fa fa-paste"></i> Accounts</a>
      <a class="w3-bar-item w3-button bolded-bar-subitems" href="#">&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i> Inventory</a>
    </div>
  </div>
  <div>
    <a class="w3-bar-item w3-button bolded-bar-title w3-animate-left" onclick="myAccordion('edu')" href="javascript:void(0)"><i class="fa fa-line-chart"></i> Education <i class="fa fa-caret-down w3-right"></i></a>
    <div id="edu" class="w3-hide w3-animate-zoom">
      <a class="w3-bar-item w3-button bolded-bar-subitems" href="#">&nbsp;&nbsp;<i class="fa fa-file-text-o"></i> Faculties</a>
      <a class="w3-bar-item w3-button bolded-bar-subitems" href="#">&nbsp;&nbsp;<i class="fa fa-dashboard"></i> Students</a>
      <a class="w3-bar-item w3-button bolded-bar-subitems" href="#">&nbsp;&nbsp;<i class="fa fa-paste"></i> Curriculum</a>
    </div>
  </div>
</nav>


<div class="w3-overlay w3-hide-large w3-animate-fading w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>

<div class="w3-main" style="margin-left:250px;">

<!-- When Scrolling Down this Thing appears -->
<div id="myTop" class="w3-container w3-top w3-theme w3-large">
  <p><i class="fa fa-bars w3-button w3-teal w3-hide-large w3-xlarge" onclick="w3_open()"></i>
  <span id="myIntro" class="w3-hide">I3RP System</span></p>
</div>