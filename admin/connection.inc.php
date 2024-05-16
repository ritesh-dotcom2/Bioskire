<?php
session_start();
$con=mysqli_connect("localhost","root","","bioskire");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/bioskire/');
define('SITE_PATH','http://localhost/bioskire/');

define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'media/product/');
define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'media/product/');

define('PRODUCT_MULTIPLE_IMAGE_SERVER_PATH',SERVER_PATH.'media/product_images/');
define('PRODUCT_MULTIPLE_IMAGE_SITE_PATH',SITE_PATH.'media/product_images/');

define('BANNER_SERVER_PATH',SERVER_PATH.'media/banner/');
define('BANNER_SITE_PATH',SITE_PATH.'media/banner/');
define('SHIPROKECT_TOKEN_EMAIL','gmail');
define('SHIPROKECT_TOKEN_PASSWORD','password');
?>