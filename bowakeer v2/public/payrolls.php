<?php require_once("../includes/initialize.php"); ?>
<?php

	// 1. the current page number ($current_page)
	$page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;

	// 2. records per page ($per_page)
	$per_page = 1;

	// 3. total record count ($total_count)
	$total_count = payroll::count_all();
	

	// Find all photos
	// use pagination instead
	//$photos = Products::find_all();
	
	$pagination = new Pagination($page, $per_page, $total_count);
	
	// Instead of finding all records, just find the records 
	// for this page
	$sql = "SELECT * FROM payroll ";
	$sql .= "LIMIT {$per_page} ";
	$sql .= "OFFSET {$pagination->offset()}";
	$payrolls = payroll::find_by_sql($sql);
	
	// Need to add ?page=$page to all links we want to 
	// maintain the current page (or store $page in $session)
	
?>

<?php
	include_layout_template('header.php');
?>

<header class="w3-container w3-theme" style="padding:21px 32px">
  <h1 class="w3-xlarge">3RP System</h1>
  
  <div class="w3-row">
    <div class="w3-col m12">
    <div class="w3-bar">
   <a href="#" class="w3-bar-item w3-button w3-round-medium">Home</a>
   <a href="#" class="w3-bar-item w3-button w3-round-medium">Link 1</a>
   <a href="#" class="w3-bar-item w3-button w3-round-medium">Link 2</a>
   <a href="#" class="w3-bar-item w3-button w3-round-medium">Link 3</a>
</div> 
</div>
    </div>
  
</header>


<div class="w3-container" style="padding:32px;">

    
    <div class="w3-row">
    <div class="w3-col m4 ">
    
    <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-teal w3-round-medium w3-medium" title="Add New"><i class="fa fa-plus"></i> </button>
    <button onclick="document.getElementById('id02').style.display='block'" class="w3-button w3-teal w3-round-medium w3-medium" title="Print"><i class="fa fa-print"></i> </button>
    
    <div class="dropdown">
      <button class="dropbtn w3-button w3-teal w3-round-medium w3-medium"><i class="fa fa-share-square-o" style="padding:0px"></i></button>
      <div class="dropdown-content w3-animate-zoom">
        <a href="#"><i class="fa fa-file-pdf-o"></i> PDF</a>
        <a href="#"><i class="fa fa-file-excel-o"></i> Excel</a>
      </div>
    </div>
    
    
    <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center  w3-teal"><br>
      <h3>Add</h3>
      </div>

      <form class="w3-container" action="actions/add/payroll.php" method="POST">
        <div class="w3-section">
          <input class="w3-input w3-border" type="date" placeholder="Start Date" name="sdate" required>
          <input class="w3-input w3-border" type="number" placeholder="Salary" name="salary" required>
          <input class="w3-input w3-border" type="text" placeholder="Period" name="period" required>
        </div>
      

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <div class="w3-row">
        <div class="w3-col m4">
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-red w3-button w3-large w3-round-medium w3-block w3-section w3-padding ">Cancel <i class="fa fa-close"></i></button>
        </div>
        <div class="w3-col m1">&nbsp;</div>
        <div class="w3-col m7">
        <button class="w3-button w3-large w3-round-medium w3-block w3-teal w3-section w3-padding" type="submit" name="submit" value="submit">Save <i class="fa fa-floppy-o"></i></button>
        </div>
        </div>
      </div>
      </form>

    </div>
  </div>
  
  <div id="id02" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center  w3-teal"><br>
      <h3>Print</h3>
      </div>

      <form class="w3-container" action="/action_page.php">
        <div class="w3-section">
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter First Name" name="usrname" required>
          <input class="w3-input w3-border" type="password" placeholder="Enter Last Name" name="psw" required>
          
        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <div class="w3-row">
        <div class="w3-col m4">
        <button onclick="document.getElementById('id02').style.display='none'" type="button" class="w3-red w3-button w3-large w3-round-medium w3-block w3-section w3-padding ">Cancel <i class="fa fa-close"></i></button>
        </div>
        <div class="w3-col m1">&nbsp;</div>
        <div class="w3-col m7">
        <button class="w3-button w3-large w3-round-medium w3-block w3-teal w3-section w3-padding" type="submit">Print <i class="fa fa-print"></i></button>
        </div>
        </div>
      </div>

    </div>
  </div>
  
    </div>
    <div class="w3-col m4 ">
    <div class="w3-container">
        <select class="w3-select w3-border" style="float: left; width: 80%;" name="option">
            <option value="" selected>Choose Filter</option>
            <option value="1">Filter 1</option>
            <option value="2">Filter 2</option>
            <option value="3">Filter 3</option>
            <option value="4">Others</option>
        </select>
        <a href="#" class="w3-button w3-teal w3-round-medium cx-margin-right" title="Filter Results"><i class="fa fa-filter" alt="Filter"></i></a>
    </div>
    </div>
    <div class="w3-right w3-col m4 ">
        <div class="w3-container">
            <input list="cusom-list" type="text" class="w3-input w3-border" style="float: left; width: 80%;" placeholder="Search.." title="Enter The Seach Term">
            <!-- We Will Fill This Datalist from database using PHP -->
            <datalist id="cusom-list">
                <?php
                   $sql = "SELECT Id FROM payroll;";
                   $result = payroll::find_by_sql($sql);
                   //var_dump($result);
                   foreach($result as $op){
                    echo "<option value=\"{$op->Id}\">" ;
                   }
                ?>
                <!--
