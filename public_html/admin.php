<?php
include_once '../private/includes/db_connect.php';
include_once '../private/includes/functions.php';
include 'update.php';

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
    <link rel="stylesheet" href="css/main.php">
    <link rel="stylesheet" href="css/admin.css">
    

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
        <?php 
        $mysqlitext = new mysqli("mysql690.loopia.se", "readonly@v187679", "onlyread", "vasterasvaggdekor_se_db_2");

        $mysqliprojekt = new mysqli("mysql690.loopia.se", "projadmi@v187678", "rndmprojadmi", "vasterasvaggdekor_se_db_1");

        $colorcon = mysqli_connect("mysql690.loopia.se", "readonly@v187722", "onlyread", "vasterasvaggdekor_se_db_4");  
        mysqli_set_charset($mysqlitext, 'utf8');
        mysqli_set_charset($mysqliprojekt, 'utf8');
        mysqli_set_charset($colorcon, 'utf8');

        $getcolor = mysqli_fetch_assoc(mysqli_query($colorcon, "SELECT hex FROM colors WHERE id = 'maincolor'"));
        $maincolor = $getcolor['hex'];

        $getcolor2 = mysqli_fetch_assoc(mysqli_query($colorcon, "SELECT hex FROM colors WHERE id = 'buttoncolorhover'"));
        $buttoncolorhover = $getcolor2['hex'];

        $getcolor3 = mysqli_fetch_assoc(mysqli_query($colorcon, "SELECT hex FROM colors WHERE id = 'omossbakgrund'"));
        $omossbakgrund = $getcolor3['hex'];




mysqli_close($colorcon);
?>
    <a class="btn btn--primary" href="includes/logout.php">Logga Ut</a>
    <a id="defaultOpen" class="tablink btn" onclick="openPage('works', this)">Projekt</a>
    <a class="tablink btn" onclick="openPage('Start', this)">Start</a>
    <a class="btn tablink" onclick="openPage('About', this)">Om Oss</a>
    <a class="btn tablink" onclick="openPage('AddProject', this)">Lägg Till Projekt</a>
    <a class="btn tablink" onclick="openPage('Colors', this)">Färger</a>
    <a class="btn tablink" onclick="openPage('ContactInfo', this)">Kontaktinformation</a>

            
             
                     

<div id="Start" class="tabcontent">

    <div class="admincontent row">
         <div class="col-six tab-full">
                <form method="POST" action="admin.php">
                <textarea name="welcometext" class="full-width"><?php
                    $gettext = mysqli_fetch_assoc(mysqli_query($mysqlitext, "SELECT textvalue FROM textinfo WHERE id = 'welcometext'"));
                    echo $gettext['textvalue'];  
                    ?></textarea>
                    <label>Bakgrund på startsidan</label>
                    <input type="file" name="startbakgrund">
                    <label>Logotypen:</label>
                    <input type="file" name="logo">
                <input type="submit" name="submitwelcometext">


            </form>
         </div>    
        

    </div>

   

</div>
   
<div id="About" class="tabcontent">

        <div class="admincontent row">
            <form method="post" action="admin.php">
           
                            <h3>Om Oss</h3>
                            <textarea name="omoss" class="full-width" type="text" id="desc"><?php     
                                $gettext = mysqli_fetch_assoc(mysqli_query($mysqlitext, "SELECT textvalue FROM textinfo WHERE id = 'omoss'"));
                                echo $gettext['textvalue'];                              
                                ?></textarea>

                           
                                <?php
                                echo '<label>Bakgrundfärg</label>
                                <input id="omosscoltext" onchange="updateomosscol()" type="text" value="'.$omossbakgrund.'">
                                <input id="omosscolcol" onchange="updateomosstext()" type="color"  name="omossbakgrund" value="'.$omossbakgrund.'">';
                                ?>     

                                <script type="text/javascript">
                                    function updateomosstext(){

                                    document.getElementById("omosscoltext").value = document.getElementById("omosscolcol").value;
                                    }

                                    function updateomosscol(){

                                    document.getElementById("omosscolcol").value = document.getElementById("omosscoltext").value;
                                    }

                                </script>                      
                           

            <input type="submit" name="submitabout" value="Spara">
        </form>

        </div>      
 
</div>

