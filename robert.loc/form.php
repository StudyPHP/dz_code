<?php 
include 'include.php'; 
include 'template/header.php';
?>

<!-- Start: Registration Form -->
<div>
    <form method="POST" action="control.php">
        <h3>Заполните форму для регистрации:</h3>
        <pre>
<?php
show_form ($form);
?>
        </pre>
    </form>
</div>
<!-- End: Registration Form -->

<?php
include 'template/footer.php';
?>   
