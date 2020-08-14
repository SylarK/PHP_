<?php

    date_default_timezone_set('America/Sao_Paulo');

    //  INSERT PDO  
    $pdo = new PDO('mysql:host=localhost;port=3306;dbname=modulo_8', 'root', '');

    if(isset($_POST['acao'])){
        
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $registro = date('Y-m-d H:i:s');
        $id = $_POST['id'];

    

        $sql = $pdo->prepare("INSERT INTO `clientes` VALUES (?, ?, ?, ?)");

        $sql->execute([$id, $nome, $sobrenome, $registro]);
        echo('Cliente inserido.');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>

    <form method='post'>
        <input type='number' name='id' required>
        <input type='text' name='nome' placeholder='First Name' required>
        <input type='text' name='sobrenome' placeholder='Last Name' required>
        <input type='submit' name='acao'>
    </form>
    
</body>
</html>