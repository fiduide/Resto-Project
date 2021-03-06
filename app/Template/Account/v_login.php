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
                    <div class="card login-page bg-white shadow rounded border-0">
                        <div class="card-body">
                            <h4 class="card-title text-center">Connexion</h4>
                            <form class="login-form mt-4" action="index.php?action=account" method="post">

                                <input type="hidden" name="login" value="1">

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Votre Email <span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <i data-feather="user" class="fea icon-sm icons"></i>
                                                <input type="email" class="form-control pl-5" placeholder="Email" name="email" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Mot de passe <span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <i data-feather="key" class="fea icon-sm icons"></i>
                                                <input type="password" class="form-control pl-5" placeholder="Mot de passe" name="motDePasse" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-lg-12 mb-0">
                                        <button class="btn btn-primary btn-block">Se connecter</button>
                                    </div>
                                    <!--end col-->

                                    <div class="col-12 text-center">
                                        <p class="mb-0 mt-3"><small class="text-dark mr-2">Vous n'avez pas de compte ?</small> <a href="index.php?action=account&register=1" class="text-dark font-weight-bold">S'enregistrer</a></p>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </form>
                        </div>
                    </div>
                    <!---->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Hero End -->

    <?php include("app/Template/v_footer.php"); ?>

    <?php if (isset($_POST['login']) && $_POST['login'] == 1) { ?>
        <script>
            Notify("Les indentifiants transmis sont inconnus!", "danger");
        </script>
    <?php } ?>
</body>

</html>