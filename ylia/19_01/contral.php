<?php
include 'data.php';
include 'function.php';

include 'header.php';

if (isset($_POST['enter']))
    echo implode('<br>', cont_fields());

include 'footer.php';
?>