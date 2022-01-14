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
                                                <li class="list-inline-item"><a href="index.php?action=account&parametre=1" class="rounded" data-toggle="tooltip" data-placement="bottom" title="Settings"><i data-feather="tool" class="fea icon-sm fea-social"></i></a></li>
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
                                    <a href="index.php?action=account" class="accounts rounded d-block shadow text-center py-3">
                                        <span class="pro-icons h3 text-muted"><i class="uil uil-dashboard"></i></span>
                                        <h6 class="title text-dark h6 my-0">Profil</h6>
                                    </a>
                                </div>
                                <!--end col-->

                                <div class="col-6 mt-4 pt-2">
                                    <a href="index.php?action=account&parametre=1" class="accounts rounded d-block shadow text-center py-3">
                                        <span class="pro-icons h3 text-muted"><i class="uil uil-setting"></i></span>
                                        <h6 class="title text-dark h6 my-0">Paramètres</h6>
                                    </a>
                                </div>
                                <!--end col-->

                                <div class="col-6 mt-4 pt-2">
                                    <a href="index.php?action=account&history=1" class="accounts active rounded d-block shadow text-center py-3">
                                        <span class="pro-icons h3 text-muted"><i class="uil uil-history"></i></span>
                                        <h6 class="title text-dark h6 my-0">Historique</h6>
                                    </a>
                                </div>
                                <!--end col-->

                                <div class="col-6 mt-4 pt-2">
                                    <a href="index.php?action=account&payment=1" class="accounts rounded d-block shadow text-center py-3">
                                        <span class="pro-icons h3 text-muted"><i class="uil uil-transaction"></i></span>
                                        <h6 class="title text-dark h6 my-0">Paiement</h6>
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
                            <div class="col-12">
                                <div class="table-responsive bg-white shadow rounded">
                                    <table class="table mb-0 table-center table-nowrap">
                                        <thead>
                                            <tr>
                                                <th scope="col">N° Commande</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Total</th>
                                                <th scope="col">Pizza(s)</th>
                                                <th scope="col">Boisson(s)</th>
                                                <th scope="col">Dessert(s)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($commandes as $commande) { ?>
                                                <?php
                                                $style = "";
                                                if ($commande->getEtat() == 1) {
                                                    $style = "style=\"color: rgba(0, 0, 0, 0.5);\"";
                                                }
                                                ?>
                                                <tr <?php echo $style ?>>
                                                    <td>
                                                        <?php echo $commande->getId_commande(); ?>
                                                        <?php if ($commande->getEtat() == 0) { ?>
                                                            <span class="badge badge-pill badge-soft-warning">En cours</span>
                                                        <?php } else { ?>
                                                            <span class="badge badge-pill badge-soft-success">Terminée</span>
                                                        <?php } ?>
                                                    </td>

                                                    <td>
                                                        <?php echo $commande->getDate_orderFR(); ?>
                                                    </td>

                                                    <td>
                                                        <?php echo $commande->getTotal(); ?>€
                                                    </td>

                                                    <td>
                                                        <?php echo $commande->getPizzaList(); ?>
                                                    </td>

                                                    <td>
                                                        <?php echo $commande->getBoissonList(); ?>
                                                    </td>

                                                    <td>
                                                        <?php echo $commande->getDessertList(); ?>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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
</body>

</html>