<?php
session_start();
session_destroy();
//unset($_SESSION['user'], $_SESSION['cart']);
header('Location: ../../index.php');