<div id="AddProject" class="tabcontent">
   <div class="admincontent row">               

                <form action="admin.php" method="POST" enctype="multipart/form-data">
                    <h3>Lägg Till Projekt</h3>
                    <label>Rubrik</label>
                    <input type="text" class="full-width" name="rubrik" placeholder="Rubrik..">
                    <input type="text" class="full-width" name="korttext" placeholder="Kort beskrivning..">
                    <textarea class="full-width" name="huvudtext" placeholder="Den här texten syns när användaren klickar på bilden.."></textarea>
                    <label>Välj Projektbild</label>
                    <p>Filer över 1MB komprimeras!</p>                
                    <input type="file" name="projectimage">
                    <button type="submit" name="submitproject"> Ladda Upp </button>
                </form>

            </div>
            
</div>

<div id="Colors" class="tabcontent">
  <div class="admincontent row">
            <h3>Färger</h3>
            <form method="POST" action="admin.php">
                
                
               
                 <?php 
                 echo '
                 <label>Main Color:</label>
                 <input id="coltext" onchange="updatecolcol()" type="text" value="'.$maincolor.'"> <input id="colcol" onchange="updatecoltext()" type="color"  name="maincolor" value="'.$maincolor.'">
                 

                 <label>Button Color Hover:</label>
                 <input id="hovercoltext" onchange="updatehovercol()" type="text" value="'.$buttoncolorhover.'">
                 <input id="hovercolcol" onchange="updatehovertext()" type="color"  name="buttoncolorhover" value="'.$buttoncolorhover.'">
                 ';



                 ?>
                 <script type="text/javascript">

                    function updatecoltext(){

                    document.getElementById("coltext").value = document.getElementById("colcol").value;
                    }

                    function updatecolcol(){

                    document.getElementById("colcol").value = document.getElementById("coltext").value;
                    }

                    function updatehovertext(){

                    document.getElementById("hovercoltext").value = document.getElementById("hovercolcol").value;
                    }

                    function updatehovercol(){

                    document.getElementById("hovercolcol").value = document.getElementById("hovercoltext").value;
                    }


            </script>


                <input type="submit" name="submitcolors" value="Spara Färger">
            </form>
            
        </div>
</div>

<div id="ContactInfo" class="tabcontent">
   <div class="admincontent row">


                <?php 
                $gettext = mysqli_fetch_assoc(mysqli_query($mysqlitext, "SELECT textvalue FROM textinfo WHERE id = 'address'"));
                $address = $gettext['textvalue'];

                $gettext = mysqli_fetch_assoc(mysqli_query($mysqlitext, "SELECT textvalue FROM textinfo WHERE id = 'email1'"));
                $email1 = $gettext['textvalue'];

                $gettext = mysqli_fetch_assoc(mysqli_query($mysqlitext, "SELECT textvalue FROM textinfo WHERE id = 'email2'"));
                $email2 = $gettext['textvalue'];

                $gettext = mysqli_fetch_assoc(mysqli_query($mysqlitext, "SELECT textvalue FROM textinfo WHERE id = 'postkod'"));
                $postkod = $gettext['textvalue'];

                $gettext = mysqli_fetch_assoc(mysqli_query($mysqlitext, "SELECT textvalue FROM textinfo WHERE id = 'tel'"));
                $tel = $gettext['textvalue'];

                mysqli_close($mysqlitext);
                ?>
            <h3>Kontaktinformation</h3>

            <form method="POST" action="admin.php">

                <div class="col-six tab-full">
                    <?php 
                    echo '
                <label>Address</label>
                <input class="full-width" type="text" name="address" value="'.$address.'">
                <div class="col-six">
                    <label>Postkod</label>
                    <input class="full-width" type="text" name="postkod" value="'.$postkod.'">                    
                </div>
                <div class="col-six">
                    <label>Telefon</label>
                    <input class="full-width" type="text" name="tel" value="'.$tel.'">
                </div>
                ';
                ?>

                </div>

                <div class="col-six tab-full">
                    <?php
                        echo '
                        <label>Email 1</label>
                        <input class="full-width" type="text" name="email1" value="'.$email1.'">

                        <label>Email 2</label>
                        <input class="full-width" type="text" name="email2" value="'.$email2.'">';
                    ?>
                    
                </div>

                <input type="submit" name="submitcontact" value="SPARA">

            </form>


        </div>
</div>


  <section id='works' class="s-works tabcontent">

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

<script>
function openPage(pageName,elmnt) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
        tablinks[i].style.borderColor = "";
    }
    document.getElementById(pageName).style.display = "block";
    elmnt.style.backgroundColor = "grey";
    elmnt.style.borderColor = "grey";

}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
  

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