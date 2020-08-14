<?php

    $pdo = new PDO('mysql:host=localhost;port=3306;dbname=db_teste', 'root', '');
    /*https://www.php.net/manual/pt_BR/pdo.error-handling.php*/
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = $pdo->prepare('SELECT * FROM `clientes` ORDER BY cargo DESC');
    /*
        ORDER BY -> ORDERNAR POR    -> ORDER BY cargo DESC
        GROUP BY -> AGRUPAR POR
        LIMIT    -> LIMITA A QUANTIDADE DO RETORNO
    
    
    */
    $sql->execute();

    $clientes = $sql->fetchAll();

    foreach ($clientes as $key => $value) {
        echo $value['nome'];
        echo '<br>';
        echo 'Cargo: '.$value['cargo'];
        echo '<hr>';
    }

?>