<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once 'functions.php';

session_start();

checkGuestAndRedirect();

$email = $_POST['email'] ?? null;
$password = $_POST['password'] ?? null;
if (!$email or !$password) {
  $_SESSION['error'] = 'Login fail !';
  header('Location: index.php');
  exit();
}

// DB
$user = [
  'id' => 1,
  'email' => 'mehdi@test.com',
  'password' => '1234',
];

if ($user['email'] === $email
  and $user['password'] == $password
) {
  $_SESSION['auth'] = true;
  $_SESSION['id'] = $user['id'];

  header('Location: home.php');
  exit();
}

$_SESSION['error'] = 'Login fail !';
header('Location: index.php');
exit();
