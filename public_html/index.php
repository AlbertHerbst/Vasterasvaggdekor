<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="sv">
<!--<![endif]-->
<?php
                $servername = "mysql690.loopia.se";
                $username = "readonly";
                $password = "onlyread";
                

                $mysqlicon = new mysqli($servername, "readonly@v187679", $password, "vasterasvaggdekor_se_db_2");
                $mysqliprojekt = new mysqli($servername, "readonly@v187678", $password, "vasterasvaggdekor_se_db_1");
                mysqli_set_charset($mysqlicon, 'utf8');
                mysqli_set_charset($mysqliprojekt, 'utf8');
?>
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Västerås Väggdekor</title>
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

    <!-- header
    ================================================== -->
    <header class="s-header">

        <div class="header-logo">
            <a class="site-logo" href="index.html">
                <img src="images/logga_liten.png" alt="Homepage">
            </a>
        </div>

        <nav class="header-nav">

            <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>

            <div class="header-nav__content">
                <h3>Navigation</h3>
                
                <ul class="header-nav__list">
                    <li class="current"><a class="smoothscroll"  href="#home" title="home">Hem</a></li>
                    <li><a class="smoothscroll"  href="#about" title="about">Om Oss</a></li>
                    <li><a class="smoothscroll"  href="#services" title="services">Tjänster</a></li>
                    <li><a class="smoothscroll"  href="#works" title="works">Arbeten & Projekt</a></li>
                    <li><a class="smoothscroll"  href="#clients" title="clients">Klienter</a></li>
                    <li><a class="smoothscroll"  href="#contact" title="contact">Kontakt</a></li>
                </ul>
    
                <p>Perspiciatis hic praesentium nesciunt. Et neque a dolorum <a href='#0'>voluptatem</a> porro iusto sequi veritatis libero enim. Iusto id suscipit veritatis neque reprehenderit.</p>
    
                <ul class="header-nav__social">
                    <li>
                        <a href="https://www.facebook.com/V%C3%A4ster%C3%A5s-V%C3%A4ggdekor-1605809676128925/"><i class="fa fa-facebook"></i></a>
                    </li>                    
                    <li>
                        <a href="https://www.instagram.com/vasteras_vaggdekor/"><i class="fa fa-instagram"></i></a>
                    </li>                   
                </ul>

            </div> <!-- end header-nav__content -->

        </nav>  <!-- end header-nav -->

        <a class="header-menu-toggle" href="#0">
            <span class="header-menu-text">Meny</span>
            <span class="header-menu-icon"></span>
        </a>

    </header> <!-- end s-header -->


    <!-- home
    ================================================== 
    BAKGRUNDSBILD = data-image-src
    -->
    <section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="images/portfolio/zlatan.jpg" data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <div class="overlay"></div>
        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main">

                <h3>Välkommen till Västerås Väggdekor</h3>

                <h1>
                    Vi är ett företag baserat <br>
                    i Västerås som arbetar med <br>
                    olika typer av väggmålningar.
                   
                </h1>

                <div class="home-content__buttons">
                    <a href="#contact" class="smoothscroll btn btn--stroke">
                        Kontakta oss
                    </a>
                    <a href="#about" class="smoothscroll btn btn--stroke">
                        Mer Om oss
                    </a>
                </div>

            </div>

            <div class="home-content__scroll">
                <a href="#about" class="scroll-link smoothscroll">
                    <span>Skrolla Ner</span>
                </a>
            </div>

            <div class="home-content__line"></div>

        </div> <!-- end home-content -->


        <ul class="home-social">
            <li>
                <a href="https://www.facebook.com/V%C3%A4ster%C3%A5s-V%C3%A4ggdekor-1605809676128925/"><i class="fa fa-facebook" aria-hidden="true"></i><span>Facebook</span></a>
            </li>            
            <li>
                <a href="https://www.instagram.com/vasteras_vaggdekor/"><i class="fa fa-instagram" aria-hidden="true"></i><span>Instagram</span></a>
            </li>            
        </ul> 
        <!-- end home-social -->

    </section> <!-- end s-home -->


    <!-- about
    ================================================== -->
    <section id='about' class="s-about">

        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">             
                <h1 class="display-1 display-1--light">Vi Är <br>Västerås Väggdekor</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row about-desc" data-aos="fade-up">
            <div class="col-full">              
                <?php              
             try{
                $query = "SELECT * FROM textinfo WHERE id = 'omoss'";
                $result = $mysqlicon->query($query);                
                while($row = $result->fetch_assoc()) {  
                 echo nl2br($row["textvalue"]);
                }
            }
            catch(PDOException $e){
                echo "Connection Falied: ".$e ->getMessage();
            }

                ?>
                <br>


                <a href="#contact" class="smoothscroll btn btn--stroke">
                        Kontakta oss
                </a>              
                                
               

            </div>
            
        </div> <!-- end about-desc -->
       

        <div class="about__line"></div>

    </section> <!-- end s-about -->  


    <!-- works
    ================================================== -->
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
                    $query = "SELECT rubrik, korttext, huvudtext, imgpath FROM projekt";
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
                    </div>';
                    }

                
                    ?>                   

                </div> <!-- end masonry -->
            </div> <!-- end col-full -->
        </div> <!-- end works-content -->
        </div>

    </section> <!-- end s-works -->

     <!-- services
    ================================================== -->
    <section id='services' class="s-services">

        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Vad arbetar vi med?</h3>
                <h1 class="display-2">Vi kan utföra många olika typer av målningar, stora som små.</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row services-list block-1-2 block-tab-full">

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i class="icon-paint-brush"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">Väggmålning 1</h3>
                    <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium. 
                    Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis.
                    Sunt suscipit voluptas ipsa in tempora esse soluta sint.
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i class="icon-paint-brush"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">Väggmålning 2</h3>
                    <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium. 
                    Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis.
                    Sunt suscipit voluptas ipsa in tempora esse soluta sint.
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i class="icon-paint-brush"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">Väggmålning 3</h3>
                    <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium. 
                    Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis.
                    Sunt suscipit voluptas ipsa in tempora esse soluta sint.
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i class="icon-paint-brush"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">Väggmålning 4</h3>
                    <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium. 
                    Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis.
                    Sunt suscipit voluptas ipsa in tempora esse soluta sint.
                    </p>
                </div>
            </div>



           

        </div> <!-- end services-list -->

    </section> <!-- end s-services -->


    

    <!-- contact
    ================================================== -->
    <section id="contact" class="s-contact">

        <div class="overlay"></div>
        <div class="contact__line"></div>

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                
                <h1 class="display-2 display-2--light">Kontakta Oss</h1>
            </div>
        </div>

        <div class="row contact-content" data-aos="fade-up">
            
      

            <div class="contact-primary">
                <div class="contact-info">

                    <h3 class="h6 hide-on-fullwidth">Kontaktinformation</h3>

                    <div class="cinfo">
                        <h5>Vart du kan hitta oss</h5>
                        <p>
                            Address<br>                            
                            Postkod
                        </p>
                    </div>

                    <div class="cinfo">
                        <h5>Email</h5>
                        <p>
                            kontakt@vasterasvaggdekor.se<br>
                            info@vasterasvaggdekor.se
                        </p>
                    </div>

                    <div class="cinfo">
                        <h5>Telefon</h5>
                        <p>
                            Nummer: 021 00 00 000<br>                        
                        </p>
                    </div>

                    <ul class="contact-social">
                        <li>
                            <a href="https://www.facebook.com/V%C3%A4ster%C3%A5s-V%C3%A4ggdekor-1605809676128925/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>                       
                        <li>
                            <a href="https://www.instagram.com/vasteras_vaggdekor/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </li>                        
                    </ul> <!-- end contact-social -->

                </div> <!-- end contact-info -->
            </div> <!-- end contact-secondary -->

        </div> <!-- end contact-content -->

    </section> <!-- end s-contact -->


    <!-- footer
    ================================================== -->
    <footer>

       

        <div class="row footer-bottom">

            <div class="col-twelve">
                <div class="copyright">
                    <span>© Copyright Glint 2017</span> 
                    <span>Site Template by <a href="https://www.colorlib.com/">Colorlib</a></span>	
                </div>

                <div class="go-top">
                    <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon-arrow-up" aria-hidden="true"></i></a>
                </div>
            </div>

        </div> <!-- end footer-bottom -->

    </footer> <!-- end footer -->


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

</body>

</html>