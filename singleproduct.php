
<?php
session_start();
include_once('phplib/view.php');
// include_once('phplib/controler.php');
$product_details=getproductdetailsbyid(base64_decode($_GET['id']));
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Ashweembroiderysolution">
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
    <meta property="twitter:site" content="Ashweembroiderysolution">
    <meta property="twitter:domain" content="Ashweembroiderysolution">
    <meta property="twitter:creator" content="Ashweembroiderysolution">
    <meta property="twitter:card" content="summary">
    <meta property="twitter:image:src" content="assets/images/logo.png">
    <meta property="og:url" content="">
    <meta property="og:title" content="Ashweembroiderysolution">
    <meta property="og:description" content="Ashweembroiderysolution">
    <meta name="twitter:site" content="CC Dev">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="assets/images/logo.png">
    <meta property="og:image" content="assets/images/logo.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <title>Ashweembroiderysolution</title>
    <!-- Styles-->
    <link href="assets/css/side-right.css" rel="stylesheet" type="text/css" media="all">
    <link href="assets/css/movie-bundle.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="assets/css/sweetalert2.min.css" rel="stylesheet" type="text/css" media="all">
    <!--new-->
    
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /> 
<script src="js/jquery-1.11.1.min.js"></script>
<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>


<!-- new -->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
 <script src='js/okzoom.js'></script>
  <script>
    $(function(){
      $('#example').okzoom({
        width: 175,
        height: 175,
        border: "1px solid black",
        shadow: "0 0 5px #000"
      });
    });
  </script>
<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<link href="single/css/style.css" rel="stylesheet" type="text/css" media="all" /> 
<!--flex slider-->
<script defer src="single/js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="single/css/flexslider.css" type="text/css" media="screen" />
<script>
	// Can also be used with $(document).ready()
	$(window).load(function() {
	  $('.flexslider').flexslider({
		animation: "slide",
		controlNav: "thumbnails"
	  });
	});
</script>
<!--flex slider-->
<script src="single/js/imagezoom.js"></script>
<!-- //js --> 
<!-- web-fonts -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lovers+Quarrel' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Offside' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
<!-- web-fonts --> 

<script type="text/javascript" src="single/js/move-top.js"></script>
<script type="text/javascript" src="single/js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
<script type="text/javascript">
	$(document).ready(function() {
	
		var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
		};
		
		$().UItoTop({ easingType: 'easeOutQuart' });
		
	});
</script>
<!-- //smooth-scrolling-of-move-up --> 


<style type="text/css">
	body {
		background-image: url(images/bg2.png);
		background-size: 100%;
		background-repeat: repeat-y;
	}
	.inner {
		background-color: #fff;
		-webkit-box-shadow: 0px 0px 31px 1px rgba(0,0,0,0.75);
        -moz-box-shadow: 0px 0px 31px 1px rgba(0,0,0,0.75);
        box-shadow: 0px 0px 31px 1px rgba(0,0,0,0.75);
	}
	.wthree_banner_bottom_left_grid:hover
			{
    -webkit-animation: flash 1s;
    animation: flash 1s;
			}
	.wthree_banner_bottom_left {
		padding: 10px;
	}
	.singleppt {
		margin: 0px 60px;
	}
</style>



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
                    <header class="app-bar header fixed" id="header" style="position: fixed;">
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

<!-- banner -->
<div class="banner">
		
		<div class="">
			<div  class="w3l_banner_nav_right_banner3" 
			style="background:url(admin/Upload/Categories/<?php echo $category_details['category_image']; ?>) no-repeat 0px 0px;
						">
				
			</div>
			<div class="w3l_banner_nav_right_banner3_btm">
				<div class="clearfix"> </div>
			</div>
			
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->

