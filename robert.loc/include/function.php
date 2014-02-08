<?php
/* Start: Head generated */
    /* CSS-link generated */
function show_css_link ($head) 
{
    for($i=0;$i<count($head['link']);$i++)
    {
        echo '<link href="../template/css/'.$head['link'][$i].'" rel="stylesheet">';
    }
}
    /* Icon-link generated */
function show_icon_link ($head) 
{
    for($i=0;$i<count($head['icon']);$i++)
    {
        echo '<link rel="apple-touch-icon-precomposed" sizes="'.$head['icon'][$i].'x'.$head['icon'][$i].'" href="../template/ico/apple-touch-icon-'.$head['icon'][$i].'-precomposed.png">';
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
        $_POST['phone'],
        $_POST['mail'],
        $_POST['login'],
        $_POST['password'],
        $_POST['password_check'],
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
                check_pass ($_POST);
            }
        }
    }
}
    /* Password checking for coincidence */
function check_pass($_POST)
{
    if ($_POST['enter'])
    {
        if ($_POST['password']==$_POST['password_check'])
        {
            hash_to_cookie ();
            $sql = 'INSERT INTO `user`(`login`, `pass`, `name`, `surname`, `country`, `phone`, `email`, `adress`, `hash`) VALUES("'.$_POST['login'].'", "'.md5($_POST['password']).'", "'.$_POST['name'].'", "'.$_POST['surname'].'", "'.$_POST['country'].'", "'.$_POST['phone'].'", "'.$_POST['mail'].'", "'.$_POST['adress'].'", "'.$_SESSION['hash'].'")';
            header ('Location: index.php'); 
        }
    }
}
/* End: Created and check register form */

/* Start: Verification of authorization form */
function cont_fields ($post)
{
    if ($post['login'] and $post['password']) 
    {
        valid_login ($user);
    }
    else 
    {
        echo '<div><h3 style="color: red;">Внимание: не введен логин или пароль!</h3></div>'; 
    }
}
function valid_login ($user)
{
    $sql = "SELECT pass FROM `user` WHERE `login`='".$_POST['login']."'";
    $valid = mysql_query($sql);
    if($valid)
    {
        $pass = mysql_fetch_assoc($valid);
        if (md5 ($_POST['password'])==$pass['pass']) 
        {
            hash_to_cookie ();
            header('Location: index.php');
        } 
        else 
        {
            echo '<div><h3 style="color: red;">Внимание: не введен логин или пароль!</h3></div>';
        }
    } 
    else 
    { 
        echo '<div><h3 style="color: red;">Внимание: не введен логин или пароль!</h3></div>';
    }
}
/*
 function valid_login ($user)
 {
    global $user;
    if ($_POST['login']==$user['login'])
    {
        if (md5($_POST['password'])==$user['password'])
        {
            setcookie ('CorpIMT',$_SESSION['id']);
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
    if ($_GET['action']=='exit')
    {
        setcookie ('PHPSESSID','',time()-3600);
        setcookie ('hash','',time()-3600);
        header('Refresh: 3, url=http://'.$_SERVER['HTTP_HOST'].'/index.php');
    }
    else 
    {
        echo '<a href="exit.php?action=exit">Выйти</a>';
    }
}
/* End: Log out user*/

/* Start: Session */
    /* Generator of random values */
function random_values ()
{
    $symbol_int = range(0, 9, 1);
    $symbol_let = range('a', 'z');
    $symbol_all = array_merge($symbol_int, $symbol_let);
    shuffle ($symbol_all);
    $rand_ten = array_rand($symbol_all, 10);
    for ($i=0;$i<count($rand_ten);$i++)
    {
        $x = $symbol_all[$rand_ten[$i]];
        $hash_ten .= $x;                
    } 
    $_SESSION['hash'] = $hash_ten;
}
    /* Start session */
function start_sess ()
{
    if (!$_COOKIE['PHPSESSID']) 
    {
        random_values ();
        session_id($_SESSION['hash']);
        session_start();
    }
}
    /* Hash generate */
function hash_to_cookie ()
{
    if ($_POST)
    {
        $session_hash = md5($_POST['login'].$_POST['password']);
        $_SESSION['hash'] = substr ($session_hash, 0, 10);
        setcookie('hash', $_SESSION['hash']);
    }
}
    /* Verification hash * /
function hash_valid ()
{
    if ($_COOKIE['hash'])
    {
        $sql = "SELECT `hash` FROM `user` WHERE `hash`='".$_COOKIE['hash']."'";
        $valid = mysql_query($sql);
        $hash = mysql_fetch_assoc($valid);
        if ($_COOKIE['hash']!=$hash['hash']) 
        {
            //header('Location: login.php');
        }
    }
}
    /* $_SESSION create */
function session_arr ($_SESSION)
{
    $sql = "SELECT * FROM `user` WHERE `hash`='".$_COOKIE['hash']."'";
    $valid = mysql_query($sql);
    $_SESSION = mysql_fetch_assoc($valid);
}
/* End: Session */