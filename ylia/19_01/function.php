<?php
function show_title($title) {
    echo "<title>$title</title>";
}

function cont_fields() {
    $arr_errors=array();
    $arr_fields['title']='Спасибо за регистрацию!';
            
    foreach ($_POST as $key=>$value) {
        if ($value=='') {
            if (substr($key, 0, 2)=='i_')
                $arr_errors[]='Не заполнено поле '.substr($key, 2);
        } else {
             if ($key!='enter')
                $arr_fields[$key]=$value;
        }
    }

    return $arr_errors ? $arr_errors : $arr_fields;
}

function valid_login($user) {
    $err_msg='';
    
    if (!$_POST['login'] or !$_POST['password'])
        $err_msg='<p>Hе введен пароль или логин!</p>';    
    else if ($_POST['login']!=$user['login'])
        $err_msg='<p>Введен неверный логин!</p>';    
    else if (md5($_POST['password'])!=$user['password'])
        $err_msg='<p>Введен неверный пароль!</p>';
    
    if (!$err_msg) {
        setcookie('login', $_POST['login']);
        header('Location: index.php');
    } else
        return $err_msg;
}

function log_out() {
    if ($_GET['action']=='exit'){
        setcookie('login');
        header('Refresh: 3, url=http://corpIMT/index.php');
    } else {
        echo '<a href="exit.php?action=exit">Выйти</a>';
    }
}
?>