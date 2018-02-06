<?php
include_once '../private/includes/db_connect.php';
include_once '../private/includes/functions.php';
$mysqlitext = new mysqli("mysql690.loopia.se", "readonly@v187679", "onlyread", "vasterasvaggdekor_se_db_2");
$mysqliprojekt = new mysqli("mysql690.loopia.se", "projadmi@v187678", "rndmprojadmi", "vasterasvaggdekor_se_db_1");
mysqli_set_charset($mysqlitext, 'utf8');
mysqli_set_charset($mysqliprojekt, 'utf8');
 
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
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.php">
    

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

<body>
     <?php if (login_check($mysqli) == true) : ?>
    <!-- header
   
    ================================================== 
    BAKGRUNDSBILD = data-image-src
    -->
    <section id='services' class="s-services">
    <div class="row">
        <div class="col-six tab-full">
            <form method="post" action="update.php">
           
                            <h3>Texten som ligger under rubriken "Om Oss"</h3>
                            <textarea name="omoss" class="full-width" type="text" id="desc"><?php     
                            try{
                               
                                $query = "SELECT * FROM textinfo WHERE id = 'omoss'";
                                $result = $mysqlitext->query($query);                
                                while($row = $result->fetch_assoc()) {  
                                 echo $row["textvalue"];
                                }
                            }
                            catch(PDOException $e){
                                echo "Connection Falied: ".$e ->getMessage();
                            }
                            ?></textarea>

                            
            
            

            <input type="submit" name="submitdesc" value="Spara">
        </form>

        </div>
        <div class="col-six tab-full">               

                <form action="upload.php" method="POST" enctype="multipart/form-data">
                    <h3>Lägg Till Projekt</h3>
                    <label>Rubrik</label>
                    <input type="text" class="full-width" name="rubrik" placeholder="Rubrik..">
                    <input type="text" class="full-width" name="korttext" placeholder="Kort beskrivning..">
                    <textarea class="full-width" name="huvudtext" placeholder="Den här texten syns när användaren klickar på bilden.."></textarea>
                    <label>Välj Projektbild</label>                
                    <input type="file" name="file">
                    <button type="submit" name="submit"> UPLOAD </button>
                </form>

            </div>
        
    </div> <!--end row-->

    <div class="row">
        <div class="col-six tab-full">
            <form>
                <input type="color" class="full-width" value="#aacbff" name="">
            </form>
        </div>

    </div> <!--end row-->
     



<form action="../private/includes/logout.php">
       <button type="submit">Logga Ut</button>
   </form>
 </section>
 <section id='works' class="s-works">

        <div class="intro-wrap">
                
            <div class="row section-header has-bottom-sep light-sep" data-aos="fade-up">
                <div class="col-full">
                    <h3 class="subhead">Projekt</h3>
                    <h1 class="display-2 display-2--light">Kolla gärna på några av de projekten vi arbetat med!</h1>
                </div>
            </div> <!-- end section-header -->

         <!-- end intro-wrap -->

        <div class="row works-content">
            <div class="col-full masonry-wrap">
                <div class="masonry">
 <?php
                    $query = "SELECT rubrik, korttext, huvudtext, imgpath, id FROM projekt";
                    $result = $mysqliprojekt->query($query);

                    while ($row = $result->fetch_assoc()) {
                    echo '<div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="'.$row['imgpath'].'" class="thumb-link" title="'.$row['rubrik'].'" data-size="1050x700">
                                    <img src="'.$row['imgpath'].'" 
                                         srcset="'.$row['imgpath'].' 1x, '.$row['imgpath'].'@2x 2x" alt="">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    '.$row['rubrik'].'
                                </h3>
                                <p class="item-folio__cat">
                                    '.$row['korttext'].'
                                </p>
                            </div>
                            <div class="item-folio__caption">
                                <p>'.$row['huvudtext'].'</p>
                            </div>
    
                        </div>
                        <form action="del.php" method="POST">
                        <input type="hidden" name="id" value="'.$row['id'].'">
                        <button type="submit" name="submit">Ta Bort</button>
                        </form>
                    </div>';
                    }

                
                    ?>
                    </div> <!-- end masonry -->
            </div> <!-- end col-full -->
        </div> <!-- end works-content -->
        </div>

    </section> <!-- end s-works -->


     <!-- photoswipe background
    ================================================== -->
    <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">

            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title=
                    "Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title=
                    "Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title=
                "Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>

        </div>

    </div> <!-- end photoSwipe background -->
    
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
            <div class="alert-box alert-box--error hideit">
                    <p>You are not authorized to access this page.</span> Please <a href="adminlogin.php">login</a></p>
                   
                </div>
        <?php endif; ?>

</body>

</html>