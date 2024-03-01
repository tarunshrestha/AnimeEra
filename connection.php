<?php
session_start();
$con=mysqli_connect("localhost","root","","ecommerce");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/ecommerce');
define('SITE_PATH','http://127.0.0.1/ecommerce/');

define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'admin/image/product/');
define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'admin/image/product/');

define('PRODUCT_MULTIPLE_IMAGE_SERVER_PATH',SERVER_PATH.'admin/image/product_images/');
define('PRODUCT_MULTIPLE_IMAGE_SITE_PATH',SITE_PATH.'admin/image/product_images/');

