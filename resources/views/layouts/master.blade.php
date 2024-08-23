<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>A.S.M.I Global pre school - @yield('title')</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description"
        content="HASSAN EDUCATIONAL INSTITUTION for privileged learning is functioning under the auspices of HASSAN EDUCATION ENVIRONMENT AND HEALTH FOUNDATION -THE PUBLIC RELIGIOUS TRUST" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400;1,9..40,500;1,9..40,600;1,9..40,700&amp;family=Fredoka:wght@700&amp;family=Schoolbell&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-select/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="assets/vendors/tiny-slider/tiny-slider.css" />
    <link rel="stylesheet" href="assets/vendors/kidearn-icons/style.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/css/owl.theme.default.min.css" />
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/kidearn.css" />
    

</head>

<body class="custom-cursor">
    
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KVZQQ8D3"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

    <!-- <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div> -->

    <div class="preloader">
        <div class="preloader__image" style="background-image: url(assets/images/loader.png);"></div>
    </div>

    <!-- /.preloader -->

    <div class="page-wrapper">
        <div class="topbar-one">
            <div class="container-fluid">
                <div class="topbar-one__inner">
                    <div class="topbar-one__left">
                        <div class="topbar-one__social">
                       
                            <a href="https://www.facebook.com/aathichudi.pallikaranai">
                                <i class="fab fa-facebook" aria-hidden="true"></i>
                                <span class="sr-only">Facebook</span>
                            </a>
                        
                            <a href="https://www.instagram.com/a.s.m.i.pre.school">
                                <i class="fab fa-instagram" aria-hidden="true"></i>
                                <span class="sr-only">Instagram</span>
                            </a>
                        </div><!-- /.topbar-one__social -->
                       
                    </div><!-- /.topbar-one__left -->
                    <ul class="list-unstyled topbar-one__info">
                     
                        <li class="topbar-one__info__item">
                            <i class="fas fa-envelope topbar-one__info__icon"></i>
                            <a href="mailto:asmiglobalschool@gmail.com">asmiglobalschool@gmail.com</a>
                        </li>
                    </ul><!-- /.list-unstyled topbar-one__info -->
                </div><!-- /.topbar-one__inner -->
            </div><!-- /.container-fluid -->
    </div>
    
    <!-- /.topbar-one -->


    <header class="main-header sticky-header sticky-header--normal">
        <div class="container-fluid">
            <div class="main-header__inner">
                <div class="main-header__logo">
                    <a href="/">
                        <img src="assets/images/logo-asmi.jpg" alt="A.S.M.I" width="160">
                    </a>
                </div><!-- /.main-header__logo -->

                    <nav class="main-header__nav main-menu">
                        <ul class="main-menu__list">

                            <li>
                                <a href="/">Home</a>
                            </li>



                            <li>
                                <a href="about">About</a>
                            </li>
                            <li >
                                <a href="gallery">Gallery</a>
                            </li>
                            <!-- <li class="dropdown">
                                <a href="events">Events</a>
                             
                            </li> -->
                            <li >
                                <a href="program">Programs</a>
                             
                            </li>
                            <li >
                                <a href="specialities">Specialities</a>
                             
                            </li>

                       
                      
                            <li>
                                <a href="contact">Contact</a>
                            </li>
                        </ul>
                    </nav><!-- /.main-header__nav -->

                    <div class="main-header__right">
                        <div class="mobile-nav__btn mobile-nav__toggler">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- /.mobile-nav__toggler -->
                  
                      
                  

                        <a href="contact" class="kidearn-btn main-header__btn">
                            <span>Book a Visit</span>
                        </a><!-- /.thm-btn main-header__btn -->
                </div><!-- /.main-header__right -->
            </div><!-- /.main-header__inner -->
        </div><!-- /.container-fluid -->
    </header><!-- /.main-header -->
        <!--Hero Banner Start-->



        @yield('content')

        
        <footer class="main-footer">
            <div class="main-footer__bg"></div>
            <!-- /.main-footer__bg -->
            <img src="assets/images/shapes/footer-s-1-1.png" class="main-footer__shape-1" alt="kidearn">
            <img src="assets/images/shapes/footer-s-1-2.png" class="main-footer__shape-2" alt="kidearn">
            <img src="assets/images/shapes/footer-s-1-3.png" class="main-footer__shape-3" alt="kidearn">
            <img src="assets/images/shapes/footer-s-1-4.png" class="main-footer__shape-4" alt="kidearn">
            <div class="main-footer__top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-xl-4">
                            <div class="footer-widget footer-widget--about">
                                <a href="." class="footer-widget__logo">
                                    <img src="assets/images/logo-asmi.jpg" width="160" alt="Kidearn HTML Template">
                                </a>
                                <ul class="list-unstyled footer-widget__info">
                                  
                                    <li>
                                        <i class="icon-call footer-widget__info__icon"></i>
                                        <a href="tel:9445156670">9445156670 / Vengaivasal</a>
                                    </li>
                                    <li>
                                        <i class="icon-call footer-widget__info__icon"></i>
                                        <a href="tel:9444224466">9444224466 / Pallikaranai</a>
                                    </li>
                                    <li>
                                        <i class="icon-call footer-widget__info__icon"></i>
                                        <a href="tel:9944654978">9944654978 / Perumbakkam</a>
                                    </li>
                                    <li>
                                        <i class="icon-email1 footer-widget__info__icon"></i>
                                        <a href="mailto:asmiglobalschool@gmail.com">asmiglobalschool@gmail.com</a>
                                    </li>
                                </ul><!-- /.list-unstyled -->
                                <div class="footer-widget__social">
                                 
                                    <a href="https://www.facebook.com/aathichudi.pallikaranai">
                                        <i class="fab fa-facebook" aria-hidden="true"></i>
                                        <span class="sr-only">Facebook</span>
                                    </a>
                                
                                    <a href="https://www.instagram.com/a.s.m.i.pre.school">
                                        <i class="fab fa-instagram" aria-hidden="true"></i>
                                        <span class="sr-only">Instagram</span>
                                    </a>
                                </div><!-- /.footer-widget__social -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-6 col-xl-4">
                            <div class="footer-widget footer-widget--links">
                                <h2 class="footer-widget__title">Links</h2><!-- /.footer-widget__title -->
                                <ul class="list-unstyled footer-widget__links">
                                    <li><a href="about">About</a></li>
                                    <li><a href="program">Programs</a></li>
                                    <li><a href="program">Gallery</a></li>
                                    <li><a href="program">contact</a></li>
                                    <li><a href="program">Specialities</a></li>
                                 
                                
                                </ul><!-- /.list-unstyled footer-widget__links -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-6 col-xl-4 rad ">
                        <img src="assets/images/gallery/a55.jpg" alt="" sizes="" srcset="">

                        </div>
                   
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.main-footer__top -->
            <div class="main-footer__bottom">
                <div class="container">
                    <div class="main-footer__bottom__inner">
                        <p class="main-footer__copyright">
                            &copy; Copyright <span class="dynamic-year"></span> by A.S.M.I Global pre school <a href="https://www.blugglegroups.com/">developed by Bluggle groups</a>
                        </p>
                    </div><!-- /.main-footer__inner -->
                </div><!-- /.container -->
            </div><!-- /.main-footer__bottom -->
        </footer><!-- /.main-footer -->

   



    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="/" aria-label="logo image"><img src="assets/images/logo-asmi.jpg" width="155"
                        alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:asmiglobalschool@gmail.com">asmiglobalschool@gmail.com</a>
                </li>
                <!-- <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:
                        9444224466">
                        9444224466 / 9445156670</a>
                </li> -->
                  
                <li>
                 <i class="fa fa-phone-alt"></i>
                    <a href="tel:9445156670">9445156670 / Vengaivasal</a>
                </li>
                <li>
                <i class="fa fa-phone-alt"></i>
                    <a href="tel:9444224466">9444224466 / Pallikaranai</a>
                </li>
                <li>
                <i class="fa fa-phone-alt"></i>
                    <a href="tel:9944654978">9944654978 / Perumbakkam</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__social">
             
                <a href="https://www.facebook.com/aathichudi.pallikaranai">
                    <i class="fab fa-facebook" aria-hidden="true"></i>
                    <span class="sr-only">Facebook</span>
                </a>
             
                <a href="https://www.instagram.com/a.s.m.i.pre.school">
                    <i class="fab fa-instagram" aria-hidden="true"></i>
                    <span class="sr-only">Instagram</span>
                </a>
            </div><!-- /.mobile-nav__social -->
        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->
    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form role="search" method="get" class="search-popup__form" action="#">
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="kidearn-btn kidearn-btn--base">
                    <span><i class="icon-search"></i></span>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" class="scroll-top">
        <svg class="scroll-top__circle" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </a>


    <script src="assets/vendors/jquery/jquery-3.7.0.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="assets/vendors/tiny-slider/tiny-slider.js"></script>
    <script src="assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="assets/vendors/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="assets/vendors/wow/wow.js"></script>
    <script src="assets/vendors/tilt/tilt.jquery.js"></script>
    <script src="assets/vendors/simpleParallax/simpleParallax.min.js"></script>
    <script src="assets/vendors/imagesloaded/imagesloaded.min.js"></script>
    <script src="assets/vendors/isotope/isotope.js"></script>
    <script src="assets/vendors/countdown/countdown.min.js"></script>
    <script src="assets/vendors/jquery-circleType/jquery.circleType.js"></script>
    <script src="assets/vendors/jquery-lettering/jquery.lettering.min.js"></script>
  <!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>-->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- template js -->
    <script src="assets/js/kidearn.js"></script>
    
            <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KVZQQ8D3');</script>
</body>



</html>