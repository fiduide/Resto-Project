
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
                <div class="row">
                    <div class="col-md-4">
                        <ul class="nav nav-pills nav-justified flex-column bg-white rounded mt-4 shadow p-3 mb-0" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link rounded active" id="dashboard" data-toggle="pill" href="#dash" role="tab" aria-controls="dash" aria-selected="false">
                                    <div class="text-left py-1 px-3">
                                        <h6 class="mb-0"><i class="uil uil-dashboard h5 align-middle mr-2 mb-0"></i> Dashboard</h6>
                                    </div>
                                </a><!--end nav link-->
                            </li><!--end nav item-->
                            
                            <li class="nav-item mt-2">
                                <a class="nav-link rounded" id="order-history" data-toggle="pill" href="#orders" role="tab" aria-controls="orders" aria-selected="false">
                                    <div class="text-left py-1 px-3">
                                        <h6 class="mb-0"><i class="uil uil-list-ul h5 align-middle mr-2 mb-0"></i> Orders</h6>
                                    </div>
                                </a><!--end nav link-->
                            </li><!--end nav item-->
                            
                            <li class="nav-item mt-2">
                                <a class="nav-link rounded" id="download" data-toggle="pill" href="#down" role="tab" aria-controls="down" aria-selected="false">
                                    <div class="text-left py-1 px-3">
                                        <h6 class="mb-0"><i class="uil uil-arrow-circle-down h5 align-middle mr-2 mb-0"></i> Downloads</h6>
                                    </div>
                                </a><!--end nav link-->
                            </li><!--end nav item-->
                            
                            <li class="nav-item mt-2">
                                <a class="nav-link rounded" id="addresses" data-toggle="pill" href="#address" role="tab" aria-controls="address" aria-selected="false">
                                    <div class="text-left py-1 px-3">
                                        <h6 class="mb-0"><i class="uil uil-map-marker h5 align-middle mr-2 mb-0"></i> Addresses</h6>
                                    </div>
                                </a><!--end nav link-->
                            </li><!--end nav item-->
                            
                            <li class="nav-item mt-2">
                                <a class="nav-link rounded" id="account-details" data-toggle="pill" href="#account" role="tab" aria-controls="account" aria-selected="false">
                                    <div class="text-left py-1 px-3">
                                        <h6 class="mb-0"><i class="uil uil-user h5 align-middle mr-2 mb-0"></i> Account Details</h6>
                                    </div>
                                </a><!--end nav link-->
                            </li><!--end nav item-->

                        </ul><!--end nav pills-->
                    </div><!--end col-->

                    <div class="col-md-8 col-12 mt-4 pt-2">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade bg-white show active shadow rounded p-4" id="dash" role="tabpanel" aria-labelledby="dashboard">
                                <h6 class="text-muted">Hello <span class="text-dark">cally_joseph</span> (not <span class="text-dark">cally_joseph</span>? <a href="javascript:void(0)" class="text-danger">Log out</a>)</h6>

                                <h6 class="text-muted mb-0">From your account dashboard you can view your <a href="javascript:void(0)" class="text-danger">recent orders</a>, manage your <a href="javascript:void(0)" class="text-danger">shipping and billing addresses</a>, and <a href="javascript:void(0)" class="text-danger">edit your password and account details</a>.</h6>
                            </div><!--end teb pane-->

                            <div class="tab-pane fade bg-white shadow rounded p-4" id="orders" role="tabpanel" aria-labelledby="order-history">
                                <div class="table-responsive bg-white shadow rounded">
                                    <table class="table mb-0 table-center table-nowrap">
                                        <thead>
                                            <tr>
                                                <th scope="col">Order no.</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Total</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">7107</th>
                                                <td>1st November 2020</td>
                                                <td class="text-success">Delivered</td>
                                                <td>$ 320 <span class="text-muted">for 2items</span></td>
                                                <td><a href="javascript:void(0)" class="text-primary">View <i class="uil uil-arrow-right"></i></a></td>
                                            </tr>

                                            <tr>
                                                <th scope="row">8007</th>
                                                <td>4th November 2020</td>
                                                <td class="text-muted">Processing</td>
                                                <td>$ 800 <span class="text-muted">for 1item</span></td>
                                                <td><a href="javascript:void(0)" class="text-primary">View <i class="uil uil-arrow-right"></i></a></td>
                                            </tr>

                                            <tr>
                                                <th scope="row">8008</th>
                                                <td>4th November 2020</td>
                                                <td class="text-danger">Canceled</td>
                                                <td>$ 800 <span class="text-muted">for 1item</span></td>
                                                <td><a href="javascript:void(0)" class="text-primary">View <i class="uil uil-arrow-right"></i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div><!--end teb pane-->

                            <div class="tab-pane fade bg-white shadow rounded p-4" id="down" role="tabpanel" aria-labelledby="download">
                                <div class="table-responsive bg-white shadow rounded">
                                    <table class="table mb-0 table-center table-nowrap">
                                        <thead>
                                            <tr>
                                                <th scope="col">Product Name</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">Quick heal</th>
                                                <td class="text-muted">It is said that song composers of the past <br> used dummy texts as lyrics when writing <br> melodies in order to have a 'ready-made' <br> text to sing with the melody.</td>
                                                <td class="text-success">Downloaded</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div><!--end teb pane-->

                            <div class="tab-pane fade bg-white shadow rounded p-4" id="address" role="tabpanel" aria-labelledby="addresses">
                                <h6 class="text-muted mb-0">The following addresses will be used on the checkout page by default.</h6>

                                <div class="row">
                                    <div class="col-lg-6 mt-4 pt-2">
                                        <div class="media align-items-center mb-4 justify-content-between">
                                            <h5 class="mb-0">Billing Address:</h5>
                                            <a href="javascript:void(0)" class="text-primary h5 mb-0" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="uil uil-edit align-middle"></i></a>
                                        </div>
                                        <div class="pt-4 border-top">
                                            <p class="h6">Cally Joseph</p>
                                            <p class="h6 text-muted">C/54 Northwest Freeway, </p>
                                            <p class="h6 text-muted">Suite 558,</p>
                                            <p class="h6 text-muted">Houston, USA 485</p>
                                            <p class="h6 text-muted mb-0">+123 897 5468</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 mt-4 pt-2">
                                        <div class="media align-items-center mb-4 justify-content-between">
                                            <h5 class="mb-0">Shipping Address:</h5>
                                            <a href="javascript:void(0)" class="text-primary h5 mb-0" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="uil uil-edit align-middle"></i></a>
                                        </div>
                                        <div class="pt-4 border-top">
                                            <p class="h6">Cally Joseph</p>
                                            <p class="h6 text-muted">C/54 Northwest Freeway, </p>
                                            <p class="h6 text-muted">Suite 558,</p>
                                            <p class="h6 text-muted">Houston, USA 485</p>
                                            <p class="h6 text-muted mb-0">+123 897 5468</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end teb pane-->

                            <div class="tab-pane fade bg-white shadow rounded p-4" id="account" role="tabpanel" aria-labelledby="account-details">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <div class="position-relative">
                                                    <i data-feather="user" class="fea icon-sm icons"></i>
                                                    <input name="name" id="first-name" type="text" class="form-control pl-5" value="Cally">
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <div class="position-relative">
                                                    <i data-feather="user-check" class="fea icon-sm icons"></i>
                                                    <input name="name" id="last-name" type="text" class="form-control pl-5" value="Joseph">
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Your Email</label>
                                                <div class="position-relative">
                                                    <i data-feather="mail" class="fea icon-sm icons"></i>
                                                    <input name="email" id="email" type="email" class="form-control pl-5" value="callyjoseph@gmail.com">
                                                </div>
                                            </div> 
                                        </div><!--end col-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Display Name</label>
                                                <div class="position-relative">
                                                    <i data-feather="user-check" class="fea icon-sm icons"></i>
                                                    <input name="name" id="display-name" type="text" class="form-control pl-5" value="cally_joseph">
                                                </div>
                                            </div> 
                                        </div><!--end col-->

                                        <div class="col-lg-12 mt-2 mb-0">
                                            <button class="btn btn-primary">Save Changes</button>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </form>

                                <h5 class="mt-4">Change password :</h5>
                                <form>
                                    <div class="row mt-3">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Old password :</label>
                                                <div class="position-relative">
                                                    <i data-feather="key" class="fea icon-sm icons"></i>
                                                    <input type="password" class="form-control pl-5" placeholder="Old password" required="">
                                                </div>
                                            </div>
                                        </div><!--end col-->
    
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>New password :</label>
                                                <div class="position-relative">
                                                    <i data-feather="key" class="fea icon-sm icons"></i>
                                                    <input type="password" class="form-control pl-5" placeholder="New password" required="">
                                                </div>
                                            </div>
                                        </div><!--end col-->
    
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Re-type New password :</label>
                                                <div class="position-relative">
                                                    <i data-feather="key" class="fea icon-sm icons"></i>
                                                    <input type="password" class="form-control pl-5" placeholder="Re-type New password" required="">
                                                </div>
                                            </div>
                                        </div><!--end col-->
    
                                        <div class="col-lg-12 mt-2 mb-0">
                                            <button class="btn btn-primary">Save Password</button>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </form>
                            </div><!--end teb pane-->
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->
        <!-- Wishlist Popup End -->
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