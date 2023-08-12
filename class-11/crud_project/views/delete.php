<?php


include_once './../vendor/autoload.php';

use Ecom\Controllers\ProductController;

$productController = new ProductController;
$product = $productController->delete($_GET['id']);
?>