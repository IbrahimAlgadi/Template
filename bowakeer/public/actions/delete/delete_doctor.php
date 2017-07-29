<?php require_once("../../../includes/initialize.php"); ?>
<?php
	$doc = new doctor();
    $doc->id = (int)$_GET['id'];
    
    if($doc->delete()){
        //echo "<script>alert(\"Deleted Successfult\")</script>";
        redirect_to('../../doctors.php');
    }else{
        //echo "<script>alert(\"Not Deleted\")</script>";
        redirect_to('../../doctors.php');
    }
    
    
        
?>