<?php require_once("../../../includes/initialize.php"); ?>
<?php
	$py = new pharm_category();
    $py->id = (int)$_GET['id'];
    
    if($py->delete()){
        //echo "<script>alert(\"Deleted Successfult\")</script>";
        redirect_to('../../pharm_categories.php');
    }else{
        //echo "<script>alert(\"Not Deleted\")</script>";
        redirect_to('../../pharm_categories.php');
    }
?>