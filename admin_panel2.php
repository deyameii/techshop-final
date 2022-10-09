<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru" class="page">
<!--head-->
<?php require 'partials/head.php' ?>
<body class="text-base m-0 min-h-full min-w-320 font-sans bg-[#111827]">
<div class="overflow-hidden">
  <?php require "partials/header.php"; ?>
  <?php require "partials/admin_content2.php"; ?>

</div>
<!--  scripts-->
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="src/js/swiper.js"></script>
<script src="src/js/login.js"></script>
<script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>
</body>

