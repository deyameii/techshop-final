<?php
session_start();
unset($_SESSION['cart']);
unset($_SESSION['cart.qty']);
unset($_SESSION['cart.sum']);


header('Location: ../../index.php');
exit;
