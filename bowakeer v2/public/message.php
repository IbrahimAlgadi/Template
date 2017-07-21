<?php require_once("../includes/initialize.php"); ?>

<?php
	include_layout_template('header.php');
?>

<?php
	if (!isset($message_title) and !isset($message_body)){
	   $message_title = "No Title";
       $message_body = "No Body";
	}
?>

    <div id="id02" class="w3-modal" style="display=block;">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
    
            <div class="w3-center  w3-teal"><br>
                <h3><?php echo $message_title ?></h3>
            </div>
        
            <div class="w3-section">
              <?php
                echo "<div class=\"w3-input w3-border w3-margin-bottom\">
                    <h2>{$message_body}</h2>
                </div>";
            ?>
            </div>
          
        
            <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                <div class="w3-row">
                <div class="w3-col m4">
                <a href="../template.php"><button onclick="document.getElementById('id02').style.display='none'" type="button" class="w3-red w3-button w3-large w3-round-medium w3-block w3-section w3-padding ">Return <i class="fa fa-close"></i></button>
                </a>
                </div>
                <div class="w3-col m1">&nbsp;</div>
                <div class="w3-col m7"> </div>
              </div>
            </div>
        </div>
  </div>
  
<?php
	include_layout_template('footer.php');
?>