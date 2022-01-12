 <!-- Navbar STart -->
 <header id="topnav" class="defaultscroll sticky bg-white">
            <div class="container d-flex align-items-center justify-content-between">
                <!-- Logo container-->
                <div>
                    <a class="logo" href="index.php">
                        <img src="public/img/logo/logo_fond_vide.png" height="100" alt="pizza lab">
                    </a>
                </div>                 
                <!-- End Logo container-->
                <div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>
        
                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">
                        <li class="has-submenu"><a href="index.php?action=choix">Notre Carte</a></li>
                        <li class="has-submenu">
                            <a href="javascript:void(0)">Notre restaurant</a></span>
                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li><a class="dropdown-item text-dark" href="index.php?action=account"><i class="uil uil-user align-middle mr-1"></i> Reserver une table</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="javascript:void(0)"><i class="mdi mdi-account"></i></a><span class="menu-arrow"></span>
                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li><a class="dropdown-item text-dark" href="index.php?action=account"><i class="mdi mdi-account align-middle mr-1"></i> Mon compte</a></li>
                                        <?php if(isset($_SESSION['isConnected']) && $_SESSION['isConnected'] == 1){?>
                                            <div class="dropdown-divider my-3 border-top"></div>
                                            <li><a class="dropdown-item text-dark" href="index.php?action=choix&command=1"><i class="mdi mdi-basket align-middle mr-1"></i> Mon Panier</a></li>
                                            <li><a class="dropdown-item text-dark" href="index.php?action=account&disconnect=1"><i class="mdi mdi-login-variant align-middle mr-1"></i> Se déconnecter</a></li>
                                        <?php }if(isset($_SESSION['acces']) && $_SESSION['acces'] == 2){ ?>
                                            <div class="dropdown-divider my-3 border-top"></div>
                                            <li><a class="dropdown-item text-dark" href="index.php?action=adminBoard"><i class="mdi mdi-cog align-middle mr-1"></i> Administration</a></li>
                                            <?php } ?>
                                    </ul>
                                </li>  
                            </ul>
                        </li>
                    </ul><!--end navigation menu-->
                </div><!--end navigation-->
            </div><!--end container-->
        </header><!--end header-->
        <!-- Navbar End -->