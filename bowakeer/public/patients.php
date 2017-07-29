<?php require_once("../includes/initialize.php"); ?>
<!--RFC : Only Change the class-->

<?php

	// 1. the current page number ($current_page)
	$page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;

	// 2. records per page ($per_page)
	$per_page = 3;

	// 3. total record count ($total_count)
	$total_count = patient::count_all();
	

	// Find all photos
	// use pagination instead
	//$photos = Products::find_all();
	
	$pagination = new Pagination($page, $per_page, $total_count);
	
	// Instead of finding all records, just find the records 
	// for this page
	$sql = "SELECT * FROM patients ";
	$sql .= "LIMIT {$per_page} ";
	$sql .= "OFFSET {$pagination->offset()}";
	$patients = patient::find_by_sql($sql);
    $sql_all = "SELECT * FROM patients ";
    $all_patients = patient::find_by_sql($sql_all);;
	
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
   <a href="patients.php" class="w3-bar-item w3-button w3-round-medium">Home</a>
   <a href="#" class="w3-bar-item w3-button w3-round-medium">Visits</a>
</div> 
</div>
    </div>
  
</header>


<div class="w3-container" style="padding:32px;">

    
    <div class="w3-row">
    <div class="w3-col m3 ">
    <!--RFC: this add button is used to call the add model -->
    <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-teal w3-round-medium w3-medium" title="Add New"><i class="fa fa-plus"></i> </button>
    <!--RFC: This print button used for calling the print model -->
    <button onclick="document.getElementById('id02').style.display='block'" class="w3-button w3-teal w3-round-medium w3-medium" title="Print"><i class="fa fa-print"></i> </button>
    
    <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-top" style="max-width:600px">

      <div class="w3-center  w3-teal"><br>
      <h3>Add</h3>
      </div>

<!--RFC: Only Change the text and create the patient.php and put it inside the actions -->
      <form class="w3-container" action="actions/add/patient.php" method="POST">
        <div class="w3-section">
          <input class="w3-input w3-border" type="text" placeholder="Name" name="name" required>
          <input class="w3-input w3-border" type="number" placeholder="Age" name="age" required>
          <input class="w3-input w3-border" type="text" placeholder="Gender" name="gender" required>
          <input class="w3-input w3-border" type="text" placeholder="Occupation" name="occupation" required>
          <input class="w3-input w3-border" type="text" placeholder="Address" name="address" required>
          <input class="w3-input w3-border" type="number" placeholder="Phone" name="phone" required>
        </div>
      

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <div class="w3-row">
        <div class="w3-col m4">
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-red w3-button w3-large w3-round-medium w3-block w3-section w3-padding ">Cancel <i class="fa fa-close"></i></button>
        </div>
        <div class="w3-col m1">&nbsp;</div>
        <div class="w3-col m7">
        <!--RFC: This button submits to patient.php -->
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
      <h3>Patients</h3>
      </div>
      <div class="w3-row w3-padding">
      <div id="modal-data"  class="w3-col m12" style="">
        <div id="table-modal-view" class="data-view" style="overflow-x:auto; ">
        <!--RFC: This is the table that show when we press the print button, it grabs all the database data and print it -->
          <?php
            echo " <table class=\"w3-dash\">            
            <tr class=\"w3-teal\">
              <th>Id</th>
              <th>Name</th>
			  <th>Age</th>
			  <th>Gender</th>
			  <th>Occupation</th>
			  <th>Address</th>
              <th>Phone</th>
            </tr>"	
        ?>
        <!--RFC: This Foreach fill tha table with the graped data -->
            <?php foreach($all_patients as $emp): ?>
            <tr>
                <td><?php echo $emp->id; ?></td>
                <td><?php echo $emp->name; ?></td>
				<td><?php echo $emp->age; ?></td>
				<td><?php echo $emp->gender; ?></td>
				<td><?php echo $emp->occupation; ?></td>
                <td><?php echo $emp->address; ?></td>
				<td><?php echo $emp->phone; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        </div>
    </div>
    </div>

      <div class="w3-container w3-padding-16 w3-light-grey">
        <div class="w3-row">
        <!--RFC: This button is used to print the resulted table -->
        <button id="prnt" class="w3-button w3-large w3-round-medium w3-block w3-teal w3-section w3-padding" type="submit" onclick="document.getElementById('prnt').style.display='none'; window.print();" >Print <i class="fa fa-print" ></i></button>
        </div>
      </div>

    </div>
  </div>

    </div>
    
    <div class="w3-col m5">
    <div class="w3-container">
    <form action="patients.php" >
        <select class="w3-select w3-border" style="float: left; width: 60%;" name="filter">
            <option value="" selected>Choose Filter</option>
            <option value="1">Filter 1</option>
            <option value="2">Filter 2</option>
            <option value="3">Filter 3</option>
            <option value="4">Others</option>
        </select>
        <!--RFC: This submit button uses the form style to switch between filter and use the select name attrib -->
        <button href="#" class="w3-button w3-teal w3-round-medium cx-margin-right" type="submit" title="Filter Results"><i class="fa fa-filter" alt="Filter"></i></button>
    </form>
    </div>
    </div>
    <div class="w3-right w3-col m4">
        <div class="w3-container">
         <form action="patients.php" >
        <select class="w3-select w3-border" style="float: left; width: 29%;" name="search_term">
            <option value="id" >id</option>
            <option value="name" selected>Name</option>
			<option value="age">Age</option>
			<option value="gender">Gender</option>
			<option value="occupation">Occupation</option>
            <option value="address">Address</option>
            <option value="phone">Phone</option>
        </select>
        
    
             <input list="cusom-list" type="text" class="w3-input w3-border cx-margin-right" style="float: left; width: 50%;" placeholder="Search.." title="Enter The Seach Term">
            <!-- We Will Fill This Datalist from database using PHP -->
            <datalist id="cusom-list">
            <!--RFC: you need to change the select tarm and the database name -->
                <?php
                   $sql = "SELECT name FROM patients;";
                   $result = patient::find_by_sql($sql);
                   //var_dump($result);
                   foreach($result as $op){
                    echo "<option value=\"{$op->name}\">" ;
                   }
                ?>
            </datalist>
            <button href="#" class="w3-button w3-teal w3-round-medium cx-margin-right" type="submit" title="Search"><i class="fa fa-search" alt="Search"></i></button>
            </form>
        </div>
    </div>
    </div>
