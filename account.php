<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru" class="page">
<!--head-->
<?php require 'partials/head.php' ?>

<body class="text-base m-0 min-h-full min-w-320 font-sans bg-[#111827]">
<div class="overflow-hidden">
  <?php require "partials/header.php"; ?>
  <?php require "partials/account-content.php"; ?>
  <?php require "partials/footer-no-catalog.php"; ?>
</div>

<!--  scripts-->
<?php require "partials/scripts.php"; ?>
</body>