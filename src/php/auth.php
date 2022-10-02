<?php
session_start();
include "config.php";

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email=:email";

$statement = $pdo->prepare($sql);
$statement->execute(['email' => $email]);
$user = $statement->fetch(PDO::FETCH_ASSOC);

if (!$user) {
    $_SESSION['error'] = 'Неверный логин или пароль!';
    header('Location: ../../index.php');
    exit;
}
if ($user['password'] !== $password) {
    $_SESSION['error'] = 'Неверный логин или пароль';
    header('Location: ../../index.php');
    exit;
}

$_SESSION['user'] = ['email' => $user['email'], 'id' => $user['id']];
header('Location: ../../index.php');
exit;