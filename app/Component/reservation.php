<!-- Modal -->
<!-- Wishlist Popup Start -->
<div class="modal fade" id="pop_reservation" tabindex="-1" role="dialog" aria-labelledby="title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content rounded shadow-lg border-0 ">
            <div class="modal-header">
                <div class="modal-title">Réservation</div>
                <div><b><i></i></b></div>
            </div>
            <div class="modal-body py-3 pb-3">

                <form action="index.php?reservation">
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nombre de personne :</label>
                                <div class="position-relative">
                                    <i data-feather="user" class="fea icon-sm icons"></i>
                                    <input name="nom" id="first" type="number" class="form-control pl-5" value="2" min="0" max="5" required="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Horaire :</label>
                                <div class="position-relative">
                                    <select class="form-control custom-select">
                                        <option value="18:30:00">18:30</option>
                                        <option value="19:30:00">19:30</option>
                                        <option value="20:30:00">20:30</option>
                                        <option value="21:30:00">21:30</option>
                                        <option value="22:30:00">22:30</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div><!--end row-->

                    <div class="col-lg-12 mt-2 mb-0 text-center">
                        <button class="btn btn-primary">Réserver !</button>
                    </div><!--end col-->
                </form>
            </div>
        </div>
    </div>
</div>