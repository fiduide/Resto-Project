<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Pizza Lab - Paiement</title>
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
                                            <h3 class="title mb-0"><?php ?></h3>
                                            <small class="text-muted h6 mr-2"><?php ?></small>
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
                                    <a href="index.php?action=affichageProfil&nom='<?php $nom ?>'&prenom='<?php $prenom ?>'&niveau='<?php $niveau ?>'" class="accounts  rounded d-block shadow text-center py-3">
                                        <span class="pro-icons h3 text-muted"><i class="uil uil-dashboard"></i></span>
                                        <h6 class="title text-dark h6 my-0">Profil</h6>
                                    </a>
                                </div>
                                <!--end col-->

                                <div class="col-6 mt-4 pt-2">
                                    <a href="index.php?action=paiementPage&nom='<?php $nom ?>'&prenom='<?php $prenom ?>'&niveau='<?php $niveau ?>'" class="accounts active rounded d-block shadow text-center py-3">
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
                        <div class="rounded shadow p-4">
                            <div class="d-flex align-items-center justify-content-between">
                                <h5 class="mb-0">Méthode de paiement :</h5>
                                <a href="javascript:void(0)" data-toggle="modal" data-target="#addnewcard" class="btn btn-primary"><i data-feather="plus" class="fea icon-sm"></i> Ajouter un nouveau moyen de paiement</a>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mt-4 pt-2">
                                    <a href="javascript:void(0)">
                                        <div class="card rounded shadow bg-light border-0">
                                            <div class="card-body">
                                                <img src="images/payments/payment/master.png" height="60" class="text-right" alt="">
                                                <div class="mt-4">
                                                    <h5 class="text-dark">•••• •••• •••• 4559</h5>
                                                    <div class="d-flex justify-content-between">
                                                        <h6 class="h6 text-muted mb-0">Exp: <span class="text-muted">10/22</span></h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div><!--end col-->
    
                                <div class="col-md-6 mt-4 pt-2">
                                    <a href="javascript:void(0)">
                                        <div class="card rounded shadow bg-dark border-0">
                                            <div class="card-body">
                                                <img src="images/payments/payment/visaa.png" height="60" class="text-right" alt="">
                                                <div class="mt-4">
                                                    <h5 class="text-light">•••• •••• •••• 9856</h5>
                                                    <div class="d-flex justify-content-between">
                                                        <h6 class="h6 text-muted mb-0">Exp: <span class="text-muted">01/24</span></h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div><!--end col-->
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- Profile End -->

        <!-- Footer Start -->
        <?php include("app/Template/v_footer.php"); ?>
        <!-- Footer End -->
    </body>
</html>