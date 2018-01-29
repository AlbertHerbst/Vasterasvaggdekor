<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
 
sec_session_start();
?>

<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Administratör</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/admin.css">

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

<body id="top">
     <?php if (login_check($mysqli) == true) : ?>
    <!-- header
    ================================================== -->
   <!-- <header class="s-header">

        <div class="header-logo">
            <a class="site-logo" href="index.php">
                <img src="images/logga_liten.png" alt="Homepage">
            </a>
        </div> 
    </header> <!-- end s-header -->


    <!-- home
    ================================================== 
    BAKGRUNDSBILD = data-image-src
    -->
    <section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="http://blog.visme.co/wp-content/uploads/2017/07/50-Beautiful-and-Minimalist-Presentation-Backgrounds-030.jpg" data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <form>
            
            <input type="text" name="desc" value="<?php
           
            try{
                $query = "SELECT * FROM `description`";
                $result = $mysqli->query($query);                
                while($row = $result->fetch_assoc()) {  
                 echo $row["description"];
                }
            }
            catch(PDOException $e){
                echo "Connection Falied: ".$e ->getMessage();
            }

            ?>">

            <input type="submit" name="submitdesc" value="Spara">
        </form>

        


       
 
    </section> <!-- end s-home -->
    <a href="includes/logout.php">Log out</a>


   
    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
            <div class="line-scale-pulse-out">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>


    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

      <?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="adminlogin.php">login</a>.
            </p>
        <?php endif; ?>

</body>

</html>