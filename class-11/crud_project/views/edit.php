<?php


include_once './../vendor/autoload.php';

use Ecom\Controllers\ProductController;

$productController = new ProductController;
$product = $productController->show($_GET['id']);
?>


<a href="./index.php">List</a>


<div style="width: 500px; margin:0 auto;"></div>
<form action="./update.php" method="POST">
    <input type="hidden" name="id" value="<?= $product['id'] ?>">
    <input name="title" value="<?= $product['title'] ?>" placeholder="Enter product title" />
    <button type="submit">Update</button>
</form>