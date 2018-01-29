<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<?php
                $servername = "localhost";
                $username = "readonly";
                $password = "";
                $database = "secure_login";
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
    <link rel="stylesheet" href="css/main.css">

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
                <p>
                Västerås Väggdekor erbjuder handmålade väggmotiv i såväl liten som stor skala, inomhus likväl som utomhus. Med en bakgrund i graffitikulturern har vi under devennier applicerat färg på väggar för såväl privatpersoner som företag, skolor och museum.<br>
                <br>
                Vi tycker inte att snabba lösningar i form av tryckta banderoller eller liknande traditionella uttryck känns särskilt fräscht som produkt. Av den anledningen och för att vi själva inte kan sätta vår egen passion åt sidan, utgår vi alltid för kundens idé men landar oftast i ett slutresultat som överträggar kundens förväntningar.<br>
                <br>
                Long story short: Hör gärna av dig till oss med din idé!
                </p>

                <?php

                


                try{

                    $conn = new PDO("mysql:host=$servername;dbname=$database",$username, $password);
                    $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                    echo " [Connection Successfull] ";

                    $stmt = $conn ->prepare("SELECT description FROM description");
                    
                    $stmt -> execute();

                    $result = $stmt -> setFetchMode(PDO::FETCH_ASSOC);

                    foreach ($stmt -> fetchALL() as $k) {

                        echo "<p>".$k['description']."</p>";
                        
                    }
                    }

                    catch(PDOException $e){
                        echo "Connection Falied: ".$e ->getMessage();
                    }

                    $conn = null;

                ?>


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
    
                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="images/portfolio/tandettljus.jpg" class="thumb-link" title="Tandettljus" data-size="1050x700">
                                    <img src="images/portfolio/tandettljus.jpg" 
                                         srcset="images/portfolio/tandettljus.jpg 1x, images/portfolio/tandettljus@2x.jpg 2x" alt="">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Tänd Ett Ljus
                                </h3>
                                <p class="item-folio__cat">
                                    Branding
                                </p>
                            </div>
    
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>
    
                            <div class="item-folio__caption">
                                <p>Sprid lite glädje!</p>
                            </div>
    
                        </div>
                    </div> <!-- end masonry__brick -->

                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="images/portfolio/zlatan.jpg" class="thumb-link" title="Zlatan" data-size="1050x700">
                                    <img src="images/portfolio/zlatan.jpg" 
                                         srcset="images/portfolio/zlatan.jpg 1x, images/portfolio/zlatan@2x.jpg 2x" alt="">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Zlatan
                                </h3>
                                <p class="item-folio__cat">
                                    Web Design
                                </p>
                            </div>
    
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>
    
                            <div class="item-folio__caption">
                                <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                            </div>
    
                        </div>
                    </div> <!-- end masonry__brick -->
    
                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="images/portfolio/pressbyran.jpg" class="thumb-link" title="Pressbyrån" data-size="1050x700">
                                    <img src="images/portfolio/pressbyran.jpg"
                                         srcset="images/portfolio/pressbyran.jpg 1x, images/portfolio/pressbyran@2x.jpg 2x" alt="">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Pressbyrån
                                </h3>
                                <p class="item-folio__cat">
                                    Web Development
                                </p>
                            </div>
    
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>
    
                            <div class="item-folio__caption">
                                <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                            </div>
    
                        </div>
                    </div> <!-- end masonry__brick -->
    
                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="images/portfolio/hulk.jpg" class="thumb-link" title="Hulken" data-size="1050x700">
                                    <img src="images/portfolio/hulk.jpg" 
                                         srcset="images/portfolio/hulk.jpg 1x, images/portfolio/hulk@2x.jpg 2x" alt="">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Hulken
                                </h3>
                                <p class="item-folio__cat">
                                    Branding
                                </p>
                            </div>
    
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>
    
                            <div class="item-folio__caption">
                                <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                            </div>
    
                        </div>
                    </div> <!-- end masonry__brick -->

                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="images/portfolio/haenbradag.jpg" class="thumb-link" title="Ha En Bra Dag" data-size="1050x700">
                                    <img src="images/portfolio/haenbradag.jpg" 
                                         srcset="images/portfolio/haenbradag.jpg 1x, images/portfolio/haenbradag@2x.jpg 2x" alt="">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Ha En Bra Dag!
                                </h3>
                                <p class="item-folio__cat">
                                    Web Design
                                </p>
                            </div>
    
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>
    
                            <div class="item-folio__caption">
                                <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                            </div>
    
                        </div>
                    </div> <!-- end masonry__brick -->
    
                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="images/portfolio/chillout.jpg" class="thumb-link" title="ChillOut" data-size="1050x700">
                                    <img src="images/portfolio/chillout.jpg"
                                         srcset="images/portfolio/chillout.jpg 1x, images/portfolio/chillout@2x.jpg 2x" alt="">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Chill Out
                                </h3>
                                <p class="item-folio__cat">
                                    Web Design
                                </p>
                            </div>
    
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>
    
                            <div class="item-folio__caption">
                                <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                            </div>
    
                        </div>
                    </div> <!-- end masonry__brick -->

                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="images/portfolio/bamse.jpg" class="thumb-link" title="Bamse" data-size="1050x700">
                                    <img src="images/portfolio/bamse.jpg"
                                         srcset="images/portfolio/bamse.jpg 1x, images/portfolio/bamse@2x.jpg 2x" alt="">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Bamse
                                </h3>
                                <p class="item-folio__cat">
                                    Web Design
                                </p>
                            </div>
    
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>
    
                            <div class="item-folio__caption">
                                <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                            </div>
    
                        </div>
                    </div> <!-- end masonry__brick -->

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


    <!-- clients
    ================================================== -->
    <section id="clients" class="s-clients">

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Tidigare Klienter</h3>
                <h1 class="display-2">Västerås Väggdekor har arbetat med dessa organisationer</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row clients-outer" data-aos="fade-up">
            <div class="col-full">
                <div class="clients">
                    
                    <a href="#0" title="" class="clients__slide"><img src="images/clients/apple.png" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="images/clients/atom.png" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="images/clients/blackberry.png" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="images/clients/dropbox.png" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="images/clients/envato.png" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="images/clients/firefox.png" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="images/clients/joomla.png" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="images/clients/magento.png" /></a>
                     
                </div> <!-- end clients -->
            </div> <!-- end col-full -->
        </div> <!-- end clients-outer -->

        <div class="row clients-testimonials" data-aos="fade-up">
            <div class="col-full">
                <div class="testimonials">

                    <div class="testimonials__slide">

                        <p>"Värdegrund"</p>

                        <img src="http://www.ntigymnasiet.se/wp-content/uploads/2016/09/erik_tyni.jpg" alt="Author image" class="testimonials__avatar">
                        <div class="testimonials__info">
                            <span class="testimonials__name">Erik Tyni</span> 
                            <span class="testimonials__pos">CEO, Apple</span>
                        </div>

                    </div>

                    <div class="testimonials__slide">
                        
                        <p>brieost igen srsly guys</p>

                        <img src="http://www.ntigymnasiet.se/wp-content/uploads/2016/09/mikaela_lorenzi.jpg" alt="Author image" class="testimonials__avatar">
                        <div class="testimonials__info">
                            <span class="testimonials__name">Mikaela Lorenzi</span> 
                            <span class="testimonials__pos">CEO, Google</span>
                        </div>

                    </div>

                    <div class="testimonials__slide">
                        
                        <p>Lek och bus!</p>

                        <img src="http://www.ntigymnasiet.se/wp-content/uploads/2016/09/joakim_flink.jpg" alt="Author image" class="testimonials__avatar">
                        <div class="testimonials__info">
                            <span class="testimonials__name">Joakim Flink</span> 
                            <span class="testimonials__pos">CEO, Microsoft</span>
                        </div>

                    </div>

                </div><!-- end testimonials -->
                
            </div> <!-- end col-full -->
        </div> <!-- end client-testimonials -->

    </section> <!-- end s-clients -->


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
            
            <!--<div class="contact-primary">

                <h3 class="h6">Skicka ett meddelande</h3>

                <form name="contactForm" id="contactForm" method="post" action="" novalidate="novalidate">
                    <fieldset>
    
                    <div class="form-field">
                        <input name="contactName" type="text" id="contactName" placeholder="Namn" value="" minlength="2" required="" aria-required="true" class="full-width">
                    </div>
                    <div class="form-field">
                        <input name="contactEmail" type="email" id="contactEmail" placeholder="Email" value="" required="" aria-required="true" class="full-width">
                    </div>
                    <div class="form-field">
                        <input name="contactSubject" type="text" id="contactSubject" placeholder="Ämne" value="" class="full-width">
                    </div>
                    <div class="form-field">
                        <textarea name="contactMessage" id="contactMessage" placeholder="Ditt Meddelande" rows="10" cols="50" required="" aria-required="true" class="full-width"></textarea>
                    </div>
                    <div class="form-field">
                        <button class="full-width btn--primary">Skicka</button>
                        <div class="submit-loader">
                            <div class="text-loader">Skickar...</div>
                            <div class="s-loader">
                                <div class="bounce1"></div>
                                <div class="bounce2"></div>
                                <div class="bounce3"></div>
                            </div>
                        </div>
                    </div>
    
                    </fieldset>
                </form>

                <!-- contact-warning 
                <div class="message-warning">
                    Hoppsan! Någonting gick visst fel.. Pröva igen!
                </div> 
            
                <!-- contact-success 
                <div class="message-success">
                    Tack!<br>
                    Ditt meddelande är skickat!
                </div>

            </div> <!-- end contact-primary -->
            

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

        <div class="row footer-main">

           <!-- <div class="col-six tab-full left footer-desc">

                
                Proin eget tortor risus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla porttitor accumsan tincidunt. Nulla porttitor accumsan tincidunt. Quaerat voluptas autem necessitatibus vitae aut.

            </div>

            <div class="col-six tab-full right footer-subscribe">

                <h4>Get Notified</h4>
                <p>Quia quo qui sed odit. Quaerat voluptas autem necessitatibus vitae aut non alias sed quia. Ut itaque enim optio ut excepturi deserunt iusto porro.</p>

                <div class="subscribe-form">
                    <form id="mc-form" class="group" novalidate="true">
                        <input type="email" value="" name="EMAIL" class="email" id="mc-email" placeholder="Email Address" required="">
                        <input type="submit" name="subscribe" value="Subscribe">
                        <label for="mc-email" class="subscribe-message"></label>
                    </form>
                </div>

            </div>-->

        </div> <!-- end footer-main -->

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