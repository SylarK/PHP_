<?php

    date_default_timezone_set('America/Sao_Paulo');

    //  UPDATE e CONDIÇÕES PDO  
    $pdo = new PDO('mysql:host=localhost;port=3306;dbname=modulo_8', 'root', '');

    $id = 2;

    $sql = $pdo->prepare("UPDATE `clientes` SET nome='Ron', sobrenome='Potter' WHERE id=$id");
    // WHERE : AND / OR

    if($sql->execute()){
        echo 'Ok';
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