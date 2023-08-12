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
            $query = "INSERT INTO products(title) VALUES(:title)";
            $stmt = $this->conn->prepare($query);
            $stmt->execute(array(
                ':title' => $data['title'],
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
