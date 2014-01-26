<?php 
include 'function.php';
include 'data.php';

$title = "LOGIN GO!!!";

if (isset($_POST['enter'])) {
    valid_login($user);
}

include 'header.php';
?>

<form action="" method="post">
    <input type="text" name="login" placeholder="Логин"><br>
    <input type="password" name="password" placeholder="Пароль"><br>
    
    <input type="submit" name="enter" value="Вход">
</form>

<?php include 'footer.php'; ?>