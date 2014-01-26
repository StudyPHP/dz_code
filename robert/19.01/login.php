<?php 
include 'include.php';
$title = $title.": LogIn GO!!!";
if (isset($_POST['enter'])) 
{
    cont_fields($_POST);
}
include 'header.php'; 
?>

<div>
    <form action="" method="POST">
        <input type="text" name="login" placeholder="Логин"><br>
        <input type="password" name="password" placeholder="Пароль"><br>
        <input type="submit" name="enter" value="Вход">
    </form>
    Вы новый пользователь? Зарегистрируйтесь!
    <h3><a href="registration.php">Регистрация</a></h3>
</div>

<?php 
include 'footer.php'; 
?>