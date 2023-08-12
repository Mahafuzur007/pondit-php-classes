<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CURD Project</title>
</head>

<body>

    <?php
    include_once './../vendor/autoload.php';

    use Ecom\Controllers\ProductController;

    $productController = new ProductController();
    $products = $productController->index();
    // echo '<pre>';
    // print_r($products);
    ?>
    <a href="./create.php">Add new</a>
    <?php
    if (isset($_SESSION['message'])) {
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
    ?>
    <table border="1" style="width: 500px; margin:0 auto;">
        <thead>
            <tr>
                <th>SL#</th>
                <th>Title</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $sl = 0;
            foreach ($products as $product) { ?>
                <tr>
                    <td><?= ++$sl ?></td>
                    <td><?= $product['title'] ?></td>
                    <td><a href="./show.php?id=<?= $product['id'] ?>">Show</a></td>
                    <td><a href="./edit.php?id=<?= $product['id'] ?>">Edit</a></td>
                    <td><a href="./delete.php?id=<?= $product['id'] ?>" onclick="return confirm('Are you sure want to delete?')">Delete</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>