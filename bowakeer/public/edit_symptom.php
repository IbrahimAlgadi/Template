<?php require_once("../includes/initialize.php"); ?>
<?php
	// Instead of finding all records, just find the records 
	// for this page
    if ($_GET['id'] != ''){
        $sql = "SELECT * FROM symptoms WHERE id={$_GET['id']}";    
        $edit_symptom = symptom::find_by_sql($sql);
    }else{
        echo "alert('Cannot Edit')";
    }
    
?>

<?php
	include_layout_template('header.php');
?>

<header class="w3-container w3-theme" style="padding:21px 32px">
  <h1 class="w3-xlarge">Update Symptom</h1>
  
  
</header>

<br />


    <div class="w3-row">
    <div class="w3-col m3">
	&nbsp;
	</div>
    
    <div class="w3-col m6">
        <div class="w3-center" >
        <br />
        
		<form class="w3-container" action="actions/update/update_symptom.php" method="POST">
 <!--RFC: This Code grabs the edited data and post it to the update_symort.php -->
<?php foreach($edit_symptom as $sym): ?>
	<div class="w3-row">
          <input class="w3-input w3-border" type="hidden"  value="<?php echo $sym->id; ?>" name="id" required>
		  <div   class="w3-col m3 w3-left-align"><label for="name"  >Name</label></div>
          <div   class="w3-col m9"><input id="name" class="w3-input w3-border" type="text"  value="<?php echo $sym->name; ?>" name="name" required></div>
		  <div   class="w3-col m3 w3-left-align"><label for="cat_id" >Cat id</label></div>
          <div   class="w3-col m9"><input id="cat_id" class="w3-input w3-border" type="date"  value="<?php echo $sym->symort_date; ?>" name="symort_date" required></div>
		  <div   class="w3-col m3 w3-left-align"><label for="status" >Satus</label></div>
		  <div   class="w3-col m9"><input id="status" class="w3-input w3-border" type="text"  value="<?php echo $sym->status; ?>" name="symort_date" required></div>
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
		<a href="symptoms.php" class="w3-red w3-bar-item w3-button w3-round-medium w3-large w3-padding w3-block w3-section">Cancel</a>
        </div>
        <div class="w3-col m1">&nbsp;</div>
        <div class="w3-col m3">
        <!--RFC: This is the button when presesd will submit the data to the update_symort.php -->
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
     
