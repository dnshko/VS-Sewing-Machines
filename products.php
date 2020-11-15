<?php
include_once('include/header.php');
include_once('include/nav.php');
include_once('phplib/view.php');
$category_details=getcategorydeatilsbyid(base64_decode($_GET['type']));
?>
<!-- banner -->
	<div class="banner">
		
		<div class="">
			<div  class="w3l_banner_nav_right_banner3" 
			style="background:url(admin/Upload/Categories/<?php echo $category_details['category_image']; ?>) no-repeat 0px 0px;
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
<div class="w3ls_w3l_banner_nav_right_grid">
				<h3><?php echo $category_details['category_name']; ?></h3>
				<div class="w3ls_w3l_banner_nav_right_grid1">

					<?php viewproductbycategory($_GET['type']); ?>

					<div class="clearfix"> </div>
				</div>
				
			</div>
<?php
include_once('include/footer.php');
 ?>