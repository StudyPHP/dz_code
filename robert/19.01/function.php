<?php
/* Start: Head generated */
    /* CSS-link generated */
function show_css_link ($head) 
{
    for($i=0;$i<count($head['link']);$i++)
    {
        echo '<link href="css/'.$head['link'][$i].'" rel="stylesheet">';
    }
}
    /* Icon-link generated */
function show_icon_link ($head) 
{
    for($i=0;$i<count($head['icon']);$i++)
    {
        echo '<link rel="apple-touch-icon-precomposed" sizes="'.$head['icon'][$i].'x'.$head['icon'][$i].'" href="ico/apple-touch-icon-'.$head['icon'][$i].'-precomposed.png">';
    }
}
/* End: Head generated */

/* Start: Created and check register form */
    /* Generate form */
function show_form ($form)
{
    for ($i=0;$i<count($form['name'])-1;$i++)
    {
        echo '<input type="'.$form['type'][$i].'" name="'.$form['name'][$i].'" placeholder="'.$form['placeholder'][$i].'" '.$form['required'][$i].' pattern="'.$form['pattern'][$i].'">  '.$form['coment'][$i];
	if ($form['required'][$i] == 'required')
	{
            echo ' *';
	}
        echo '<br/>';
    }
    if (in_array ('required',$form['required']))
    {
        echo '<p>* - поля, обязательные для заполнения </p>';
    }
    echo '<p><input type="submit" name="'.end ($form['name']).'" value="'.end ($form['coment']).'">   <input type="reset" value="Очистить"></p>'; 
}
    /* Check form filling */
function show_check_form ($form)
{
    $ck_form = array (
            $_POST['surname'],
            $_POST['name'],
            $_POST['patronymic'],
            $_POST['company'],
            $_POST['country'],
            $_POST['age'],
            $_POST['phone'],
            $_POST['mail'],
            $_POST['enter'],
            );
    for ($i=0;$i<count($form['required']);$i++)
    {
        if ($form['required'][$i] == 'required')
        {
            if (!$ck_form[$i])
            {
                echo '<h3 style="text-align: left; margin: 0px, 50px; color: red;">Пожалуйста заполните поле: "'.$form['coment'][$i].'".<br/></h3>';    
            }
            else 
            {
                control_button_pressed ($_POST);
            }
        }
    }
}
    /* Control button is pressed */
function control_button_pressed ($_POST)
{
    if (isset ($_POST['enter']))
    {
        setcookie ('CorpIMT',$_POST['name']);
        header ('Location: index.php');
    }
}
/* End: Created and check register form */

/* Start: Verification of authorization form */
function cont_fields($post)
{
    if (!$post['login'] or !$post['password']) 
    {
        echo '<div><h3 style="color: red;">Внимание: не введен логин или пароль!</h3></div>';
    }
    else 
    {
        valid_login ($user);
    }
}
function valid_login ($user)
{
    global $user;
    if ($_POST['login']==$user['login'])
    {
        if (md5($_POST['password'])==$user['password'])
        {
            setcookie ('CorpIMT',$_POST['login']);
            header ('Location: index.php');
        }
        else 
        {
            echo '<div><h3 style="color: red;">Внимание: введены неверные данные! (пароль)</h3></div>';
        }
    }
    else 
    {
        echo '<div><h3 style="color: red;">Внимание: введены неверные данные! (логин)</h3></div>';
    }
}
/* End: Verification of authorization form */

/* Start: Log out user*/
function log_out()
{
    if ($_GET['action']=='exit'){
        setcookie ('CorpIMT','',time()-3600);
        header('Refresh: 3, url=http://corpIMT.robert/index.php');
    }
    else {
        echo '<a href="exit.php?action=exit">Выйти</a>';
    }
}
/* End: Log out user*/

?>