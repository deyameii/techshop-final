<?php
$servername = "localhost";
$database = "techshop";
$username = "root";
$db_password = "";
$opt = [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];
$pdo = new PDO("mysql:host=$servername;dbname=$database", $username, $db_password, $opt);

function get_products(): array
{
  $id = $_POST['conf_id'];
  global $pdo;
  $res = $pdo->prepare("SELECT products.title, ord.count, products.price, (products.price * ord.count)
FROM order_products ord
         join products ON ord.product_id = products.id
where ord.order_id = :id");
  $res->execute(['id' => $id]);
  return $res->fetchAll();
}

$rows = get_products();
foreach ($rows as $row) {
  echo '<tr class="bg-white dark:bg-gray-800">';
  foreach ($row as $column) {

    echo "<td class='py-4 px-6'>$column</td>";


  }

}
