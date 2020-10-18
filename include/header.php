<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="description" content="CC Dev">
    <meta name="viewport" content="minimum-scale=1,initial-scale=1,width=device-width,shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="assets/favicons/favicon.ico">
    <link rel="apple-touch-icon" sizes="57x57" href="assets/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicons/ms-icon-144x144.png">
    <!-- PWA primary color-->
    <meta name="theme-color" content="#303030">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Facebook-->
    <meta property="author" content="DINESH">
    <meta property="og:site_name" content="">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <!-- Twitter-->
    <meta property="twitter:site" content="CC Dev">
    <meta property="twitter:domain" content="CC Dev">
    <meta property="twitter:creator" content="CC Dev">
    <meta property="twitter:card" content="summary">
    <meta property="twitter:image:src" content="assets/images/logo.png">
    <meta property="og:url" content="">
    <meta property="og:title" content="CC Dev">
    <meta property="og:description" content="HTML5 Bootstrap Landing Page Template">
    <meta name="twitter:site" content="CC Dev">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="assets/images/movie-logo.png">
    <meta property="og:image" content="assets/images/movie-logo.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <title>Home Page</title>
    <!-- Styles-->
    <link href="assets/css/side-right.css" rel="stylesheet" type="text/css" media="all">
    <link href="assets/css/movie-bundle.min.css" rel="stylesheet" type="text/css" media="all">
</head>

<body>
    <div id="preloader" style="position: fixed; z-index: 10000; background: #fafafa; width: 100%; height: 100%"><img style="opacity: 0.5; position: fixed; top: calc(50% - 50px); left: calc(50% - 50px)" src="assets/images/loading.gif" alt="loading"></div>
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
                                <li class="collection-item" style="animation-duration: 0.25s"><a class="sidenav-close waves-effect menu-list" href="#promotions">promotions</a>
                                </li>
                                <li class="collection-item" style="animation-duration: 0.5s"><a class="sidenav-close waves-effect menu-list" href="#featured">featured</a></li>
                                <li class="collection-item" style="animation-duration: 0.75s"><a class="sidenav-close waves-effect menu-list" href="#top">top categories</a></li>
                                <li class="collection-item" style="animation-duration: 1s"><a class="sidenav-close waves-effect menu-list" href="#all">all categories</a></li>
                            </ul>

                            <hr class="divider-sidebar">
                            <ul class="collection">
                                <li class="collection-item" style="animation-duration: 1.25s"><a class="sidenav-close waves-effect menu-list" href="login.html">login</a></li>
                                <li class="collection-item" style="animation-duration: 1.25s"><a class="sidenav-close waves-effect menu-list" href="register.html">register</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- ##### HEADER #####-->
                    <header class="app-bar header" id="header">
                        <div class="container fixed-width-lg-up">
                            <div class="header-content">
                                <nav class="nav-logo nav-menu"><button class="mobile-menu btn-icon waves-effect hamburger hamburger--spin show-md-down" id="mobile_menu" type="button"><span class="hamburger-box"><span
                                                class="bar hamburger-inner"></span></span></button>
                                    <div class="logo scrollnav">
                                        <a href="#banner"><img src="assets/images/movie-logo.png" alt="logo"></a>
                                    </div>
                                    <div>
                                        <div class="scrollactive-nav show-lg-up scrollnav">
                                            <ul>
                                                <li class="d-none">
                                                    <a href="#banner"></a>
                                                </li>
                                                <li><a class="btn btn-flat anchor-link waves-effect" href="#promotions">promotions</a></li>
                                                <li><a class="btn btn-flat anchor-link waves-effect" href="#featured">featured</a></li>
                                                <li><a class="btn btn-flat anchor-link waves-effect" href="#top">top
                                                        categories</a></li>
                                                <li><a class="btn btn-flat anchor-link waves-effect" href="#all">all
                                                        categories</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                                <div class="hidden-md-down"><span class="divider"></span></div>
                                <nav class="nav-menu nav-auth">
                                    <div class="hidden-xs-down"><a class="btn btn-flat text-btn waves-effect" href="login.html">login</a> <a class="btn secondary light button waves-effect" href="register.html">register</a></div>
                                </nav>
                            </div>
                        </div>
                    </header>
                    <!-- ##### END HEADER #####-->