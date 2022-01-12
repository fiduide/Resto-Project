
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
                        <li class="has-submenu">
                            <a href="javascript:void(0)"><i class="mdi mdi-account"></i></a><span class="menu-arrow"></span>
                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li><a class="dropdown-item text-dark" href="index.php?action=account"><i class="uil uil-user align-middle mr-1"></i> Mon compte</a></li>
                                        <?php if(isset($_SESSION['isConnected']) && $_SESSION['isConnected'] == 1){ ?>
                                            <div class="dropdown-divider my-3 border-top"></div>
                                            <li><a class="dropdown-item text-dark" href="index.php?action=account&disconnect=1"><i class="uil uil-sign-out-alt align-middle mr-1"></i> Se déconnecter</a></li>
                                        <?php } ?>
                                    </ul>
                                </li>  
                            </ul>
                        </li>
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
                            <br>
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
                                       echo "<center>";
                                       echo "<img style='height: 300px;width: 370px' src='public/img/pizza/".$pizza['id_plat'].".png'>";
                                       echo "<br>";
                                       echo $pizza['nom_plat'] . "<br>";echo "<i>";
                                       echo "<p><u>Ingrédients :</u></p>";
                                       echo $pizza['ingredient']. "<br></p>";
                                       echo "</i>";
                                       echo "<a class='btn btn-pills btn-primary' href=". $pizza['id_plat'] . ">Sélectionner</a>";
                                       echo "</center>";
                                   } ?>
                                </div><!--end row-->
                            </div><!--end teb pane-->

                            <div class="tab-pane fade" id="pills-smart" role="tabpanel" aria-labelledby="pills-smart-tab">
                                <div class="row align-items-center">
                                <?php foreach ($boissons as $boisson) {
                                       echo "<center>";
                                       echo "<img style='height: 200px;width: 370px' src='public/img/boisson/".$boisson['id_boisson'].".png'>";
                                       echo "<br>";
                                       echo $boisson['nom_boisson'] . "<br>";
                                       echo "<a class='btn btn-pills btn-primary' href=". $boisson['id_boisson'] . ">Sélectionner</a>";
                                       echo "</center>";
                                   } ?>
                                </div>    <!--end row-->
                            </div><!--end teb pane-->

                            <div class="tab-pane fade" id="pills-apps" role="tabpanel" aria-labelledby="pills-apps-tab">
                                <div class="row align-items-center">
                                <?php foreach ($desserts as $dessert) {
                                       echo "<center>";
                                       echo "<img style='height: 250px;width: 370px' src='public/img/dessert/".$dessert['id_dessert'].".png'>";
                                       echo "<br>";
                                       echo $dessert['nom_dessert'] . "<br>";
                                       echo "<a class='btn btn-pills btn-primary' href=". $dessert['id_dessert'] . ">Sélectionner</a>";
                                       echo "</center>";
                                   } ?>
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


        <!-- Shape Start -->
        <div class="position-relative">
            <div class="shape overflow-hidden text-footer">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>
        <!--Shape End-->
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