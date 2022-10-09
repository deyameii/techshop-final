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

$stmt = $pdo->prepare("INSERT INTO `products` (`title`, `type`, `img`, `price`) VALUES (:title, :type, :img, :price)");

$stmt->execute(['title' => $title, 'type' => $type, 'img' => $img, "price" => $price]);
$_SESSION['added'] = true;
header('Location: ../../admin_panel.php');
exit;