<?php
include_once('include/header.php');
include_once('include/nav.php');
include_once('phplib/view.php');
?>
<!-- banner -->
	<div class="banner">
		<div class="w3l_banner_nav_left">
			<nav class="navbar nav_bottom">
			 <!-- Brand and toggle get grouped for better mobile display -->
			  <div class="navbar-header nav_2">
				  <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
			   </div> 
			   <!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav nav_1">
						<?php
							viewcategories();
						?>
					</ul>
				</div><!-- /.navbar-collapse -->
			</nav>
		</div>
		<div class="w3l_banner_nav_right">
			<div  class="w3l_banner_nav_right_banner3" 
			style="background:url(admin/Upload/Collection/Banner/fbc795788764a049be2864dc0cc04d37.jpg) no-repeat 0px 0px;
						background-size:cover;
	                    background-size:cover;
	                    -moz-background-size:cover;
	                   -o-background-size:cover;
	                   -ms-background-size:cover;">
				
			</div>
			<div class="w3l_banner_nav_right_banner3_btm">
				<div class="clearfix"> </div>
			</div>
			
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->
<div class="w3ls_w3l_banner_nav_right_grid">
				<h3>All Products</h3>
				<div class="w3ls_w3l_banner_nav_right_grid1">

					<?php ShowAllProduct(); ?>

					<div class="clearfix"> </div>
				</div>
				
			</div>
<?php
include_once('include/footer.php');
 ?>