<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Pizza Lab - Admin</title>
    <?php include("app/Template/v_link.php"); ?>
</head>

<body>
    <?php include("app/Template/v_menu.php"); ?>

    <!-- Hero Start -->
    <section class="bg-half bg-light d-table w-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="page-next-level">
                        <h4 class="title"> Panel Administration </h4>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
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
            <div class="row">
                <div class="col-md-4">
                    <ul class="nav nav-pills nav-justified flex-column bg-white rounded mt-4 shadow p-3 mb-0" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link rounded active" id="dashboard" data-toggle="pill" href="#dash" role="tab" aria-controls="dash" aria-selected="false">
                                <div class="text-left py-1 px-3">
                                    <h6 class="mb-0"><i class="uil uil-dashboard h5 align-middle mr-2 mb-0"></i> Statistiques</h6>
                                </div>
                            </a>
                            <!--end nav link-->
                        </li>
                        <!--end nav item-->

                        <li class="nav-item mt-2">
                            <a class="nav-link rounded" id="order-history" data-toggle="pill" href="#orders" role="tab" aria-controls="orders" aria-selected="false">
                                <div class="text-left py-1 px-3">
                                    <h6 class="mb-0"><i class="uil uil-list-ul h5 align-middle mr-2 mb-0"></i> Commandes</h6>
                                </div>
                            </a>
                            <!--end nav link-->
                        </li>
                        <!--end nav item-->
                        <li class="nav-item mt-2">
                            <a class="nav-link rounded" id="menu-modif" data-toggle="pill" href="#menu" role="tab" aria-controls="menu" aria-selected="false">
                                <div class="text-left py-1 px-3">
                                    <h6 class="mb-0"><i class="uil uil-list-ul h5 align-middle mr-2 mb-0"></i> Gestion de la carte</h6>
                                </div>
                            </a>
                            <!--end nav link-->
                        </li>
                        <!--end nav item-->
                        <li class="nav-item mt-2">
                            <a class="nav-link rounded" id="menu-add" data-toggle="pill" href="#addItem" role="tab" aria-controls="addItem" aria-selected="false">
                                <div class="text-left py-1 px-3">
                                    <h6 class="mb-0"><i class="uil uil-list-ul h5 align-middle mr-2 mb-0"></i> Ajouter à la carte</h6>
                                </div>
                            </a>
                            <!--end nav link-->
                        </li>
                        <!--end nav item-->
                        <li class="nav-item mt-2">
                            <a class="nav-link rounded" id="gestion" data-toggle="pill" href="#gestionUser" role="tab" aria-controls="gestionUser" aria-selected="false">
                                <div class="text-left py-1 px-3">
                                    <h6 class="mb-0"><i class="uil uil-list-ul h5 align-middle mr-2 mb-0"></i> Gestions utilisateurs</h6>
                                </div>
                            </a>
                            <!--end nav link-->
                        </li>
                        <!--end nav item-->
                    </ul>
                    <!--end nav pills-->
                </div>
                <!--end col-->

                <div class="col-md-8 col-12 mt-4 pt-2">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade bg-white show active shadow rounded p-4" id="dash" role="tabpanel" aria-labelledby="dashboard">
                            <div class="widget">
                                <div class="row">
                                    <div class="col-6 mt-4 pt-2 py-3 border">
                                        <span class="pro-icons h4 text-left"><i class="mdi mdi-truck h1 align-middle"></i> En cours</span>
                                        <h4 class="title text-primary h6 my-0"><?php echo $countInProgressCommand; ?></h4>
                                    </div>
                                    <!--end col-->

                                    <div class="col-6 mt-4 pt-2 py-3 border">
                                        <span class="pro-icons h4 text-left"><i class="mdi mdi-truck-check h1 align-middle"></i> Commandes passées</span>
                                        <h4 class="title text-muted h6 my-0"><?php echo $countAllCommand; ?></h4>
                                    </div>

                                    <div class="col-6 mt-4 pt-2 py-3 border">
                                        <span class="pro-icons h4 text-left"><i class="mdi mdi-cash-multiple h1 align-middle"></i> Votre caisse</span>
                                        <h4 class="title text-success h6 my-0"><?php echo $total; ?>€</h4>
                                    </div>
                                    <!--end col-->

                                    <!--end col-->
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                        </div>
                        <!--end teb pane-->

                        <div class="tab-pane fade bg-white shadow rounded p-4" id="orders" role="tabpanel" aria-labelledby="order-history">
                            <div class="table-responsive bg-white shadow rounded">
                                <table class="table mb-0 table-center table-nowrap">
                                    <thead>
                                        <tr>
                                            <th scope="col">N° Commande.</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($allCommand as $commande) {
                                            if ($commande->getEtat() == 1) {
                                                echo '<tr style="color: rgba(0, 0, 0, 0.5);">';
                                            } else {
                                                echo '<tr>';
                                            } ?>
                                            <th scope="row"><?php echo $commande->getId_commande(); ?> </th>
                                            <td><?php echo $commande->getDate_orderFR(); ?></td>
                                            <?php
                                            if ($commande->getEtat() == 0) {
                                                echo '<td class="text-danger">En attente</td>';
                                            } else {
                                                echo '<td class="text-success">Livrée</td>';
                                            }
                                            ?>
                                            <td><?php echo $commande->getTotal(); ?>€</td>
                                            <td>
                                                <a href="#" class="text-primary" data-toggle="modal" data-target="#pop_<?php echo $commande->getId_commande(); ?>">Détails</a>
                                                <!-- Modal -->
                                                <!-- Wishlist Popup Start -->
                                                <div class="modal fade" id="pop_<?php echo $commande->getId_commande(); ?>" tabindex="-1" role="dialog" aria-labelledby="title" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content rounded shadow-lg border-0 ">
                                                            <div class="modal-header">
                                                                <div class="modal-title">N° de Commande : <?php echo $commande->getId_commande(); ?></div>
                                                                <div><b><i><?php echo $commande->getUtilisateur()->getNom() . " " . $commande->getUtilisateur()->getPrenom(); ?></i></b></div>
                                                            </div>
                                                            <div class="modal-body py-3 pb-3">
                                                                <div>
                                                                    <div class="mt-1">
                                                                        <h4><i class="mdi mdi-arrow-right-thin align-middle"></i> Pizzas</h4>
                                                                        <?php if ($commande->getPizzaList() == "") {
                                                                            echo ' <p class="text-secondary">Pas de pizza</p>';
                                                                        } else {
                                                                            echo  '<p class="text-primary">' . $commande->getPizzaList() . '</p>';
                                                                        } ?>
                                                                    </div>
                                                                    <div class="mt-1">
                                                                        <h4><i class="mdi mdi-arrow-right-thin align-middle"></i> Boissons</h4>
                                                                        <?php if ($commande->getBoissonList() == "") {
                                                                            echo ' <p class="text-secondary">Pas de boisson</p>';
                                                                        } else {
                                                                            echo  '<p class="text-primary">' . $commande->getBoissonList() . '</p>';
                                                                        } ?>
                                                                        </p>
                                                                    </div>
                                                                    <div class="mt-1">
                                                                        <h4><i class="mdi mdi-arrow-right-thin align-middle"></i> Desserts</h4>
                                                                        <?php if ($commande->getDessertList() == "") {
                                                                            echo ' <p class="text-secondary">Pas de dessert</p>';
                                                                        } else {
                                                                            echo  '<p class="text-primary">' . $commande->getDessertList() . '</p>';
                                                                        } ?>
                                                                    </div>
                                                                </div>
                                                                <div class="action">
                                                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        Action
                                                                    </button>
                                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                        <a class="dropdown-item text-success" href="index.php?action=adminBoard&admin=postCommand&commandId=<?= $commande->getId_commande(); ?>">Commande livré</a>
                                                                        <a class="dropdown-item text-warning" href="index.php?action=adminBoard&admin=waitingCommand&commandId=<?= $commande->getId_commande(); ?>">Mise en attente</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--end teb pane-->

                        <div class="tab-pane fade bg-white shadow rounded p-4" id="menu" role="tabpanel" aria-labelledby="menu">
                            <div class="widget">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8 col-md-12 mt-4 pt-2 text-center">
                                        <ul class="nav nav-pills nav-justified flex-column flex-sm-row rounded" id="pills-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link rounded active" id="pills-cloud-tab" data-toggle="pill" href="#pills-cloud" role="tab" aria-controls="pills-cloud" aria-selected="false">
                                                    <div class="text-center py-2">
                                                        <h6 class="mb-0">Pizzas</h6>
                                                    </div>
                                                </a>
                                                <!--end nav link-->
                                            </li>
                                            <!--end nav item-->

                                            <li class="nav-item">
                                                <a class="nav-link rounded" id="pills-smart-tab" data-toggle="pill" href="#pills-smart" role="tab" aria-controls="pills-smart" aria-selected="false">
                                                    <div class="text-center py-2">
                                                        <h6 class="mb-0">Boissons</h6>
                                                    </div>
                                                </a>
                                                <!--end nav link-->
                                            </li>
                                            <!--end nav item-->

                                            <li class="nav-item">
                                                <a class="nav-link rounded" id="pills-apps-tab" data-toggle="pill" href="#pills-apps" role="tab" aria-controls="pills-apps" aria-selected="false">
                                                    <div class="text-center py-2">
                                                        <h6 class="mb-0">Desserts</h6>
                                                    </div>
                                                </a>
                                                <!--end nav link-->
                                            </li>
                                            <!--end nav item-->
                                        </ul>
                                        <!--end nav pills-->
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 mt-4 pt-2">
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade show active" id="pills-cloud" role="tabpanel" aria-labelledby="pills-cloud-tab">
                                                <table class="table mb-0 table-center table-nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Nom</th>
                                                            <th scope="col">Ingrédients</th>
                                                            <th scope="col">Prix</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($listPizza as $pizza) { ?>
                                                            <tr>
                                                                <th scope="row"><?php echo $pizza->getNom(); ?> </th>
                                                                <td class="text-small"><i><?php echo $pizza->getListIngredient(); ?></i></td>
                                                                <td><?php echo $pizza->getPrix(); ?>€</td>

                                                                <td>
                                                                    <a class="btn btn-soft-primary" data-toggle="modal" data-target="#pizza_<?= $pizza->getId(); ?>">Modifier</a>
                                                                </td>
                                                            </tr>
                                                            <!-- Modal -->
                                                            <!-- Wishlist Popup Start -->
                                                            <div class="modal fade" id="pizza_<?php echo $pizza->getId(); ?>" tabindex="-1" role="dialog" aria-labelledby="title" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                                    <div class="modal-content rounded shadow-lg border-0 ">
                                                                        <div class="modal-header">
                                                                            <div class="modal-title">Modification de <b>"<?php echo $pizza->getNom(); ?>"</b></div>
                                                                            <div><b><i>n° :<?php echo $pizza->getId(); ?></i></b></div>
                                                                        </div>
                                                                        <div class="modal-body py-3 pb-3">
                                                                            <form action="index.php?action=adminBoard&admin=updateItem&type=pizza&itemId=<?= $pizza->getId() ?>" method="POST">
                                                                                <div class="input-group mb-3">
                                                                                    <div class="input-group-prepend">
                                                                                        <span class="input-group-text">Nom</span>
                                                                                    </div>
                                                                                    <input type="text" class="form-control" placeholder="Nom" aria-label="nom" id="nom" name="nom" value="<?php echo $pizza->getNom(); ?>">
                                                                                </div>
                                                                                <div class="input-group mb-3">
                                                                                    <div class="input-group-prepend">
                                                                                        <span class="input-group-text">Prix</span>
                                                                                    </div>
                                                                                    <input type="text" class="form-control" placeholder="Prix" aria-label="prix" id="prix" name="prix" value="<?php echo $pizza->getPrix(); ?>">
                                                                                </div>
                                                                                <div class="container row mx-auto">
                                                                                    <?php
                                                                                    foreach ($listIngredient as $ingredients) { ?>
                                                                                        <div class="col-6 form-group form-check">
                                                                                            <input type="checkbox" class="form-check-input" <?= $pizza->existIngredient($ingredients->getId_ingredient()) ? "checked" : "" ?> id="<?= $ingredients->getId_ingredient() ?>" name="ingredient[<?= $ingredients->getId_ingredient() ?>]">
                                                                                            <label class="form-check-label" for="exampleCheck1"><?= $ingredients->getNom_ingredient() ?></label>
                                                                                        </div>
                                                                                    <?php } ?>
                                                                                </div>
                                                                                <button type="submit" class="btn btn-soft-primary">Valider ma modification</button><br>
                                                                                <small style="font-size:9px"><i>*Attention toutes modifications est irréversible</i></small>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                                <!--end row-->
                                            </div>
                                            <!--end teb pane-->

                                            <div class="tab-pane fade" id="pills-smart" role="tabpanel" aria-labelledby="pills-smart-tab">
                                                <table class="table mb-0 table-center table-nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Nom</th>
                                                            <th scope="col">Prix</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($listBoisson as $boisson) { ?>
                                                            <tr>
                                                                <th scope="row"><?php echo ucfirst(strtolower($boisson->getNom())); ?> </th>
                                                                <td><?php echo $boisson->getPrix(); ?>€</td>
                                                                <td>
                                                                    <a class="btn btn-soft-primary" data-toggle="modal" data-target="#boisson_<?= $boisson->getId(); ?>">Modifier</a>
                                                                </td>
                                                            </tr>
                                                            <!-- Modal -->
                                                            <!-- Wishlist Popup Start -->
                                                            <div class="modal fade" id="boisson_<?php echo $boisson->getId(); ?>" tabindex="-1" role="dialog" aria-labelledby="title" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                                    <div class="modal-content rounded shadow-lg border-0 ">
                                                                        <div class="modal-header">
                                                                            <div class="modal-title"><?php echo $boisson->getNom(); ?></div>
                                                                            <div><b><i>n° :<?php echo $boisson->getId(); ?></i></b></div>
                                                                        </div>
                                                                        <div class="modal-body py-3 pb-3">
                                                                            <form action="index.php?action=adminBoard&admin=updateItem&type=boisson&itemId=<?= $boisson->getId() ?>" method="POST">
                                                                                <div class="input-group mb-3">
                                                                                    <div class="input-group-prepend">
                                                                                        <span class="input-group-text">Nom</span>
                                                                                    </div>
                                                                                    <input type="text" class="form-control" placeholder="Nom" aria-label="nom" id="nom" name="nom" value="<?php echo $boisson->getNom(); ?>">
                                                                                </div>
                                                                                <div class="input-group mb-3">
                                                                                    <div class="input-group-prepend">
                                                                                        <span class="input-group-text">Prix</span>
                                                                                    </div>
                                                                                    <input type="text" class="form-control" placeholder="Prix" aria-label="prix" id="prix" name="prix" value="<?php echo $boisson->getPrix(); ?>">
                                                                                </div>
                                                                                <button type="submit" class="btn btn-soft-primary">Valider ma modification</button><br>
                                                                                <small style="font-size:9px"><i>*Attention toutes modifications est irréversible</i></small>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                                <!--end row-->
                                            </div>
                                            <!--end teb pane-->

                                            <div class="tab-pane fade" id="pills-apps" role="tabpanel" aria-labelledby="pills-apps-tab">
                                                <table class="table mb-0 table-center table-nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Nom</th>
                                                            <th scope="col">Prix</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($listDessert as $dessert) { ?>
                                                            <tr>
                                                                <th scope="row"><?php echo ucfirst(strtolower($dessert->getNom())); ?> </th>
                                                                <td><?php echo $dessert->getPrix(); ?>€</td>
                                                                <td>
                                                                    <a class="btn btn-soft-primary" data-toggle="modal" data-target="#dessert_<?= $dessert->getId(); ?>">Modifier</a>
                                                                </td>
                                                            </tr>
                                                            <!-- Modal -->
                                                            <!-- Wishlist Popup Start -->
                                                            <div class="modal fade" id="dessert_<?php echo $dessert->getId(); ?>" tabindex="-1" role="dialog" aria-labelledby="title" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                                    <div class="modal-content rounded shadow-lg border-0 ">
                                                                        <div class="modal-header">
                                                                            <div class="modal-title"><?php echo $dessert->getNom(); ?></div>
                                                                            <div><b><i>n° :<?php echo $dessert->getId(); ?></i></b></div>
                                                                        </div>
                                                                        <div class="modal-body py-3 pb-3">
                                                                            <form action="index.php?action=adminBoard&admin=updateItem&type=dessert&itemId=<?= $dessert->getId() ?>" method="POST">
                                                                                <div class="input-group mb-3">
                                                                                    <div class="input-group-prepend">
                                                                                        <span class="input-group-text">Nom</span>
                                                                                    </div>
                                                                                    <input type="text" class="form-control" placeholder="Nom" aria-label="nom" id="nom" name="nom" value="<?php echo $dessert->getNom(); ?>">
                                                                                </div>
                                                                                <div class="input-group mb-3">
                                                                                    <div class="input-group-prepend">
                                                                                        <span class="input-group-text">Prix</span>
                                                                                    </div>
                                                                                    <input type="text" class="form-control" placeholder="Prix" aria-label="prix" id="prix" name="prix" value="<?php echo $dessert->getPrix(); ?>">
                                                                                </div>
                                                                                <button type="submit" class="btn btn-soft-primary">Valider ma modification</button><br>
                                                                                <small style="font-size:9px"><i>*Attention toutes modifications est irréversible</i></small>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                                <!--end row-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end teb pane-->

                                <div class="tab-pane fade bg-white shadow rounded p-4" id="menu" role="tabpanel" aria-labelledby="menu">
                                    <div class="widget">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-8 col-md-12 mt-4 pt-2 text-center">
                                                <ul class="nav nav-pills nav-justified flex-column flex-sm-row rounded" id="pills-tab" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link rounded active" id="pills-cloud-tab" data-toggle="pill" href="#pills-cloud" role="tab" aria-controls="pills-cloud" aria-selected="false">
                                                            <div class="text-center py-2">
                                                                <h6 class="mb-0">Pizzas</h6>
                                                            </div>
                                                        </a>
                                                        <!--end nav link-->
                                                    </li>
                                                    <!--end nav item-->

                                                    <li class="nav-item">
                                                        <a class="nav-link rounded" id="pills-smart-tab" data-toggle="pill" href="#pills-smart" role="tab" aria-controls="pills-smart" aria-selected="false">
                                                            <div class="text-center py-2">
                                                                <h6 class="mb-0">Boissons</h6>
                                                            </div>
                                                        </a>
                                                        <!--end nav link-->
                                                    </li>
                                                    <!--end nav item-->

                                                    <li class="nav-item">
                                                        <a class="nav-link rounded" id="pills-apps-tab" data-toggle="pill" href="#pills-apps" role="tab" aria-controls="pills-apps" aria-selected="false">
                                                            <div class="text-center py-2">
                                                                <h6 class="mb-0">Desserts</h6>
                                                            </div>
                                                        </a>
                                                        <!--end nav link-->
                                                    </li>
                                                    <!--end nav item-->
                                                </ul>
                                                <!--end nav pills-->
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12 mt-4 pt-2">
                                                <div class="tab-content" id="pills-tabContent">
                                                    <div class="tab-pane fade show active" id="pills-cloud" role="tabpanel" aria-labelledby="pills-cloud-tab">
                                                        <table class="table mb-0 table-center table-nowrap">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">Nom</th>
                                                                    <th scope="col">Ingrédients</th>
                                                                    <th scope="col">Prix</th>
                                                                    <th scope="col">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php foreach ($listPizza as $pizza) { ?>
                                                                    <tr>
                                                                        <th scope="row"><?php echo $pizza->getNom(); ?> </th>
                                                                        <td class="text-small"><i><?php echo $pizza->getListIngredient(); ?></i></td>
                                                                        <td><?php echo $pizza->getPrix(); ?>€</td>

                                                                        <td>
                                                                            <a class="btn btn-soft-primary" data-toggle="modal" data-target="#pizza_<?= $pizza->getId(); ?>">Modifier</a>
                                                                        </td>
                                                                    </tr>
                                                                    <!-- Modal -->
                                                                    <!-- Wishlist Popup Start -->
                                                                    <div class="modal fade" id="pizza_<?php echo $pizza->getId(); ?>" tabindex="-1" role="dialog" aria-labelledby="title" aria-hidden="true">
                                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                                            <div class="modal-content rounded shadow-lg border-0 ">
                                                                                <div class="modal-header">
                                                                                    <div class="modal-title">Modification de <b>"<?php echo $pizza->getNom(); ?>"</b></div>
                                                                                    <div><b><i>n° :<?php echo $pizza->getId(); ?></i></b></div>
                                                                                </div>
                                                                                <div class="modal-body py-3 pb-3">
                                                                                    <form action="index.php?action=adminBoard&admin=updateItem&type=pizza&itemId=<?= $pizza->getId() ?>" method="POST">
                                                                                        <div class="input-group mb-3">
                                                                                            <div class="input-group-prepend">
                                                                                                <span class="input-group-text">Nom</span>
                                                                                            </div>
                                                                                            <input type="text" class="form-control" placeholder="Nom" aria-label="nom" id="nom" name="nom" value="<?php echo $pizza->getNom(); ?>">
                                                                                        </div>
                                                                                        <div class="input-group mb-3">
                                                                                            <div class="input-group-prepend">
                                                                                                <span class="input-group-text">Prix</span>
                                                                                            </div>
                                                                                            <input type="text" class="form-control" placeholder="Prix" aria-label="prix" id="prix" name="prix" value="<?php echo $pizza->getPrix(); ?>">
                                                                                        </div>
                                                                                        <div class="container row mx-auto">
                                                                                            <?php
                                                                                            foreach ($listIngredient as $ingredients) { ?>
                                                                                                <div class="col-6 form-group form-check">
                                                                                                    <input type="checkbox" class="form-check-input" <?= $pizza->existIngredient($ingredients->getId_ingredient()) ? "checked" : "" ?> id="<?= $ingredients->getId_ingredient() ?>" name="ingredient[<?= $ingredients->getId_ingredient() ?>]">
                                                                                                    <label class="form-check-label" for="exampleCheck1"><?= $ingredients->getNom_ingredient() ?></label>
                                                                                                </div>
                                                                                            <?php } ?>
                                                                                        </div>
                                                                                        <button type="submit" class="btn btn-soft-primary">Valider ma modification</button><br>
                                                                                        <small style="font-size:9px"><i>*Attention toutes modifications est irréversible</i></small>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <?php } ?>
                                                            </tbody>
                                                        </table>
                                                        <!--end row-->
                                                    </div>
                                                    <!--end teb pane-->
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <!--end container-->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade bg-white shadow rounded p-4" id="addItem" role="tabpanel" aria-labelledby="addItem">
                            <div class="widget">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8 col-md-12 mt-4 pt-2 text-center">
                                        <ul class="nav nav-pills nav-justified flex-column flex-sm-row rounded" id="pills-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link rounded active" id="pills-cloud-tab" data-toggle="pill" href="#pills-pizza" role="tab" aria-controls="pills-pizza" aria-selected="false">
                                                    <div class="text-center py-2">
                                                        <h6 class="mb-0">Pizzas</h6>
                                                    </div>
                                                </a>
                                                <!--end nav link-->
                                            </li>
                                            <!--end nav item-->

                                            <li class="nav-item">
                                                <a class="nav-link rounded" id="pills-smart-tab" data-toggle="pill" href="#pills-boisson" role="tab" aria-controls="pills-boisson" aria-selected="false">
                                                    <div class="text-center py-2">
                                                        <h6 class="mb-0">Boissons</h6>
                                                    </div>
                                                </a>
                                                <!--end nav link-->
                                            </li>
                                            <!--end nav item-->

                                            <li class="nav-item">
                                                <a class="nav-link rounded" id="pills-apps-tab" data-toggle="pill" href="#pills-dessert" role="tab" aria-controls="pills-dessert" aria-selected="false">
                                                    <div class="text-center py-2">
                                                        <h6 class="mb-0">Desserts</h6>
                                                    </div>
                                                </a>
                                                <!--end nav link-->
                                            </li>
                                            <!--end nav item-->
                                        </ul>
                                        <!--end nav pills-->
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 mt-4 pt-2">
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade show active" id="pills-pizza" role="tabpanel" aria-labelledby="pills-pizza-tab">
                                                <form action="index.php?action=adminBoard&admin=addItem&type=pizza" method="POST">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">Nom</span>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="Nom" aria-label="nom" id="nom" name="nom">
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">Prix</span>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="Prix" aria-label="prix" id="prix" name="prix">
                                                    </div>
                                                    <div class="container row mx-auto">
                                                        <?php
                                                        foreach ($listIngredient as $ingredients) { ?>
                                                            <div class="col-6 form-group form-check">
                                                                <input type="checkbox" class="form-check-input" name="ingredient[<?= $ingredients->getId_ingredient() ?>]">
                                                                <label class="form-check-label" for="exampleCheck1"><?= $ingredients->getNom_ingredient() ?></label>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                    <button type="submit" class="btn btn-soft-primary">Valider</button><br>
                                                </form>
                                                <!--end row-->
                                            </div>
                                            <!--end teb pane-->

                                            <div class="tab-pane fade" id="pills-boisson" role="tabpanel" aria-labelledby="pills-boisson-tab">
                                                <form action="index.php?action=adminBoard&admin=addItem&type=boisson" method="POST">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">Nom</span>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="Nom" aria-label="nom" id="nom" name="nom">
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">Prix</span>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="Prix" aria-label="prix" id="prix" name="prix">
                                                    </div>
                                                    <button type="submit" class="btn btn-soft-primary">Valider </button><br>
                                                </form>
                                                <!--end row-->
                                            </div>
                                            <!--end teb pane-->

                                            <div class="tab-pane fade" id="pills-dessert" role="tabpanel" aria-labelledby="pills-dessert-tab">
                                                <form action="index.php?action=adminBoard&admin=addItem&type=dessert" method="POST">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">Nom</span>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="Nom" aria-label="nom" id="nom" name="nom">
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">Prix</span>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="Prix" aria-label="prix" id="prix" name="prix">
                                                    </div>
                                                    <button type="submit" class="btn btn-soft-primary">Valider</button><br>
                                                </form>
                                                <!--end row-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end teb pane-->
                        <div class="tab-pane fade bg-white shadow rounded p-4" id="gestionUser" role="tabpanel" aria-labelledby="gestionUser">
                            <div class="widget">
                                <!-- Accordions Start -->
                                <div id="accordions">
                                    <div class="component-wrapper rounded shadow">
                                        <div class="p-4">
                                            <div class="faq-content">
                                                <div class="accordion" id="accordionExample">
                                                    <?php
                                                    foreach ($listUser as $user) {
                                                    ?>
                                                        <div class="card border-0 rounded mb-2">
                                                            <a data-toggle="collapse" href="#collaps_<?= $user->getNom(); ?>" class="faq position-relative" aria-expanded="true" aria-controls="collaps_<?= $user->getNom(); ?>">
                                                                <div class="card-header border-0 bg-light p-3 pr-5" id="headingfifone">
                                                                    <h6 class="title mb-0"> <?php echo $user->getNom(); ?> <?php echo $user->getPrenom(); ?></h6>
                                                                </div>
                                                            </a>
                                                            <div id="collaps_<?= $user->getNom(); ?>" class="collapse" aria-labelledby="headingfifone" data-parent="#accordionExample">
                                                                <div class="card-body px-2 py-4">
                                                                    <div class="row">
                                                                        <p class="col"><span class='text-primary'>Nom :</span> <?php echo $user->getNom(); ?></p>
                                                                        <p class="col"><span class='text-primary'>Prenom :</span> <?php echo $user->getPrenom(); ?></p>
                                                                    </div>
                                                                    <div class="row">
                                                                        <p class="col"><span class='text-primary'>Email :</span> <?php echo $user->getEmail(); ?></p>
                                                                        <p class="col"><span class='text-primary'>Téléphone :</span> <?php echo $user->getTelephone(); ?></p>
                                                                    </div>
                                                                    <div class="row">
                                                                        <p class="col"><span class='text-primary'>Nombre de commande passé :</span> <?php echo count($commandeManager->findByUtilisateur($user->getId_utilisateur())); ?></p>
                                                                        <p class="col"><span class='text-primary'>Nombre d'argent dépensé :</span> <?php echo $user->getTelephone(); ?></p>
                                                                    </div>
                                                                    <div class="row">
                                                                        <p class="col"><span class='text-primary'>Date d'inscription :</span> <?php echo $user->getDate_registerFR(); ?></p>
                                                                        <p class="col"><span class='text-primary'>Téléphone :</span> <?php echo $user->getTelephone(); ?></p>
                                                                    </div>
                                                                    <div class="row">
                                                                        <p class="col"><span class='text-primary'>Niveau d'accès :</span> <?php echo $user->getNiveau_accesLibelle(); ?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                                <!-- Accordions End -->
                            </div>
                        </div>
                        <!--end teb pane-->
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        </div>
    </section>
    <!--end section-->
    <!-- End -->
    <!-- Wishlist Popup End -->
    <?php include("app/Template/v_footer.php"); ?>
    <script>
        $('.plus').click(function() {
            if ($(this).prev().val() < 999) {
                $(this).prev().val(+$(this).prev().val() + 1);
            }
        });
        $('.minus').click(function() {
            if ($(this).next().val() > 1) {
                if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
            }
        });
        var search_params = new URLSearchParams(window.location.search);

        if (search_params.has('success')) {
            Notify("<span class='text-success'><b>Votre modification a été acceptée</b></span>", "primary");
        } else if (search_params.has('successAdd')) {
            Notify("<span class='text-success'><b>Votre ajout a été acceptée</b></span>", "primary");
        } else if (search_params.has('errorAdd')) {
            Notify("<span class='text-danger'><b>Erreur dans l'ajout de votre item</b></span>", "primary");
        }
    </script>
</body>

</html>