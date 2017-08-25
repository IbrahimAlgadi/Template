<?php require_once("../../../includes/initialize.php"); ?>

<?php
    //echo "<pre>";
    //var_dump($_POST);
    //echo "</pre>";
    //echo $_POST['id'];
    if(isset($_POST['submit'])) {
        
        $pay = new appointment();
        /*echo "<pre>";
        var_dump($_POST);
        echo "</pre>";*/
        
        $pay->id = (int)$_POST['id'];
        $pay->patient_id = $_POST['patient_id'];
        $pay->doctor_id = $_POST['doctor_id'];
        $pay->apoint_date = $_POST['apoint_date'];
        $pay->apoint_type = $_POST['apoint_type'];
        $pay->status = $_POST['status'];
        $pay->notes = $_POST['notes'];
        $pay->labcomments = $_POST['labcomments'];
        $pay->imgcomments = $_POST['imgcomments'];
        
        /*
        echo "<pre>";
        var_dump($pay);
        echo "</pre>";
        */
        if ($pay->update()){
            echo "<script>alert('Done')</script>";
            echo redirect_to("../../appointments.php");
        }else{ 
            echo "<script>alert('Unable to update appointment')</script>";
            //require_once("../../error.php");
            
            }
        
       }
    
    
?>