<?php
include_once '../private/includes/db_connect.php';
include_once '../private/includes/functions.php';

sec_session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
		<?php if (login_check($mysqli) == true) : ?>
			<?php

			
			$mysqlitext = new mysqli("mysql690.loopia.se", "tadmin@v187679", "rndmtadmin", "vasterasvaggdekor_se_db_2");
			$colorcon = new mysqli("mysql690.loopia.se", "coladmi@v187722", "rndmcoladmi", "vasterasvaggdekor_se_db_4");  
			mysqli_set_charset($mysqlitext, 'utf8');
			mysqli_set_charset($colorcon, 'utf8');
			$omoss = $_POST["omoss"];
			                             
			$query = "UPDATE textinfo SET textvalue = '$omoss' WHERE id = 'omoss'";
		
			$omossbakgrund = $_POST["omossbakgrund"];
			$omosssql = "UPDATE colors SET hex = '$omossbakgrund' WHERE id='omossbakgrund'";	


			$mysqlitext->query($query);  
			$colorcon->query($omosssql);          
			header('Location: admin.php');


?>

 <?php else : ?>           
            <div class="alert-box alert-box--error hideit">
                    <p>You are not authorized to access this page.</span> Please <a href="adminlogin.php">login</a></p>
                   
                </div>
        <?php endif; ?>

</body>
</html>





