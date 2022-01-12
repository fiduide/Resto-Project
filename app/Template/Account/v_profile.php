<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Pizza Lab - Profil</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <!-- Bootstrap -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons -->
    <link href="public/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.3/css/line.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/@mdi/font@6.5.95/css/materialdesignicons.min.css">
    <!-- Slider -->
    <link rel="stylesheet" href="public/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="public/css/owl.theme.default.min.css" />
    <!-- Main Css -->
    <link href="public/css/style.css" rel="stylesheet" type="text/css" id="theme-opt" />
    <link href="public/css/colors/default.css" rel="stylesheet" id="color-opt">

</head>

<body>
    <?php include("app/Template/v_menu.php"); ?>

    <!-- Hero Start -->
    <section class="bg-profile d-table w-100 bg-primary" style="background: url('images/account/bg.png') center center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card public-profile border-0 rounded shadow" style="z-index: 1;">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-lg-2 col-md-3 text-md-left text-center">
                                    <img src="public/img/client/06.jpg" class="avatar avatar-large rounded-circle shadow d-block mx-auto" alt="">
                                </div>
                                <!--end col-->

                                <div class="col-lg-10 col-md-9">
                                    <div class="row align-items-end">
                                        <div class="col-md-7 text-md-left text-center mt-4 mt-sm-0">
                                            <h3 class="title mb-0"><?php echo $utilisateur->getNom() . " " . $utilisateur->getPrenom(); ?></h3>
                                            <small class="text-muted h6 mr-2"><?php echo $utilisateur->getNiveau_accesLibelle(); ?></small>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-5 text-md-right text-center">
                                            <ul class="list-unstyled social-icon social mb-0 mt-4">
                                                <li class="list-inline-item"><a href="account-setting.html" class="rounded" data-toggle="tooltip" data-placement="bottom" title="Settings"><i data-feather="tool" class="fea icon-sm fea-social"></i></a></li>
                                            </ul>
                                            <!--end icon-->
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--ed container-->
    </section>
    <!--end section-->
    <!-- Hero End -->
    <!-- Profile Start -->
    <section class="section mt-60">
        <div class="container mt-lg-3">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 d-lg-block d-none">
                    <div class="sidebar sticky-bar p-4 rounded shadow">
                        <div class="widget">
                            <div class="row">
                                <div class="col-6 mt-4 pt-2">
                                    <a href="index.php?action=affichageProfil" class="accounts active rounded d-block shadow text-center py-3">
                                        <span class="pro-icons h3 text-muted"><i class="uil uil-dashboard"></i></span>
                                        <h6 class="title text-dark h6 my-0">Profil</h6>
                                    </a>
                                </div>
                                <!--end col-->

                                <div class="col-6 mt-4 pt-2">
                                    <a href="index.php?action=paiementPage" class="accounts rounded d-block shadow text-center py-3">
                                        <span class="pro-icons h3 text-muted"><i class="uil uil-transaction"></i></span>
                                        <h6 class="title text-dark h6 my-0">Paiement</h6>
                                    </a>
                                </div>
                                <!--end col-->

                                <div class="col-6 mt-4 pt-2">
                                    <a href="account-setting.html" class="accounts rounded d-block shadow text-center py-3">
                                        <span class="pro-icons h3 text-muted"><i class="uil uil-setting"></i></span>
                                        <h6 class="title text-dark h6 my-0">Paramètres</h6>
                                    </a>
                                </div>
                                <!--end col-->

                                <div class="col-6 mt-4 pt-2">
                                    <a href="index.php?action=account&disconnect=1" class="accounts rounded d-block shadow text-center py-3">
                                        <span class="pro-icons h3 text-muted"><i class="uil uil-sign-out-alt"></i></span>
                                        <h6 class="title text-dark h6 my-0">Se déconnecter</h6>
                                    </a>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>

                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-8 col-12">
                    <div class="border-bottom pb-4">
                        <div class="row">
                            <div class="col-md-6 mt-4">
                                <h5>Détails personnel :</h5>
                                <div class="mt-4">
                                    <div class="media align-items-center mt-3">
                                        <i data-feather="phone" class="fea icon-ex-md text-muted mr-3"></i>
                                        <div class="media-body">
                                            <h6 class="text-primary mb-0">Téléphone :</h6>
                                            <a href="javascript:void(0)" class="text-muted"><?php echo $utilisateur->getTelephone(); ?></a>
                                        </div>
                                    </div>
                                    <div class="media align-items-center mt-3">
                                        <i data-feather="mail" class="fea icon-ex-md text-muted mr-3"></i>
                                        <div class="media-body">
                                            <h6 class="text-primary mb-0">Email :</h6>
                                            <a href="javascript:void(0)" class="text-muted"><?php echo $utilisateur->getEmail(); ?></a>
                                        </div>
                                    </div>
                                    <div class="media align-items-center mt-3">
                                        <i data-feather="gift" class="fea icon-ex-md text-muted mr-3"></i>
                                        <div class="media-body">
                                            <h6 class="text-primary mb-0">Date d'inscritpion :</h6>
                                            <p class="text-muted mb-0"><?php echo $utilisateur->getDate_registerFR() ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->

                            <div class="col-md-6 mt-4 pt-2 pt-sm-0">
                                <h5>Dernière commandes :</h5>

                                <div class="media key-feature align-items-center p-3 rounded shadow mt-4">
                                    <img src="images/job/Circleci.svg" class="avatar avatar-ex-sm" alt="">
                                    <div class="media-body content ml-3">
                                        <h4 class="title mb-0">Senior Web Developer</h4>
                                        <p class="text-muted mb-0">3 Years Experience</p>
                                        <p class="text-muted mb-0"><a href="javascript:void(0)" class="text-primary">CircleCi</a> @London, UK</p>
                                    </div>
                                </div>

                                <div class="media key-feature align-items-center p-3 rounded shadow mt-4">
                                    <img src="images/job/Codepen.svg" class="avatar avatar-ex-sm" alt="">
                                    <div class="media-body content ml-3">
                                        <h4 class="title mb-0">Web Designer</h4>
                                        <p class="text-muted mb-0">2 Years Experience</p>
                                        <p class="text-muted mb-0"><a href="javascript:void(0)" class="text-primary">Codepen</a> @Washington D.C, USA</p>
                                    </div>
                                </div>

                                <div class="media key-feature align-items-center p-3 rounded shadow mt-4">
                                    <img src="images/job/Gitlab.svg" class="avatar avatar-ex-sm" alt="">
                                    <div class="media-body content ml-3">
                                        <h4 class="title mb-0">UI Designer</h4>
                                        <p class="text-muted mb-0">2 Years Experience</p>
                                        <p class="text-muted mb-0"><a href="javascript:void(0)" class="text-primary">Gitlab</a> @Perth, Australia</p>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>

                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Profile End -->

    <!-- Footer Start -->
    <?php include("app/Template/v_footer.php"); ?>
    <!--end footer-->
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