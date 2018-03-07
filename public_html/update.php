<?php
include_once '../private/includes/db_connect.php';
include_once '../private/includes/functions.php';

 
sec_session_start();
?>

<?php if (login_check($mysqli) == true) : ?>

<?php
function compress($source, $destination, $quality) {

		$info = getimagesize($source);

		if ($info['mime'] == 'image/jpeg') 
			$image = imagecreatefromjpeg($source);

		elseif ($info['mime'] == 'image/png') 
			$image = imagecreatefrompng($source);

		imagejpeg($image, $destination, $quality);

		return $destination;
	}

	$textcon = new mysqli("mysql690.loopia.se", "tadmin@v187679", "rndmtadmin", "vasterasvaggdekor_se_db_2");
	mysqli_set_charset($textcon, 'utf8');

	$colorcon = new mysqli("mysql690.loopia.se", "coladmi@v187722", "rndmcoladmi", "vasterasvaggdekor_se_db_4");  
	mysqli_set_charset($colorcon, 'utf8');

	$projcon = new mysqli("mysql690.loopia.se", "projadmi@v187678", "rndmprojadmi", "vasterasvaggdekor_se_db_1");
	mysqli_set_charset($projcon, 'utf8');

	$imgcon = new mysqli("mysql690.loopia.se", "badmin@v208564", "rndmbadmin", "vasterasvaggdekor_se_db_5");
	mysqli_set_charset($imgcon, 'utf8');

	if (isset($_POST['submitcolors'])) {
		$maincolor = $_POST["maincolor"];
		$buttoncolorhover = $_POST["buttoncolorhover"];

		mysqli_query($colorcon, "UPDATE colors SET hex = '$maincolor' WHERE id='maincolor'");
		mysqli_query($colorcon, "UPDATE colors SET hex = '$buttoncolorhover' WHERE id='buttoncolorhover'");	
	}


	if (isset($_POST['submitabout'])) {
		$omoss = $_POST["omoss"];
		$omossbakgrund = $_POST["omossbakgrund"];
		mysqli_query($textcon, "UPDATE textinfo SET textvalue = '$omoss' WHERE id = 'omoss'");
		mysqli_query($colorcon, "UPDATE colors SET hex = '$omossbakgrund' WHERE id='omossbakgrund'");
	}

	if (isset($_POST['submitwelcometext'])) {
		$welcometext = $_POST['welcometext'];
		mysqli_query($textcon, "UPDATE textinfo SET textvalue = '$welcometext' WHERE id = 'welcometext'");
		$file = $_FILES['logo'];
	    $fileName = $_FILES['logo']['name'];
	    $fileTmpName = $_FILES['logo']['tmp_name'];
	    $fileSize = $_FILES['logo']['size'];
	    $fileError = $_FILES['logo']['error'];
	    $fileType = $_FILES['logo']['type'];	    
	    $fileExt = explode('.', $fileName);
	    $fileActualExt = strtolower(end($fileExt));
	    $allowed = array('jpg','jpeg', 'png');

	    if (in_array($fileActualExt, $allowed)) {
	        if ($fileError === 0) {
	            if ($fileSize < 5000000) {
	                //$fileNameNew = uniqid('', true).".jpg";
	                $fileDestination = 'images/logga_liten.png';

	                	move_uploaded_file($fileTmpName, $fileDestination);
	                
	                
	                

	               // $query="INSERT INTO `projekt`(`rubrik`, `korttext`, `huvudtext`, `imgpath`) VALUES ('$rubrik','$korttext','$huvudtext','$fileDestination')";

	             //   $projcon->query($query);

	                header("Location: admin.php?uploadsuccess");
	            } 
	            else{
	                echo "Filen är för stor!";
	            }
	        } 
	        else{
	            echo "Något gick fel!";
	        }
	    } 
	    else{
	        echo "Du kan inte ladda upp en fil av den typen, endast .jpg , .jpeg eller .png är tillåtna!";
	    }
	}
		
	if (isset($_POST['submitcontact'])) {
		$address = $_POST["address"];
		$email1 = $_POST["email1"];
		$email2 = $_POST["email2"];
		$postkod = $_POST["postkod"];
		$tel = $_POST["tel"];

		mysqli_query($textcon, "UPDATE textinfo SET textvalue = '$address' WHERE id = 'address'");
		mysqli_query($textcon, "UPDATE textinfo SET textvalue = '$email1' WHERE id = 'email1'");
		mysqli_query($textcon, "UPDATE textinfo SET textvalue = '$email2' WHERE id = 'email2'");
		mysqli_query($textcon, "UPDATE textinfo SET textvalue = '$postkod' WHERE id = 'postkod'");
		mysqli_query($textcon, "UPDATE textinfo SET textvalue = '$tel' WHERE id = 'tel'");		
	}

	

	if (isset($_POST['submitproject'])) {
		$file = $_FILES['projectimage'];
	    $fileName = $_FILES['projectimage']['name'];
	    $fileTmpName = $_FILES['projectimage']['tmp_name'];
	    $fileSize = $_FILES['projectimage']['size'];
	    $fileError = $_FILES['projectimage']['error'];
	    $fileType = $_FILES['projectimage']['type'];
	    $rubrik = $_POST['rubrik'];
	    $korttext = $_POST['korttext'];
	    $huvudtext = $_POST['huvudtext'];
	    $fileExt = explode('.', $fileName);
	    $fileActualExt = strtolower(end($fileExt));
	    $allowed = array('jpg','jpeg', 'png');

	    if (in_array($fileActualExt, $allowed)) {
	        if ($fileError === 0) {
	            if ($fileSize < 5000000) {
	                $fileNameNew = uniqid('', true).".jpg";
	                $fileDestination = 'uploads/'.$fileNameNew;

	                if($fileSize > 4000000){
	                	compress($fileTmpName, $fileDestination, 75);
	                }
	                elseif($fileSize > 3000000){
	                	compress($fileTmpName, $fileDestination, 80);
	                }
	                elseif($fileSize > 2000000){
	                	compress($fileTmpName, $fileDestination, 85);
	                }
	                elseif ($fileSize > 1000000){
	                	compress($fileTmpName, $fileDestination, 90);
	                }
	                else{
	                	move_uploaded_file($fileTmpName, $fileDestination);
	                }
	                
	                

	                $query="INSERT INTO `projekt`(`rubrik`, `korttext`, `huvudtext`, `imgpath`) VALUES ('$rubrik','$korttext','$huvudtext','$fileDestination')";

	                $projcon->query($query);

	                header("Location: admin.php?uploadsuccess");
	            } else{
	                echo "Filen är för stor!";
	            }
	        } else{
	            echo "Något gick fel!";
	        }
	    } else{
	        echo "Du kan inte ladda upp en fil av den typen, endast .jpg , .jpeg eller .png är tillåtna!";
	    }
	}




		
?>
<?php endif; ?>