<?php
require ('top.php');
?>

<div class="hero-banner">
    <img src="images/banner/cart-banner.png" alt="">
</div>
<!-- End Bradcaump area -->
<!-- cart-main-area start -->
<div class="cart-main-area ptb--120 pr">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="buttons-cart--inner">
                    <div class="shopping-head">
                        <h2><b>Shopping Cart</b></h2>
                    </div>
                    <div class="shop">
                        <a href="index.php" class="button-24">Continue Shopping</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) { ?>
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <form action="#">
                        <div class="table-content table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="product-details">Product</th>
                                        <th class="product-price">Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <!-- <th class="product-subtotal">Total</th> -->
                                        <th class="product-remove">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($_SESSION['cart'] as $key => $val) {
                                        $productArr = get_product($con, '', '', $key);
                                        $pname = $productArr[0]['name'];
                                        $mrp = $productArr[0]['mrp'];
                                        $price = $productArr[0]['price'];
                                        $image = $productArr[0]['image'];
                                        $qty = $val['qty'];
                                        ?>
                                        <tr>
                                            <td class="product-details">
                                                <div class="product-thumbnail"><a href="#"><img
                                                            src="<?php echo PRODUCT_IMAGE_SITE_PATH . $image ?>"
                                                            alt="<?php echo $pname ?>" /></a></div>
                                                <div class="product-name">
                                                    <p><?php echo $pname ?></p>
                                                </div>
                                            </td>
                                            <td class="product-price"><span class="amount">Rs.<?php echo $price ?></span></td>
                                            <td class="product-quantity">
                                                <input type="number" id="<?php echo $key ?>qty" value="<?php echo $qty ?>" />
                                                <br /><a href="javascript:void(0)"
                                                    onclick="manage_cart('<?php echo $key ?>','update')">update</a>
                                            </td>
                                            <!-- <td class="product-subtotal">Rs.<?php echo $qty * $price ?></td> -->
                                            <td class="product-remove"><a href="javascript:void(0)"
                                                    onclick="manage_cart('<?php echo $key ?>','remove')"><i
                                                        class="icon-trash icons"></i></a></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            <?php } ?>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                    $total = 0;
                    foreach ($_SESSION['cart'] as $key => $val) {
                        $productArr = get_product($con, '', '', $key);
                        $price = $productArr[0]['price'];
                        $qty = $val['qty'];
                        $total += $qty * $price;
                    }
                    ?>
                    <div class="cart-total">
                        <h2><b>Cart Totals</b></h2>
                        <table>
                            <tr>
                                <td style=" font-size: 18px; font-weight: 600;">Total :</td>
                                <td style="padding-left: 10px;font-size: 16px; font-weight: 500;"> Rs. <?php echo $total; ?>
                                </td>
                            </tr>
                        </table>
                        <div class="buttons-cart--inner">
                            <div class="shop checkout--btn">
                                <a href="checkout.php" class="button-24 buy_now">Checkout</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<style>
    body {
        background: #F0F2EA;
    }
</style>
<?php require ('footer.php') ?>