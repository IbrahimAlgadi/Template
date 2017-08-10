<?php require_once("../includes/initialize.php"); ?>
<?php
	// Instead of finding all records, just find the records 
	// for this page
    if ($_GET['id'] != ''){
        $sql = "SELECT * FROM patients WHERE id={$_GET['id']}";    
        $edit_patient = patient::find_by_sql($sql);
    }else{
        echo "alert('Cannot Edit')";
    }
    
?>

<?php
	include_layout_template('header.php');
?>

<header class="w3-container w3-theme" style="padding:21px 32px">
  <h1 class="w3-xlarge">Update Patient</h1>
  
  
</header>

<br />


    <div class="w3-row">
    <div class="w3-col m3">
	&nbsp;
	</div>
    
    <div class="w3-col m6">
        <div class="w3-center" >
        <br />
        
		<form class="w3-container" action="actions/update/update_patient.php" method="POST">
<?php foreach($edit_patient as $emp): ?>
        <div class="w3-section">
            <div class="w3-row">
                
                
                <input id="id" class="w3-input w3-border" type="hidden"  value="<?php echo $emp->id; ?>" name="id" required>
                
                <div class="w3-col m3 w3-left-align">
                    <label for="name">Name</label>
                </div>
                <div class="w3-col m9">
                    <input id="name" class="w3-input w3-border" type="text"  value="<?php echo $emp->name; ?>" name="name" required>
                </div>
                
                
                <div class="w3-col m3 w3-left-align">
                    <label for="age">Age</label>
                </div>
                <div class="w3-col m9">
                    <input id="age" class="w3-input w3-border" type="number"  value="<?php echo $emp->age; ?>" name="age" required>
                </div>
                
                
                <div class="w3-col m3 w3-left-align">
                    <label for="gender">Gender</label>
                </div>
                <div class="w3-col m9">
                    <input id="gender" class="w3-input w3-border" type="text"  value="<?php echo $emp->gender; ?>" name="gender" required>
                </div>
                
                
                <div class="w3-col m3 w3-left-align">
                    <label for="occupation">Occupation</label>
                </div>
                <div class="w3-col m9">
                    <input id="occupation" class="w3-input w3-border" type="text"  value="<?php echo $emp->occupation; ?>" name="occupation" required>
                </div>
                
                
                <div class="w3-col m3 w3-left-align">
                    <label for="address">Address</label>
                </div>
                <div class="w3-col m9">
                    <input id="address" class="w3-input w3-border" type="text"  value="<?php echo $emp->address; ?>" name="address" required>
                </div>
                
                
                <div class="w3-col m3 w3-left-align">
                <label for="phone">Phone</label>
                </div>
                <div class="w3-col m9">
                    <input id="phone" class="w3-input w3-border" type="number"  value="<?php echo $emp->phone; ?>" name="phone" required>
                </div>
                
            </div>
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
		<a href="patients.php" class="w3-red w3-bar-item w3-button w3-round-medium w3-large w3-padding w3-block w3-section">Cancel</a>
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
     
