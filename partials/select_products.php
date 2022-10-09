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
  $res = $pdo->query("SELECT * FROM products");
  return $res->fetchAll();
}

$rows = get_products();

foreach ($rows as $row) {
  echo '<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">';
  $i = 0;
  foreach ($row as $column) {
    $i += 1;
    if ($i == 2) {
      echo "<th scope='row' class='py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white'>$column</th>";
    } else {
      echo "<td class='py-4 px-6'>$column</td>";
    }
  }
  echo '        <td class="py-4 px-6 text-right">
          <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Изменить</a>
        </td>';
  echo "</tr>";
}
?>