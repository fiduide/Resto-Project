
<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Pizza Lab</title>
        <!-- favicon -->
        <link rel="shortcut icon" href="public/img/favicon.ico">
        <!-- Bootstrap -->
        <link href="public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons -->
        <link href="https://unicons.iconscout.com/release/v3.0.3/script/monochrome/bundle.js" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.3/public/css/line.css">
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/@mdi/font@6.5.95/css/materialdesignicons.min.css">
        <!-- Magnific -->
        <link href="public/css/magnific-popup.css" rel="stylesheet" type="text/css" />
        <!-- Slider -->
        <link rel="stylesheet" href="public/css/owl.carousel.min.css"/>
        <link rel="stylesheet" href="public/css/owl.theme.default.min.css"/>
        <!-- FLEXSLIDER -->
        <link href="public/css/flexslider.css" rel="stylesheet" type="text/css" />
        <!-- Date picker -->
        <link rel="stylesheet" href="public/css/flatpickr.min.css">
        <!-- Main Css -->
        <link href="public/css/style.css" rel="stylesheet" type="text/css" id="theme-opt" />
        <link href="public/css/colors/default.css" rel="stylesheet" id="color-opt">

    </head>

    <body>
    
        <!-- Navbar STart -->
        <header id="topnav" class="defaultscroll sticky bg-white">
            <div class="container">
                <!-- Logo container-->
                <div>
                    <a class="logo" href="#">
                        <img src="public/img/icon/logo.png" height="100" alt="pizza lab">
                    </a>
                </div>                 
                <div class="buy-button">
                    <a href="h#" target="_blank" class="btn btn-primary">Mon compte</a>
                </div><!--end login button-->
                <!-- End Logo container-->
                <div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>
        
                <div id="navigation">
                    <!-- Navigation Menu-->   
                    <ul class="navigation-menu">
                        <li><a href="#">Accueil</a></li>
                        <li class="has-submenu">
                            <a href="javascript:void(0)">Pizzeria</a><span class="menu-arrow"></span>
                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li><a href="index-saas.html">Pizza</a></li>
                                        <li><a href="index-classic-saas.html">Pizza & boissons</a></li>
                                        <li><a href="index-agency.html">Pizza, boisson & dessert</a></li>
                                    </ul>
                                </li>  
                            </ul>
                        </li>
        
                        <li class="has-submenu">
                            <a href="javascript:void(0)">Restaurant</a><span class="menu-arrow"></span>
                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li><a href="index-saas.html">Réserver une tâble</a></li>
                                    </ul>
                                </li>  
                            </ul>
                        </li>
                        
                    </ul><!--end navigation menu-->
                    <div class="buy-menu-btn d-none">
                        <a href="#" target="_blank" class="btn btn-primary">Mon compte</a>
                    </div><!--end login button-->
                </div><!--end navigation-->
            </div><!--end container-->
        </header><!--end header-->
        <!-- Navbar End -->
        
        <!-- Hero Start -->
        <section class="main-slider">
            <ul class="slides"> 
                <li class="bg-slider bg-animation-left d-flex align-items-center" style="background-image:url('public/img/restaurant/bg01.jpg')">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-7 col-md-7">
                                <div class="title-heading position-relative mt-4" style="z-index: 1;">
                                    <h1 class="heading mb-3">Pizza Lab, the best or nothing</h1>
                                    <p class="para-desc">Commander en ligne ou consommer au sein de notre restaurant.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </section><!--end section-->
        <!-- Hero End -->

        <div class="position-relative">
            <div class="shape overflow-hidden text-light">
                <svg viewBox="0 0 2880 250" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M720 125L2160 0H2880V250H0V125H720Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>
        <!-- End services -->

        <!-- News Start -->
        <section class="section pt-5 pt-sm-0 pt-md-4 bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title mb-4 pb-2">
                            <h4 class="title mb-4">Nos menus</h4>
                            <p class="text-muted para-desc mx-auto mb-0">Nos pizzas sont préparées sur <span class="text-primary font-weight-bold">place</span> et sont généreusement <span class="text-primary font-weight-bold">garnies</span>.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="card blog rounded border-0 shadow">
                            <div class="position-relative">
                                <img src="public/img/restaurant/bg01.jpg" class="card-img-top rounded-top" alt="...">
                            <div class="overlay rounded-top bg-dark"></div>
                            </div>
                            <div class="card-body content">
                                <h5><a href="javascript:void(0)" class="card-title title text-dark">Pizza Only</a></h5>
                                <div class="post-meta d-flex justify-content-between mt-3">
                                    <a href="#" class="text-muted readmore">Découvrir <i class="mdi mdi-chevron-right"></i></a>
                                </div>
                            </div>
                            <div class="author">
                                <small class="text-light user d-block"><i class="mdi mdi-account"></i> L'espagnole</small>
                                <small class="text-light date"><i class="mdi mdi-calendar-check"></i> chorizo, moules, tomates cerise,...</small>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="card blog rounded border-0 shadow">
                            <div class="position-relative">
                                <img src="public/img/restaurant/bg01.jpg" class="card-img-top rounded-top" alt="...">
                            <div class="overlay rounded-top bg-dark"></div>
                            </div>
                            <div class="card-body content">
                                <h5><a href="javascript:void(0)" class="card-title title text-dark">Pizza & boisson</a></h5>
                                <div class="post-meta d-flex justify-content-between mt-3">
                                    <a href="#" class="text-muted readmore">Découvrir <i class="mdi mdi-chevron-right"></i></a>
                                </div>
                            </div>
                            <div class="author">
                                <small class="text-light user d-block"><i class="mdi mdi-account"></i> Pepperoni</small>
                                <small class="text-light date"><i class="mdi mdi-calendar-check"></i> pepperoni, epice, mozzarella,...</small>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="card blog rounded border-0 shadow">
                            <div class="position-relative">
                                <img src="public/img/restaurant/bg01.jpg" class="card-img-top rounded-top" alt="...">
                            <div class="overlay rounded-top bg-dark"></div>
                            </div>
                            <div class="card-body content">
                                <h5><a href="javascript:void(0)" class="card-title title text-dark">Pizza, boisson & dessert</a></h5>
                                <div class="post-meta d-flex justify-content-between mt-3">
                                    <a href="#" class="text-muted readmore">Découvrir <i class="mdi mdi-chevron-right"></i></a>
                                </div>
                            </div>
                            <div class="author">
                                <small class="text-light user d-block"><i class="mdi mdi-account"></i> Kebab</small>
                                <small class="text-light date"><i class="mdi mdi-calendar-check"></i> Kebab,...</small>
                            </div>
                        </div>
                    </div><!--end col-->

                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- Blog End -->

        <!-- Client Start -->
        <section class="section" style="background-color: #4f4f4f">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 text-center">
                        <div id="owl-fade" class="owl-carousel owl-theme">
                            <div class="customer-testi text-center">
                                <p class="text-light para-dark h6 font-italic">" It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. "</p>
                                <ul class="list-unstyled mb-0 mt-3">
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                </ul>
                                <h6 class="text-light title-dark"> Thomas Israel </h6>
                                <img src="public/img/client/01.jpg" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
                            </div><!--end customer testi-->
                            
                            <div class="customer-testi text-center">
                                <p class="text-light para-dark h6 font-italic">" The advantage of its Latin origin and the relative meaninglessness of Lorum Ipsum is that the text does not attract attention to itself or distract the viewer's attention from the layout. "</p>
                                <ul class="list-unstyled mb-0 mt-3">
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                </ul>
                                <h6 class="text-light title-dark"> Carl Oliver </h6>
                                <img src="public/img/client/02.jpg" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
                            </div><!--end customer testi-->
                            
                            <div class="customer-testi text-center">
                                <p class="text-light para-dark h6 font-italic">" There is now an abundance of readable dummy texts. These are usually used when a text is required purely to fill a space. These alternatives to the classic Lorem Ipsum texts are often amusing and tell short, funny or nonsensical stories. "</p>
                                <ul class="list-unstyled mb-0 mt-3">
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                </ul>
                                <h6 class="text-light title-dark"> Barbara McIntosh </h6>
                                <img src="public/img/client/03.jpg" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
                            </div><!--end customer testi-->
                            
                            <div class="customer-testi text-center">
                                <p class="text-light para-dark h6 font-italic">" According to most sources, Lorum Ipsum can be traced back to a text composed by Cicero in 45 BC. Allegedly, a Latin scholar established the origin of the text by compiling all the instances of the unusual word 'consectetur' he could find "</p>
                                <ul class="list-unstyled mb-0 mt-3">
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                </ul>
                                <h6 class="text-light title-dark"> Christa Smith </h6>
                                <img src="public/img/client/04.jpg" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
                            </div><!--end customer testi-->
                            
                            <div class="customer-testi text-center">
                                <p class="text-light para-dark h6 font-italic">" It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. "</p>
                                <ul class="list-unstyled mb-0 mt-3">
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                </ul>
                                <h6 class="text-light title-dark"> Dean Tolle </h6>
                                <img src="public/img/client/05.jpg" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
                            </div><!--end customer testi-->
                            
                            <div class="customer-testi text-center">
                                <p class="text-light para-dark h6 font-italic">" It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. One may speculate that over the course of time certain letters were added or deleted at various positions within the text. "</p>
                                <ul class="list-unstyled mb-0 mt-3">
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                </ul>
                                <h6 class="text-light title-dark"> Jill Webb </h6>
                                <img src="public/img/restaurant/06.jpg" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
                            </div><!--end customer testi-->
                        </div><!--end owl carousel-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
            <!-- Client End -->
        </section>
        <!-- Client End -->

        <!-- Contact Start -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-6 p-0 pl-md-3 pr-md-3">
                        <div class="card map map-height-two rounded map-gray border-0">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2783.9485934628046!2d4.83965725088106!3d45.75217652210024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea44e4c82eaf%3A0x882259aa5f2b6dea!2sPizza%20LAB!5e0!3m2!1sfr!2sfr!4v1641891557754!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                          </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="card rounded shadow border-0">
                            <div class="card-body py-5">
                                <h5 class="card-title">Restons en contact !</h5>

                                <div class="custom-form mt-4">
                                    <div id="message"></div>
                                    <form method="post" action="php/contact.php" name="contact-form" id="contact-form">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Votre nom <span class="text-danger">*</span></label>
                                                    <div class="position-relative">
                                                        <i data-feather="user" class="fea icon-sm icons"></i>
                                                        <input name="name" id="name" type="text" class="form-control pl-5" placeholder="Votre Nom :">
                                                    </div>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Votre Email <span class="text-danger">*</span></label>
                                                    <div class="position-relative">
                                                        <i data-feather="mail" class="fea icon-sm icons"></i>
                                                    <input name="email" id="email" type="email" class="form-control pl-5" placeholder="Votre email :">
                                                    </div>
                                                </div> 
                                            </div><!--end col-->
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Commentaire</label>
                                                    <div class="position-relative">
                                                        <i data-feather="message-circle" class="fea icon-sm icons"></i>
                                                        <textarea name="comments" id="comments" rows="4" class="form-control pl-5" placeholder="Votre Message :"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--end row-->
                                        <div class="row">
                                            <div class="col-sm-12 text-center">
                                                <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary btn-block" value="Envoyer mon message">
                                                <div id="simple-msg"></div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </form><!--end form-->
                                </div><!--end custom-form-->
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
            <!-- Contact End -->
        </section><!--end section-->
        <!-- News End -->

        <footer class="footer footer-bar">
            <div class="container text-center">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="text-sm-left">
                            <p class="mb-0">© 2022 PIZZA LAB.</p>
                        </div>
                    </div><!--end col-->

                    <div class="col-sm-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <ul class="list-unstyled text-sm-right mb-0">
                            <li class="list-inline-item"><a href="javascript:void(0)"><img src="public/img/payments/american-ex.png" class="avatar avatar-ex-sm" title="American Express" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img src="public/img/payments/discover.png" class="avatar avatar-ex-sm" title="Discover" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img src="public/img/payments/master-card.png" class="avatar avatar-ex-sm" title="Master Card" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img src="public/img/payments/paypal.png" class="avatar avatar-ex-sm" title="Paypal" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img src="public/img/payments/visa.png" class="avatar avatar-ex-sm" title="Visa" alt=""></a></li>
                        </ul>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </footer><!--end footer-->
        <!-- Footer End -->

        <!-- Back to top -->
        <a href="#" class="btn btn-icon btn-primary back-to-top"><i data-feather="arrow-up" class="icons"></i></a>
        <!-- Back to top -->

        <!-- javascript -->
        <script src="public/js/jquery-3.5.1.min.js"></script>
        <script src="public/js/bootstrap.bundle.min.js"></script>
        <script src="public/js/jquery.easing.min.js"></script>
        <script src="public/js/scrollspy.min.js"></script>
        <!-- Magnific Popup -->
        <script src="public/js/jquery.magnific-popup.min.js"></script> 
        <script src="public/js/magnific.init.js"></script> 
        <!-- SLIDER -->
        <script src="public/js/owl.carousel.min.js "></script>
        <script src="public/js/owl.init.js "></script>  
        <!--FLEX SLIDER-->
        <script src="public/js/jquery.flexslider-min.js"></script>
        <script src="public/js/flexslider.init.js"></script>
        <!-- Datepicker -->
        <script src="public/js/flatpickr.min.js"></script>
        <script src="public/js/flatpickr.init.js"></script>
        <!-- Contact -->
        <script src="public/js/contact.js"></script>
        <!-- Icons -->
        <script src="public/js/feather.min.js"></script>
        <script src="https://unicons.iconscout.com/release/v3.0.3/script/monochrome/bundle.js"></script>
        <!-- Main Js -->
        <script src="public/js/app.js"></script>
    </body>
</html>