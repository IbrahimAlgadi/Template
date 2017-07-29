<?php require_once("../../../includes/initialize.php"); ?>
<?php
$dpt = new department();
    $dpt->id = (int)$_GET['id'];
    
    if($dpt->delete()){
        //echo "<script>alert(\"Deleted Successfult\")</script>";
        redirect_to('../../departments.php');
    }else{
        //echo "<script>alert(\"Not Deleted\")</script>";
        redirect_to('../../departments.php');
    }
?>