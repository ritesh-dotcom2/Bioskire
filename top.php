<?php
require ('connection.inc.php');
require ('functions.inc.php');
require ('add_to_cart.inc.php');
$wishlist_count = 0;
$cat_res = mysqli_query($con, "select * from categories where status=1 order by categories asc");
$cat_arr = array();
while ($row = mysqli_fetch_assoc($cat_res)) {
	$cat_arr[] = $row;
}

$obj = new add_to_cart();
$totalProduct = $obj->totalProduct();

if (isset($_SESSION['USER_LOGIN'])) {
	$uid = $_SESSION['USER_ID'];

	if (isset($_GET['wishlist_id'])) {
		$wid = get_safe_value($con, $_GET['wishlist_id']);
		mysqli_query($con, "delete from wishlist where id='$wid' and user_id='$uid'");
	}

	$wishlist_count = mysqli_num_rows(mysqli_query($con, "select product.name,product.image,product.price,product.mrp,wishlist.id from product,wishlist where wishlist.product_id=product.id and wishlist.user_id='$uid'"));
}

$script_name = $_SERVER['SCRIPT_NAME'];
$script_name_arr = explode('/', $script_name);
$mypage = $script_name_arr[count($script_name_arr) - 1];

$meta_title = "Bioskire";
$meta_desc = "Bioskire";
$meta_keyword = "Bioskire";
$meta_url = SITE_PATH;
$meta_image = "";
if ($mypage == 'product.php') {
	$product_id = get_safe_value($con, $_GET['id']);
	$product_meta = mysqli_fetch_assoc(mysqli_query($con, "select * from product where id='$product_id'"));
	$meta_title = $product_meta['meta_title'];
	$meta_desc = $product_meta['meta_desc'];
	$meta_keyword = $product_meta['meta_keyword'];
	$meta_url = SITE_PATH . "product.php?id=" . $product_id;
	$meta_image = PRODUCT_IMAGE_SITE_PATH . $product_meta['image'];
}
if ($mypage == 'contact.php') {
	$meta_title = 'Contact Us';
}

?>
<!doctype html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>
		<?php echo $meta_title ?>
	</title>
	<meta name="description" content="<?php echo $meta_desc ?>">
	<meta name="keywords" content="<?php echo $meta_keyword ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:title" content="<?php echo $meta_title ?>" />
	<!-- <meta property="og:image" content="<?php echo $meta_image ?>" /> -->
	<meta property="og:url" content="<?php echo $meta_url ?>" />
	<meta property="og:site_name" content="<?php echo SITE_PATH ?>" />

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/core.css">
	<link rel="stylesheet" href="css/shortcode/shortcodes.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/custom.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
	<link rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
	<script src="js/vendor/modernizr-3.5.0.min.js"></script>
	<script src="https://kit.fontawesome.com/22481191b9.js" crossorigin="anonymous"></script>
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="icon" type="image/x-icon" href="images/banner/npic3.webp">


	<style>
		.htc__shopping__cart a span.htc__wishlist {
			background: #c43b68;
			border-radius: 100%;
			color: #fff;
			font-size: 9px;
			height: 17px;
			line-height: 19px;
			position: absolute;
			right: 18px;
			text-align: center;
			top: -4px;
			width: 17px;
			margin-right: 15px;
		}

		/* .logo a img{
			width: 230px;
		} */
		@media(max-width:992px) {
			.logo a img {
				width: 190px;
			}
		}

		.logo {
			width: 100px;
		}
	</style>
</head>

