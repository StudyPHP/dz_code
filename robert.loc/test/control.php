<?php
include '../include/include.php';
include '../template/header.php.tpl';
?>

<PRE>

<?php
$tst = new DB();
$tst->Connect();
$tst->Select($row, $table, $option);
?>

</PRE>

<?php
include '../template/footer.php.tpl';
?>