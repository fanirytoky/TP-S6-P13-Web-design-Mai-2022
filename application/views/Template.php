<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Environmental</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo images_url_front("favicon.ico") ?>">

    <!-- CSS here -->
    <link rel="stylesheet" href="<?php echo css_url_front("bootstrap.min.css") ?>">
    <link rel="stylesheet" href="<?php echo css_url_front("owl.carousel.min.css") ?>">
    <link rel="stylesheet" href="<?php echo css_url_front("slicknav.css") ?>">
    <link rel="stylesheet" href="<?php echo css_url_front("flaticon.css") ?>">
    <link rel="stylesheet" href="<?php echo css_url_front("progressbar_barfiller.css") ?>">
    <link rel="stylesheet" href="<?php echo css_url_front("gijgo.css") ?>">
    <link rel="stylesheet" href="<?php echo css_url_front("animate.min.css") ?>">
    <link rel="stylesheet" href="<?php echo css_url_front("animated-headline.css") ?>">
    <link rel="stylesheet" href="<?php echo css_url_front("magnific-popup.css") ?>">
    <link rel="stylesheet" href="<?php echo css_url_front("fontawesome-all.min.css") ?>">
    <link rel="stylesheet" href="<?php echo css_url_front("themify-icons.css") ?>">
    <link rel="stylesheet" href="<?php echo css_url_front("slick.css") ?>">
    <link rel="stylesheet" href="<?php echo css_url_front("nice-select.css") ?>">
    <link rel="stylesheet" href="<?php echo css_url_front("style.css") ?>">
</head>

