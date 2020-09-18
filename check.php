<?php
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

if (isset($_POST['text'])) {
    file_put_contents('login-register.php', "<div class=col-md-6 btw1>" . $_POST['text'] . '</div>');
}
if (mb_strlen($login) < 3 || mb_strlen($login) > 90) {
    $alert = "Wrong man, what ya doing?";
    exit;
} else if (mb_strlen($name) < 0 || mb_strlen($name) > 50) {
    echo "Недопустимая длина имени";
    exit;
} else if (mb_strlen($pass) < 8 || mb_strlen($pass) > 20) {
    echo "Недопустимая длина пароля(от 2 до 6 символов)";
    exit;
}
$pass = md5($pass . "faawfafef1231221");
$mysql = new mysqli('localhost', 'root', '', 'users1');
$mysql->query("INSERT INTO `users`(`login`, `pass`, `name`) VALUES ('$login', '$pass', '$name')");
$mysql->close();
header('location: /site/index.html');
?>
