<?php 
require_once("./includes/functions.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "teste\n de\n quebra\n de\n lilha \n";
    echo "teste<br> de<br> quebra<br> de<br> lilha <br>";  
    ?>
    <p>
        Soma: <?= soma(30,20); ?> <br />
        Subtraçao: <?= subComRetornoPOsitivo(20,60); ?> <br>
        Multiplicaçao: <?= multi(2,5); ?>   <br> 
        Divide: <?= divide(5,2); ?>
    </p>
</body>
</html>