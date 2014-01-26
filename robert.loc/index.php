<?php 
include 'include.php'; 
include 'template/header.php';
?>

    <div>
<?php
if (isset($_COOKIE['CorpIMT']))
    {
?>
        <h2>Добро пожаловать, 
<?php
if (isset($user ['name']))
{
    echo $user ['name'];
}
else 
{
    echo $user['login'];
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

<?php
include 'template/footer.php';
?>
