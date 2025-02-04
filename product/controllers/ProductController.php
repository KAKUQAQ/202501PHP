<?php

require_once BASE_PATH . 'models/Product.php';

class ProductController
{
    private $productModel;
    public function __construct() {
        $this->productModel = new Product();
    }
    public function list() {
        $products = $this->productModel->getAllProducts();
        include BASE_PATH .'views/product_list.php';
    }

    public function detail() {
        $id = isset($_GET["id"]) ? (int)$_GET["id"] : 0;
        $product = $this->productModel->getProductById($id);
        if ($product) {
            include BASE_PATH .'views/product_detail.php';
        } else {
            echo "商品不存在";
        }
    }

    private function uploadImage($file)
    {
        $targetDir = BASE_PATH . 'uploads/';
        $targetFile = $targetDir . basename($file["name"]);
        $uploadOk = 1;

        $imgFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        $check = getimagesize($file["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }

        if (file_exists($targetFile)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }

        if ($file["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        if ($imgFileType != "jpg" && $imgFileType != "png" && $imgFileType != "jpeg" && $imgFileType != "gif" ) {
            echo "Sorry, only JPG, PNG, JPEG & GIF files are allowed.";
            $uploadOk = 0;
        }

        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            return false;
        } else {
            if (move_uploaded_file($file["tmp_name"], $targetFile)) {
//                echo "The file ". basename( $file["name"]). " has been uploaded.";
                return $targetFile;
            } else {
                echo "Sorry, there was an error uploading your file.";
                return false;
            }
        }
    }

    public function add() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST["name"]);
            $price = (float)$_POST["price"];
            $description = htmlspecialchars($_POST["description"]);
            $image = $this->uploadImage($_FILES["image"]);
            if ($image) {
                if ($this->productModel->addProduct($name, $price, $description, $image)) {
                    header("location: index.php");
                } else {
                    echo "商品添加失败";
                }
            }
        } else {
            include BASE_PATH .'views/add_product.php';
        }
    }

    public function update() {
        $id = isset($_GET["id"]) ? (int)$_GET["id"] : 0;
        $product = $this->productModel->getProductById($id);
        if ($product && $_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST["name"]);
            $price = (float)$_POST["price"];
            $description = htmlspecialchars($_POST["description"]);
            $image = $product["image"];
            if ($_FILES["image"]["name"]) {
                $image = $this->uploadImage($_FILES["image"]);
            }
            if ($image && $this->productModel->updateProduct($id, $name, $price, $description, $image)) {
                header("location: index.php");
            } else {
                echo "商品更新失败";
            }
        } else {
            include BASE_PATH .'views/update_product.php';
        }
    }
    public function delete() {
        $id = isset($_GET["id"]) ? (int)$_GET["id"] : 0;
        if ($this->productModel->deleteProduct($id)) {
            header("location: index.php");
        } else {
            echo "商品不存在";
        }
    }

    public function purchase() {
        $id = isset($_GET["id"]) ? (int)$_GET["id"] : 0;
        $product = $this->productModel->getProductById($id);
        if ($product) {
            include BASE_PATH .'views/purchase_product.php';
        } else {
            echo "商品不存在";
        }
    }

    public function handlePurchase() {
        $id = isset($_GET["id"]) ? (int)$_GET["id"] : 0;
        $product = $this->productModel->getProductById($id);
        if ($product && $_SERVER["REQUEST_METHOD"] == "POST") {
            $quantity = (int)$_POST["quantity"];
            echo "您已成功购买 {$quantity} 个商品：{$product['name']}";
        } else {
            echo "购买失败";
        }
    }
}