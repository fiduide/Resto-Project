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
    <section class="main-slider">
        <ul class="slides">
            <li class="bg-slider bg-animation-left d-flex align-items-center" style="background-image:url('public/img/restaurant/bg01.jpg')">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-md-7">
                            <div class="title-heading position-relative mt-4" style="z-index: 1;">
                                <h1 class="heading mb-3">Pizza Lab</h1>
                                <p class="para-desc">Commander en ligne ou consommer au sein de notre restaurant.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </section>
    <!--end section-->
    <!-- Hero End -->

    <div class="position-relative">
        <div class="shape overflow-hidden text-light">
            <svg viewBox="0 0 2880 250" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M720 125L2160 0H2880V250H0V125H720Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!-- End services -->

    <!-- News Start -->
    <section class="section pt-5 pt-sm-0 pt-md-4 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">Nos meilleures pizzas</h4>
                        <p class="text-muted para-desc mx-auto mb-0">Nos pizzas sont préparées sur <span class="text-primary font-weight-bold">place</span> et sont généreusement <span class="text-primary font-weight-bold">garnies</span>.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row">
                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="card blog rounded border-0 shadow">
                        <div class="position-relative">
                            <img src="public/img/restaurant/chevre.jpg" class="card-img-top rounded-top" alt="...">
                            <div class="overlay rounded-top bg-dark"></div>
                        </div>
                        <div class="card-body content">
                            <h5><a href="index.php?action=choix" class="card-title title text-dark">Chèvre</a></h5>
                            <div class="post-meta d-flex justify-content-between mt-3">
                                <a href="index.php?action=choix" class="text-muted readmore">Découvrir <i class="mdi mdi-chevron-right"></i></a>
                            </div>
                        </div>
                        <div class="author">
                            <small class="text-light user d-block"><i class="mdi mdi-account"></i> Chèvre</small>
                            <small class="text-light date"><i class="mdi mdi-calendar-check"></i> Sauce Tomate, Fromage de chèvre</small>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="card blog rounded border-0 shadow">
                        <div class="position-relative">
                            <img src="public/img/restaurant/calzone.jpg" class="card-img-top rounded-top" alt="...">
                            <div class="overlay rounded-top bg-dark"></div>
                        </div>
                        <div class="card-body content">
                            <h5><a href="index.php?action=choix" class="card-title title text-dark">Calzone</a></h5>
                            <div class="post-meta d-flex justify-content-between mt-3">
                                <a href="index.php?action=choix" class="text-muted readmore">Découvrir <i class="mdi mdi-chevron-right"></i></a>
                            </div>
                        </div>
                        <div class="author">
                            <small class="text-light user d-block"><i class="mdi mdi-account"></i> Calzone</small>
                            <small class="text-light date"><i class="mdi mdi-calendar-check"></i> Sauce Tomate, Jambon</small>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="card blog rounded border-0 shadow">
                        <div class="position-relative">
                            <img src="public/img/restaurant/chevre_miel.jpg" class="card-img-top rounded-top" alt="...">
                            <div class="overlay rounded-top bg-dark"></div>
                        </div>
                        <div class="card-body content">
                            <h5><a href="index.php?action=choix" class="card-title title text-dark">Chèvre miel</a></h5>
                            <div class="post-meta d-flex justify-content-between mt-3">
                                <a href="index.php?action=choix" class="text-muted readmore">Découvrir <i class="mdi mdi-chevron-right"></i></a>
                            </div>
                        </div>
                        <div class="author">
                            <small class="text-light user d-block"><i class="mdi mdi-account"></i> Chèvre miel</small>
                            <small class="text-light date"><i class="mdi mdi-calendar-check"></i> Crème fraiche, Fromage de chèvre, Miel</small>
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
    <!-- Blog End -->

    <!-- Client Start -->
    <section class="section" style="background-color: #4f4f4f">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <div id="owl-fade" class="owl-carousel owl-theme">
                        <div class="customer-testi text-center">
                            <p class="text-light para-dark h6 font-italic">" It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. "</p>
                            <ul class="list-unstyled mb-0 mt-3">
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                            </ul>
                            <h6 class="text-light title-dark"> Thomas Israel </h6>
                            <img src="public/img/client/01.jpg" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
                        </div>
                        <!--end customer testi-->

                        <div class="customer-testi text-center">
                            <p class="text-light para-dark h6 font-italic">" The advantage of its Latin origin and the relative meaninglessness of Lorum Ipsum is that the text does not attract attention to itself or distract the viewer's attention from the layout. "</p>
                            <ul class="list-unstyled mb-0 mt-3">
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                            </ul>
                            <h6 class="text-light title-dark"> Carl Oliver </h6>
                            <img src="public/img/client/02.jpg" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
                        </div>
                        <!--end customer testi-->

                        <div class="customer-testi text-center">
                            <p class="text-light para-dark h6 font-italic">" There is now an abundance of readable dummy texts. These are usually used when a text is required purely to fill a space. These alternatives to the classic Lorem Ipsum texts are often amusing and tell short, funny or nonsensical stories. "</p>
                            <ul class="list-unstyled mb-0 mt-3">
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                            </ul>
                            <h6 class="text-light title-dark"> Barbara McIntosh </h6>
                            <img src="public/img/client/03.jpg" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
                        </div>
                        <!--end customer testi-->

                        <div class="customer-testi text-center">
                            <p class="text-light para-dark h6 font-italic">" According to most sources, Lorum Ipsum can be traced back to a text composed by Cicero in 45 BC. Allegedly, a Latin scholar established the origin of the text by compiling all the instances of the unusual word 'consectetur' he could find "</p>
                            <ul class="list-unstyled mb-0 mt-3">
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                            </ul>
                            <h6 class="text-light title-dark"> Christa Smith </h6>
                            <img src="public/img/client/04.jpg" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
                        </div>
                        <!--end customer testi-->

                        <div class="customer-testi text-center">
                            <p class="text-light para-dark h6 font-italic">" It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. "</p>
                            <ul class="list-unstyled mb-0 mt-3">
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                            </ul>
                            <h6 class="text-light title-dark"> Dean Tolle </h6>
                            <img src="public/img/client/05.jpg" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
                        </div>
                        <!--end customer testi-->

                        <div class="customer-testi text-center">
                            <p class="text-light para-dark h6 font-italic">" It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. One may speculate that over the course of time certain letters were added or deleted at various positions within the text. "</p>
                            <ul class="list-unstyled mb-0 mt-3">
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                            </ul>
                            <h6 class="text-light title-dark"> Jill Webb </h6>
                            <img src="public/img/restaurant/06.jpg" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
                        </div>
                        <!--end customer testi-->
                    </div>
                    <!--end owl carousel-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
        <!-- Client End -->
    </section>
    <!-- Client End -->

    <!-- Contact Start -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-6 p-0 pl-md-3 pr-md-3">
                    <div class="card map map-height-two rounded map-gray border-0">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2783.9485934628046!2d4.83965725088106!3d45.75217652210024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea44e4c82eaf%3A0x882259aa5f2b6dea!2sPizza%20LAB!5e0!3m2!1sfr!2sfr!4v1641891557754!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="card rounded shadow border-0">
                        <div class="card-body py-5">
                            <h5 class="card-title">Restons en contact !</h5>

                            <div class="custom-form mt-4">
                                <div id="message"></div>
                                <form method="post" action="index.php?action=envoiemessage">
                                <input type="hidden" name="statut_message" value="1">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Votre nom <span class="text-danger">*</span></label>
                                                <div class="position-relative">
                                                    <i data-feather="user" class="fea icon-sm icons"></i>
                                                    <input name="name" id="name" type="text" class="form-control pl-5" placeholder="Votre Nom :">
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Votre Email <span class="text-danger">*</span></label>
                                                <div class="position-relative">
                                                    <i data-feather="mail" class="fea icon-sm icons"></i>
                                                    <input name="email" id="email" type="email" class="form-control pl-5" placeholder="Votre email :">
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Commentaire</label>
                                                <div class="position-relative">
                                                    <i data-feather="message-circle" class="fea icon-sm icons"></i>
                                                    <textarea name="comments" id="comments" rows="4" class="form-control pl-5" placeholder="Votre Message :"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end row-->
                                    <div class="row">
                                        <div class="col-sm-12 text-center">
                                            <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary btn-block" value="Envoyer mon message">
                                            <div id="simple-msg"></div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </form>
                                <!--end form-->
                            </div>
                            <!--end custom-form-->
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
        <!-- Contact End -->

    </section>
    <!--end section-->
    <!-- News End -->
    <?php include("app/Template/v_footer.php"); ?>
    <!--end footer-->
    <!-- Footer End -->
    <script>
        var search_params = new URLSearchParams(window.location.search);

        if (search_params.has('disconnect')) {
            Notify("Vous êtes maintennant déconnecté");

        } else if (search_params.has('connect')) {
            Notify("Vous êtes maintennant connecté");
        } else if (search_params.has('registered')) {
            Notify("Vous êtes maintennant inscrit et connecté");
        }
        else if(search_params.has('sendMail')){
            Notify("Votre formulaire de contact a été envoyé !");
        }
        else if(search_params.has('sendMailNot')){
            Notify("Votre formulaire de contact n'a pas été envoyé !");
        }
        else if(search_params.has('forgetThing')){
            Notify("Vous avez oubliez un ou plusieurs champs !");
        } 
        else if(search_params.has('reservation_save')){
            var params = search_params.get('reservation_save');
            if(params == 0){
                Notify("Une erreur est survenue lors de l'enregistrement !");
            } else if (params == 1){
                Notify("Votre table a bien été réservée !");
            } else if (params == 2){
                Notify("Nous n'avons plus de place pour ce soir, Revenez demain ! ;-)");
            }
        } 
    </script>
</body>

</html>