<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="<?php echo images_url_front("logo/loder.png") ?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header ">
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="index.html"><img src="<?php echo images_url_front("logo/logo.png") ?>" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">                                                                                          
                                                <li><a href="<?php echo site_url('Welcome') ?>">Home</a></li>
                                                <!-- <li><a href="about.html">About</a></li>
                                                <li><a href="what-do.html">What we Do</a></li>
                                                <li><a href="projects.html">Projects</a></li> -->
                                                <li><a>Contenu</a>
                                                    <ul class="submenu">
                                                        <li><a href="<?php echo site_url("Contenu_Controller/Liste_Contenu?id=1") ?>">Causes</a></li>
                                                        <li><a href="<?php echo site_url("Contenu_Controller/Liste_Contenu?id=2") ?>">Effets</a></li>
                                                        <li><a href="<?php echo site_url("Contenu_Controller/Liste_Contenu?id=3") ?>">Solutions</a></li>
                                                    </ul>
                                                </li>
                                                <!-- <li><a href="contact.html">Contact</a></li>
                                                <li><a href="<?php echo site_url("Welcome_Back") ?>">Admin</a></li> -->
                                            </ul>
                                        </nav>
                                    </div>
                                    <!-- Header-btn -->
                                    <div class="header-right-btn d-none d-lg-block ml-20">
                                        <a href="<?php echo site_url("Welcome_Back") ?>" class="btn header-btn">Admin</a>
                                    </div>
                                </div>
                            </div> 
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
        
        <!-- slider Area Start-->
        <div class="slider-area position-relative">
            <div class="slider-active dot-style">
                <!-- Single Slider -->
                <div class="single-slider hero-overly slider-height slider-bg1 d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-10">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInUp" data-delay=".2s">Environnement</h1>
                                    <P data-animation="fadeInUp" data-delay=".4s">Offrons-nous une vie verte et saine<br> nous devons protéger</P>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn">
                                        <a href="<?php echo site_url("Contenu_Controller/Liste_Contenu?id=3") ?>" class="hero-btn mb-10"  data-animation="fadeInUp" data-delay=".8s">Solutions</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Slider -->
                <div class="single-slider hero-overly slider-height slider-bg1 d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-10">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInUp" data-delay=".2s">Environnement</h1>
                                    <P data-animation="fadeInUp" data-delay=".4s">Provide us a green and healthy life<br> we need to protect </P>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn">
                                    <a href="<?php echo site_url("Contenu_Controller/Liste_Contenu?id=3") ?>" class="hero-btn mb-10"  data-animation="fadeInUp" data-delay=".8s">Solutions</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Slider -->
                <div class="single-slider hero-overly slider-height slider-bg1 d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-10">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInUp" data-delay=".2s">Tontolo iainana</h1>
                                    <P data-animation="fadeInUp" data-delay=".4s">Fiainana maintso sy tomady<br> Mila miaro isika </P>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn">
                                    <a href="<?php echo site_url("Contenu_Controller/Liste_Contenu?id=3") ?>" class="hero-btn mb-10"  data-animation="fadeInUp" data-delay=".8s">Vahaolana</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--? video_start -->
            <!-- <div class="video-area d-flex align-items-center justify-content-center">
                <div class="video-wrap position-relative">
                    <div class="video-icon" >
                        <a class="popup-video btn-icon" href="https://www.youtube.com/watch?v=up68UAfH0d0"><i class="fas fa-play"></i></a>
                    </div>
                </div>
            </div> -->
            <!-- video_end -->

        </div>

        <!-------------------------------------------------------- Contenu -------------------------------------------------->
        <?php if(isset($vue)){ ?>
            <?php include($vue) ?>
        <?php } ?>
        <!-------------------------------------------------------- Contenu -------------------------------------------------->
        

    </main>
        <footer>
            <div class="footer-wrapper">
            <!-- Footer Start-->
            <div class="footer-area footer-padding">
                <div class="container ">
                    <div class="row justify-content-between">
                        <div class="col-xl-4 col-lg-3 col-md-8 col-sm-8">
                            <div class="single-footer-caption mb-50">
                                <div class="single-footer-caption mb-30">
                                    <!-- logo -->
                                    <div class="footer-logo mb-35">
                                        <a href="index.html"><img src="<?php echo images_url_front("logo/logo2_footer.png") ?>" alt=""></a>
                                    </div>
                                    <div class="footer-tittle">
                                        <div class="footer-pera">
                                            <p>The automated process starts as soon as your clothes go into the machine.</p>
                                        </div>
                                    </div>
                                    <!-- social -->
                                    <div class="footer-social">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Our solutions</h4>
                                    <ul>
                                        <li><a href="<?php echo site_url("Contenu_Controller/Liste_Contenu?id=3") ?>">Solutions</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>About</h4>
                                    <ul>
                                        <li><a href="<?php echo site_url('Welcome') ?>">Définition</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-4">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Contact us</h4>
                                    <ul>
                                        <li><a href="#">framavozatovo@gmail.com</a></li>
                                        <li><a href="#">Andoharanofotsy,ITUniversity</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li class="number"><a href="#">+261342646285</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer-bottom area -->
            <div class="footer-bottom-area">
                <div class="container">
                    <div class="footer-border">
                        <div class="row d-flex align-items-center">
                            <div class="col-xl-12 ">
                                <div class="footer-copy-right text-center">
                                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer End-->
            </div>
        </footer>
      <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

    <script src="<?php echo js_url_front("vendor/modernizr-3.5.0.min.js") ?>"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="<?php echo js_url_front("vendor/jquery-1.12.4.min.js") ?>"></script>
    <script src="<?php echo js_url_front("popper.min.js") ?>"></script>
    <script src="<?php echo js_url_front("bootstrap.min.js") ?>"></script>
    <!-- Jquery Mobile Menu -->
    <script src="<?php echo js_url_front("jquery.slicknav.min.js") ?>"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="<?php echo js_url_front("owl.carousel.min.js") ?>"></script>
    <script src="<?php echo js_url_front("slick.min.js") ?>"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="<?php echo js_url_front("wow.min.js") ?>"></script>
    <script src="<?php echo js_url_front("animated.headline.js") ?>"></script>
    <script src="<?php echo js_url_front("jquery.magnific-popup.js") ?>"></script>

    <!-- Date Picker -->
    <script src="<?php echo js_url_front("gijgo.min.js") ?>"></script>
    <!-- Nice-select, sticky -->
    <script src="<?php echo js_url_front("jquery.nice-select.min.js") ?>"></script>
    <script src="<?php echo js_url_front("jquery.sticky.js") ?>"></script>
    <!-- Progress -->
    <script src="<?php echo js_url_front("jquery.barfiller.js") ?>"></script>
    
    <!-- counter , waypoint,Hover Direction -->
    <script src="<?php echo js_url_front("jquery.counterup.min.js") ?>"></script>
    <script src="<?php echo js_url_front("waypoints.min.js") ?>"></script>
    <script src="<?php echo js_url_front("jquery.countdown.min.js") ?>"></script>
    <script src="<?php echo js_url_front("hover-direction-snake.min.js") ?>"></script>

    <!-- contact js -->
    <script src="<?php echo js_url_front("contact.js") ?>"></script>
    <script src="<?php echo js_url_front("jquery.form.js") ?>"></script>
    <script src="<?php echo js_url_front("jquery.validate.min.js") ?>"></script>
    <script src="<?php echo js_url_front("mail-script.js") ?>"></script>
    <script src="<?php echo js_url_front("jquery.ajaxchimp.min.js") ?>"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="<?php echo js_url_front("plugins.js") ?>"></script>
    <script src="<?php echo js_url_front("main.js") ?>"></script>
    
</body>
</html>