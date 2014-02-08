<!-- Тестовый файл -->

<?php
include '../include/include.php';
include '../template/header.php.tpl';
?>

<PRE>

<?php
/*
$host = "localhost";
$user = "root";
$db_name = "school_db";
$pass = "";

 
function Connect ($host, $user, $db_name, $pass)
{
    $conn = mysql_connect("$host", "$user", "$pass") or die("Не могу соединиться с MySQL.");
    mysql_select_db($db_name) or die("Не могу подключиться к базе.");
}

Connect($host, $user, $db_name, $pass);

$field =  "*";
$row = "hash";
$table = "user";
function Select($field,$row,$table,$option=false)
{
    if(!$option)
    {
        $sql = "SELECT $field FROM $table";
    }
    $data = mysql_query($sql);
    //print_r ($data);
    //$tmt = mysql_fetch_assoc($data);
    //print_r ($tmt);
    while(mysql_fetch_assoc($data))
    {
        $array[] = mysql_fetch_assoc($data);
    }
    print_r ($array);
}

Select($field,$row,$table,$option=false);


function Insert($field=false,$row,$table,$value)
{
    if(!$field)
    {
        $exp = mysql_query("INSERT INTO `$table` (`$row`) VALUES ('$value')");
    }
}

$row = "hash";
$value = "123qwert";
Insert($field=false,$row,$table,$value);
*/

$obj = new DB();
$obj->Connect();
$row = "hash";
$table = "user";
$obj->Select($field,$row,$table,$option=false);
$value = "123qwert";
$obj->Insert($field=false,$row,$table,$value);
?>

</PRE>

<?php
include '../template/footer.php.tpl';
?>