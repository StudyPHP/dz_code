<?php 
include 'data.php';
include 'function.php';
include 'header.php'; 

if ($_COOKIE['login']==$user['login']){
?>
<p>Приветствуем, <?=$_COOKIE['login'] ?>!</p>
<a href="exit.php?action=exit">Выйти</a>
<?php 
} else {
   echo '<p>Приветствуем посетитель! Авторизируйся!</p>'
     .'<a href="login.php">Вход</a>'
     .'<p>Не авторизирован? Регистрируйся!</p>'
     .'<a href="reg_form.php">Регистрация</a>';
}
?>

<?php include 'footer.php'; ?>
