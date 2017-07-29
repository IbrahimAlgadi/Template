<?php require_once("../../../includes/initialize.php"); ?>

<?php
    //echo "<pre>";
    //var_dump($_POST);
    //echo "</pre>";
    //echo $_POST['id'];
    if(isset($_POST['submit'])) {
        
        $dept = new department();
        /*echo "<pre>";
        var_dump($_POST);
        echo "</pre>";*/
        
        $dept->id = (int)$_POST['id'];
        $dept->name = $_POST['name'];
        
        /*
        echo "<pre>";
        var_dump($dept);
        echo "</pre>";
        */
        if ($dept->update()){
            echo "<script>alert('Done')</script>";
            echo redirect_to("../../departments.php");
        }else{ 
            echo "<script>alert('Unable to update department')</script>";
            //require_once("../../error.php");
            
            }
        
       }
    
    
?>