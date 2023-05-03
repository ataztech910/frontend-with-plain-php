<?php
    require "head.php";
    require "main.php";
    require "table.php";
    require "navigation.php";
    $mainTable = ['Hello', 'Gutten Morgen'];
?>
<html lang="en">
    <?php echo Head();?>
    <body>
        <?php echo Navigation();?>
        <?php echo Table($mainTable);?>
        <?php echo Main();?>    
    </body>
</html>