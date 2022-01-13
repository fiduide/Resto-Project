<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Pizza Lab - Paramètre</title>
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
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--ed container-->
        </section><!--end section-->
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
                                    <a href="index.php?action=affichageProfil" class="accounts rounded d-block shadow text-center py-3">
                                        <span class="pro-icons h3 text-muted"><i class="uil uil-dashboard"></i></span>
                                        <h6 class="title text-dark h6 my-0">Profil</h6>
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
                                    <a href="index.php?action=account&parametre=1" class="accounts active rounded d-block shadow text-center py-3">
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
                

                                </div><!--end row-->
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-8 col-12">
                        <div class="card border-0 rounded shadow">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 mt-4 pt-2">
                                        <h5>Informations :</h5>

                                        <form action="index.php?action=account" method="post">
                                            <input type="hidden" name="update" value="1">
                                            <input type="hidden" name="id_utilisateur" value="<?php echo $utilisateur->getId_utilisateur();?>">
                                            <input type="hidden" name="niveau_acces" value="<?php echo $utilisateur->getNiveau_acces();?>">
                                            <input type="hidden" name="date_register" value="<?php echo $utilisateur->getDate_register()->format("Y-m-d H:i:s");?>">
                                            <input type="hidden" name="statut_account" value="<?php echo $utilisateur->getStatut_account();?>">
                                            
                                            <div class="row mt-4">
                                                <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Nom</label>
                                                    <div class="position-relative">
                                                        <i data-feather="user" class="fea icon-sm icons"></i>
                                                        <input name="nom" id="first" type="text" class="form-control pl-5" placeholder="Nom :" required="">
                                                    </div>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Prénom</label>
                                                    <div class="position-relative">
                                                        <i data-feather="user-check" class="fea icon-sm icons"></i>
                                                        <input name="prenom" id="last" type="text" class="form-control pl-5" placeholder="Prénom :" required="">
                                                    </div>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <div class="position-relative">
                                                        <i data-feather="mail" class="fea icon-sm icons"></i>
                                                        <input name="email" id="email" type="email" class="form-control pl-5" placeholder="email :" required="">
                                                    </div>
                                                </div> 
                                            </div><!--end col-->

                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Téléphone :</label>
                                                    <div class="position-relative">
                                                        <i data-feather="phone" class="fea icon-sm icons"></i>
                                                        <input name="telephone" id="number" type="text" class="form-control pl-5" placeholder="Téléphone :" required="">
                                                    </div>
                                                </div>
                                            </div><!--end col-->

                                            <div class="col-lg-12 mt-2 mb-0">
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end col-->
                                    <div class="col-md-6 mt-4 pt-2"> 
                                    <h5 style="color:white" >I</h5>
                                            <div class="row mt-4">
                                               <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Nouveau mot de passe :</label>
                                                        <div class="position-relative">
                                                            <i data-feather="key" class="fea icon-sm icons"></i>
                                                            <input type="password" name="mot_de_passe" class="form-control pl-5" placeholder="Nouveau mot de passe" required="">
                                                        </div>
                                                    </div>
                                                </div><!--end col-->
            
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Retaper le nouveau mot de passe :</label>
                                                        <div class="position-relative">
                                                            <i data-feather="key" class="fea icon-sm icons"></i>
                                                            <input type="password" name="new_password2" class="form-control pl-5" placeholder="Retaper le nouveau mot de passe" required="">
                                                        </div>
                                                    </div>
                                                </div><!--end col-->
            
                                                <div class="col-lg-12 mt-2 mb-0">
                                                    <button class="btn btn-primary">Mettre à jour</button>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </form>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div>
                        </div>
                        <div class="rounded shadow mt-4">
                            <div class="p-4 border-bottom">
                                <h5 class="mb-0 text-danger">Suprimer mon compte :</h5>
                            </div>

                            <div class="p-4">
                                <h6 class="mb-0">Voulez-vous vraiment suprimer votre compte ?</h6>
                                <div class="mt-4">
                                <form action="index.php?action=account" method="post">
                                    <input type="hidden" name="delete" value="1">
                                    <input type="hidden" name="id_utilisateur" value="<?php echo $utilisateur->getId_utilisateur();?>">      
                                    <button class="btn btn-danger">Suprimer mon compte</button>
                                </form>
                                </div><!--end col-->
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- Profile Setting End -->
    <!-- Footer Start -->
    <?php include("app/Template/v_footer.php"); ?>
    </body>
</html>