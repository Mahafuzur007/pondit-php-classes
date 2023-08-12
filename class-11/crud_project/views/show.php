<?php


include_once './../vendor/autoload.php';

use Ecom\Controllers\ProductController;

$productController = new ProductController;
$product = $productController->show($_GET['id']);
?>

<a href="./index.php">List</a>
<h1>Title: <?= $product['title'] ?></h1>