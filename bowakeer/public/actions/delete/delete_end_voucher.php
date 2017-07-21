<?php require_once("../../../includes/initialize.php"); ?>
<?php

    $sql = "DELETE FROM end_vouchers WHERE end_vouchers.id = {$_GET['id']}";
    $database->query($sql);
    $result = ($database->affected_rows() == 1) ? true : false;
    
    
    var_dump($result);
    
    if($result){
        //echo "<script>alert(\"Deleted Successfult\")</script>";
        redirect_to('../../end_vouchers.php');
    }else{
        //echo "<script>alert(\"Not Deleted\")</script>";
        redirect_to('../../end_vouchers.php');
    }
?>