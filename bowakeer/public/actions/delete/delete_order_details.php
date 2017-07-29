<?php require_once("../../../includes/initialize.php"); ?>
<?php
    $ord_det = new order_details();
    $ord_det->id = $_GET['id'];
    if($ord_det->delete()){
        //echo "<script>alert(\"Deleted Successfult\")</script>";
        redirect_to('../../order_details.php');
    }else{
        //echo "<script>alert(\"Not Deleted\")</script>";
        redirect_to('../../order_details.php');
    }
?>