<option value="Ibrahim">
                <option value="Muhammed">
                <option value="Missi">
                <option value="Malik">
                <option value="Khalid">
                <option value="Mudather">
                <option value="Ice">
                <option value="Inesta">
                <option value="Homeless">
-->
            </datalist>
            <a href="#" class="w3-button w3-teal w3-round-medium cx-margin-right" title="Search"><i class="fa fa-search"></i></a>
        </div>
    </div>
    </div>
<br />


    <div class="w3-row">
    <div  class="w3-col m12" style="">
        <div class="data-view" style="overflow-x:auto; ">
          <table>
            <tr class="w3-teal">
              <th>Id</th>
              <th>Start Date</th>
              <th>Salary</th>
              <th>Period</th>
              <th class="w3-center w3-right"></th>
            </tr>
            
            
            <?php foreach($payrolls as $payr): ?>
  <tr><td><?php echo $payr->Id; ?></td>
  <td><?php echo $payr->Start_date; ?></td>
  <td><?php echo $payr->Salary; ?></td>
  <td><?php echo $payr->Period; ?></td>
  <td class="w3-center  w3-right">
        <a href="actions/edit/edit_payroll.php?id=<?php echo $payr->Id?>" class="w3-button w3-button-small w3-teal" title="Edit"><i class="fa fa-pencil"></i></a>
        <a href="actions/delete/delete_payroll.php?id=<?php echo $payr->Id?>" class="w3-button w3-button-small w3-red" title="Delete"><i class="fa fa-trash"></i></a> 
        <a href="actions/print/print_payroll.php?id=<?php echo $payr->Id?>" class="w3-button w3-button-small w3-blue" title="Print"><i class="fa fa-print"></i></a></td>
  </tr>
			
<?php endforeach; ?>
            
          </table>
        </div>
    </div>
    
    <div class="w3-col m12">
        <div class="w3-center" >
        <br />
        <div class="w3-bar w3-border w3-round">
        
        <?php
	if($pagination->total_pages() > 1) {
		
		if($pagination->has_previous_page()) { 
    	echo "<a href=\"payrolls.php?page=";
      echo $pagination->previous_page();
      echo "\" class=\"w3-bar-item w3-button\">&laquo;</a> "; 
    }

		for($i=1; $i <= $pagination->total_pages(); $i++) {
			if($i == $page) {
				echo " <a href=\"#\" class=\"w3-bar-item w3-button w3-teal\">{$i}</a> ";
			} else {
				echo " <a href=\"payrolls.php?page={$i}\" class=\"w3-bar-item w3-button \">{$i}</a> "; 
			}
		}

		if($pagination->has_next_page()) { 
			echo " <a href=\"payrolls.php?page=";
			echo $pagination->next_page();
			echo "\" class=\"w3-bar-item w3-button\">&raquo;</a> "; 
		}
		
	}

?>


                  </div>
    </div>
    </div>
    
    </div>
</div>

<?php
	include_layout_template('footer.php');
?>
     
