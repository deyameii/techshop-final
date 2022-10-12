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

$id = $_POST['id_productt'];
$status = $_POST['product_status'];

$stmt = $pdo->prepare("UPDATE orders SET order_status = :status WHERE order_id = :id");

$stmt->execute(['id' => $id, 'status' => $status]);

header('Location: ../../admin_panel3.php');
exit;