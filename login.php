<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Alexstrap Movie - HTML5 Bootstrap Landing Page Template">
    <meta name="viewport" content="minimum-scale=1,initial-scale=1,width=device-width,shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="/assets/favicons/favicon.ico">
    <link rel="apple-touch-icon" sizes="57x57" href="/assets/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/assets/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/assets/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/assets/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/assets/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/assets/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/assets/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/assets/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/assets/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicons/favicon-16x16.png">
    <link rel="manifest" href="/assets/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/assets/favicons/ms-icon-144x144.png">
    <!-- PWA primary color-->
    <meta name="theme-color" content="#303030">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Facebook-->
    <meta property="author" content="luxi">
    <meta property="og:site_name" content="alexstrap.ux-maestro.com">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <!-- Twitter-->
    <meta property="twitter:site" content="luxi.ux-maestro.com">
    <meta property="twitter:domain" content="luxi.ux-maestro.com">
    <meta property="twitter:creator" content="luxi">
    <meta property="twitter:card" content="summary">
    <meta property="twitter:image:src" content="/assets/images/logo.png">
    <meta property="og:url" content="alexstrap.ux-maestro.com/movie">
    <meta property="og:title" content="Movie">
    <meta property="og:description" content="Alexstrap Movie - HTML5 Bootstrap Landing Page Template">
    <meta name="twitter:site" content="alexstrap.ux-maestro.com/movie">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="/images/movie-logo.png">
    <meta property="og:image" content="/images/movie-logo.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <title>Movie - Login</title>
    <!-- Styles-->
    <link href="/assets/css/side-right.css" rel="stylesheet">
    <link href="/assets/css/movie-bundle.min.css" rel="stylesheet">
</head>

