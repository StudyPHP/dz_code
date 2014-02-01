<?php
/* Start: User data */
//$user ['name'] = $_SESSION['user'];
//$user ['login'] = "Rob";
//$user ['password'] = md5('123');

$host_mysql='localhost'; 
$database_mysql='school_db';
$user_mysql='root';
$pswd_mysql='';
/* End: User data */

/*Content for <head> */
$charset = "UTF-8";
$title = "CorpIMT";
$favicon = "favicon.png";

$link_css[]="global.css";

$icon_x[]='144';
$icon_x[]='114';
$icon_x[]='72';
$icon_x[]='57';

$head = array (
    'link'=>$link_css,
    'icon'=>$icon_x
);
/* End */

/* Export from $_POST to $post */
$post = array (
    'surname' => $_POST['surname'],
    'name' => $_POST['name'],
    'patronymic' => $_POST['patronymic'],
    'company' => $_POST['company'],
    'adress' => $_POST ['adress'],
    'country' => $_POST['country'],
    'age' => $_POST['age'],
    'phone' => $_POST['phone'],
    'mail' => $_POST['mail'],
    'login' => $_POST['login'],
    'password' => $_POST['password'],
    'enter' => $_POST['enter']
);
/* End */

/* Register form, array */
$form_name[]='surname';
$form_pholder[]='Иванов';
$form_type[]='text';
$form_required[]='required';
$form_pattern[]='[A-Za-zА-Яа-яЁё]{3,}';
$form_coment[]='Ваша фамилия';

$form_name[]='name';
$form_pholder[]='Иван';
$form_type[]='text';
$form_required[]='required';
$form_pattern[]='[A-Za-zА-Яа-яЁё]{3,}';
$form_coment[]='Ваше имя';

$form_name[]='patronymic';
$form_pholder[]='Иванович';
$form_type[]='text';
$form_required[]='required';
$form_pattern[]='[A-Za-zА-Яа-яЁё]{3,}';
$form_coment[]='Ваше отчество';

$form_name[]='company';
$form_pholder[]='ОАО Рога и Копыта';
$form_type[]='text';
$form_required[]='required';
$form_pattern[]='[\W\S]{5,}';
$form_coment[]='Организация, в которой Вы работаете';

$form_name[]='adress';
$form_pholder[]='ул.Березовая, 16';
$form_type[]='text';
$form_required[]='';
$form_pattern[]='[\W\S]{5,}';
$form_coment[]='Почтовый адрес';

$form_name[]='country';
$form_pholder[]='Украина';
$form_type[]='text';
$form_required[]='';
$form_pattern[]='[A-Za-zА-Яа-яЁё]{3,}';
$form_coment[]='Страна проживания';

$form_name[]='phone';
$form_pholder[]='100-00-00';
$form_type[]='tel';
$form_required[]='';
$form_pattern[]='[0-9]{3}-[0-9]{2}-[0-9]{2}';
$form_coment[]='Номер контактного телефона';

$form_name[]='mail';
$form_pholder[]='mail@domain.net';
$form_type[]='text';
$form_required[]='required';
$form_pattern[]='.+@.+\..+';
$form_coment[]='Адрес електронной почты';

$form_name[]='login';
$form_pholder[]='Data_Batone';
$form_type[]='text';
$form_required[]='required';
$form_pattern[]='[\w-]{3,}';
$form_coment[]='Ваш "никнэйм" (допускаются буквы, цифры, "_" и "-")';

$form_name[]='password';
$form_pholder[]='********';
$form_type[]='password';
$form_required[]='required';
$form_pattern[]='[\W\S]{8,20}';
$form_coment[]='Ваш пароль (не меньше 8 символов)';

$form_name[]='password_check';
$form_pholder[]='********';
$form_type[]='password';
$form_required[]='required';
$form_pattern[]='[\W\S]{8,20}';
$form_coment[]='Введите пароль повторно для проверки';

$form_name[]='enter';
$form_pholder[]='';
$form_type[]='';
$form_required[]='';
$form_pattern[]='';
$form_coment[]='Регистрация';

$form = array (
    'name' => $form_name,
    'placeholder' => $form_pholder,
    'type' => $form_type,
    'required' => $form_required,
    'pattern' => $form_pattern,
    'coment' => $form_coment
);
/* End */