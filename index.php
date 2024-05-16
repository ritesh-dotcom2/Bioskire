<?php
require ('top.php');

$resBanner = mysqli_query($con, "select * from banner where status='1' order by order_no asc");

?>
<div class="body__overlay"></div>
<div class="owl-carousel owl-theme pr">
    <div class="item">
        <img src="images/banner/banner1.png" alt="">
    </div>
    <div class="item">
        <img src="images/banner/banner2.png" alt="">
    </div>
    <div class="item">
        <img src="images/banner/banner3.png" alt="">
    </div>
</div>

<section class="top-sec pr">
    <div class="container">
        <div class="row g-4 py-5">
            <div class="col-lg-6">
                <div class="top-img" data-aos="fade-down" data-aos-duration="3000">
                    <img src="images/brand/temp.png" alt="">
                </div>
            </div>
            <div class="top-content" data-aos="fade-up" data-aos-duration="3000">
                <h6>🌿 About us</h6>
                <h2>Unveil Your Natural Beauty: Discover <span>BIOSKIRE</span></h2>
                <p class="text">At BIOSKIRE, we're more than just a skincare and haircare brand – we're a celebration of
                    natural beauty, sustainability, and innovation. Founded with a passion for creating products that
                    nourish both body and soul, we believe in harnessing the power of nature to enhance your everyday
                    self-care routine.<br><br>When you choose BIOSKIRE, you're not just choosing a skincare or haircare
                    product – you're choosing a lifestyle. A lifestyle that prioritizes self-care, sustainability, and
                    kindness to both yourself and the world around you. Join us on our journey to healthier, happier
                    skin and hair, and experience the beauty of nature-inspired self-care like never before.</p>
                <div class="top-btn">
                    <a href="contact.php" class="top-button">Contact Now</a>
                </div>
            </div>
        </div>
    </div>
</section>


<style>
    .rounded-pill {
        background-color: green;
        color: white;
        font-size: 18px;
    }
</style>

<div class="pa-medicine spacer-top spacer-bottom pr">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="pa-medicine-box" data-aos="fade-up" data-aos-duration="3000">
                    <a href="categories.php?id=7&sub_categories=8">
                        <img src="images/brand/hair-care.png" alt="image" class="img-fluid" />
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="pa-medicine-box" data-aos="fade-up" data-aos-duration="3000">
                    <a href="categories.php?id=7&sub_categories=9">
                        <img src="images/brand/face-care.png" alt="image" class="img-fluid" />
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="3000">
                <div class="pa-medicine-box">
                    <a href="categories.php?id=7&sub_categories=7">
                        <img src="images/brand/body-care.png" alt="image" class="img-fluid" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Product Section - Start -->
