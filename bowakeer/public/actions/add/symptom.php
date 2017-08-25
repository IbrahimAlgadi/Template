<?php require_once("../../../includes/initialize.php"); ?>

<?php

    if(isset($_POST['submit'])) {
        
        $sym = new symptoms();
        /*
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";
        */
        $sym->id = $_POST['id'];
        $sym->name = $_POST['name'];
		$sym->cat_id = $_POST['cat_id'];
		$sym->status = $_POST['status'];
        //echo "<br />";
        //echo "<pre>";
        //var_dump($pay);
        //echo "</pre>";
        if ($sym->create()){
            //$message_title = "Success";
            //$message_body = "You Have Submitted Information Successfuly";
            //require_once("../message.php");
            echo redirect_to('../../symptoms.php');
        }else{ 
            //$message_title = "Faluire";
            //$message_body = "There is a problem trying";
            //require_once("../../error.php");
            echo "<h1>Failure</h1>";
            }
       }else{
        echo "<h1>Not Done Right</h1>";
    }
    
    
?>