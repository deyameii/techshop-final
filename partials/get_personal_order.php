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
global $pdo;
$mode = $pdo->prepare("SET GLOBAL sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));");
$mode->execute();
function get_products(): array
{
  $qwe = $_SESSION['user']['id'];
  global $pdo;
  $res = $pdo->prepare("SELECT
    orders.order_id,
    order_date,
    count * price,
    order_status
FROM orders
join order_products op on orders.order_id = op.order_id
join products p on op.product_id = p.id
WHERE user_id = :id
GROUP BY orders.order_id");
  $res->execute(['id' => $qwe]);
  return $res->fetchAll();
}

$rows = get_products();
$r = 1;
foreach ($rows as $row) {
  echo '<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">';
  foreach ($row as $column) {


    if ($column == 'В обработке') {
      echo "<td class='py-4 px-6'>
          <span
            class='bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800'>В обработке</span>

        </td>";
    } elseif ($column == 'Отменен') {
      echo "<td class='py-4 px-6'>
          <span
            class='bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900'>Отменен</span>

        </td>";
    } elseif ($column == 'Получен') {
      echo "<td class='py-4 px-6'>
          <span
            class='bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900'>Получен</span>

        </td>";
    } else {
      echo "<td class='py-4 px-6'>$column</td>";

    }
  }
  echo '        <td class="py-4 px-6 text-right">
          <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline" data-modal-toggle="authentication-modal" data-id=' . $r . '>Получить чек</a>
        </td>';
  $r += 1;
  echo "</tr>";
  $r += 1;
}
