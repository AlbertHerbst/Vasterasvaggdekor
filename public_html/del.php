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
$id = $_POST['id'];

$getid = mysqli_fetch_assoc(mysqli_query($mysqlitext, "SELECT 'imgpath' FROM 'projekt' WHERE 'id' = '$id'"));
$imgpath = $getid['imgpath'];

unlink($imgpath);

$query = "DELETE FROM `projekt` WHERE `id` = $id";
$mysqlitext->query($query);
header("Location: admin.php");
}
?>
<?php else : ?>        
	<div class="alert-box alert-box--error hideit">
        <p>You are not authorized to access this page.</span> Please <a href="adminlogin.php">login</a></p>
    </div>
<?php endif; ?>