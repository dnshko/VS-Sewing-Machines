<?php
include_once('include/header.php');
// include_once('include/nav.php');
include_once('phplib/view.php');
include_once('phplib/controler.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="description" content="CC Dev">
    <meta name="viewport" content="minimum-scale=1,initial-scale=1,width=device-width,shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="assets/favicons/favicon.ico">
    <link rel="manifest" href="assets/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicons/favicon-32x32.png">
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
    <meta name="twitter:image" content="assets/images/logo.png">
    <meta property="og:image" content="assets/images/logo.png">
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
            
            <div class="form-page">
                <div class="page-wrap">
                    <div class="hidden-md-up">
                        <div class="logo logo-header">
                            <a href="index.php"><img src="assets/images/logo.png" alt="logo">
                                <p class="use-text-subtitle2">Ashweembroiderysolution</p>
                            </a>
                        </div>
                    </div>
                    <div class="container max-lg inner-wrap">
                        <div class="decoration"><svg class="left-deco" width="1045px" height="1468px" viewBox="0 0 1045 1468" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g transform="translate(-1030.000000, 0.000000)"><g transform="translate(950.000000, 0.000000)"><path d="M0,0 L805.395445,0 C731.131815,0 740.666667,76.9414646 834,230.824394 C915.57424,365.319569 1045,513.536468 1045,652.024982 C1045,806.30828 951.877684,902.632061 904.5,1091.56209 C874.07902,1212.87314 909.795583,1338.35244 1011.64969,1468 L0,1468 L0,0 Z"></path></g></g></svg>                            <svg class="right-deco" width="389px" height="1468px" viewBox="0 0 389 1468" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g transform="translate(-2171.000000, 0.000000)"><g transform="translate(-950.000000, 0.000000)"><g transform="translate(950.000000, 0.000000)"><path d="M2329.58044,-732.909805 L3294.66463,-608.836163 C3018.10652,-208.944402 2934.07929,71.8618948 3042.58292,233.582726 C3136.98689,374.288498 3255.13325,471.945016 3255.13325,636.668858 C3255.13325,820.179655 3107.51302,903.798038 3059.64228,1128.51906 C3028.9047,1272.81133 3063.63816,1429.66837 3163.84265,1599.0902 L2141.66463,1599.0902 L2329.58044,-732.909805 Z" transform="translate(2718.164626, 433.090195) rotate(179.000000) translate(-2718.164626, -433.090195) "></path></g></g></g></svg></div>
                        <div class="card form-box fragment-fadeUp">
                            <div class="hidden-sm-down"><a class="waves-effect btn-icon backtohome" href="index.php"><span><i class="ion-ios-home-outline"></i><i class="ion-ios-arrow-thin-left"></i></span></a></div>
                            <div class="auth-frame">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="hidden-sm-down">
                                            <div class="greeting">
                                                <div class="logo"><img src="assets/images/logo.png" alt="logo">
                                                    <p class="use-text-subtitle2">Ashweembroiderysolution</p>
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
                                                    </div><a class="btn btn-flat waves-effect button-link" href="register.php"><i class="material-icons icon left mr-1">arrow_forward</i>Create new account</a></div>
                                                    <?php
				  if(isset($_POST['btnLogin']))
				  {
				  	checklogin($_POST['txtEmail'],$_POST['txtPassword'],$_POST['txtredirurl']);
				  }
				  ?>
                                                <form action="login.php?name=VXNlciBMb2dpbg==" method="post">
                                                    <div class="row spacing3">
                                                        <div class="col-sm-12">
                                                            <div class="input-field filled dark"><input class="validate" id="email" type="email" name="txtEmail" required> <label for="email">Email</label></div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="input-field filled dark"><input class="validate" id="password" type="password" name="txtPassword" required> <label for="password">Password</label></div>
                                                        </div>
                                                    </div>
                                                    
					  <input type="hidden" name="txtredirurl" value="<?php if(isset($_GET['redirurl'])){echo $_GET['redirurl']; } ?>">
                                                    <div class="form-helper mt-4">
                                                        <!-- <div class="form-control-label"><label><input class="filled-in secondary" type="checkbox" required> <span>Remember</span></label></div><a class="btn-flat button-link" href="#">Forgot Password</a></div> -->
                                                    <div class="btn-area mt-10"><button class="btn secondary btn-large block waves-effect" type="submit" value="Login"  name="btnLogin">Continue</button></div>
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
    <script src="assets/js/movie-bundle.min.js"></script>
    <script src="assets/js/side-right.js"></script>
</body>

</html>