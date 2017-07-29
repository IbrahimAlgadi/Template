<?php require_once("../../../includes/initialize.php"); ?>

<?php
    //echo "<pre>";
    //var_dump($_POST);
    //echo "</pre>";
    //echo $_POST['id'];
    if(isset($_POST['submit'])) {
        
        $inc = new lab_test();
        /*echo "<pre>";
        var_dump($_POST);
        echo "</pre>";*/
        
        $inc->id = (int)$_POST['id'];
        $inc->test = $_POST['test'];
        $inc->reference_range = $_POST['ref'];
        $inc->unit = $_POST['unit'];
        
        /*
        echo "<pre>";
        var_dump($inc);
        echo "</pre>";
        */
        if ($inc->update()){
            echo "<script>alert('Done')</script>";
            echo redirect_to("../../lab_tests.php");
        }else{ 
            echo "<script>alert('Unable to update lab_test')</script>";
            //require_once("../../error.php");
            
            }
        
       }
    
    
?>