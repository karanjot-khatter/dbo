<?php
include 'includes/autoload.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wiidth=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatiable" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $testObj = new Test();
        $testObj->getUsers();
    ?>
</body>
</html>
