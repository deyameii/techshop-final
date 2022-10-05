<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru" class="page">
<!--head-->
<?php require 'partials/head.php' ?>

<body class="text-base m-0 min-h-full min-w-320 font-sans bg-[#111827]">
<div class="overflow-hidden">
  <?php require "partials/header.php"; ?>
  <?php require "partials/content.php"; ?>
  <?php require "partials/footer.php"; ?>
</div>
<div id='qwe' test='test'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquam amet animi aut corporis
  culpa, debitis ipsa mollitia nulla quidem rem rerum saepe, sed sit tenetur vitae voluptatibus? Corporis, perferendis.
</div>
<!--  scripts-->
<?php require "partials/scripts.php"; ?>
</body>