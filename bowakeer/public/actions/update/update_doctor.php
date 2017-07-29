<?php require_once("../../../includes/initialize.php"); ?>

<?php
    /* echo "<pre>";
    var_dump($_POST);
    echo "</pre>";
    echo $_POST['id']; */
    if(isset($_POST['submit'])) {
        
        $doc = new doctor();
        /*echo "<pre>";
        var_dump($_POST);
        echo "</pre>";*/
		
        $doc->id = (int)$_POST['id'];
        $doc->name = $_POST['name'];
		$doc->age = (int)$_POST['age'];
		$doc->gender = $_POST['gender'];
        $doc->specialization = $_POST['specialization'];
        $doc->department_id = (int)$_POST['did'];
        $doc->marital_status = $_POST['ms'];
        $doc->phone = (int)$_POST['phone'];
        $doc->address = $_POST['address'];
        
        
        
        /*
        echo "<pre>";
        var_dump($dept);
        echo "</pre>";
        */
        if ($doc->update()){
            echo "<script>alert('Done')</script>";
            echo redirect_to("../../doctors.php");
        }else{ 
            echo "<script>alert('Unable to update doctors')</script>";
            //require_once("../../error.php");
            
            }
        
       }
    
    
?>