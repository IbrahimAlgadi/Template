<?php require_once("../../../includes/initialize.php"); ?>

<?php
    //echo "<pre>";
    //var_dump($_POST);
    //echo "</pre>";
    //echo $_POST['id'];
    if(isset($_POST['submit'])) {
        
        $pay = new symptom();
        /*echo "<pre>";
        var_dump($_POST);
        echo "</pre>";*/
		
        
        $pay->id = (int)$_POST['id'];
        $pay->name = $_POST['name'];
        $pay->cat_id =$_POST['cat_id'];
		$pay->status =$_POST['status'];
        
        /*
        echo "<pre>";
        var_dump($pay);
        echo "</pre>";
        */
        if ($pay->update()){
            echo "<script>alert('Done')</script>";
            echo redirect_to("../../symptoms.php");
        }else{ 
            echo "<script>alert('Unable to update symptom')</script>";
            //require_once("../../error.php");
            
            }
        
       }
    
    
?>