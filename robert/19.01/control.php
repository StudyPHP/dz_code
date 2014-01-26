<?php
include 'include.php';
include 'header.php';
?>

<!-- 
Проверка нажатия кнопки "Регистрация"
Проверка заполнения обязательных полей
Проверка заполнения поля "Страна", присвоение значения по умолчанию в случае FALSE
Вывод на экран масивов $_POST и $post
-->
<PRE>
<?php
echo '<h3>Control button is pressed:</h3>';
control_button_pressed ($_POST);

echo '<h3>Check form filling:</h3>';
show_check_form ($form);

/* Default value country */
echo "<h3>Country obtained out of form:</h3>";
if (empty ($post['country']))
{
    echo 'none';
} 
 else 
{
    echo $post['country'];    
}
if (!$post['country'])
{
    $post['country'] = "Ukraine";
    echo "<h3>Default country:</h3> {$post['country']}";
}

/* Derive array */
echo '<h3>Derive array $_POST:</h3>';
print_r($_POST);
echo '<h3>Derive array $post:</h3>';
print_r($post);
?>
</PRE>

<?php
include 'footer.php';
?>