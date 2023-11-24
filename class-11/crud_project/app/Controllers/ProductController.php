<?php

namespace Ecom\Controllers;

use PDO;
use PDOException;

class ProductController
{
    private $dbHost = 'localhost';
    private $dbName = 'ecom';
    private $dbUser = 'root';
    private $dbPassword = '';
    private $conn;

    public function __construct()
    {
        try {
            session_start();
            $this->conn = new PDO("mysql:host=$this->dbHost;dbname=$this->dbName", $this->dbUser, $this->dbPassword);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connected successfully";
        } catch (PDOException $e) {
            // echo $e->getMessage();
            // echo $e->getFile();
            // echo $e->getLine();
            echo 'Something went wrong';
        }
    }

    public function index()
    {
        $query = "SELECT * FROM `products`";
        $stmt = $this->conn->query($query);
        $stmt->execute();
        return $stmt->fetchAll();

        // return $this->conn->query("SELECT * FROM `products`")->fetchAll();
    }

    public function store(array $data)
    {
        try {
            
            // Validation Start
            if (strlen($data['title'])>255){
                $_SESSION['errors']['title'] = 'Title should not be more than 255 charcter';
            }

            $allowedImageFormats = ['jpeg','jpg','png'];
            $fileName = $_FILES['image']['name'];
            $explodeFileName = explode('.', $fileName);
            $fileExtension = end($explodeFileName);
            if ($_FILES['image']['size'] > 50000 ){
                $_SESSION['errors']['image'] = 'Maximum 500KB allowed';
            }else if (!in_array($fileExtension, $allowedImageFormats)){
                $_SESSION['errors']['image'] = 'Please upload' . " " . implode('/' , $allowedImageFormats);
            }

            // Validation End
            if  (isset($_SESSION['errors'])){
            header('location: ./../views/create.php');
            die();
            }

            $uniqueFileName = date('Y-m-d') . '-' . time() . '.' . $fileExtension;
            $tempName = $_FILES['image']['tmp_name'];
            $uploadDir = './../assets/uploads/products/';
            move_uploaded_file($tempName, $uploadDir . $uniqueFileName);

            $query = "INSERT INTO products(title, image) VALUES(:title, :image)";
            $stmt = $this->conn->prepare($query);
            $stmt->execute(array(
                ':title' => $data['title'],
                ':image' => $uniqueFileName
            ));

            $_SESSION['message'] = 'Created Successfully';

            header('location: ./../views/index.php');
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }


    public function show(int $id)
    {
        $query = "SELECT * FROM products where id = $id";
        $stmt = $this->conn->query($query);

        return $stmt->fetch();
    }

    public function update(array $data)
    {
        try {
            $query = "UPDATE products SET title=:title where id = :id";
            $stmt = $this->conn->prepare($query);
            $stmt->execute(array(
                ':title' => $data['title'],
                ':id' => $data['id'],
            ));

            $_SESSION['message'] = 'Update Successfully';

            header('location: ./../views/index.php');
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function delete(int $id)
    {
        try {
            $query = "DELETE from products where id = $id";
            $stmt = $this->conn->prepare($query);
            $stmt->execute(array());

            $_SESSION['message'] = 'Successfully Deleted';

            header('location: ./../views/index.php');
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
