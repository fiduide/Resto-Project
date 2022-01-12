<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Pizza Lab</title>
        <?php include("app/Template/v_link.php"); ?>
    </head>

    <body>
        <?php include("app/Template/v_menu.php"); ?>
        <!-- Hero Start -->
        <section class="bg-half bg-light d-table w-100" style="color:#F44B12">
            <div class="container" >
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <div class="page-next-level">
                            <h4 class="title"> Voici votre panier </h4>
                            <div class="page-next">
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div> <!--end container-->
        </section><!--end section-->
        <div class="position-relative">
            <div class="shape overflow-hidden text-white">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>
        <!-- Hero End -->

        <!-- Start -->
        <section class="section">
            <div class="container">
            
                <div class="row align-items-center justify-content-center">
                <a class="col-6 text-center mb-5" href="index.php?action=choix"><button class="btn btn-primary">Ajouter des produits</button></a>
                    <div class="col-12">
                        <div class="table-responsive bg-white shadow">
                            <table class="table table-center table-padding mb-0">
                                <thead>
                                    <tr>
                                        <th class="py-3" style="min-width:20px "></th>
                                        <th class="py-3" style="min-width: 300px;">Produit</th>
                                        <th class="text-center py-3" style="min-width: 160px;">Prix</th>
                                        <th class="text-center py-3" style="min-width: 160px;">Quantité</th>
                                        <th class="text-center py-3" style="min-width: 160px;">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    echo $html;
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
                <div class="row">
                    <div class="col-lg-4 col-md-6 ml-auto mt-4 pt-2">
                        <div class="table-responsive bg-white rounded shadow">
                            <table class="table table-center table-padding mb-0">
                                <tbody>
                                    <tr class="bg-light">
                                        <td class="h6">Total à payer</td>
                                        <td class="text-center font-weight-bold"><?php echo $totalCommande; ?> €</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-4 pt-2 text-right">
                            <a href="shop-checkouts.html" class="btn btn-primary">Procéder au paiement</a>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

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

        <!-- Wishlist Popup Start -->
        <div class="modal fade" id="wishlist" tabindex="-1" role="dialog" aria-labelledby="wishlist-title" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content rounded shadow-lg border-0 overflow-hidden">
                    <div class="modal-body py-5">
                        <div class="text-center">
                            <div class="icon d-flex align-items-center justify-content-center bg-soft-danger rounded-circle mx-auto" style="height: 95px; width:95px;">
                                <h1 class="mb-0"><i class="uil uil-heart-break align-middle"></i></h1>
                            </div>
                            <div class="mt-4">
                                <h4>Your wishlist is empty.</h4>
                                <p class="text-muted">Create your first wishlist request...</p>
                                <div class="mt-4">
                                    <a href="javascript:void(0)" class="btn btn-outline-primary">+ Create new wishlist</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Wishlist Popup End -->

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

        <!-- Quantity Plus Minus JS -->
        <script>
            $('.plus').click(function () {
                if ($(this).prev().val() < 999) {
                    $(this).prev().val(+$(this).prev().val() + 1);
                }
            });
            $('.minus').click(function () {
                if ($(this).next().val() > 1) {
                    if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
                }
            });
        </script>
    </body>
</html>