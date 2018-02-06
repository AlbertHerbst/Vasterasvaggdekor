<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
$mysqlitext = new mysqli("localhost", "root", "", "vv_texter");
mysqli_set_charset($mysqlitext, 'utf8');

 
sec_session_start();
?>





<?php if (login_check($mysqli) == true) : ?>






<?php else : ?>        
	<div class="alert-box alert-box--error hideit">
        <p>You are not authorized to access this page.</span> Please <a href="adminlogin.php">login</a></p>
    </div>
<?php endif; ?>