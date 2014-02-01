<?php 
include 'include/include.php'; 
hash_valid ();
session_arr ($_SESSION);
include 'template/header.php.tpl';
?>

    <div>
<?php
if ($_COOKIE['hash'])
    {
?>
        <h2>Добро пожаловать, 
<?php
if (isset($_SESSION ['name']))
{
    echo $_SESSION ['name']." ".$_SESSION['surname'];
}
else 
{
    echo $_SESSION ['login'];
}
?>
        !</h2>
        <h3><a href="exit.php?action=exit">Выйти</a></h3>
<?php 
    }
else 
    {
?>
        <h2>Добро пожаловать, гость!</h2>
        К сожалению вы не авторизированы для работы с этим ресурсом!<br/>
        Пожалуйста авторизируйтесь или зарегестрируйтесь.
        <h3><a href="login.php">Авторизация</a>     <a href="registration.php">Регистрация</a></h3>
<?php
    }
?>
    </div>

<h3><a href="test/control.php">Контрольная страница</a></h3>

<?php
include 'template/footer.php.tpl';
?>
