<?php

use App\Controller\ProductController;

require __DIR__ . "/vendor/autoload.php";
$productController = new ProductController();
$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : "";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <?php
    switch ($page) {
        case 'list-product':
            $productController->viewProduct();
            break;
        case 'add-product':
            $productController->addProduct();
            break;
        case 'update-product':
            $productController->updateProduct();
            break;
        case 'delete-product':
            $productController->deleteProduct();
            break;
        case 'search-product':
            $productController->searchProduct();
            break;
        default:
            $productController->viewProduct();
    }
    ?>
</body>

</html>