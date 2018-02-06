<?php
include_once '../private/includes/db_connect.php';
include_once '../private/includes/functions.php';
$mysqlitext = new mysqli("mysql690.loopia.se", "tadmin@v187679", "rndmtadmin", "vasterasvaggdekor_se_db_2");
mysqli_set_charset($mysqlitext, 'utf8');
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

$omoss = $_POST["omoss"];
try{                               
$query = "UPDATE textinfo SET textvalue = '$omoss' WHERE id = 'omoss'";
$result = $mysqlitext->query($query);                

}
catch(PDOException $e){
echo "Connection Falied: ".$e ->getMessage();
}

header('Location: admin.php');


?>

 <?php else : ?>           
            <div class="alert-box alert-box--error hideit">
                    <p>You are not authorized to access this page.</span> Please <a href="adminlogin.php">login</a></p>
                   
                </div>
        <?php endif; ?>

</body>
</html>





