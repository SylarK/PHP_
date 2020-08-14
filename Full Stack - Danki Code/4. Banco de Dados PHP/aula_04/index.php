<?php

    date_default_timezone_set('America/Sao_Paulo');

    //  DELETE PDO  
    $pdo = new PDO('mysql:host=localhost;port=3306;dbname=modulo_8', 'root', '');

    $id = 2;

    $sql = $pdo->prepare("DELETE FROM `clientes` WHERE id=?");
    // DELETE

    if($sql->execute([$id])){
        echo 'Deleted.';
    }

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

    
</body>
</html>