<?php require_once("../../../includes/initialize.php"); ?>

<?php
    //echo "<pre>";
    //var_dump($_POST);
    //echo "</pre>";
    //echo $_POST['id'];
    if(isset($_POST['submit'])) {
        
        $contract = new contract();
        /*echo "<pre>";
        var_dump($_POST);
        echo "</pre>";*/
        
        $contract->id = (int)$_POST['id'];
        $contract->name = $_POST['name'];
        $contract->contract_type = (int)$_POST['contract_type'];
        $contract->period = $_POST['period'];
        $contract->start_date = $_POST['start_date'];
        $contract->end_date = $_POST['end_date'];
        $contract->description = $_POST['description'];
        
        /*
        echo "<pre>";
        var_dump($contract);
        echo "</pre>";
        */
        if ($contract->update()){
            echo "<script>alert('Done')</script>";
            echo redirect_to("../../contracts.php");
        }else{ 
            echo "<script>alert('Unable to update contract')</script>";
            //require_once("../../error.php");
            
            }
        
       }
    
    
?>