<body>
	<div class="top-bar">
		<p>Join the Journey to Healthy, Glowing Skin!</p>
	</div>
	<!-- Body main wrapper start -->
	<div class="wrapper">
		<header id="htc__header" class="htc__header__area header--one">
			<div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
				<div class="container">
					<div class="row">
						<div class="menumenu__container clearfix">
							<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
								<?php
								$class = "mr15";
								if (isset($_SESSION['USER_LOGIN'])) {
									$class = "";
								}
								?>
								<div class="header__search search search__open <?php echo $class ?>">
									<a href="#"><i class="icon-magnifier icons"></i></a>
								</div>
								<div class="logo">
									<a href="index.php"><img src="images/logo/logo2.png"
											alt="logo images"></a>
								</div>
							</div>
							<div class="col-lg-8 col-md-7 col-sm-1 col-xs-1">
								<div class="row mid-box">
									<div class="col-lg-12 text-center">
										<div class="logo-box">
											<a href="index.php"><img src="images/logo/logo2.png" width="120"
													alt="logo images"></a>
										</div>
									</div>
									<div class="col-lg-12">
										<nav class="main__menu__nav hidden-xs hidden-sm">
											<ul class="main__menu">
												<li class="drop"><a href="index.php">Home</a></li>
												<li><a href="about.php">About Us</a></li>
												<?php
												foreach ($cat_arr as $list) {
													?>
													<li class="drop"><a href="categories.php?id=<?php echo $list['id'] ?>">
															<?php echo $list['categories'] ?>
														</a>
														<?php
														$cat_id = $list['id'];
														$sub_cat_res = mysqli_query($con, "select * from sub_categories where status='1' and categories_id='$cat_id'");
														if (mysqli_num_rows($sub_cat_res) > 0) {
															?>

															<ul class="dropdown">
																<?php
																while ($sub_cat_rows = mysqli_fetch_assoc($sub_cat_res)) {
																	echo '<li><a href="categories.php?id=' . $list['id'] . '&sub_categories=' . $sub_cat_rows['id'] . '">' . $sub_cat_rows['sub_categories'] . '</a></li>
													';
																}
																?>
															</ul>
														<?php } ?>
													</li>
													<?php
												}
												?>
												<li><a href="contact.php">contact Us</a></li>
											</ul>
										</nav>
									</div>
								</div>

								<div class="mobile-menu clearfix visible-xs visible-sm">
									<nav id="mobile_dropdown">
										<ul>
											<li><a href="index.php">Home</a></li>
											<?php
											foreach ($cat_arr as $list) {
												?>
												<li class="drop"><a href="categories.php?id=<?php echo $list['id'] ?>">
														<?php echo $list['categories'] ?>
													</a>
													<?php
													$cat_id = $list['id'];
													$sub_cat_res = mysqli_query($con, "select * from sub_categories where status='1' and categories_id='$cat_id'");
													if (mysqli_num_rows($sub_cat_res) > 0) {
														?>

														<ul class="dropdown">
															<?php
															while ($sub_cat_rows = mysqli_fetch_assoc($sub_cat_res)) {
																echo '<li><a href="categories.php?id=' . $list['id'] . '&sub_categories=' . $sub_cat_rows['id'] . '">' . $sub_cat_rows['sub_categories'] . '</a></li>
													';
															}
															?>
														</ul>
													<?php } ?>
												</li>
												<?php
											}
											?>
											<!-- <li class="drop">
												<a href="">Product Catalogue</a>
												<ul class="dropdown">
													<li><a href="images/ca/human.pdf">Human Division Catalogue</a></li>
													<li><a href="images/ca/veterinary.pdf">Veterinary Division
															Catalogue</a></li>
												</ul>
											</li> -->
											<li><a href="about.php">About Us</a></li>
											<li><a href="contact.php">contact Us</a></li>
										</ul>
									</nav>
								</div>
							</div>
							<div class="col-lg-2 col-md-3 col-sm-5 col-xs-5 phone-right">
								<div class="header__right">


									<div class="header__account">
										<?php if (isset($_SESSION['USER_LOGIN'])) { ?>
											<ul class="navbar-nav"> <!-- Added navbar-nav class -->
												<li class="nav-item dropdown">
													<!-- Changed drop to nav-item and added dropdown class -->
													<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
														role="button" data-toggle="dropdown" aria-haspopup="true"
														aria-expanded="false">
														<i class="icon-user icons"></i>
													</a>
													<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
														<li><a class="dropdown-item" href="my_order.php">Order</a></li>
														<li><a class="dropdown-item" href="profile.php">Profile</a></li>
														<li><a class="dropdown-item" href="logout.php">Logout</a></li>
													</ul>
												</li>
											</ul>
										<?php } else { ?>
											<a href="login.php" class="mr15"><i class="icon-user icons"></i></a>
										<?php } ?>
									</div>

									<div class="htc__shopping__cart">
										<?php
										if (isset($_SESSION['USER_ID'])) {
											?>
											<!-- <a href="wishlist.php" class="mr15"><i class="icon-heart icons"></i></a>
											<a href="wishlist.php"><span class="htc__wishlist">
													<?php echo $wishlist_count ?>
												</span></a> -->
										<?php } ?>
										<a href="cart.php"><i class="icon-handbag icons"></i></a>
										<a href="cart.php"><span class="htc__qua">
												<?php echo $totalProduct ?>
											</span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="mobile-menu-area"></div>
				</div>
			</div>
		</header>
		<div class="body__overlay"></div>
		<div class="offset__wrapper">
			<div class="search__area">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="search__inner">
								<form action="search.php" method="get">
									<input placeholder="Search here... " type="text" name="str">
									<button type="submit"></button>
								</form>
								<div class="search__close__btn">
									<span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>