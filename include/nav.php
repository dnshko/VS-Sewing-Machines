</head>

<body>
    <!-- <div id="preloader" style="position: fixed; z-index: 10000; background: #fafafa; width: 100%; height: 100%"><img style="opacity: 0.5; position: fixed; top: calc(50% - 50px); left: calc(50% - 50px)" src="assets/images/loading.gif" alt="loading"></div> -->
    <div class="m-application theme--light transition-page" id="app">
        <div class="loading"></div>
        <div class="m-content passion passion-var" id="main-wrap">

            <div>
                <!-- home start -->
                <div id="home"></div>
                <div class="main-wrap">
                    <div class="sidenav mobile-nav" id="slide-menu">
                        <div class="menu">
                            <ul class="collection">
                                <li class="collection-item" style="animation-duration: 0.25s"><a class="sidenav-close waves-effect menu-list" href="#promotions">Home</a>
                                </li>
                                <!--<li class="collection-item" style="animation-duration: 0.5s"><a class="sidenav-close waves-effect menu-list" href="#">About us</a></li>-->
                                <!-- <li class="collection-item" style="animation-duration: 0.75s"><a class="sidenav-close waves-effect menu-list" href="#">Contact us</a></li> -->
                                <li class="collection-item" style="animation-duration: 1s"><a class="sidenav-close waves-effect menu-list" href="all_categories.php">All categories</a></li>
                                <li class="collection-item" style="animation-duration: 1s"><a class="sidenav-close waves-effect menu-list" href="contact.php">Contact</a></li>
                            </ul>

                            <hr class="divider-sidebar">
                            <ul class="collection">
                                <li class="collection-item" style="animation-duration: 1.25s"><a class="sidenav-close waves-effect menu-list" href="index.php">login</a></li>
                                <li class="collection-item" style="animation-duration: 1.25s"><a class="sidenav-close waves-effect menu-list" href="register.php">register</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- ##### HEADER #####-->
                    <header class="app-bar header fixed" id="header">
                        <div class="container fixed-width-lg-up">
                            <div class="header-content">
                                <nav class="nav-logo nav-menu"><button class="mobile-menu btn-icon waves-effect hamburger hamburger--spin show-md-down" id="mobile_menu" type="button"><span class="hamburger-box"><span
                                                class="bar hamburger-inner"></span></span></button>
                                    <div class="logo scrollnav">
                                        <a href="#banner"><img src="assets/images/logo.png" alt="logo"></a>
                                    </div>
                                    <div>
                                        <div class="scrollactive-nav show-lg-up scrollnav">
                                            <ul>
                                                <li class="d-none">
                                                    <a href="#banner"></a>
                                                </li>
                                                <li><a class="btn btn-flat anchor-link waves-effect" href="index.php">Home</a></li>
                                                <!--<li><a class="btn btn-flat anchor-link waves-effect" href="#">About us</a></li>-->
                                                <!-- <li><a class="btn btn-flat anchor-link waves-effect" href="#">Contact us</a></li> -->
                                                <li><a class="btn btn-flat anchor-link waves-effect" href="all_categories.php">All categories</a></li>
                                                <li><a class="btn btn-flat anchor-link waves-effect" href="contact.php">Contact</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                                <div class="hidden-md-down"><span class="divider"></span></div>
                                <!-- <nav class="nav-menu nav-auth">
                                    <div class="hidden-xs-down"><a class="btn btn-flat text-btn waves-effect" href="login.html">login</a> <a class="btn secondary light button waves-effect" href="register.html">register</a></div>
                                </nav> -->
                                <div class="w3l_header_right">
                                <ul>
                                    <li class="dropdown profile_details_drop">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i> My Account </a>
                                        <div class="mega-dropdown-menu">
                                            <div class="w3ls_vegetables">
                                                <ul class="dropdown-menu drp-mnu">
                                                    
                                                    <?php
                                                        if(isset($_SESSION['UserEmail']) && isset($_SESSION['UserFullName']))
                                                        {
                                                            echo "
                                                                <li><a href='order.php?name=WW91ciBPcmRlciBIaXN0b3J5'>Order History</a></li>
                                                                <li><a href='myaccount.php?name=TXkgQWNjb3VudA=='>Account</a></li>
                                                                <li><a href='order.php?name=WW91ciBPcmRlciBIaXN0b3J5'>Track Order</a></li>
                                                                <li><a href='logout.php'>Log Out</a></li>
                                                            ";
                                                        }
                                                        else
                                                        {
                                                            echo "
                                                                <li><a href='login.php?name=".base64_encode('User Login')."'>Login</a></li>
                                                    <li><a href='register.php?name=".base64_encode('Create New Account')."'>Sign Up</a></li>
                                                            ";
                                                        }
                                                    ?>
                                                    
                                                </ul>
                                            </div>                  
                                        </div>	
                                    </li>
                                </ul>
                            </div>
                            <div class="product_list_header">  
                                <form action="cart.php?name=Q2FydA==" method="post" class="last">
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="display" value="1" />
                                        <input type="submit" name="submit" value="View cart" class="button" />
                                    </fieldset>
                                </form>
                            </div>
                            </div>
                        </div>
                    </header>
                    <!-- ##### END HEADER #####-->