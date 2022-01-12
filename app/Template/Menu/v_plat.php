
<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Pizza Lab - Plats</title>
        <?php include("app/Template/v_link.php"); ?>
    </head>

    <body>
        <?php include("app/Template/v_menu.php"); ?>
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
                                <a class="nav-link rounded" id="pills-smart-tab" data-toggle="pill" href="#pills-smart" role="tab" aria-controls="pills-smart" aria-selected="false">
                                    <div class="text-center py-2">
                                        <h6 class="mb-0">Boissons</h6>
                                    </div>
                                </a><!--end nav link-->
                            </li><!--end nav item-->
                            
                            <li class="nav-item">
                                <a class="nav-link rounded" id="pills-apps-tab" data-toggle="pill" href="#pills-apps" role="tab" aria-controls="pills-apps" aria-selected="false">
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
                        <form method="POST" class="text-center" action="index.php?action=choix&command=1">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-cloud" role="tabpanel" aria-labelledby="pills-cloud-tab">
                                    <div class="row align-items-center">
                                    <?php foreach ($pizzas as $pizza) {
                                        echo "<div class='col-4 text-center mt-5'>";
                                        echo "<img style='height: 300px;width: 370px' src='public/img/pizza/".$pizza['id'].".png'>";
                                        echo "<br>";
                                        echo $pizza['nom'] . "<br>";echo "<i>";
                                        echo "<p><u>Ingrédients :</u></p>";
                                        echo str_replace(",", ", ", $pizza['ingredient']). "<br></p>";
                                        echo $pizza['prix']. "€<br></p>";
                                        
                                        echo "</i>";
                                        echo '<input type="button" value="-" class="minus btn btn-icon btn-soft-primary font-weight-bold">';
                                        echo '<input type="text" step="1" min="0" name="pizza['.$pizza['id'].']" value="0"  class="btn btn-icon btn-soft-primary font-weight-bold">';
                                        echo '<input type="button" value="+" class="plus btn btn-icon btn-soft-primary font-weight-bold">';
                                        echo "</div>";
                                    } ?>
                                    </div><!--end row-->
                                </div><!--end teb pane-->

                                <div class="tab-pane fade" id="pills-smart" role="tabpanel" aria-labelledby="pills-smart-tab">
                                    <div class="row align-items-center">
                                    <?php foreach ($boissons as $boisson) {
                                        echo "<div class='col-4 text-center mt-5'>";
                                        echo "<img style='height: 200px;width: 370px' src='public/img/boisson/".$boisson['id'].".png'>";
                                        echo "<br>";
                                        echo $boisson['nom'] . "<br>";
                                        echo $boisson['prix']. "€<br></p>";
                                        echo '<input type="button" value="-" class="minus btn btn-icon btn-soft-primary font-weight-bold">';
                                        echo '<input type="text" step="1" min="0" name="boisson['.$boisson['id'].']" value="0"  class="btn btn-icon btn-soft-primary font-weight-bold">';
                                        echo '<input type="button" value="+" class="plus btn btn-icon btn-soft-primary font-weight-bold">';
                                        echo "</div>";
                                    } ?>
                                    </div>    <!--end row-->
                                </div><!--end teb pane-->

                                <div class="tab-pane fade" id="pills-apps" role="tabpanel" aria-labelledby="pills-apps-tab">
                                    <div class="row align-items-center">
                                    <?php foreach ($desserts as $dessert) {
                                        echo "<div class='col-4 text-center mt-5'>";
                                        echo "<img style='height: 250px;width: 370px' src='public/img/dessert/".$dessert['id'].".png'>";
                                        echo "<br>";
                                        echo $dessert['nom'] . "<br>";
                                        echo $dessert['prix']. "€<br></p>";
                                        echo '<input type="button" value="-" class="minus btn btn-icon btn-soft-primary font-weight-bold">';
                                        echo '<input type="text" step="1" min="0" name="dessert['.$dessert['id'].']" value="0"  class="btn btn-icon btn-soft-primary font-weight-bold">';
                                        echo '<input type="button" value="+" class="plus btn btn-icon btn-soft-primary font-weight-bold">';
                                        echo "</div>";
                                    } ?>
                                    </div>    <!--end row-->
                                </div><!--end teb pane-->
                                <button type="submit" class="btn btn-primary mt-5">Ajouter à ma commande </button>
                            </form>
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

        <script>
            
            $('.plus').click(function () {
                if ($(this).prev().val() < 10) {
                    $(this).prev().val(+$(this).prev().val() + 1);
                }
            });
            $('.minus').click(function () {
                if ($(this).next().val() > 0) {
                    if ($(this).next().val() > 0) $(this).next().val(+$(this).next().val() - 1);
                }
            });
        
        </script>
    </body>
</html>