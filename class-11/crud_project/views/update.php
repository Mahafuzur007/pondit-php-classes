<?php

include_once './../vendor/autoload.php';

use Ecom\Controllers\ProductController;

$productController = new ProductController();
$productController->update($_POST);
