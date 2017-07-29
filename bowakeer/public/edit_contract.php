<?php require_once("../includes/initialize.php"); ?>
<?php
	// Instead of finding all records, just find the records 
	// for this page
    if ($_GET['id'] != ''){
        $sql = "SELECT * FROM contracts WHERE id={$_GET['id']}";    
        $edit_contract = contract::find_by_sql($sql);
    }else{
        echo "alert('Cannot Edit')";
    }
    
?>

<?php
	include_layout_template('header.php');
?>

<header class="w3-container w3-theme" style="padding:21px 32px">
  <h1 class="w3-xlarge">Update Contarct</h1>
  
  
</header>

<br />


    <div class="w3-row">
    <div class="w3-col m3">
	&nbsp;
	</div>
    
    <div class="w3-col m6">
        <div class="w3-center" >
        <br />
        
		<form class="w3-container" action="actions/update/update_contract.php" method="POST">
 <!--RFC: This Code grabs the edited data and post it to the update_contract.php -->
<?php foreach($edit_contract as $pay): ?>
        <div class="w3-section">
          <input class="w3-input w3-border" type="hidden"  value="<?php echo $pay->id; ?>" name="id" required>
          <input class="w3-input w3-border" type="text" placeholder="Name" value="<?php echo $pay->name ?>" name="name" required>
          <input class="w3-input w3-border" type="number" placeholder="Contract Type" value="<?php echo $pay->contract_type ?>" name="contract_type" required>
          <input class="w3-input w3-border" type="text" placeholder="Period" value="<?php echo $pay->period ?>" name="period" required>
          <input class="w3-input w3-border" type="date" placeholder="Start Date" value="<?php echo $pay->start_date ?>" name="start_date" required>
          <input class="w3-input w3-border" type="date" placeholder="End Date" value="<?php echo $pay->end_date ?>" name="end_date" required>
          <input class="w3-input w3-border" type="text" placeholder="Description" value="<?php echo $pay->description ?>" name="description" required>
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
		<a href="contracts.php" class="w3-red w3-bar-item w3-button w3-round-medium w3-large w3-padding w3-block w3-section">Cancel</a>
        </div>
        <div class="w3-col m1">&nbsp;</div>
        <div class="w3-col m3">
        <!--RFC: This is the button when presesd will submit the data to the update_contract.php -->
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
     
