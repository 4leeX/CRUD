<?php include "db.php"; ?>
<?php include "functions.php"; ?>

<?php showAllData() ?>

<?php include "includes/header.php" ?>

<div class="container">
    <div class="col-sm-6">
        
    <?php
        readRows();
    ?>

    </div>

<?php include "includes/footer.php"?>