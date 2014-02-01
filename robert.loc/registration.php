<?php 
include 'include/include.php';
start_sess ();
$title = $title.": Registrstion.";
if (isset($_POST['enter'])) 
{
    show_check_form ($form);
}
include 'template/header.php.tpl';
?>

<!-- Start: Registration Form -->
<div style="text-align: left;">
    <form method="POST" action="">
        <h3>Заполните форму для регистрации:</h3>
        <pre>
<?php
show_form ($form);
?>
        </pre>
    </form>
    Вы уже зарегистрированы? Авторизируйтесь!
    <h3><a href="login.php">Авторизация</a></h3>
</div>
<!-- End: Registration Form -->

<?php
include 'template/footer.php.tpl';
?> 
