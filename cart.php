<?php
error_reporting(-1);
session_start();
require_once __DIR__ . '/src/php/db.php';
require_once __DIR__ . '/src/php/func.php';

if (isset($_GET['cart'])) {
  switch ($_GET['cart']) {
    case 'add':
      $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
      $product = get_product($id);

      if (!$product) {
        echo json_encode(['code' => 'error', 'answer' => 'Error product']);
      } else {
        add_to_cart($product);
        echo json_encode(['code' => 'ok', 'answer' => $product]);
      }
      break;

    case "clear":
      if (!empty($_SESSION['cart'])) {
        unset($_SESSION['cart']);
        unset($_SESSION['cart.sum']);
        unset($_SESSION['cart.qty']);
      }
      require __DIR__ . '/basket.php';
      break;

  }
}
