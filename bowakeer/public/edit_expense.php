<?php require_once("../includes/initialize.php"); ?>
<?php
	// Instead of finding all records, just find the records 
	// for this page
    if ($_GET['id'] != ''){
        $sql = "SELECT * FROM expenses WHERE id={$_GET['id']}";    
        $edit_expense = expense::find_by_sql($sql);
    }else{
        echo "alert('Cannot Edit')";
    }
    
?>

<?php
	include_layout_template('header.php');
?>

<header class="w3-container w3-theme" style="padding:21px 32px">
  <h1 class="w3-xlarge">Update Expense</h1>
  
  
</header>

<br />


    <div class="w3-row">
    <div class="w3-col m3">
	&nbsp;
	</div>
    
    <div class="w3-col m6">
        <div class="w3-center" >
        <br />
        
		<form class="w3-container" action="actions/update/update_expense.php" method="POST">
<?php foreach($edit_expense as $emp): ?>
        <div class="w3-section">
          <input class="w3-input w3-border" type="hidden"  value="<?php echo $emp->id; ?>" name="id" required>
          <input class="w3-input w3-border" type="text"  value="<?php echo $emp->expense_date; ?>" name="expense_date" required>
          <input class="w3-input w3-border" type="number"  value="<?php echo $emp->amount; ?>" name="amount" required>
          <input class="w3-input w3-border" type="text"  value="<?php echo $emp->description; ?>" name="description" required>
          <select class="w3-select w3-border" name="cat_id">
          <?php
                   $sql = "SELECT id FROM categories";
                   $result = category::find_by_sql($sql);
                   foreach($result as $op){
                    $option = "<option value=\"{$op->id}\"" ;
                     if($op->id==$emp->payroll_id){
                       $option .= " selected ";
                     }
                     $option.= "> {$op->id}</option>";
                     echo $option;
                   }
                ?></select>
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
		<a href="expenses.php" class="w3-red w3-bar-item w3-button w3-round-medium w3-large w3-padding w3-block w3-section">Cancel</a>
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
     
