<?php
$lname = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$lpass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
$mysql = new mysqli('localhost', 'root', '', 'users1');
$lpass = md5($lpass . "faawfafef1231221");
$result = $mysql->query("SELECT * FROM `users` WHERE `name`='$lname' and `pass`='$lpass'");
$user = $result->fetch_assoc();
if ($user == null) {
  echo "Такой пользователь не найден";
  header('location: /site/login-register.php?checker=Wrong password');
} else {
  setcookie('user', $user['name'], time() + 3600 * 24, "/");
  $mysql->close();
  header('location: /site/index.php');
}
