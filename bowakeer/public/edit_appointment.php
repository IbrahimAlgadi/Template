<?php require_once("../includes/initialize.php"); ?>
<?php
	// Instead of finding all records, just find the records 
	// for this page
    if ($_GET['id'] != ''){
        $sql = "SELECT * FROM appointments WHERE id={$_GET['id']}";    
        $edit_appointment = appointment::find_by_sql($sql);
    }else{
        echo "alert('Cannot Edit')";
    }
    
?>

<?php
	include_layout_template('header.php');
?>

<header class="w3-container w3-theme" style="padding:21px 32px">
  <h1 class="w3-xlarge">Update Appointment</h1>
  
  
</header>

<br />


    <div class="w3-row">
    <div class="w3-col m3">
	&nbsp;
	</div>
    
    <div class="w3-col m6">
        <div class="w3-center" >
        <br />
        
		<form class="w3-container" action="actions/update/update_appointment.php" method="POST">
 <!--RFC: This Code grabs the edited data and post it to the update_appointment.php -->
<?php foreach($edit_appointment as $exp): ?>
	<div class="w3-row">
          <input class="w3-input w3-border" type="hidden"  value="<?php echo $exp->id; ?>" name="id" required>
          
		  <div for="patient_id" class="w3-col m3 w3-left-align"><label  >Patient Id</label></div>
          <div class="w3-col m9"><input id="patient_id" class="w3-input w3-border" type="number"  value="<?php echo $exp->patient_id; ?>" name="patient_id" required></div>
		  <div  for="doctor_id" class="w3-col m3 w3-left-align"><label >Doctor Id</label></div>
          <div class="w3-col m9"><input id="doctor_id" class="w3-input w3-border" type="number"  value="<?php echo $exp->doctor_id; ?>" name="doctor_id" required></div>
          <div for="apoint_date" class="w3-col m3 w3-left-align"><label  >Appoint Date</label></div>
          <div class="w3-col m9"><input id="apoint_date" class="w3-input w3-border" type="date"  value="<?php echo $exp->apoint_date; ?>" name="apoint_date" required></div>
		  <div  for="apoint_type" class="w3-col m3 w3-left-align"><label >Appoint Type</label></div>
          <div class="w3-col m9"><input id="apoint_type" class="w3-input w3-border" type="text"  value="<?php echo $exp->apoint_type; ?>" name="apoint_type" required></div>
          <div for="status" class="w3-col m3 w3-left-align"><label  >Status</label></div>
          <div class="w3-col m9"><input id="status" class="w3-input w3-border" type="text"  value="<?php echo $exp->status; ?>" name="status" required></div>
		  <div  for="notes" class="w3-col m3 w3-left-align"><label >Notes</label></div>
          <div class="w3-col m9"><input id="notes" class="w3-input w3-border" type="text"  value="<?php echo $exp->notes; ?>" name="notes" required></div>
          <div for="labcomments" class="w3-col m3 w3-left-align"><label  >Lab Comments</label></div>
          <div class="w3-col m9"><input id="labcomments" class="w3-input w3-border" type="text"  value="<?php echo $exp->labcomments; ?>" name="labcomments" required></div>
		  <div  for="imgcomments" class="w3-col m3 w3-left-align"><label >Image Comments</label></div>
          <div class="w3-col m9"><input id="imgcomments" class="w3-input w3-border" type="text"  value="<?php echo $exp->imgcomments; ?>" name="imgcomments" required></div>
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
		<a href="appointments.php" class="w3-red w3-bar-item w3-button w3-round-medium w3-large w3-padding w3-block w3-section">Cancel</a>
        </div>
        <div class="w3-col m1">&nbsp;</div>
        <div class="w3-col m3">
        <!--RFC: This is the button when presesd will submit the data to the update_appointment.php -->
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
     
