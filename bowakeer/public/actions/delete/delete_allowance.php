<?php require_once("../../../includes/initialize.php"); ?>
<?php
    //$sql = "DELETE FROM allowances WHERE allowance.id = {$_GET['id']}";
    //$database->query($sql);
    //$result = ($database->affected_rows() == 1) ? true : false;
    $allow = new allowance();
    $allow->id = (int)$_GET['id'];
    
    if($allow->delete()){
        //echo "<script>alert(\"Deleted Successfult\")</script>";
        redirect_to('../../allowances.php');
    }else{
        //echo "<script>alert(\"Not Deleted\")</script>";
        redirect_to('../../allowances.php');
    }
?>