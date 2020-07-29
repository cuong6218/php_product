<?php

namespace App\Controller;

use App\Model\Product;
use App\Model\ProductManager;

class ProductController
{
    private $productManager;
    function __construct()
    {
        $this->productManager = new ProductManager();
    }
    function viewProduct()
    {
        $products = $this->productManager->getAll();
        include_once('src/View/list-product.php');
    }
    function addProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET')
            include_once('src/View/add-product.php');
        else {
            $name = $_REQUEST['name'];
            $type = $_REQUEST['type'];
            $price = $_REQUEST['price'];
            $amount = $_REQUEST['amount'];
            $date = $_REQUEST['date'];
            $desc = $_REQUEST['desc'];
            $product = new Product($name, $type, $price, $amount, $date, $desc);
            $this->productManager->add($product);
            header('location:index.php?page=list-product');
        }
    }
    function updateProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = $_REQUEST['id'];
            $product = $this->productManager->getProductById($id);
            include_once('src/View/update-product.php');
        } else {
            $id = $_REQUEST['id'];
            $name = $_REQUEST['name'];
            $type = $_REQUEST['type'];
            $price = $_REQUEST['price'];
            $amount = $_REQUEST['amount'];
            $date = $_REQUEST['date'];
            $desc = $_REQUEST['desc'];
            $product = new Product($name, $type, $price, $amount, $date, $desc);
            $product->setId($id);
            $this->productManager->update($product);
            header('location:index.php?page=list-product');
        }
    }
    function deleteProduct()
    {
        $id = $_REQUEST['id'];
        $this->productManager->delete($id);
        header('location:index.php?page=list-product');
    }
    function searchProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $keyword = $_REQUEST['keyword'];
            $products = $this->productManager->searchProductByName($keyword);
            include_once('src/View/list-product.php');
        }
    }
}