<section class="space-top-short" id="all">
                            <div class="root">
                                <div class="container">
                                    <div class="title-main align-center">
                                        <h4 class="secondary-title">Categories</h4>
                                    </div>
                                    <div class="carousel-wrap"><button class="btn nav prev waves-effect" id="prev_product"><i class="material-icons">arrow_back</i></button><button class="btn nav next waves-effect" id="next_product"><i
                                                class="material-icons">arrow_forward</i></button>
                                        <div class="slick-carousel" id="product_carousel" >
										<?php
											viewcategories();
										?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

	<!-- products -->
	<div class="products singleppt">	 
		<div class="container ">  
			<div class="single-page">
				<div class="single-page-row" id="detail-21">
					<div class="col-md-6 single-top-left">	
						<div class="flexslider">
							<ul class="slides">
								<?php viewproductimagebyid(base64_decode($_GET['id'])); ?>
							</ul>
						</div>
					</div>
					<div class="col-md-6 single-top-right">
						<h3 class="item_name"><?php echo $product_details['product_name']; ?></h3>
						<p>Processing Time: Item will be shipped out within 2-3 working days. </p>
						<p><strong>Product Code</strong> :<? echo $product_details['SKU']; ?></p>
						<!--div class="single-rating">
							<ul>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li class="rating">20 reviews</li>
								<li><a href="#">Add your review</a></li>
							</ul> 
						</div-->
						<div class="single-price">
							<ul>
								<li>Rs. <?php echo $product_details['selling']; ?>/- </li>  
								<li><del>Rs. <?php echo $product_details['price']; ?>/-</del></li> 
								<li><!--span class="w3off">10% OFF</span--></li> 
								<li><!--Ends on: June,5th--></li>
								<li><!--a href="#"><i class="fa fa-gift" aria-hidden="true"></i> Coupon</a--></li>
							</ul>	
						</div> 
						<p class="single-price-text"><?php echo $product_details['description']; ?></p>
						

						<form action="javascript:void(0);" method="post">
								<fieldset>
									<input type="hidden" name="amount" id="price" value="<?php echo $product_details['selling']; ?>" />
									<input type="hidden" name="productid" id="productid" value="<?php echo $product_details['product_id']; ?>" />
									<button type="submit" onclick="AddToCart()" name="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
									<span id="txtStatus"></span>	
								</fieldset>
							</form>
						
					</div>
					
				   <div class="clearfix"> </div>  
				</div>
			</div> 
			
		</div>
	</div>
<!--//products--> 



<!-- brands -->
	<div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid_popular">
		<div class="container">
			<h3>You may also like</h3>
				<div class="w3ls_w3l_banner_nav_right_grid1">
					<?php viewhomeproduct();  ?>
					<div class="clearfix"> </div>
				</div>
		</div>
	</div>
