<?php
include_once '../private/includes/db_connect.php';
include_once '../private/includes/functions.php';



 
sec_session_start();
?>





<?php if (login_check($mysqli) == true) : ?>
	<?
	$mysqlitext = new mysqli("mysql690.loopia.se", "tadmin@v187679", "rndmtadmin", "vasterasvaggdekor_se_db_2");
	mysqli_set_charset($mysqlitext, 'utf8');


	$address = $_POST["address"];
	$email1 = $_POST["email1"];
	$email2 = $_POST["email2"];
	$postkod = $_POST["postkod"];
	$tel = $_POST["tel"];

	mysqli_query($mysqlitext, "UPDATE textinfo SET textvalue = '$address' WHERE id = 'address'");
	mysqli_query($mysqlitext, "UPDATE textinfo SET textvalue = '$email1' WHERE id = 'email1'");
	mysqli_query($mysqlitext, "UPDATE textinfo SET textvalue = '$email2' WHERE id = 'email2'");
	mysqli_query($mysqlitext, "UPDATE textinfo SET textvalue = '$postkod' WHERE id = 'postkod'");
	mysqli_query($mysqlitext, "UPDATE textinfo SET textvalue = '$tel' WHERE id = 'tel'");

	$mysqlitext->close();

	header('Location: admin.php');
?>


<!--
	 <label>Address</label>
                <input type="text" name="address" value="'.$address.'">

                <label>Postkod</label>
                <input type="text" name="email1" value="'.$email1.'">

                <label>Email 1</label>
                <input type="text" name="email2" value="'.$email2.'">

                <label>Email 2</label>
                <input type="text" name="postkod" value="'.$postkod.'">

                <label>Telefon</label>
                <input type="text" name="tel" value="'.$tel.'">';
                ?>
            -->


<?php else : ?>        
	<div class="alert-box alert-box--error hideit">
        <p>You are not authorized to access this page.</span> Please <a href="adminlogin.php">login</a></p>
    </div>
<?php endif; ?>