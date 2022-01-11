
<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Pizza Lab - Plats</title>
        <!-- favicon -->
        <link rel="shortcut icon" href="public/img/favicon.ico">
        <!-- Bootstrap -->
        <link href="public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons -->
        <link href="public/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.3/public/css/line.css">
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/@mdi/font@6.5.95/css/materialdesignicons.min.css">
        <!-- Slider -->               
        <link rel="stylesheet" href="public/css/owl.carousel.min.css"/> 
        <link rel="stylesheet" href="public/css/owl.theme.default.min.css"/> 
        <!-- Main Css -->
        <link href="public/css/style.css" rel="stylesheet" type="text/css" id="theme-opt" />
        <link href="public/css/colors/default.css" rel="stylesheet" id="color-opt">

    </head>

    <body>
        <!-- Loader -->
        <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
        <!-- Loader -->

        <!-- Navbar STart -->
        <header id="topnav" class="defaultscroll sticky bg-white">
            <div class="container d-flex align-items-center justify-content-between">
                <!-- Logo container-->
                <div>
                    <a class="logo" href="#">
                        <img src="public/img/logo/logo_fond_vide.png" height="100" alt="pizza lab">
                    </a>
                </div>                 
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
                        <li class="has-submenu"><a href="index.php?action=account"><i class="mdi mdi-account"></i>Mon Compte</a></li>
                        
                    </ul><!--end navigation menu-->
                </div><!--end navigation-->
            </div><!--end container-->
        </header><!--end header-->
        <!-- Navbar End -->

      
       

        <!-- Showcase Start -->
        <section class="section pt-0 bg-light">
            <div class="container mt-100 mt-60">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title mb-4 pb-2">
                            <h4 class="title mb-4"><span class="text-primary">Nos</span> Plats</h4>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-12 mt-4 pt-2 text-center">
                        <ul class="nav nav-pills nav-justified flex-column flex-sm-row rounded" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link rounded active" id="pills-cloud-tab" data-toggle="pill" href="#pills-cloud" role="tab" aria-controls="pills-cloud" aria-selected="false">
                                    <div class="text-center py-2">
                                        <h6 class="mb-0">Pizzas</h6>
                                    </div>
                                </a><!--end nav link-->
                            </li><!--end nav item-->
                            
                            <li class="nav-item">
                                <a class="nav-link rounded <?php if(isset($_GET['menu']) && $_GET['menu'] == 1) { ?> disabled d-none <?php } ?>" id="pills-smart-tab" data-toggle="pill" href="#pills-smart" role="tab" aria-controls="pills-smart" aria-selected="false">
                                    <div class="text-center py-2">
                                        <h6 class="mb-0">Boissons</h6>
                                    </div>
                                </a><!--end nav link-->
                            </li><!--end nav item-->
                            
                            <li class="nav-item">
                                <a class="nav-link rounded <?php if(isset($_GET['menu']) && ($_GET['menu'] == 1 || $_GET['menu'] == 2)) { ?> disabled d-none <?php } ?>" id="pills-apps-tab" data-toggle="pill" href="#pills-apps" role="tab" aria-controls="pills-apps" aria-selected="false">
                                    <div class="text-center py-2">
                                        <h6 class="mb-0">Désserts</h6>
                                    </div>
                                </a><!--end nav link-->
                            </li><!--end nav item-->
                        </ul><!--end nav pills-->
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-12 mt-4 pt-2">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-cloud" role="tabpanel" aria-labelledby="pills-cloud-tab">
                                <div class="row align-items-center">
                                   <?php foreach ($pizzas as $pizza) {
                                       echo $pizza['nom_plat'] . "=> ";
                                       echo $pizza['ingredient']. "<br>";
                                   } ?>
                                </div><!--end row-->
                            </div><!--end teb pane-->

                            <div class="tab-pane fade" id="pills-smart" role="tabpanel" aria-labelledby="pills-smart-tab">
                                <div class="row align-items-center">
                                    <?php echo "affichage boisson"; ?>
                                </div>    <!--end row-->
                            </div><!--end teb pane-->

                            <div class="tab-pane fade" id="pills-apps" role="tabpanel" aria-labelledby="pills-apps-tab">
                                <div class="row align-items-center">
                                    <?php echo "affichage Dessert"; ?>
                                </div>    <!--end row-->
                            </div><!--end teb pane-->
                        </div><!--end tab content-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- Showcase End -->

        <!-- Shape Start -->
        <div class="position-relative">
            <div class="shape overflow-hidden text-white">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>
        <!--Shape End-->

        <!-- Price Start -->
        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title mb-4 pb-2">
                            <h4 class="title mb-4">Choose The Pricing Plan</h4>
                            <p class="text-muted para-desc mb-0 mx-auto">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row align-items-center">
                    <div class="col-md-4 col-12 mt-4 pt-2">
                        <div class="card pricing-rates bg-light py-5 border-0 rounded text-center">
                            <div class="card-body">
                                <h6 class="title font-weight-bold text-uppercase text-primary mb-4">Free</h6>
                                <div class="d-flex justify-content-center mb-4">
                                    <span class="h4 mb-0 mt-2">$</span>
                                    <span class="price h1 mb-0">0</span>
                                    <span class="h4 align-self-end mb-1">/mo</span>
                                </div>

                                <ul class="list-unstyled mb-0 pl-0">
                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uil uil-check-circle align-middle"></i></span>Full Access</li>
                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uil uil-check-circle align-middle"></i></span>Enhanced Security</li>
                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uil uil-check-circle align-middle"></i></span>Source Files</li>
                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uil uil-check-circle align-middle"></i></span>1 Domain Free</li>
                                </ul>
                                <a href="javascript:void(0)" class="btn btn-primary mt-4">Buy Now</a>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-md-4 col-12 mt-4 pt-2">
                        <div class="card pricing-rates starter-plan bg-light py-5 border-0 rounded text-center">
                            <div class="card-body">
                                <h6 class="title font-weight-bold text-uppercase text-primary mb-4">Starter</h6>
                                <div class="d-flex justify-content-center mb-4">
                                    <span class="h4 mb-0 mt-2">$</span>
                                    <span class="price h1 mb-0">39</span>
                                    <span class="h4 align-self-end mb-1">/mo</span>
                                </div>
                                
                                <ul class="list-unstyled mb-0 pl-0">
                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uil uil-check-circle align-middle"></i></span>Full Access</li>
                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uil uil-check-circle align-middle"></i></span>Source Files</li>
                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uil uil-check-circle align-middle"></i></span>Free Appointments</li>
                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uil uil-check-circle align-middle"></i></span>Enhanced Security</li>
                                </ul>
                                <a href="javascript:void(0)" class="btn btn-primary mt-4">Get Started</a>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-md-4 col-12 mt-4 pt-2">
                        <div class="card pricing-rates bg-light py-5 border-0 rounded text-center">
                            <div class="card-body">
                                <h6 class="title font-weight-bold text-uppercase text-primary mb-4">Professional</h6>
                                <div class="d-flex justify-content-center mb-4">
                                    <span class="h4 mb-0 mt-2">$</span>
                                    <span class="price h1 mb-0">59</span>
                                    <span class="h4 align-self-end mb-1">/mo</span>
                                </div>

                                <ul class="list-unstyled mb-0 pl-0">
                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uil uil-check-circle align-middle"></i></span>Full Access</li>
                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uil uil-check-circle align-middle"></i></span>Enhanced Security</li>
                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uil uil-check-circle align-middle"></i></span>Source Files</li>
                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uil uil-check-circle align-middle"></i></span>1 Domain Free</li>
                                </ul>
                                <a href="javascript:void(0)" class="btn btn-primary mt-4">Try It Now</a>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- Price End -->

        <!-- Testi n Download cta start -->
        <section class="section pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div id="customer-testi" class="owl-carousel owl-theme">
                            <div class="card customer-testi border-0 text-center">
                                <div class="card-body">
                                    <img src="public/img/client/01.jpg" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
                                    <p class="text-muted mt-4">" It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. "</p>
                                    <h6 class="text-primary">- Thomas Israel</h6>
                                </div>
                            </div>

                            <div class="card customer-testi border-0 text-center">
                                <div class="card-body">
                                    <img src="public/img/client/02.jpg" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
                                    <p class="text-muted mt-4">" The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. "</p>
                                    <h6 class="text-primary">- Carl Oliver</h6>
                                </div>
                            </div>

                            <div class="card customer-testi border-0 text-center">
                                <div class="card-body">
                                    <img src="public/img/client/03.jpg" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
                                    <p class="text-muted mt-4">" One disadvantage of Lorum Ipsum is that in Latin certain letters appear more frequently than others. "</p>
                                    <h6 class="text-primary">- Barbara McIntosh</h6>
                                </div>
                            </div>

                            <div class="card customer-testi border-0 text-center">
                                <div class="card-body">
                                    <img src="public/img/client/04.jpg" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
                                    <p class="text-muted mt-4">" Thus, Lorem Ipsum has only limited suitability as a visual filler for German texts. "</p>
                                    <h6 class="text-primary">- Jill Webb</h6>
                                </div>
                            </div>

                            <div class="card customer-testi border-0 text-center">
                                <div class="card-body">
                                    <img src="public/img/client/05.jpg" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
                                    <p class="text-muted mt-4">" There is now an abundance of readable dummy texts. These are usually used when a text is required. "</p>
                                    <h6 class="text-primary">- Dean Tolle</h6>
                                </div>
                            </div>

                            <div class="card customer-testi border-0 text-center">
                                <div class="card-body">
                                    <img src="public/img/client/06.jpg" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
                                    <p class="text-muted mt-4">" According to most sources, Lorum Ipsum can be traced back to a text composed by Cicero. "</p>
                                    <h6 class="text-primary">- Christa Smith</h6>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row mt-md-5 pt-md-3 mt-4 pt-2 mt-sm-0 pt-sm-0 justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title">
                            <h4 class="title mb-4">Get the App now !</h4>
                            <p class="text-muted para-desc mx-auto">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                            <div class="mt-4">
                                <a href="javascript:void(0)" class="btn btn-primary mt-2 mr-2"><i class="mdi mdi-apple"></i> App Store</a>
                                <a href="javascript:void(0)" class="btn btn-outline-primary mt-2"><i class="mdi mdi-google-play"></i> Play Store</a>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- Testi n Download cta End -->

        <!-- Shape Start -->
        <div class="position-relative">
            <div class="shape overflow-hidden text-footer">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>
        <!--Shape End-->

        <!-- Footer Start -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                        <a href="#" class="logo-footer">
                            <img src="public/img/logo-light.png" height="24" alt="">
                        </a>
                        <p class="mt-4">Start working with Landrick that can provide everything you need to generate awareness, drive traffic, connect.</p>
                        <ul class="list-unstyled social-icon social mb-0 mt-4">
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                        </ul><!--end icon-->
                    </div><!--end col-->
                    
                    <div class="col-lg-2 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <h5 class="text-light footer-head">Company</h5>
                        <ul class="list-unstyled footer-list mt-4">
                            <li><a href="page-aboutus.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> About us</a></li>
                            <li><a href="page-services.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Services</a></li>
                            <li><a href="page-team.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Team</a></li>
                            <li><a href="page-pricing.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Pricing</a></li>
                            <li><a href="page-portfolio-modern.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Project</a></li>
                            <li><a href="page-jobs.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Careers</a></li>
                            <li><a href="page-blog-grid.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Blog</a></li>
                            <li><a href="auth-cover-login.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Login</a></li>
                        </ul>
                    </div><!--end col-->
                    
                    <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <h5 class="text-light footer-head">Usefull Links</h5>
                        <ul class="list-unstyled footer-list mt-4">
                            <li><a href="page-terms.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Terms of Services</a></li>
                            <li><a href="page-privacy.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Privacy Policy</a></li>
                            <li><a href="documentation.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Documentation</a></li>
                            <li><a href="changelog.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Changelog</a></li>
                            <li><a href="components.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Components</a></li>
                        </ul>
                    </div><!--end col-->

                    <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <h5 class="text-light footer-head">Newsletter</h5>
                        <p class="mt-4">Sign up and receive the latest tips via email.</p>
                        <form>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="foot-subscribe form-group">
                                        <label>Write your email <span class="text-danger">*</span></label>
                                        <div class="position-relative">
                                            <i data-feather="mail" class="fea icon-sm icons"></i>
                                            <input type="email" name="email" id="emailsubscribe" class="form-control pl-5 rounded" placeholder="Your email : " required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <input type="submit" id="submitsubscribe" name="send" class="btn btn-soft-primary btn-block" value="Subscribe">
                                </div>
                            </div>
                        </form>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </footer><!--end footer-->
        <footer class="footer footer-bar">
            <div class="container text-center">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="text-sm-left">
                            <p class="mb-0">© 2019-20 Landrick. Design with <i class="mdi mdi-heart text-danger"></i> by <a href="http://shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.</p>
                        </div>
                    </div><!--end col-->

                    <div class="col-sm-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <ul class="list-unstyled payment-cards text-sm-right mb-0">
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
        <!-- SLIDER -->
        <script src="public/js/owl.carousel.min.js "></script>
        <script src="public/js/owl.init.js "></script>
        <!-- Icons -->
        <script src="public/js/feather.min.js"></script>
        <script src="https://unicons.iconscout.com/release/v3.0.3/script/monochrome/bundle.js"></script>
        <!-- Main Js -->
        <script src="public/js/app.js"></script>
    </body>
</html>