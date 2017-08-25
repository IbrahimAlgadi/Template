<?php require_once("../../../includes/initialize.php"); ?>
<?php
	$py = new symptoms();
    $py->id = (int)$_GET['id'];
    
    if($py->delete()){
        //echo "<script>alert(\"Deleted Successfult\")</script>";
        redirect_to('../../symptoms.php');
    }else{
        //echo "<script>alert(\"Not Deleted\")</script>";
        redirect_to('../../symptoms.php');
    }
?>