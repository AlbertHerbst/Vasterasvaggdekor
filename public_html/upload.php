<?php
include_once '../private/includes/db_connect.php';
include_once '../private/includes/functions.php';
$mysqlitext = new mysqli("mysql690.loopia.se", "projadmi@v187678", "rndmprojadmi", "vasterasvaggdekor_se_db_1");
mysqli_set_charset($mysqlitext, 'utf8');

 
sec_session_start();
?>

<?php if (login_check($mysqli) == true) : ?>



<?php
if (isset($_POST['submit'])) {
    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];
    $rubrik = $_POST['rubrik'];
    $korttext = $_POST['korttext'];
    $huvudtext = $_POST['huvudtext'];


$fileExt = explode('.', $fileName);
$fileActualExt = strtolower(end($fileExt));

$allowed = array('jpg','jpeg', 'png');

if (in_array($fileActualExt, $allowed)) {
    if ($fileError === 0) {
        if ($fileSize < 5000000) {
            $fileNameNew = uniqid('', true).".".$fileActualExt;
            $fileDestination = 'uploads/'.$fileNameNew;

            move_uploaded_file($fileTmpName, $fileDestination);

            $query="INSERT INTO `projekt`(`rubrik`, `korttext`, `huvudtext`, `imgpath`) VALUES ('$rubrik','$korttext','$huvudtext','$fileDestination')";

            $mysqlitext->query($query);

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

<?php else : ?>        
    <div class="alert-box alert-box--error hideit">
        <p>You are not authorized to access this page.</span> Please <a href="adminlogin.php">login</a></p>
    </div>
<?php endif; ?>
            