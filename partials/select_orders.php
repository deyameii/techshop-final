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
  global $pdo;
  $res = $pdo->query("SELECT order_id, order_date, FIO, order_status FROM orders
INNER JOIN users u on orders.user_id = u.id");
  return $res->fetchAll();
}

$rows = get_products();
$r = 1;
foreach ($rows as $row) {
  echo '<tr class="bg-white dark:bg-gray-800">';
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
          <a href="#" class="update-btn font-medium text-blue-600 dark:text-blue-500 hover:underline" data-modal-toggle="crypto-modal" data-id=' . $r . '>Изменить статус</a>
        </td>';
  echo '         <td class="py-4 px-6 text-right">
          <a href="#" class="show_products font-medium text-blue-600 dark:text-blue-500 hover:underline"
             data-modal-toggle="small-modal" data-id=' . $r . '>Товары в чеке</a>
        </td>';
  $r += 1;
  echo "</tr>";
}
