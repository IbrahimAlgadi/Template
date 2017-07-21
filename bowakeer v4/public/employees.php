<?php require_once("../includes/initialize.php"); ?>
<?php

	// 1. the current page number ($current_page)
	$page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;

	// 2. records per page ($per_page)
	$per_page = 3;

	// 3. total record count ($total_count)
	$total_count = employee::count_all();
	

	// Find all photos
	// use pagination instead
	//$photos = Products::find_all();
	
	$pagination = new Pagination($page, $per_page, $total_count);
	
	// Instead of finding all records, just find the records 
	// for this page
	$sql = "SELECT * FROM employee ";
	$sql .= "LIMIT {$per_page} ";
	$sql .= "OFFSET {$pagination->offset()}";
	$employees = employee::find_by_sql($sql);
    $sql_all = "SELECT * FROM employee ";
    $all_employees = employee::find_by_sql($sql_all);;
	
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
    
    <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-top" style="max-width:600px">

      <div class="w3-center  w3-teal"><br>
      <h3>Add</h3>
      </div>

      <form class="w3-container" action="actions/add/employee.php" method="POST">
        <div class="w3-section">
          <input class="w3-input w3-border" type="text" placeholder="Name" name="name" required>
          <input class="w3-input w3-border" type="number" placeholder="Phone" name="phone" required>
          <input class="w3-input w3-border" type="text" placeholder="Address" name="address" required>
          <input class="w3-input w3-border" placeholder="Qualifications" name="qualifications" required>
          <input class="w3-input w3-border" type="date" placeholder="Date of birth" name="dob" required>
          <input class="w3-input w3-border" type="text" placeholder="Next of Kin" name="nok" required>
          <input class="w3-input w3-border" type="number" placeholder=" Next of Kin Phone" name="nokphone" required>
          <input class="w3-input w3-border" type="text" placeholder="Annual Leave" name="al" required>
          <input class="w3-input w3-border" type="text" placeholder="SSID" name="ssid" required>
          <input class="w3-input w3-border" type="text" placeholder="Driving License" name="dl" required>
          <input class="w3-input w3-border" type="number" placeholder="Payroll id" name="pid" required>
          <input class="w3-input w3-border" type="text" placeholder="Work Zone" name="workz" required>
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
    <div class="w3-modal-content w3-animate-zoom" style="max-width:100%">

      <div class="w3-center  w3-teal">
      <img class="w3-center w3-padding" src="images/logo.jpg" /><br>
      <h3>Employees</h3>
      </div>
      <div class="w3-row w3-padding">
      <div id="modal-data"  class="w3-col m12" style="">
        <div id="table-modal-view" class="data-view" style="overflow-x:auto; ">
        
          <?php
            echo " <table class=\"w3-dash\">            
            <tr class=\"w3-teal\">
              <th>Id</th>
              <th>Name</th>
              <th>Phone</th>
              <th>Address</th>
              <th>SSID</th>
              <th>Payroll #</th>
              <th>Work zone</th>
            </tr>"	
        ?>
        
            <?php foreach($all_employees as $emp): ?>
            <tr>
                <td><?php echo $emp->Id; ?></td>
                <td><?php echo $emp->Name; ?></td>
                <td><?php echo $emp->Phone; ?></td>
                <td><?php echo $emp->Address; ?></td>
                <td><?php echo $emp->SSID; ?></td>
                <td><?php echo $emp->Payroll_id; ?></td>
                <td><?php echo $emp->Work_zone; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        </div>
    </div>
    </div>

      <div class="w3-container w3-padding-16 w3-light-grey">
        <div class="w3-row">
        <button id="prnt" class="w3-button w3-large w3-round-medium w3-block w3-teal w3-section w3-padding" type="submit" onclick="document.getElementById('prnt').style.display='none'; window.print();" >Print<i class="fa fa-print" ></i></button>
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
                   $sql = "SELECT Name FROM employee;";
                   $result = employee::find_by_sql($sql);
                   //var_dump($result);
                   foreach($result as $op){
                    echo "<option value=\"{$op->Name}\">" ;
                   }
                ?>
            </datalist>
            <a href="#" class="w3-button w3-teal w3-round-medium cx-margin-right" title="Search"><i class="fa fa-search"></i></a>
        </div>
    </div>
    </div>
<br />


    <div class="w3-row">
    <div id="pdf-print"  class="w3-col m12" style="">
        <div id="table-data-view" class="data-view" style="overflow-x:auto; ">
          <?php
            echo " <table>            
            <tr class=\"w3-teal\">
              <th>Id</th>
              <th>Name</th>
              <th>Phone</th>
              <th>Address</th>
              <th>SSID</th>
              <th>Payroll #</th>
              <th>Work zone</th>
              <th class=\"w3-center w3-right\"></th>
            </tr>"	
        ?>
        
            <?php foreach($employees as $emp): ?>
            <tr>
                <td><?php echo $emp->Id; ?></td>
                <td><?php echo $emp->Name; ?></td>
                <td><?php echo $emp->Phone; ?></td>
                <td><?php echo $emp->Address; ?></td>
                <td><?php echo $emp->SSID; ?></td>
                <td><?php echo $emp->Payroll_id; ?></td>
                <td><?php echo $emp->Work_zone; ?></td>
                <td class="w3-center  w3-right">
                <a href="actions/edit/edit_employee.php?id=<?php echo $emp->Id?>" class="w3-button w3-button-small w3-teal" title="Edit"><i class="fa fa-pencil"></i></a>    
                <a href="actions/delete/delete_employee.php?id=<?php echo $emp->Id?>" class="w3-button w3-button-small w3-red" title="Delete"><i class="fa fa-trash"></i></a>
                <a href="actions/print/print_employee.php?id=<?php echo $emp->Id?>" class="w3-button w3-button-small w3-blue" title="Print"><i class="fa fa-print"></i></a></td>
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
    	echo "<a href=\"employees.php?page=";
      echo $pagination->previous_page();
      echo "\" class=\"w3-bar-item w3-button\">&laquo;</a> "; 
    }

		for($i=1; $i <= $pagination->total_pages(); $i++) {
			if($i == $page) {
				echo " <a href=\"#\" class=\"w3-bar-item w3-button w3-teal\">{$i}</a> ";
			} else {
				echo " <a href=\"employees.php?page={$i}\" class=\"w3-bar-item w3-button \">{$i}</a> "; 
			}
		}

		if($pagination->has_next_page()) { 
			echo " <a href=\"employees.php?page=";
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
     
