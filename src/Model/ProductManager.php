<?php

namespace App\Model;

class ProductManager
{
    private $database;
    function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }
    function getAll()
    {
        $sql = "SELECT * FROM `products` ORDER BY `id` DESC";
        $statement = $this->database->query($sql);
        $data = $statement->fetchAll();
        $products = [];
        foreach ($data as $item) {
            $product = new Product($item['name'], $item['type'], $item['price'], $item['amount'], $item['date'], $item['description']);
            $product->setId($item['id']);
            array_push($products, $product);
        }
        return $products;
    }
    function add($product)
    {
        $sql = "INSERT INTO `products` (`name`, `type`, `price`, `amount`, `date`,`description`) VALUES (:name, :type, :price, :amount, :date, :desc)";
        $statement = $this->database->prepare($sql);
        $statement->bindParam(':name', $product->getName());
        $statement->bindParam(':type', $product->getType());
        $statement->bindParam(':price', $product->getPrice());
        $statement->bindParam(':amount', $product->getAmount());
        $statement->bindParam(':date', $product->getDate());
        $statement->bindParam(':desc', $product->getDesc());
        $statement->execute();
    }
    function update($product)
    {
        $sql = "UPDATE `products` SET `name` = :name, `type` = :type, `price` = :price, `amount` = :amount, `date` = :date, `description` = :desc  WHERE `id` = :id";
        $statement = $this->database->prepare($sql);
        $statement->bindParam(':id', $product->getId());
        $statement->bindParam(':name', $product->getName());
        $statement->bindParam(':type', $product->getType());
        $statement->bindParam(':price', $product->getPrice());
        $statement->bindParam(':amount', $product->getAmount());
        $statement->bindParam(':date', $product->getDate());
        $statement->bindParam(':desc', $product->getDesc());
        $statement->execute();
    }
    function getProductById($id)
    {
        $sql = "SELECT * FROM `products` WHERE `id` = :id";
        $statement = $this->database->prepare($sql);
        $statement->bindParam(':id', $id);
        $statement->execute();
        return $statement->fetch();
    }
    function delete($id)
    {
        $sql = "DELETE FROM `products` WHERE `id` = :id";
        $statement = $this->database->prepare($sql);
        $statement->bindParam(':id', $id);
        $statement->execute();
    }
    function searchProductByName($keyword)
    {
        $sql = "SELECT * FROM `products` WHERE `name` LIKE :keyword";
        $statement = $this->database->prepare($sql);
        $statement->bindValue(':keyword', "%" . $keyword . "%");
        $statement->execute();
        $data = $statement->fetchAll();
        $products = [];
        foreach ($data as $item) {
            $product = new Product($item['name'], $item['type'], $item['price'], $item['amount'], $item['date'], $item['description']);
            $product->setId($item['id']);
            array_push($products, $product);
        }
        return $products;
    }
}
