<?php
include_once('include/header.php');
include_once('include/nav.php');
include_once('phplib/view.php');
include_once('phplib/controler.php');
if(!isset($_SESSION['UserEmail']) && !isset($_SESSION['UserFullName']))
{
	header("location:logout.php");
}
?>
<div class="container inner" style="margin-top: 50px;">
	
<div style="margin-top: 50px;">&nbsp;</div>

<div class="col-sm-8 col-sm-offset-2">
<?php 
if(isset($_POST['btnSubmit']))
createreview($_POST['txtProductId'],$_POST['txtTitle'],$_POST['txtComment'],$_POST['txtRate']);
 ?>
<form action="add_review.php?productid=<?php echo $_GET['productid']; ?>" method="post"> 
	<div class="row">
		<div class="form-group col-sm-12">
  			<label for="usr">Title:</label>
  			<input type="text" class="form-control" name="txtTitle" required id="usr">
		</div>
		<div class="form-group col-sm-12">
  			<label for="usr">Rating:</label>
  			<input type="text" id="rate" class="kv-uni-star rating-loading" name="txtRate"   value="3" data-size="xs" title="" >
		</div>
		<div class="form-group col-sm-12">
  			<label for="usr">Comment:</label>
  			<textarea class="form-control" required name="txtComment"></textarea>
		</div>
		<input type="hidden" name="txtProductId" value="<?php echo base64_decode($_GET['productid']); ?>">
		<div class="form-group col-sm-12">
  			<button class="btn btn-success" name="btnSubmit"> Comment Now</button>
		</div>
	</div>
</form>	
</div>


<div style="margin-bottom: 300px;">&nbsp;</div>

</div>
<script type="text/javascript">
 $(document).on('ready', function () {
        $('.kv-gly-star').rating({
            containerClass: 'is-star'
        });
        $('.kv-gly-heart').rating({
            containerClass: 'is-heart',
            defaultCaption: '{rating} hearts',
            starCaptions: function (rating) {
                return rating == 1 ? 'One heart' : rating + ' hearts';
            },
            filledStar: '<i class="glyphicon glyphicon-heart"></i>',
            emptyStar: '<i class="glyphicon glyphicon-heart-empty"></i>'
        });
        $('.kv-fa').rating({
            theme: 'krajee-fa',
            filledStar: '<i class="fa fa-star"></i>',
            emptyStar: '<i class="fa fa-star-o"></i>'
        });
        $('.kv-fa-heart').rating({
            defaultCaption: '{rating} hearts',
            starCaptions: function (rating) {
                return rating == 1 ? 'One heart' : rating + ' hearts';
            },
            theme: 'krajee-fa',
            filledStar: '<i class="fa fa-heart"></i>',
            emptyStar: '<i class="fa fa-heart-o"></i>'
        });
        $('.kv-uni-star').rating({
            theme: 'krajee-uni',
            filledStar: '&#x2605;',
            emptyStar: '&#x2606;'
        });
        $('.kv-uni-rook').rating({
            theme: 'krajee-uni',
            defaultCaption: '{rating} rooks',
            starCaptions: function (rating) {
                return rating == 1 ? 'One rook' : rating + ' rooks';
            },
            filledStar: '&#9820;',
            emptyStar: '&#9814;'
        });
        $('.kv-svg').rating({
            theme: 'krajee-svg',
            filledStar: '<span class="krajee-icon krajee-icon-star"></span>',
            emptyStar: '<span class="krajee-icon krajee-icon-star"></span>'
        });
        $('.kv-svg-heart').rating({
            theme: 'krajee-svg',
            filledStar: '<span class="krajee-icon krajee-icon-heart"></span>',
            emptyStar: '<span class="krajee-icon krajee-icon-heart"></span>',
            defaultCaption: '{rating} hearts',
            starCaptions: function (rating) {
                return rating == 1 ? 'One heart' : rating + ' hearts';
            },
            containerClass: 'is-heart'
        });

        $('.rating,.kv-gly-star,.kv-gly-heart,.kv-uni-star,.kv-uni-rook,.kv-fa,.kv-fa-heart,.kv-svg,.kv-svg-heart').on(
                'change', function () {
                    console.log('Rating selected: ' + $(this).val());
                });
    });
</script>


<?php
include_once('include/footer.php');
?>