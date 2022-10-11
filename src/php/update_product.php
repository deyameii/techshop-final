<?php
session_start();
$servername = "localhost";
$database = "techshop";
$username = "root";
$db_password = "";
$opt = [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];
$pdo = new PDO("mysql:host=$servername;dbname=$database", $username, $db_password, $opt);


$title = $_POST['title'];
$type = $_POST['type'];
$img = $_POST['img'];
$price = $_POST['price'];
$id = $_POST['id_product'];

$stmt = $pdo->prepare("UPDATE products SET title = :title, price = :price, type = :type, img = :img WHERE id = :id;");

$stmt->execute(['title' => $title, 'type' => $type, 'img' => $img, "price" => $price, 'id' => $id]);
$_SESSION['updated'] = true;
header('Location: ../../admin_panel2.php');
exit;

