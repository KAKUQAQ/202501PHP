<?php

require_once __DIR__ . '/../database/db.php';

class Product
{
    //数据库链接
    private $conn;
    //初始化数据库连接
    public function __construct() {
        $this->conn = Database::getInstance()->getConnection();
    }
    public function addProduct($name, $price, $description, $image) {
        $sql = "INSERT INTO products (name, price, description, image) VALUES (:name, :price, :description, :image)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':image', $image);
        if($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getAllProducts() {
        $sql = "SELECT * FROM products";
        $stmt = $this->conn->query($sql);
        if($stmt->rowCount() > 0) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            return [];
        }
    }

    public function getProductById($id) {
        $sql = "SELECT * FROM products WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        if($stmt->rowCount() > 0) {
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } else {
            return null;
        }
    }

    public function updateProduct($id, $name, $price, $description, $image) {
        $sql = "UPDATE products SET name = :name, price = :price, description = :description, image = :image WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':image', $image);
        if($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteProduct($id) {
        $sql = "DELETE FROM products WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        if($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }


}