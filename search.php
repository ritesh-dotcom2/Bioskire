<?php
require ('top.php');
$str = mysqli_real_escape_string($con, $_GET['str']);
if ($str != '') {
	$get_product = get_product($con, '', '', '', $str);
} else {
	?>
	<script>
		window.location.href = 'index.php';
	</script>
	<?php
}
?>
<div class="body__overlay"></div>

<!-- Start Bradcaump area -->
<div class="hero-banner">
	<img src="images/banner/product-banner.png" alt="">
</div>
<!-- End Bradcaump area -->
<!-- Start Product Grid -->
<section class="htc__product__grid bg__white ptb--100">
	<div class="container">
		<div class="row">
			<?php if (count($get_product) > 0) { ?>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="htc__product__rightidebar">
						<!-- Start Product View -->
						<div class="row">
							<div class="shop__grid__view__wrap">
								<div role="tabpanel" id="grid-view"
									class="single-grid-view tab-pane fade in active clearfix">
									<?php
									foreach ($get_product as $list) {
										?>
										<!-- Start Single Category -->
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
													<!-- <h6 class="product-category"><a
									href="product.php?id=<?php echo $list['id'] ?>"><?php echo $list['meta_title'] ?></a>
								</h6> -->
													<h6 class="product-title text-truncate">
														<a
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
														<!-- <div class="fr__hover__info">
									<ul class="product__action">
										<li><a href="javascript:void(0)"
												onclick="wishlist_manage('<?php echo $list['id'] ?>','add')"><i
													class="icon-heart icons"></i></a></li>
										<li><a href="javascript:void(0)"
												onclick="manage_cart('<?php echo $list['id'] ?>','add')"><i
													class="icon-handbag icons"></i></a></li>
									</ul>
								</div> -->
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
			<?php } else {
				echo "Data not found";
			} ?>

		</div>
	</div>
</section>
<!-- End Product Grid -->
<!-- End Banner Area -->
<input type="hidden" id="qty" value="1" />
<?php require ('footer.php') ?>