<br />


    <div class="w3-row">
    <div class="w3-col m12" style="">
        <div id="table-data-view" class="data-view" style="overflow-x:auto; ">
        <!--RFC: This is the main page table -->
          <?php
            echo " <table>            
            <tr class=\"w3-teal\">
              <th>Id</th>
              <th>Name</th>
			  <th>Age</th>
			  <th>Gender</th>
			  <th>Occupation</th>
              <th>Address</th>
              <th>Phone</th>
              <th class=\"w3-center w3-right\"></th>
            </tr>"	
        ?>
        
            <?php foreach($patients as $emp): ?>
            <tr>
                <td><?php echo $emp->id; ?></td>
                <td><?php echo $emp->name; ?></td>
				<td><?php echo $emp->age; ?></td>
				<td><?php echo $emp->gender; ?></td>
				<td><?php echo $emp->occupation; ?></td>
                <td><?php echo $emp->address; ?></td>
                <td><?php echo $emp->phone; ?></td>
                <td class="w3-center  w3-right">
                <!--RFC: The edit button send the id to the edit_patient.php -->
                <a href="edit_patient.php?id=<?php echo $emp->id?>" class="w3-button w3-button-small w3-teal" title="Edit"><i class="fa fa-pencil"></i></a>    
                <!--RFC: The delete button submit the id to the delete_patient.php -->
                <a href="actions/delete/delete_patient.php?id=<?php echo $emp->id?>" class="w3-button w3-button-small w3-red" title="Delete" onclick="return confirm('Are you sure you want to delete patient: <?php echo $emp->name?>?')"><i class="fa fa-trash"></i></a>
                <!--RFC: The print function grabs the data and open anothe page print_emplpyee.php from it you can print the table -->
                <a href="actions/print/print_patient.php?id=<?php echo $emp->id?>" class="w3-button w3-button-small w3-blue" title="Print"><i class="fa fa-print"></i></a></td>
            </tr>
            <?php endforeach; ?>
        </table>
        </div>
    </div>
    
    <div class="w3-col m12">
        <div class="w3-center" >
        <br />
        <div class="w3-bar w3-border w3-round">
        
        <!--RFC: This code is for pagination -->
        <?php
	if($pagination->total_pages() > 1) {
		
		if($pagination->has_previous_page()) { 
    	echo "<a href=\"patients.php?page=";
      echo $pagination->previous_page();
      echo "\" class=\"w3-bar-item w3-button\">&laquo;</a> "; 
    }

		for($i=1; $i <= $pagination->total_pages(); $i++) {
			if($i == $page) {
				echo " <a href=\"#\" class=\"w3-bar-item w3-button w3-teal\">{$i}</a> ";
			} else {
				echo " <a href=\"patients.php?page={$i}\" class=\"w3-bar-item w3-button \">{$i}</a> "; 
			}
		}

		if($pagination->has_next_page()) { 
			echo " <a href=\"patients.php?page=";
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
     
