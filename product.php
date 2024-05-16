<?php
ob_start();
require ('top.php');
if (isset($_GET['id'])) {
	$product_id = mysqli_real_escape_string($con, $_GET['id']);
	if ($product_id > 0) {
		$get_product = get_product($con, '', '', $product_id);
	} else {
		?>
		<script>
			window.location.href = 'index.php';
		</script>
		<?php
	}

	$resMultipleImages = mysqli_query($con, "select product_images from product_images where product_id='$product_id'");
	$multipleImages = [];
	if (mysqli_num_rows($resMultipleImages) > 0) {
		while ($rowMultipleImages = mysqli_fetch_assoc($resMultipleImages)) {
			$multipleImages[] = $rowMultipleImages['product_images'];
		}
	}
} else {
	?>
	<script>
		window.location.href = 'index.php';
	</script>
	<?php
}
?>

<!-- Start Bradcaump area -->
<div class="hero-banner">
	<img src="images/banner/product-banner.png" alt="">
</div>
<!-- End Bradcaump area -->
<!-- Start Product Details Area -->
<section class="htc__product__details bg__white ptb--30">
	<!-- Start Product Details Top -->
	<div class="htc__product__details__top">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
					<div class="htc__product__details__tab__content">
						<!-- Start Product Big Images -->
						<div class="product__big__images">
							<div class="portfolio-full-image tab-content">
								<div role="tabpanel" class="tab-pane fade in active imageZoom" id="img-tab-1">
									<img width=""
										data-origin="<?php echo PRODUCT_IMAGE_SITE_PATH . $get_product['0']['image'] ?>"
										src="<?php echo PRODUCT_IMAGE_SITE_PATH . $get_product['0']['image'] ?>">
								</div>
								<?php if (isset($multipleImages[0])) { ?>
									<div id="multiple_images">
										<?php
										foreach ($multipleImages as $list) {
											echo "<img src='" . PRODUCT_MULTIPLE_IMAGE_SITE_PATH . $list . "' onclick=showMultipleImage('" . PRODUCT_MULTIPLE_IMAGE_SITE_PATH . $list . "')>";
										}
										?>
									</div>
								<?php } ?>
							</div>
						</div>
						<!-- End Product Big Images -->
					</div>
				</div>
				<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 smt-40 xmt-40 product_detl">
					<div class="ht__product__dtl mt--20">
						<h1>
							<?php echo $get_product['0']['name'] ?>
						</h1>
						<ul class="pro__prize">
							<li class="old__prize"><del>Rs.
									<?php echo $get_product['0']['mrp'] ?><del></li>
							<li>Rs.
								<?php echo $get_product['0']['price'] ?>
							</li>
						</ul>
						<p>Tax included.</p>
						<p class="pro__info">Weight :
							<?php echo $get_product['0']['weight'] ?>
						</p>
						<p class="pro__info">
							<?php echo $get_product['0']['short_desc'] ?>
						</p>
						<div class="ht__pro__desc">
							<div class="sin__desc">
								<?php
								$productSoldQtyByProductId = productSoldQtyByProductId($con, $get_product['0']['id']);

								$pending_qty = $get_product['0']['qty'] - $productSoldQtyByProductId;

								$cart_show = 'yes';
								if ($get_product['0']['qty'] > $productSoldQtyByProductId) {
									$stock = 'In Stock';
								} else {
									$stock = 'Not in Stock';
									$cart_show = '';
								}
								?>
								<p><span>Availability:</span>
									<?php echo $stock ?>
								</p>
							</div>
							<div class="sin__desc sin_desc2 ptb--20">
								<?php
								if ($cart_show != '') {
									?>
									<p><span>Qty:</span>
										<select id="qty">
											<?php
											for ($i = 1; $i <= $pending_qty; $i++) {
												echo " <option>$i</option>";
											}
											?>
										</select>
									</p>
								<?php } ?>
							</div>
						</div>
					</div>
					<div class="buy-btn">
						<?php
						if ($cart_show != '') {
							?>
							<a class="button-24 " href="javascript:void(0)"
								onclick="manage_cart('<?php echo $get_product['0']['id'] ?>','add')">Add To Cart</a>
							<a class="button-24 buy_now" href="javascript:void(0)"
								onclick="manage_cart('<?php echo $get_product['0']['id'] ?>','add','yes')">Shop Now</a>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<!-- End Product Details Top -->
</section>
<!-- End Product Details Area -->

<!-- Start Product Description -->
<section class="htc__produc__decription bg__white">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<!-- Start List And Grid View -->
				<ul class="pro__details__tab" role="tablist">
					<li role="presentation" class="description active"><a href="#description" role="tab"
							data-toggle="tab">Description</a></li>
				</ul>
				<!-- End List And Grid View -->
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="ht__pro__details__content">
					<!-- Start Single Content -->
					<div role="tabpanel" id="description" class="pro__single__content tab-pane fade in active">
						<div class="pro__tab__content__inner">
							<?php echo $get_product['0']['description'] ?>
						</div>
					</div>
					<!-- End Single Content -->
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Product Description -->

<?php
//unset($_COOKIE['recently_viewed']);
if (isset($_COOKIE['recently_viewed'])) {
	$arrRecentView = unserialize($_COOKIE['recently_viewed']);
	$countRecentView = count($arrRecentView);
	$countStartRecentView = $countRecentView - 4;
	if ($countStartRecentView > 4) {
		$arrRecentView = array_slice($arrRecentView, $countStartRecentView, 4);
	}
	$recentViewId = implode(",", $arrRecentView);
	$res = mysqli_query($con, "select * from product where id IN ($recentViewId) and status=1");

	?>
	<section class="htc__produc__decription bg__white">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h3 style="font-size: 20px;font-weight: bold;">Recently Viewed</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="ht__pro__details__content">
						<div class="row">
							<?php while ($list = mysqli_fetch_assoc($res)) { ?>
								<div class="col-md-3">
									<div class="product-single-card">
										<div class="product-top-area">

											<div class="product-img">
												<div class="first-view">
													<a href="product.php?id=<?php echo $list['id'] ?>">
														<img src="<?php echo PRODUCT_IMAGE_SITE_PATH . $list['image'] ?>"
															alt="product images">
													</a>
												</div>
												<a href="product.php?id=<?php echo $list['id'] ?>">
													<img src="<?php echo PRODUCT_IMAGE_SITE_PATH . $list['image'] ?>"
														alt="product images">
												</a>
											</div>

										</div>
										<div class="product-info">
											<h6 class="product-title text-truncate"><a
													href="product.php?id=<?php echo $list['id'] ?>"><?php echo $list['name'] ?></a>
											</h6>
											<div class="d-flex flex-wrap align-items-center py-2">
												<div class="old">
													<div class="final_price">
														<div class="product-price">
															Rs. <?php echo $list['price'] ?>
														</div>
													</div>
												</div>
												<div class="fr__hover__info">
													<ul class="product__action">
														<li><a href="javascript:void(0)"
																onclick="wishlist_manage('<?php echo $list['id'] ?>','add')"><i
																	class="icon-heart icons"></i></a></li>
														<li><a href="javascript:void(0)"
																onclick="manage_cart('<?php echo $list['id'] ?>','add')"><i
																	class="icon-handbag icons"></i></a></li>
													</ul>
												</div>
												<button class="buttonnew">
													<a href="javascript:void(0)"
														onclick="manage_cart('<?php echo $list['id'] ?>','add')"><i
															class="icon-handbag icons"></i> Add To Cart</a>
												</button>
											</div>
										</div>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php
	$arrRec = unserialize($_COOKIE['recently_viewed']);
	if (($key = array_search($product_id, $arrRec)) !== false) {
		unset($arrRec[$key]);
	}
	$arrRec[] = $product_id;
} else {
	$arrRec[] = $product_id;
}
setcookie('recently_viewed', serialize($arrRec), time() + 60 * 60 * 24 * 365);
?>

<script>
	function showMultipleImage(im) {
		jQuery('#img-tab-1').html("<img src='" + im + "' data-origin='" + im + "'/>");
		jQuery('.imageZoom').imgZoom();
	}
</script>
<?php
require ('footer.php');
ob_flush();
?>