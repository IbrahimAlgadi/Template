<?php require_once("../../../includes/initialize.php"); ?>

<?php
    //echo "<pre>";
    //var_dump($_POST);
    //echo "</pre>";
    //echo $_POST['id'];
    if(isset($_POST['submit'])) {
        
        $pay = new xray();
        /*echo "<pre>";
        var_dump($_POST);
        echo "</pre>";*/
        
        $pay->id = (int)$_POST['id'];
        $pay->appointment_id = $_POST['appointment_id'];
        $pay->path =$_POST['path'];
		$pay->comments =$_POST['comments'];
        
        /*
        echo "<pre>";
        var_dump($pay);
        echo "</pre>";
        */
        if ($pay->update()){
            echo "<script>alert('Done')</script>";
            echo redirect_to("../../xrays.php");
        }else{ 
            echo "<script>alert('Unable to update xray')</script>";
            //require_once("../../error.php");
            
            }
        
       }
    
    
?>