<!-- //brands -->
          <!-- ##### fOOTER #####-->
		  <div id="footer">
                        <div class="footer-deco">
                            <div class="decoration">

                                <div class="line-deco"><svg class="right-deco-before" width="389px" height="1468px" viewBox="0 0 389 1468" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g transform="translate(-2171.000000, 0.000000)">
                                            <g transform="translate(-950.000000, 0.000000)">
                                                <g transform="translate(950.000000, 0.000000)">
                                                    <path
                                                        d="M2329.58044,-732.909805 L3294.66463,-608.836163 C3018.10652,-208.944402 2934.07929,71.8618948 3042.58292,233.582726 C3136.98689,374.288498 3255.13325,471.945016 3255.13325,636.668858 C3255.13325,820.179655 3107.51302,903.798038 3059.64228,1128.51906 C3028.9047,1272.81133 3063.63816,1429.66837 3163.84265,1599.0902 L2141.66463,1599.0902 L2329.58044,-732.909805 Z"
                                                        transform="translate(2718.164626, 433.090195) rotate(179.000000) translate(-2718.164626, -433.090195) ">
                                                    </path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg> <svg class="right-deco" width="389px" height="1468px" viewBox="0 0 389 1468" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g transform="translate(-2171.000000, 0.000000)">
                                            <g transform="translate(-950.000000, 0.000000)">
                                                <g transform="translate(950.000000, 0.000000)">
                                                    <path
                                                        d="M2329.58044,-732.909805 L3294.66463,-608.836163 C3018.10652,-208.944402 2934.07929,71.8618948 3042.58292,233.582726 C3136.98689,374.288498 3255.13325,471.945016 3255.13325,636.668858 C3255.13325,820.179655 3107.51302,903.798038 3059.64228,1128.51906 C3028.9047,1272.81133 3063.63816,1429.66837 3163.84265,1599.0902 L2141.66463,1599.0902 L2329.58044,-732.909805 Z"
                                                        transform="translate(2718.164626, 433.090195) rotate(179.000000) translate(-2718.164626, -433.090195) ">
                                                    </path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg></div>
                            </div>
                            <div class="action">
                                <h4 class="use-text-title2">Looking For The Best?</h4><a class="btn secondary btn-large waves-effect" href="#">contact-us</a>
                            </div>
                            <footer class="footer">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-3 pa-4">
                                            <div class="logo"><img src="assets/images/logo.png" alt="logo">
                                                <!-- <h6 class="title">VS</h6> -->
                                            </div>
                                            <p class="body-2 show-md-up text-center">&copy; Ashweembroiderysolution 2020</p>
                                        </div>
                                        <div class="col-md-6 py-0 ps-6 pe-0">
                                            <ul class="show-sm-down collapsible">
                                                <li class="accordion-content">
                                                    <div class="collapsible-header">
                                                        <h6 class="title mb-4">Company</h6><i class="material-icons right arrow">expand_more</i>
                                                    </div>
                                                    <div class="collapsible-body">
                                                        <ul>
                                                            <li><a href="#team">Team</a></li>
                                                            <li><a href="#history">History</a></li>
                                                            <li><a href="#contact-us">Contact us</a></li>
                                                            <li><a href="#locations">Locations</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="accordion-content">
                                                    <div class="collapsible-header">
                                                        <h6 class="title mb-4">Resources</h6><i class="material-icons right arrow">expand_more</i>
                                                    </div>
                                                    <div class="collapsible-body">
                                                        <ul>
                                                            <li><a href="#resource">Resource</a></li>
                                                            <li><a href="#resource-name">Resource name</a></li>
                                                            <li><a href="#another-resource">Another resource</a></li>
                                                            <li><a href="#final-resource">Final resource</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="accordion-content">
                                                    <div class="collapsible-header">
                                                        <h6 class="title mb-4">Legal</h6><i class="material-icons right arrow">expand_more</i>
                                                    </div>
                                                    <div class="collapsible-body">
                                                        <ul>
                                                            <li><a href="#privacy-policy">Privacy policy</a></li>
                                                            <li><a href="#terms-of-use">Terms of use</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="row show-md-up justify-content-evenly">
                                                <div class="col-sm-3 pa-4 px-md-0 site-map-item">
                                                    <h6 class="title-nav mb-4">Company</h6>
                                                    <ul>
                                                        <li><a href="#team">Team</a></li>
                                                        <li><a href="#history">History</a></li>
                                                        <li><a href="#contact-us">Contact us</a></li>
                                                        <li><a href="#locations">Locations</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-3 pa-4 px-md-0 site-map-item">
                                                    <h6 class="title-nav mb-4">Resources</h6>
                                                    <ul>
                                                        <li><a href="#resource">Resource</a></li>
                                                        <li><a href="#resource-name">Resource name</a></li>
                                                        <li><a href="#another-resource">Another resource</a></li>
                                                        <li><a href="#final-resource">Final resource</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-3 pa-4 px-md-0 site-map-item">
                                                    <h6 class="title-nav mb-4">Legal</h6>
                                                    <ul>
                                                        <li><a href="#privacy-policy">Privacy policy</a></li>
                                                        <li><a href="#terms-of-use">Terms of use</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 pe-4 ps-0">
                                            <div class="socmed"><a class="btn-icon waves-effect"><span
                                                        class="ion-social-facebook icon"></span></a> <a class="btn-icon waves-effect"><span
                                                        class="ion-social-twitter icon"></span></a> <a class="btn-icon waves-effect"><span
                                                        class="ion-social-instagram icon"></span></a> <a class="btn-icon waves-effect"><span
                                                        class="ion-social-linkedin icon"></span></a></div>

                                        </div>
                                    </div>
                                    <p class="body-2 text-center show-sm-down">&copy; Ashweembroiderysolution 2020</p>
                                </div>
                            </footer>
                        </div>
                    </div>
                    <!-- ##### END fOOTER #####-->
                    <!-- ##### PAGE-NAV #####-->
                    <div class="hidden-sm-down">
                        <div class="page-nav" id="page_nav">
                            <nav class="section-nav">
                                <div class="scrollnav">
                                    <ul>
                                        <li style="top: 150px">
                                            <a class="tooltipped" href="#promotions" data-position="left" data-tooltip="promotions"></a>
                                        </li>
                                        <li style="top: 120px">
                                            <a class="tooltipped" href="#featured" data-position="left" data-tooltip="featured"></a>
                                        </li>
                                        <li style="top: 90px">
                                            <a class="tooltipped" href="#top" data-position="left" data-tooltip="top categories"></a>
                                        </li>
                                        <li style="top: 60px">
                                            <a class="tooltipped" href="#all" data-position="left" data-tooltip="all categories"></a>
                                        </li>

                                    </ul>
                                </div>
                            </nav>
                            <div class="scrollnav">
                                <a class="btn-floating btn-large primary tooltipped waves-effect waves-light" href="#home" data-position="left" data-tooltip="To Top">
                                    <div class="icon material-icons">arrow_upward</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Scripts-->

	<script src='js/okzoom.js'></script>
  <script>
    $(function(){
      $('#example').okzoom({
        width: 175,
        height: 175,
        border: "1px solid black",
        shadow: "0 0 5px #000"
      });
    });
  </script>
  <script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<script src="js/minicart.min.js"></script>

<script>
function AddToCart()
{
	var a=document.getElementById("price").value;
	var b=document.getElementById("productid").value;
 	var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtStatus").innerHTML = this.responseText;
        }
    };
    var url="addtocart.php?productid="+b+"&price="+a;
    xmlhttp.open("GET", url, true);
    xmlhttp.send();
}
</script>
    <script src="assets/js/movie-bundle.min.js"></script>
    <script src="assets/js/side-right.js"></script>
    <script src="js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
</body>
</html>