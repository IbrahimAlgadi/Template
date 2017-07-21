<?php require_once("../includes/initialize.php"); ?>
<?php
	// Instead of finding all records, just find the records 
	// for this page
    if ($_GET['id'] != ''){
        $sql = "SELECT * FROM employee WHERE id={$_GET['id']}";    
        $edit_employee = employee::find_by_sql($sql);
    }else{
        echo "alert('Cannot Edit')";
    }
    
?>

<?php
	include_layout_template('header.php');
?>

<header class="w3-container w3-theme" style="padding:21px 32px">
  <h1 class="w3-xlarge">Update Employee</h1>
  
  
</header>

<br />


    <div class="w3-row">
    <div class="w3-col m3">
	&nbsp;
	</div>
    
    <div class="w3-col m6">
        <div class="w3-center" >
        <br />
        
		<form class="w3-container" action="actions/update/update_employee.php" method="POST">
<?php foreach($edit_employee as $emp): ?>
        <div class="w3-section">
          <input class="w3-input w3-border" type="hidden"  value="<?php echo $emp->Id; ?>" name="id" required>
          <input class="w3-input w3-border" type="text"  value="<?php echo $emp->Name; ?>" name="name" required>
          <input class="w3-input w3-border" type="number"  value="<?php echo $emp->Phone; ?>" name="phone" required>
          <input class="w3-input w3-border" type="text"  value="<?php echo $emp->Address; ?>" name="address" required>
          <input class="w3-input w3-border" type="text" value="<?php echo $emp->Qualifications; ?>" name="qualifications" required>
          <input class="w3-input w3-border" type="date"  value="<?php echo $emp->Date_of_birth; ?>" name="dob" required>
          <input class="w3-input w3-border" type="text"  value="<?php echo $emp->Next_of_kin; ?>" name="nok" required>
          <input class="w3-input w3-border" type="number"  value="<?php echo $emp->Next_of_kin_phone; ?>" name="nokphone" required>
          <input class="w3-input w3-border" type="text"  value="<?php echo $emp->Annual_leave; ?>" name="al" required>
          <input class="w3-input w3-border" type="text"  value="<?php echo $emp->SSID; ?>" name="ssid" required>
          <input class="w3-input w3-border" type="text"  value="<?php echo $emp->Driving_license; ?>" name="dl" required>
          <select class="w3-select w3-border" name="pid">
          <?php
                   $sql = "SELECT Id FROM payroll";
                   $result = payroll::find_by_sql($sql);
                   foreach($result as $op){
                    $option = "<option value=\"{$op->Id}\"" ;
                     if($op->Id==$emp->Payroll_id){
                       $option .= " selected ";
                     }
                     $option.= "> {$op->Id}</option>";
                     echo $option;
                   }
                ?></select>
          <input class="w3-input w3-border" type="text"  value="<?php echo $emp->Work_zone; ?>" name="workz" required>
        </div>
<?php endforeach; ?>   

      
		
		
    </div>
    </div>
    <div class="w3-col m3">
	</div>
    </div>
	<div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <div class="w3-row">
		<div class="w3-col m12">
		<div class="w3-col m3">&nbsp;</div>
        <div class="w3-col m2">
		<a href="employees.php" class="w3-red w3-bar-item w3-button w3-round-medium w3-large w3-padding w3-block w3-section">Cancel</a>
        </div>
        <div class="w3-col m1">&nbsp;</div>
        <div class="w3-col m3">
        <button  class="w3-button w3-large w3-round-medium w3-block w3-teal w3-section w3-padding" name="submit" value="submit" type="submit">Update <i class="fa fa-refresh w3-spin"></i></button>
        </div>
		<div class="w3-col m3">&nbsp;</div>
        </div>
		</div>
      </div>
      </form>
	
</div>

<?php
	include_layout_template('footer.php');
?>
     