<body>
    <div id="preloader" style="position: fixed; z-index: 10000; background: #fafafa; width: 100%; height: 100%"><img style="opacity: 0.5; position: fixed; top: calc(50% - 50px); left: calc(50% - 50px)" src="../assets/images/loading.gif" alt="loading"></div>
    <div class="m-application theme--light transition-page" id="app">
        <div class="loading"></div>
        <div class="m-content passion passion-var" id="main-wrap">
            <div>
                <div class="btn-float-opt"><button class="btn btn-icon waves-effect" id="open_palette"><i class="material-icons">palette</i></button><button class="btn btn-icon waves-effect" id="open_explore"><i class="material-icons">library_books</i></button></div>
                <div class="sidenav-opt drawer-opt" id="slidemenu">
                    <div class="opt-wrap">
                        <div class="hidden-sm-up">
                            <div class="btn-icon waves-effect" id="close_sideright"><i class="material-icons">arrow_back</i></div>
                        </div>
                        <ul class="tabs">
                            <li class="tab tab-label"><a class="active" href="#palette_options"><i class="material-icons">palette</i>Theme</a></li>
                            <li class="tab tab-label"><a href="#explore_theme"><i class="material-icons">library_books</i>Explore</a></li>
                        </ul>
                        <div class="tab-item" id="palette_options">
                            <div>
                                <div class="theme-switched">
                                    <div class="card paper">
                                        <div class="row">
                                            <div class="col-sm-6 margin-bottom">
                                                <h6 class="title">Theme Mode</h6>
                                                <div class="switch switch-toggle"><label class="overline">Light<input id="theme_switcher_side" type="checkbox"><span class="lever"></span>Dark</label></div>
                                            </div>
                                            <div class="col-sm-6">
                                                <h6 class="title">Layout Direction</h6>
                                                <div class="switch switch-toggle"><label class="overline">LTR<input id="dir_switcher_side" type="checkbox"><span class="lever"></span>RTL<br><i class="caption">Best view in arabic</i></label></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="theme-color">
                                    <div class="card paper">
                                        <h6 class="title">Color Combination</h6>
                                        <div class="row">
                                            <div class="col-sm-3 col-6 my-1">
                                                <div class="swatch waves-effect tooltipped" data-position="top" data-tooltip="joker" data-color="joker"><span class="primary-swatch" style="background: #673AB7; box-shadow: 0 0 0 6px #D1C4E9, 0 0 0 12px #311B92, rgba(0, 0, 0, 0.45) 0px 0px 6px 12px">&nbsp;</span><span class="secondary-swatch" style="background: #00BCD4; box-shadow: 0 0 0 6px #B2EBF2, 0 0 0 12px #006064, rgba(0, 0, 0, 0.45) 0px 0px 6px 12px">&nbsp;</span></div>
                                            </div>
                                            <div class="col-sm-3 col-6 my-1">
                                                <div class="swatch waves-effect tooltipped" data-position="top" data-tooltip="violeta" data-color="violeta"><span class="primary-swatch" style="background: #9C27B0; box-shadow: 0 0 0 6px #E1BEE7, 0 0 0 12px #6A1B9A, rgba(0, 0, 0, 0.45) 0px 0px 6px 12px">&nbsp;</span><span class="secondary-swatch" style="background: #8BC34A; box-shadow: 0 0 0 6px #DCEDC8, 0 0 0 12px #558B2F, rgba(0, 0, 0, 0.45) 0px 0px 6px 12px">&nbsp;</span></div>
                                            </div>
                                            <div class="col-sm-3 col-6 my-1">
                                                <div class="swatch waves-effect tooltipped" data-position="top" data-tooltip="purple" data-color="purple"><span class="primary-swatch" style="background: #9c27b0; box-shadow: 0 0 0 6px #f3e5f5, 0 0 0 12px #6a1b9a, rgba(0, 0, 0, 0.45) 0px 0px 6px 12px">&nbsp;</span><span class="secondary-swatch" style="background: #aa00ff; box-shadow: 0 0 0 6px #ea80fc, 0 0 0 12px #4a148c, rgba(0, 0, 0, 0.45) 0px 0px 6px 12px">&nbsp;</span></div>
                                            </div>
                                            <div class="col-sm-3 col-6 my-1">
                                                <div class="swatch waves-effect tooltipped" data-position="top" data-tooltip="passion" data-color="passion"><span class="primary-swatch" style="background: #E91E63; box-shadow: 0 0 0 6px #F8BBD0, 0 0 0 12px #880E4F, rgba(0, 0, 0, 0.45) 0px 0px 6px 12px">&nbsp;</span><span class="secondary-swatch" style="background: #304FFE; box-shadow: 0 0 0 6px #C5CAE9, 0 0 0 12px #1A237E, rgba(0, 0, 0, 0.45) 0px 0px 6px 12px">&nbsp;</span></div>
                                            </div>
                                            <div class="col-sm-3 col-6 my-1">
                                                <div class="swatch waves-effect tooltipped" data-position="top" data-tooltip="burgundy" data-color="burgundy"><span class="primary-swatch" style="background: #e91e63; box-shadow: 0 0 0 6px #f8bbd0, 0 0 0 12px #ad1457, rgba(0, 0, 0, 0.45) 0px 0px 6px 12px">&nbsp;</span><span class="secondary-swatch" style="background: #2196f3; box-shadow: 0 0 0 6px #bbdefb, 0 0 0 12px #1565c0, rgba(0, 0, 0, 0.45) 0px 0px 6px 12px">&nbsp;</span></div>
                                            </div>
                                            <div class="col-sm-3 col-6 my-1">
                                                <div class="swatch waves-effect tooltipped" data-position="top" data-tooltip="vampire" data-color="vampire"><span class="primary-swatch" style="background: #f44336; box-shadow: 0 0 0 6px #FFEBEE, 0 0 0 12px #E53935, rgba(0, 0, 0, 0.45) 0px 0px 6px 12px">&nbsp;</span><span class="secondary-swatch" style="background: #607D8B; box-shadow: 0 0 0 6px #ECEFF1, 0 0 0 12px #455A64, rgba(0, 0, 0, 0.45) 0px 0px 6px 12px">&nbsp;</span></div>
                                            </div>
                                            <div class="col-sm-3 col-6 my-1">
                                                <div class="swatch waves-effect tooltipped" data-position="top" data-tooltip="roseGold" data-color="roseGold"><span class="primary-swatch" style="background: #EC407A; box-shadow: 0 0 0 6px #FCE4EC, 0 0 0 12px #D81B60, rgba(0, 0, 0, 0.45) 0px 0px 6px 12px">&nbsp;</span><span class="secondary-swatch" style="background: #FFA000; box-shadow: 0 0 0 6px #FFF8E1, 0 0 0 12px #FF6F00, rgba(0, 0, 0, 0.45) 0px 0px 6px 12px">&nbsp;</span></div>
                                            </div>
                                            <div class="col-sm-3 col-6 my-1">
                                                <div class="swatch waves-effect tooltipped" data-position="top" data-tooltip="violet" data-color="violet"><span class="primary-swatch" style="background: #EC407A; box-shadow: 0 0 0 6px #FCE4EC, 0 0 0 12px #D81B60, rgba(0, 0, 0, 0.45) 0px 0px 6px 12px">&nbsp;</span><span class="secondary-swatch" style="background: #673AB7; box-shadow: 0 0 0 6px #D1C4E9, 0 0 0 12px #311B92, rgba(0, 0, 0, 0.45) 0px 0px 6px 12px">&nbsp;</span></div>
                                            </div>
                                            <div class="col-sm-3 col-6 my-1">
                                                <div class="swatch waves-effect tooltipped" data-position="top" data-tooltip="ubuntu" data-color="ubuntu"><span class="primary-swatch" style="background: #EF6C00; box-shadow: 0 0 0 6px #FFF3E0, 0 0 0 12px #E65100, rgba(0, 0, 0, 0.45) 0px 0px 6px 12px">&nbsp;</span><span class="secondary-swatch" style="background: #9C27B0; box-shadow: 0 0 0 6px #F3E5F5, 0 0 0 12px #7B1FA2, rgba(0, 0, 0, 0.45) 0px 0px 6px 12px">&nbsp;</span></div>
                                            </div>
                                            <div class="col-sm-3 col-6 my-1">
                                                <div class="swatch waves-effect tooltipped" data-position="top" data-tooltip="gold" data-color="gold"><span class="primary-swatch" style="background: #FF9100; box-shadow: 0 0 0 6px #FFF9C4, 0 0 0 12px #FF6D00, rgba(0, 0, 0, 0.45) 0px 0px 6px 12px">&nbsp;</span><span class="secondary-swatch" style="background: #8D6E63; box-shadow: 0 0 0 6px #EFEBE9, 0 0 0 12px #4E342E, rgba(0, 0, 0, 0.45) 0px 0px 6px 12px">&nbsp;</span></div>
                                            </div>
                                            <div class="col-sm-3 col-6 my-1">
                                                <div class="swatch waves-effect tooltipped" data-position="top" data-tooltip="deepBlue" data-color="deepBlue"><span class="primary-swatch" style="background: #3F51B5; box-shadow: 0 0 0 6px #E8EAF6, 0 0 0 12px #283593, rgba(0, 0, 0, 0.45) 0px 0px 6px 12px">&nbsp;</span><span class="secondary-swatch" style="background: #03A9F4; box-shadow: 0 0 0 6px #E1F5FE, 0 0 0 12px #0277BD, rgba(0, 0, 0, 0.45) 0px 0px 6px 12px">&nbsp;</span></div>
                                            </div>
                                            <div class="col-sm-3 col-6 my-1">
                                                <div class="swatch waves-effect tooltipped" data-position="top" data-tooltip="mint" data-color="mint"><span class="primary-swatch" style="background: #2196f3; box-shadow: 0 0 0 6px #bbdefb, 0 0 0 12px #0d47a1, rgba(0, 0, 0, 0.45) 0px 0px 6px 12px">&nbsp;</span><span class="secondary-swatch" style="background: #03a9f4; box-shadow: 0 0 0 6px #b3e5fc, 0 0 0 12px #01579b, rgba(0, 0, 0, 0.45) 0px 0px 6px 12px">&nbsp;</span></div>
                                            </div>
                                            <div class="col-sm-3 col-6 my-1">
                                                <div class="swatch waves-effect tooltipped" data-position="top" data-tooltip="fresh" data-color="fresh"><span class="primary-swatch" style="background: #03ACF2; box-shadow: 0 0 0 6px #B3E5FC, 0 0 0 12px #01579B, rgba(0, 0, 0, 0.45) 0px 0px 6px 12px">&nbsp;</span><span class="secondary-swatch" style="background: #4CAF50; box-shadow: 0 0 0 6px #C8E6C9, 0 0 0 12px #357A38, rgba(0, 0, 0, 0.45) 0px 0px 6px 12px">&nbsp;</span></div>
                                            </div>
                                            <div class="col-sm-3 col-6 my-1">
                                                <div class="swatch waves-effect tooltipped" data-position="top" data-tooltip="ocean-blue" data-color="ocean-blue"><span class="primary-swatch" style="background: #2196f3; box-shadow: 0 0 0 6px #bbdefb, 0 0 0 12px #0d47a1, rgba(0, 0, 0, 0.45) 0px 0px 6px 12px">&nbsp;</span><span class="secondary-swatch" style="background: #00bcd4; box-shadow: 0 0 0 6px #b2ebf2, 0 0 0 12px #006064, rgba(0, 0, 0, 0.45) 0px 0px 6px 12px">&nbsp;</span></div>
                                            </div>
                                            <div class="col-sm-3 col-6 my-1">
                                                <div class="swatch waves-effect tooltipped" data-position="top" data-tooltip="cloud" data-color="cloud"><span class="primary-swatch" style="background: #03A9F4; box-shadow: 0 0 0 6px #B3E5FC, 0 0 0 12px #01579B, rgba(0, 0, 0, 0.45) 0px 0px 6px 12px">&nbsp;</span><span class="secondary-swatch" style="background: #FF9800; box-shadow: 0 0 0 6px #FFE0B2, 0 0 0 12px #E65100, rgba(0, 0, 0, 0.45) 0px 0px 6px 12px">&nbsp;</span></div>
                                            </div>
                                            <div class="col-sm-3 col-6 my-1">
                                                <div class="swatch waves-effect tooltipped" data-position="top" data-tooltip="littleQueen" data-color="littleQueen"><span class="primary-swatch" style="background: #00BCD4; box-shadow: 0 0 0 6px #E0F7FA, 0 0 0 12px #006064, rgba(0, 0, 0, 0.45) 0px 0px 6px 12px">&nbsp;</span><span class="secondary-swatch" style="background: #F06292; box-shadow: 0 0 0 6px #FCE4EC, 0 0 0 12px #AD1457, rgba(0, 0, 0, 0.45) 0px 0px 6px 12px">&nbsp;</span></div>
                                            </div>
                                            <div class="col-sm-3 col-6 my-1">
                                                <div class="swatch waves-effect tooltipped" data-position="top" data-tooltip="smart" data-color="smart"><span class="primary-swatch" style="background: #00BCD4; box-shadow: 0 0 0 6px #B2EBF2, 0 0 0 12px #00838F, rgba(0, 0, 0, 0.45) 0px 0px 6px 12px">&nbsp;</span><span class="secondary-swatch" style="background: #FFA000; box-shadow: 0 0 0 6px #FFECB3, 0 0 0 12px #FF6F00, rgba(0, 0, 0, 0.45) 0px 0px 6px 12px">&nbsp;</span></div>
                                            </div>
                                            <div class="col-sm-3 col-6 my-1">
                                                <div class="swatch waves-effect tooltipped" data-position="top" data-tooltip="botani" data-color="botani"><span class="primary-swatch" style="background: #689F38; box-shadow: 0 0 0 6px #DCEDC8, 0 0 0 12px #33691E, rgba(0, 0, 0, 0.45) 0px 0px 6px 12px">&nbsp;</span><span class="secondary-swatch" style="background: #F06292; box-shadow: 0 0 0 6px #FCE4EC, 0 0 0 12px #AD1457, rgba(0, 0, 0, 0.45) 0px 0px 6px 12px">&nbsp;</span></div>
                                            </div>
                                            <div class="col-sm-3 col-6 my-1">
                                                <div class="swatch waves-effect tooltipped" data-position="top" data-tooltip="money" data-color="money"><span class="primary-swatch" style="background: #4CAF50; box-shadow: 0 0 0 6px #C8E6C9, 0 0 0 12px #2E7D32, rgba(0, 0, 0, 0.45) 0px 0px 6px 12px">&nbsp;</span><span class="secondary-swatch" style="background: #FFA000; box-shadow: 0 0 0 6px #FFECB3, 0 0 0 12px #FF6F00, rgba(0, 0, 0, 0.45) 0px 0px 6px 12px">&nbsp;</span></div>
                                            </div>
                                            <div class="col-sm-3 col-6 my-1">
                                                <div class="swatch waves-effect tooltipped" data-position="top" data-tooltip="green-leaf" data-color="green-leaf"><span class="primary-swatch" style="background: #009688; box-shadow: 0 0 0 6px #E0F7FA, 0 0 0 12px #00695C, rgba(0, 0, 0, 0.45) 0px 0px 6px 12px">&nbsp;</span><span class="secondary-swatch" style="background: #607D8B; box-shadow: 0 0 0 6px #CFD8DC, 0 0 0 12px #37474F, rgba(0, 0, 0, 0.45) 0px 0px 6px 12px">&nbsp;</span></div>
                                            </div>
                                            <div class="col-sm-3 col-6 my-1">
                                                <div class="swatch waves-effect tooltipped" data-position="top" data-tooltip="greenNature" data-color="greenNature"><span class="primary-swatch" style="background: #009688; box-shadow: 0 0 0 6px #E0F7FA, 0 0 0 12px #00695C, rgba(0, 0, 0, 0.45) 0px 0px 6px 12px">&nbsp;</span><span class="secondary-swatch" style="background: #689F38; box-shadow: 0 0 0 6px #F1F8E9, 0 0 0 12px #33691E, rgba(0, 0, 0, 0.45) 0px 0px 6px 12px">&nbsp;</span></div>
                                            </div>
                                            <div class="col-sm-3 col-6 my-1">
                                                <div class="swatch waves-effect tooltipped" data-position="top" data-tooltip="brown" data-color="brown"><span class="primary-swatch" style="background: #795548; box-shadow: 0 0 0 6px #d7ccc8, 0 0 0 12px #4e342e, rgba(0, 0, 0, 0.45) 0px 0px 6px 12px">&nbsp;</span><span class="secondary-swatch" style="background: #794848; box-shadow: 0 0 0 6px #ccb0b0, 0 0 0 12px #3e2723, rgba(0, 0, 0, 0.45) 0px 0px 6px 12px">&nbsp;</span></div>
                                            </div>
                                            <div class="col-sm-3 col-6 my-1">
                                                <div class="swatch waves-effect tooltipped" data-position="top" data-tooltip="grayscale" data-color="grayscale"><span class="primary-swatch" style="background: #546E7A; box-shadow: 0 0 0 6px #CFD8DC, 0 0 0 12px #263238, rgba(0, 0, 0, 0.45) 0px 0px 6px 12px">&nbsp;</span><span class="secondary-swatch" style="background: #6D4C41; box-shadow: 0 0 0 6px #D7CCC8, 0 0 0 12px #3E2723, rgba(0, 0, 0, 0.45) 0px 0px 6px 12px">&nbsp;</span></div>
                                            </div>
                                            <div class="col-sm-3 col-6 my-1">
                                                <div class="swatch waves-effect tooltipped" data-position="top" data-tooltip="black" data-color="black"><span class="primary-swatch" style="background: #212121; box-shadow: 0 0 0 6px #9e9e9e, 0 0 0 12px #000, rgba(0, 0, 0, 0.45) 0px 0px 6px 12px">&nbsp;</span><span class="secondary-swatch" style="background: #757575; box-shadow: 0 0 0 6px #E0E0E0, 0 0 0 12px #424242, rgba(0, 0, 0, 0.45) 0px 0px 6px 12px">&nbsp;</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-item" id="explore_theme">
                            <div class="explore">
                                <ul>
                                    <li>
                                        <a href="/medical/en/index.html" target="_blank">
                                            <figure><img src="https://ik.imagekit.io/q5gfy1zcvl/MedicalVue_G-G63g6WC.jpg" alt="medical"></figure>medical</a>
                                    </li>
                                    <li>
                                        <a href="/movie/en/index.html" target="_blank">
                                            <figure><img src="https://ik.imagekit.io/q5gfy1zcvl/Carrd_Movie_wLFQlbgzu.jpg" alt="movie entertainment"></figure>movie entertainment</a>
                                    </li>
                                    <li>
                                        <a href="/education/en/index.html" target="_blank">
                                            <figure><img src="https://ik.imagekit.io/q5gfy1zcvl/Card_Education_xAfWF_8N8.jpg" alt="education"></figure>education</a>
                                    </li>
                                    <li>
                                        <a href="/saas/en/index.html" target="_blank">
                                            <figure><img src="https://ik.imagekit.io/q5gfy1zcvl/03_08_preview_saas_MZBg7aLZU.jpg" alt="saas landing"></figure>saas landing</a>
                                    </li>
                                    <li>
                                        <a href="/mobile-apps/en/index.html" target="_blank">
                                            <figure><img src="https://ik.imagekit.io/q5gfy1zcvl/03_06_preview_mobile_HJux8GYHg.jpg" alt="mobile apps"></figure>mobile apps</a>
                                    </li>
                                    <li>
                                        <a href="/agency/en/index.html" target="_blank">
                                            <figure><img src="https://ik.imagekit.io/q5gfy1zcvl/Card_Agency2_yQxwhkOOF.jpg" alt="agency"></figure>agency</a>
                                    </li>
                                    <li>
                                        <a href="/profile/en/index.html" target="_blank">
                                            <figure><img src="https://ik.imagekit.io/q5gfy1zcvl/ProfileVue_8FMHuqqJ8.jpg" alt="portfolio profile"></figure>portfolio profile</a>
                                    </li>
                                    <li>
                                        <a href="/crypto/en/index.html" target="_blank">
                                            <figure><img src="https://ik.imagekit.io/q5gfy1zcvl/CoinzVue_l-DV3hy73q.jpg" alt="cryptocurrency"></figure>cryptocurrency</a>
                                    </li>
                                    <li>
                                        <a href="/fashion/en/index.html" target="_blank">
                                            <figure><img src="https://ik.imagekit.io/q5gfy1zcvl/FashionVue_aJ6pH1tCn.jpg" alt="fashion"></figure>fashion</a>
                                    </li>
                                    <li>
                                        <a href="/hosting/en/index.html" target="_blank">
                                            <figure><img src="https://ik.imagekit.io/q5gfy1zcvl/Card_Hosting2_1dr05XJSv.jpg" alt="cloud hosting"></figure>cloud hosting</a>
                                    </li>
                                    <li>
                                        <a href="/architect/en/index.html" target="_blank">
                                            <figure><img src="https://ik.imagekit.io/q5gfy1zcvl/ArchitectVue_mRDTrcrZ-.jpg" alt="interior Architect"></figure>interior Architect</a>
                                    </li>
                                    <li>
                                        <a href="https://github.com/ilhammeidi/maestrolux-doc/blob/master/README.md" target="_blank">
                                            <figure><img src="https://ik.imagekit.io/q5gfy1zcvl/docs_G4-Yw2hVC.jpg" alt="documentation"></figure>documentation</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-page">
                <div class="page-wrap">
                    <div class="hidden-md-up">
                        <div class="logo logo-header">
                            <a href="index.html"><img src="../assets/images/movie-logo.svg" alt="logo">
                                <p class="use-text-subtitle2">Movie</p>
                            </a>
                        </div>
                    </div>
                    <div class="container max-lg inner-wrap">
                        <div class="decoration"><svg class="left-deco" width="1045px" height="1468px" viewBox="0 0 1045 1468" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g transform="translate(-1030.000000, 0.000000)"><g transform="translate(950.000000, 0.000000)"><path d="M0,0 L805.395445,0 C731.131815,0 740.666667,76.9414646 834,230.824394 C915.57424,365.319569 1045,513.536468 1045,652.024982 C1045,806.30828 951.877684,902.632061 904.5,1091.56209 C874.07902,1212.87314 909.795583,1338.35244 1011.64969,1468 L0,1468 L0,0 Z"></path></g></g></svg>                            <svg class="right-deco" width="389px" height="1468px" viewBox="0 0 389 1468" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g transform="translate(-2171.000000, 0.000000)"><g transform="translate(-950.000000, 0.000000)"><g transform="translate(950.000000, 0.000000)"><path d="M2329.58044,-732.909805 L3294.66463,-608.836163 C3018.10652,-208.944402 2934.07929,71.8618948 3042.58292,233.582726 C3136.98689,374.288498 3255.13325,471.945016 3255.13325,636.668858 C3255.13325,820.179655 3107.51302,903.798038 3059.64228,1128.51906 C3028.9047,1272.81133 3063.63816,1429.66837 3163.84265,1599.0902 L2141.66463,1599.0902 L2329.58044,-732.909805 Z" transform="translate(2718.164626, 433.090195) rotate(179.000000) translate(-2718.164626, -433.090195) "></path></g></g></g></svg></div>
                        <div class="card form-box fragment-fadeUp">
                            <div class="hidden-sm-down"><a class="waves-effect btn-icon backtohome" href="index.html"><span><i class="ion-ios-home-outline"></i><i class="ion-ios-arrow-thin-left"></i></span></a></div>
                            <div class="auth-frame">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="hidden-sm-down">
                                            <div class="greeting">
                                                <div class="logo"><img src="../assets/images/movie-logo.svg" alt="logo">
                                                    <p class="use-text-subtitle2">Movie</p>
                                                </div>
                                                <h4 class="use-text-title2 pb-2">Welcome back</h4>
                                                <h6 class="use-text-subtitle2">Please login to continue</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="form-wrap">
                                            <div>
                                                <div class="head">
                                                    <div class="title-secondary align-left">
                                                        <h3>login</h3>
                                                    </div><a class="btn btn-flat waves-effect button-link" href="register.html"><i class="material-icons icon left mr-1">arrow_forward</i>Create new account</a></div>
                                                <div class="socmed-side-login"><button class="btn navi-btn waves-effect"><i class="ion-social-facebook"></i>Facebook</button> <button class="btn blue-btn waves-effect"><i class="ion-social-twitter"></i>Twitter</button> <button class="btn red-btn waves-effect"><i class="ion-social-google"></i>Google</button></div>
                                                <div class="separator">
                                                    <p>Or login with email</p>
                                                </div>
                                                <form id="login_form" method="POST">
                                                    <div class="row spacing3">
                                                        <div class="col-sm-12">
                                                            <div class="input-field filled dark"><input class="validate" id="email" type="email" name="email" required> <label for="email">Email</label></div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="input-field filled dark"><input class="validate" id="password" type="password" name="password" required> <label for="password">Password</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-helper mt-4">
                                                        <div class="form-control-label"><label><input class="filled-in secondary" type="checkbox" required> <span>Remember</span></label></div><a class="btn-flat button-link" href="#">Forgot Password</a></div>
                                                    <div class="btn-area mt-10"><button class="btn secondary btn-large block waves-effect" type="submit">Continue</button></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Scripts-->
    <script src="../assets/js/movie-bundle.min.js"></script>
    <script src="../../assets/js/side-right.js"></script>
</body>

</html>