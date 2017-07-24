<?php require_once("../../../includes/initialize.php"); ?>

<?php
    //echo "<pre>";
    //var_dump($_POST);
    //echo "</pre>";
    //echo $_POST['id'];
    if(isset($_POST['submit'])) {
        
        $auto = new automotive();
        /*echo "<pre>";
        var_dump($_POST);
        echo "</pre>";*/
        
        $auto->id = (int)$_POST['id'];
        $auto->label = $_POST['label'];
        $auto->model = $_POST['model'];
        $auto->insurance = $_POST['insurance'];
        $auto->period = $_POST['period'];
        $auto->expiry_date = $_POST['expiry_date'];
        $auto->oil_change = $_POST['oil_change'];
        $auto->license_expiry_date = $_POST['license_expiry_date'];
        
        /*
        echo "<pre>";
        var_dump($auto);
        echo "</pre>";
        */
        if ($auto->update()){
            echo "<script>alert('Done')</script>";
            echo redirect_to("../../automotives.php");
        }else{ 
            echo "<script>alert('Unable to update automotive')</script>";
            //require_once("../../error.php");
            
            }
        
       }
    
    
?>