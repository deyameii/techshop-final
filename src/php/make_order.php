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

$arr = $_SESSION['cart'];
$user_id = $_SESSION['user']['id'];
$date = date('Y-m-d');

$stmt = $pdo->prepare("INSERT INTO orders (order_date, user_id, order_status) VALUE (:date, :id, :status)");
$stmt->execute([
  'date' => $date,
  'id' => $user_id,
  'status' => 'В обработке'
]);

$stmt = $pdo->query("SELECT max(order_id) as 'max' FROM orders");
$res = $stmt->fetch();
$max_id = $res['max'];

foreach ($_SESSION['cart'] as $id => $item) {
  $stmt = $pdo->prepare("INSERT INTO order_products (product_id, order_id, count) VALUE (:prd_id,:ord_id,:count)");
  $stmt->execute([
    'prd_id' => $id,
    'ord_id' => $max_id,
    'count' => $item['qty']
  ]);
}


$_SESSION['product_add'] = true;
header('Location: cls_basket.php');

exit;