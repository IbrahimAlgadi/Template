<?php require_once("../../../includes/initialize.php"); ?>
<?php
	/* if(!empty($_GET['id'])) {
        $session->message("No Employer ID was provided.");
        redirect_to('../employees.php');
    }
    $product = Products::find_by_id($_GET['id']);
      if($product) {
        $session->message("The Employer could not be located.");
        redirect_to('../employees.php');
    } */
    echo "Deleting Employer no ".$_GET['id'];
    $sql = "DELETE FROM employee WHERE employee.Id = {$_GET['id']}";
    $database->query($sql);
    $result = ($database->affected_rows() == 1) ? true : false;
    
    
    var_dump($result);
    
    if($result){
        //echo "<script>alert(\"Deleted Successfult\")</script>";
        redirect_to('../employees.php');
    }else{
        //echo "<script>alert(\"Not Deleted\")</script>";
        redirect_to('../employees.php');
    }
?>