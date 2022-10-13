<?php session_start(); ?>
<?php error_reporting(-1);
require_once __DIR__ . '/src/php/db.php';
require_once __DIR__ . '/src/php/func.php';
$products = get_products();
?>
<!DOCTYPE html>
<html lang="ru" class="page">
<!--head-->
<?php require 'partials/head.php' ?>
<div class='text-white text-sm font-medium'>
  <!--TODO убрать-->
  <!--  --><?php //debug($_SESSION); //session_destroy(); ?>

</div>
<body class="text-base m-0 min-h-full min-w-320 font-sans bg-[#111827]">
<div class="overflow-hidden">
  <?php require "partials/header.php"; ?>
  <?php require "partials/productList.php"; ?>
  <?php require "partials/footer-no-catalog.php"; ?>

</div>
<?php require "partials/scripts.php"; ?>
</body>