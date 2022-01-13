<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>Pizza Lab - Connexion</title>
    <?php include("app/Template/v_link.php"); ?>
</head>

<body>
<div class="back-to-home rounded d-none d-sm-block">
        <a href="index.php" class="btn btn-icon btn-primary"><i data-feather="home" class="icons">Home</i></a>
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
                            <form class="login-form mt-4" action="index.php?action=account" method="post">

                                <input type="hidden" name="register" value="1">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nom <span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <i data-feather="user" class="fea icon-sm icons"></i>
                                                <input type="text" class="form-control pl-5" placeholder="Nom" name="nom" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Prénom <span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <i data-feather="user-check" class="fea icon-sm icons"></i>
                                                <input type="text" class="form-control pl-5" placeholder="Prénom" name="prenom" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>E-mail <span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <i data-feather="mail" class="fea icon-sm icons"></i>
                                                <input type="email" class="form-control pl-5" placeholder="Email" name="email" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Téléphone <span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <i data-feather="phone" class="fea icon-sm icons"></i>
                                                <input type="text" class="form-control pl-5" placeholder="Téléphone" name="telephone" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Mot de passe <span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <i data-feather="key" class="fea icon-sm icons"></i>
                                                <input type="password" class="form-control pl-5" placeholder="Mot de passe" name="mot_de_passe" required="">
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
                                            </small> <a href="index.php?action=account" class="text-dark font-weight-bold">Connexion</a></p>
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

</body>

</html>