<?php require_once("../../../includes/initialize.php"); ?>

<?php
    //echo "<pre>";
    //var_dump($_POST);
    //echo "</pre>";
    //echo $_POST['id'];
    if(isset($_POST['submit'])) {
        
        $inc = new income();
        /*echo "<pre>";
        var_dump($_POST);
        echo "</pre>";*/
        
        $inc->id = (int)$_POST['id'];
        $inc->income_date = $_POST['income_date'];
        $inc->amount = (int)$_POST['amount'];
        $inc->description = $_POST['description'];
        $inc->cat_id = (int)$_POST['cat_id'];
        
        /*
        echo "<pre>";
        var_dump($inc);
        echo "</pre>";
        */
        if ($inc->update()){
            echo "<script>alert('Done')</script>";
            echo redirect_to("../../incomes.php");
        }else{ 
            echo "<script>alert('Unable to update income')</script>";
            //require_once("../../error.php");
            
            }
        
       }
    
    
?>