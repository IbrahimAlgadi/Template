<?php require_once("../../../includes/initialize.php"); ?>
<?php
	$py = new payroll();
    $py->id = (int)$_GET['id'];
    
    if($py->delete()){
        //echo "<script>alert(\"Deleted Successfult\")</script>";
        redirect_to('../../payrolls.php');
    }else{
        //echo "<script>alert(\"Not Deleted\")</script>";
        redirect_to('../../payrolls.php');
    }
?>