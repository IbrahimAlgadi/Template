<!DOCTYPE>
<html lang="en">
    <head>
	    <meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="stylesheets/styles.css">
        <link rel="stylesheet" href="stylesheets/color.css">
        <link rel="stylesheet" href="stylesheets/font.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<title>Login</title>
    </head>
    <body>
	<nav style="border: groove red;  width:250px; float:left;">
		<div style="border: groove green; width:inheret; height:150px;">
		    <img src="images/logo.jpg" style="width:inherit; height:inherit"> 
            <div id="accountpane" class="w3-center">
                <img src="images/user.png" style="width:25%; height:25%"> 
                <a href="#"><h4>Dubai company</h4></a>
            </div> 
	    </div>
	</nav>
	<header class="w3-container w3-theme" style="padding:21px 32px; width:83%; margin-left:19%; height:150px;">
            <h1 class="w3-xlarge">3RP System</h1>
  
            <div class="w3-row">
                <div class="w3-col m12">
                    <div class="w3-bar">
                        <a href="payrolls.php" class="w3-bar-item w3-button w3-round-medium">Home</a>
                        <a href="end_vouchers.php" class="w3-bar-item w3-button w3-round-medium">End Voucher</a>
                    </div> 
                </div>
            </div>
        </header>
	      
		
	        <form action="login.php" method="post" style=" border: groove yellow; position:relative; left:251px; " >
		        <fieldset>
			        <legend>Login</legend>
                    <ol style="list-style: none; "> 				
		                <li><input type="text" placeholder="username" name="username" value=""  required /></li>
			            <li><input type="password" placeholder="password" name="password" value="" autocomplete="off" required /></li>
		                <li><a href="forget.php">password forgoteen?</a> <input type="submit" name="login"  /></li>
			        </ol>
			    </fieldset>	  	 
	        </form>
    </body>
</html>