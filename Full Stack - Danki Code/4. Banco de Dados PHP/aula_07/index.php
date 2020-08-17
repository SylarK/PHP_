<?php

    $pdo = new PDO('mysql:host=localhost; dbname=db_teste; port=3306', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    //$sql = $pdo->prepare('SELECT * FROM `clientes` ORDER BY nome ASC LIMIT 1 , 3')
    //$sql = $pdo->prepare("SELECT * FROM `clientes` INNER JOIN `cargos` ON `clientes`.`cargo` = `cargos`.`id`");
    //$sql = $pdo->prepare("SELECT * FROM `clientes` RIGHT JOIN `cargos` ON `clientes`.`cargo` = `cargos`.`id`");
    $sql = $pdo->prepare("SELECT * FROM `clientes` LEFT JOIN `cargos` ON `clientes`.`cargo` = `cargos`.`id`");
    $sql->execute();
    $clientes = $sql->fetchAll();
    foreach ($clientes as $key => $value){
        echo $value['nome'];
        echo ' - ';
        echo $value['nome_cargo'];
        echo '<hr>';

    }


?>