<section class="pr">
    <div class="container">
        <div class="row">
            <div class="col-xs-12" style="padding-top: 30px;">
                <div class="section__title--2 text-center">
                    <h2 class="title__line">Our Products</h2>
                </div>
            </div>
        </div>
        <div class="row g-4 py-5" data-aos="fade-up" data-aos-duration="3000">
            <?php
            $get_product = get_product($con, 4);
            foreach ($get_product as $list) {
                ?>
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
                                    <img src="<?php echo PRODUCT_IMAGE_SITE_PATH . $list['image'] ?>" alt="product images">
                                </a>
                            </div>

                        </div>
                        <div class="product-info">
                            <!-- <h6 class="product-category"><a
                                    href="product.php?id=<?php echo $list['id'] ?>"><?php echo $list['meta_title'] ?></a>
                                </h6> -->
                            <h6 class="product-title text-truncate">
                                <a href="product.php?id=<?php echo $list['id'] ?>"><?php echo $list['name'] ?></a>
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
                                    <a href="javascript:void(0)" onclick="manage_cart('<?php echo $list['id'] ?>','add')"><i
                                            class="icon-handbag icons"></i> Add To Cart</a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- Product Section - End -->

<!-- banner section start -->
<div class="banner-sec2 pr">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="left" data-aos="fade-down" data-aos-duration="3000">
                    <img src="images/banner/left.png" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right" data-aos="fade-up" data-aos-duration="3000">
                    <img src="images/banner/right.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner section end -->

<!-- why choose section start -->
<section class="we-offer-area text-center pr">
    <div class="container" data-aos="fade-up" data-aos-duration="3000">
        <div class="row">
            <div class="col-md-12" style="padding-top: 30px;">
                <div class="site-heading text-center">
                    <h2>Why Choose <span>Bioskire</span>? </h2>
                    <h4> Your Daily Routine and Lifestyle</h4>
                </div>
            </div>
        </div>
        <div class="row our-offer-items less-carousel">
            <div class="col-md-3 col-sm-6 equal-height">
                <div class="item" data-aos="fade-down" data-aos-duration="3000">
                    <img src="images/banner/ic1.png" alt="">
                    <h4>Integrity</h4>
                    <p>At Bioskire, We believe in transparency and honesty in everything we do, from sourcing
                        ingredients for our products to communicating with our customers.</p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 equal-height">
                <div class="item" data-aos="fade-up" data-aos-duration="3000">
                    <img src="images/banner/ic2.png" alt="">
                    <h4>Quality</h4>
                    <p>At Bioskire, We're committed to excellence and craftsmanship, ensuring that every product meets
                        the highest standards of quality and efficacy.</p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 equal-height">
                <div class="item" data-aos="fade-up" data-aos-duration="3000">
                    <img src="images/banner/ic3.png" alt="">
                    <h4>Sustainability</h4>
                    <p>We're dedicated to minimizing our environmental footprint and promoting sustainable practices
                        throughout our supply chain.</p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 equal-height">
                <div class="item" data-aos="fade-down" data-aos-duration="3000">
                    <img src="images/banner/ic4.png" alt="">
                    <h4>Innovation</h4>
                    <p>We're constantly pushing the boundaries of our products, harnessing the latest advancements and
                        natural discoveries to create products that deliver real results.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- why choose section end -->

<div class="vid-sec pr">
    <div class="container">
        <div class="headline">
            <h2> Explore our full range of products and experience the transformative power of nature-inspired beauty.
            </h2>
        </div>
        <div class="row">
            <div class="video">
                <video width="100%" autoplay loop muted class="product-video">
                    <source src="images/banner/p-video.MP4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>
</div>
</div>

<!-- daily routine section start -->
<section class="pr">
    <div class="container">
        <div class="row">
            <div class="col-xs-12" style="padding-top: 30px;">
                <div class="section__title--2 text-center">
                    <h2 class="title__line" data-aos="fade-up" data-aos-duration="3000">Let's Create Your Daily Routine!
                    </h2>
                </div>
            </div>
        </div>
        <div class="row g-4 py-5" data-aos="fade-up" data-aos-duration="3000">
            <div class="col-lg-6">
                <div class="routine-content" data-aos="fade-up" data-aos-duration="3000">
                    <h3>Morning Routine:</h3>
                    <p>
                        <br>✔ <span>Waterless Face Wash:</span> Start your day by cleansing your face with our
                        convenient waterless face wash. Apply a small amount to dry skin, massage gently, and then wipe
                        away with a clean cloth or tissue. No need for water!
                        <br>✔ <span>Vitamin C Face Serum:</span> Follow up with our vitamin C face serum to brighten and
                        protect your skin. Apply a few drops to clean, dry skin and gently massage in upward motions
                        until fully absorbed.
                        <br>✔ <span>Mint Body Wash:</span> Refresh and invigorate your body with our mint body wash.
                        Lather up in the shower and indulge in the cooling sensation of mint as you cleanse away
                        impurities and start your day feeling energized.
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="routine-img" data-aos="fade-up" data-aos-duration="3000">
                    <img src="images/others/routine1.png" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="routine-img" data-aos="fade-up" data-aos-duration="3000">
                    <img src="images/others/routine2.png" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="routine-content pt-20" data-aos="fade-up" data-aos-duration="3000">
                    <h3>Evening Routine:</h3>
                    <p>
                        <br>✔ <span>Charcoal Face Wash:</span> Purify your skin with our detoxifying charcoal face wash.
                        Massage a small amount onto damp skin, working into a lather, then rinse thoroughly with
                        lukewarm water. Say goodbye to impurities and hello to clean, refreshed skin.
                        <br>✔ <span>Charcoal Body Wash:</span> Wind down after a long day with our detoxifying charcoal
                        body wash. Enjoy a luxurious shower experience as activated charcoal purifies and refreshes your
                        skin, leaving you feeling clean and rejuvenated.
                        <br>✔ <span>Anti-Dandruff Shampoo:</span> Treat your scalp to our anti-dandruff shampoo to
                        banish flakes and soothe irritation. Massage into wet hair, lather well, and rinse thoroughly
                        for a refreshed scalp and flake-free hair.
                        <br>✔ <span>Anti-Hairfall Shampoo:</span> Strengthen and nourish your hair with our
                        anti-hairfall shampoo. Gently cleanse your scalp and strands, massaging in circular motions to
                        promote circulation and stimulate hair growth.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- daily routine section end -->


<!-- bottom detailed section start -->
<section class="bottom-sec pr">
    <div class="container">
        <div class="row g-4 py-5" data-aos="fade-up" data-aos-duration="3000">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                <div class="bottom-box" data-aos="fade-up" data-aos-duration="3000">
                    <img src="images/icons/vegan.png" alt="" width="50%">
                    <h5>Vegan</h5>
                    <p>Our entire collection is vegan and cruelty free.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                <div class="bottom-box" data-aos="fade-up" data-aos-duration="3000">
                    <img src="images/icons/natural.png" alt="" width="50%">
                    <h5>Natural</h5>
                    <p>We only use the finest natural ingredients.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                <div class="bottom-box" data-aos="fade-up" data-aos-duration="3000">
                    <img src="images/icons/recycle.png" alt="" width="50%">
                    <h5>Recyclable</h5>
                    <p>All packaging is recyclable and eco conscious.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                <div class="bottom-box" data-aos="fade-up" data-aos-duration="3000">
                    <img src="images/icons/eco.png" alt="" width="50%">
                    <h5>Eco-Friendly</h5>
                    <p>We're committed to sustainability at every step.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- bottom detailed section end -->

<input type="hidden" id="qty" value="1" />
<?php require ('footer.php') ?>