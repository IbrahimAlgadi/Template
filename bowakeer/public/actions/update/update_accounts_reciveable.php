<?php require_once("../../../includes/initialize.php"); ?>

<?php
    //echo "<pre>";
    //var_dump($_POST);
    //echo "</pre>";
    //echo $_POST['id'];
    if(isset($_POST['submit'])) {
        
        $acc_pay = new accounts_reciveable();
        /*echo "<pre>";
        var_dump($_POST);
        echo "</pre>";*/
        
        $acc_pay->id = (int)$_POST['id'];
        $acc_pay->name = $_POST['name'];
        $acc_pay->end_date = $_POST['end_date'];
        $acc_pay->cheque_number = $_POST['cheque_number'];
        $acc_pay->cheque_date = $_POST['cheque_date'];
        $acc_pay->bank_id = $_POST['bank_id'];
        $acc_pay->amount = $_POST['amount'];
        
        /*
        echo "<pre>";
        var_dump($acc_pay);
        echo "</pre>";
        */
        if ($acc_pay->update()){
            echo "<script>alert('Done')</script>";
            echo redirect_to("../../accounts_reciveables.php");
        }else{ 
            echo "<script>alert('Unable to update accounts_reciveable')</script>";
            //require_once("../../error.php");
            
            }
        
       }
    
    
?>