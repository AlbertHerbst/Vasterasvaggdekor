<?php
include_once '../private/includes/db_connect.php';
include_once '../private/includes/functions.php';


 
sec_session_start();
?>
<?php if (login_check($mysqli) == true) : ?>

<?php

	
	  

   $colorcon = new mysqli("mysql690.loopia.se", "coladmi@v187722", "rndmcoladmi", "vasterasvaggdekor_se_db_4");  
   

	// Check connection
	if ($colorcon->connect_error) {
	    die("Connection failed: " . $colorcon->connect_error);
	} 

	
		$maincolor = $_POST["maincolor"];
		$mainsql = "UPDATE colors SET hex = '$maincolor' WHERE id='maincolor'";	

		$buttoncolorhover = $_POST["buttoncolorhover"];	
		$buttonhoversql = "UPDATE colors SET hex = '$buttoncolorhover' WHERE id='buttoncolorhover'";

		


		//$mainsql = "UPDATE colors SET hex = '$maincolor' WHERE id='maincolor'";
		//$mainsql = "UPDATE colors SET hex = '$maincolor' WHERE id='maincolor'";

		$colorcon->query($mainsql);
		$colorcon->query($buttonhoversql);
		
		//$colorcon->query($mainsql);


		$colorcon->close();
		header('Location: admin.php');



?>
<?php else : ?>        
	<div class="alert-box alert-box--error hideit">
        <p>You are not authorized to access this page.</span> Please <a href="adminlogin.php">login</a></p>
    </div>
<?php endif; ?>