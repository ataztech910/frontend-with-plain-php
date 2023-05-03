<?php
    require "head.php";
    require "table.php";
    require "contacts.php";
    require "navigation.php";
    $mainTable = ['Hello', 'Gutten Morgen'];
?>
<html lang="en">
    <?php echo Head();?>
    <body>
        <?php echo Navigation();?>
        <?php echo Table($mainTable);?>
        BLOG
        <?php echo Contacts();?>
    </body>
</html>
