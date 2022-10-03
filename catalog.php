<?php session_start(); ?>
<?php error_reporting(-1);
require_once __DIR__ . '/src/php/db.php';
require_once __DIR__ . '/src/php/func.php';
$products = get_products();
//debug($products);
?>
<!DOCTYPE html>
<html lang="ru" class="page">
<!--head-->
<?php require 'partials/head.php' ?>

<body class="text-base m-0 min-h-full min-w-320 font-sans bg-[#111827]">
<div class="overflow-hidden">
  <?php require "partials/header.php"; ?>
  <?php require "partials/productList.php"; ?>
  <?php require "partials/footer-no-catalog.php"; ?>
</div>
<!--  scripts-->
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="src/js/swiper.js"></script>
<script src="src/js/login.js"></script>
</body>