<?php 
include 'include/include.php';
session_arr ($_SESSION);
log_out();
include 'template/header.php.tpl'; 
?>

<div>
    <h2>Досвидание <?=$_SESSION['name']." ".$_SESSION['surname']?>!</h2>
</div>

<?php 
$_SESSION = array();
@session_destroy ();
mysql_close($connect);
include 'template/footer.php.tpl'; 
?>