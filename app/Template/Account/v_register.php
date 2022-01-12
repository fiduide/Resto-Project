<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>Pizza Lab - Connexion</title>
    <?php include("app/Template/v_link.php"); ?>
</head>

<body>

    <div class="back-to-home rounded d-none d-sm-block">
        <a href="index.php" class="btn btn-icon btn-primary"><i data-feather="home" class="icons"></i></a>
    </div>

    <!-- Hero Start -->
    <section class="bg-home bg-circle-gradiant d-flex align-items-center">    
            <div class="bg-overlay bg-overlay-white"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-8">
                    <div class="card shadow rounded border-0 mt-4">
                        <div class="card-body">
                            <h4 class="card-title text-center">Inscription</h4>
                              <form class="login-form mt-4" action="index.php?action=register" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nom <span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <i data-feather="user" class="fea icon-sm icons"></i>
                                                <input type="text" class="form-control pl-5" placeholder="Nom" name="s"
                                                    required="">
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Prénom <span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <i data-feather="user-check" class="fea icon-sm icons"></i>
                                                <input type="text" class="form-control pl-5" placeholder="Prénom"
                                                    name="s" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>E-mail <span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <i data-feather="mail" class="fea icon-sm icons"></i>
                                                <input type="email" class="form-control pl-5" placeholder="Email"
                                                    name="email" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Téléphone <span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <i data-feather="phone" class="fea icon-sm icons"></i>
                                                <input type="text" class="form-control pl-5" placeholder="Téléphone"
                                                    name="s" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Mot de passe <span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <i data-feather="key" class="fea icon-sm icons"></i>
                                                <input type="password" class="form-control pl-5"
                                                    placeholder="Mot de passe" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">J'accepte <a
                                                        href="#" class="text-primary">les CGU & CGV</a></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-md-12">
                                        <button class="btn btn-primary btn-block">Inscription</button>
                                    </div>
                                    <!--end col-->
                                    <div class="mx-auto">
                                        <p class="mb-0 mt-3"><small class="text-dark mr-2">Vous avez déja un compte ?
                                            </small> <a href="v_login.html"
                                                class="text-dark font-weight-bold">Connexion</a></p>
                                    </div>
                                </div>
                                <!--end row-->
                            </form>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Hero End -->

    <!-- javascript -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Icons -->
    <script src="js/feather.min.js"></script>
    <script src="https://unicons.iconscout.com/release/v3.0.3/script/monochrome/bundle.js"></script>
    <!-- Main Js -->
    <script src="js/app.js"></script>
</body>

</html>