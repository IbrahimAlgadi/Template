<?php require_once("../../../includes/initialize.php"); ?>

<?php
    //echo "<pre>";
    //var_dump($_POST);
    //echo "</pre>";
    //echo $_POST['id'];
    if(isset($_POST['submit'])) {
        
        $cat = new pharm_category();
        /*echo "<pre>";
        var_dump($_POST);
        echo "</pre>";*/
        
        $cat->id = (int)$_POST['id'];
        $cat->Name = $_POST['Name'];
        
        
        /*
        echo "<pre>";
        var_dump($cat);
        echo "</pre>";
        */
        if ($cat->update()){
            echo "<script>alert('Done')</script>";
            echo redirect_to("../../pharm_categories.php");
        }else{ 
            echo "<script>alert('Unable to update pharm_category')</script>";
            //require_once("../../error.php");
            
            }
        
       }
    
    
?>