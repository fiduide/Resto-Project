
<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Pizza Lab - Merci</title>
        <?php include("app/Template/v_link.php"); ?>
</head>

<body>
    <?php include("app/Template/v_menu.php"); ?>
        <!-- Hero Start -->
        <section class="bg-home bg-light d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="text-center">
                            <div class="transitionMovement icon d-flex align-items-center justify-content-center bg-soft-primary rounded-circle text-primary mx-auto" style="height: 90px; width:90px;">
                                <i class="text-primary mdi mdi-thumb-up align-middle h1 mb-0"></i>
                            </div>
                            <h1 class="my-4 font-weight-bold">Merci pour votre commande</h1>
                            <p class="text-muted para-desc mx-auto">Un message vous sera envoyé une fois que votre commande sera prête<br>
                            Un email récapitulatif vous sera envoyé sous peu</p>
                            <a href="index.php" class="btn btn-primary mt-3">Retourner à l'accueil</a>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div> <!--end container-->
        </section><!--end section-->
        <!-- Hero End -->
        <?php include("app/Template/v_footer.php"); ?>
    </body>
</html>