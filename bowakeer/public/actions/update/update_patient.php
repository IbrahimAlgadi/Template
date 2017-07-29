<?php require_once("../../../includes/initialize.php"); ?>

<?php
    //echo "<pre>";
    //var_dump($_POST);
    //echo "</pre>";
    //echo $_POST['id'];
    if(isset($_POST['submit'])) {
        
        $pt = new patient();
        /*echo "<pre>";
        var_dump($_POST);
        echo "</pre>";*/
        
        $pt->id = (int)$_POST['id'];
        $pt->name = $_POST['name'];
		$pt->age = (int)$_POST['age'];
		$pt->occupation = $_POST['occupation'];
		$pt->gender = $_POST['gender'];
        $pt->phone = (int)$_POST['phone'];
        $pt->address = $_POST['address'];
        
        /*
        echo "<pre>";
        var_dump($pt);
        echo "</pre>";
        */
        if ($pt->update()){
            echo "<script>alert('Done')</script>";
            echo redirect_to("../../patients.php");
        }else{ 
            echo "<script>alert('Unable to update patient')</script>";
            //require_once("../../error.php");
            
            }
        
       }
    
    
?>