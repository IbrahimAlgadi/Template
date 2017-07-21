<?php require_once("../../includes/initialize.php"); ?>

<?php

	// 1. the current page number ($current_page)
	$page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;

	// 2. records per page ($per_page)
	$per_page = 1;

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
	
	// Need to add ?page=$page to all links we want to 
	// maintain the current page (or store $page in $session)
	
?>

<tr class="w3-teal">
  <th>Id</th>
  <th>Name</th>
  <th>Phone</th>
  <th>Address</th>
  <th>SSID</th>
  <th>Payroll #</th>
  <th>Work zone</th>
  <th class="w3-center w3-right"></th>
</tr>
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