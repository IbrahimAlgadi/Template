<?php require_once("../../../includes/initialize.php"); ?>

<?php
    //echo "<pre>";
    //var_dump($_POST);
    //echo "</pre>";
    //echo $_POST['id'];
    if(isset($_POST['submit'])) {
        
        $inc = new expense();
        /*echo "<pre>";
        var_dump($_POST);
        echo "</pre>";*/
        
        $inc->id = (int)$_POST['id'];
        $inc->expense_date = $_POST['expense_date'];
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
            echo redirect_to("../../expenses.php");
        }else{ 
            echo "<script>alert('Unable to update expense')</script>";
            //require_once("../../error.php");
            
            }
        
       }
    
    
?>