<?php

    //  LOCK TABLES

    define('HOST', 'localhost');
    define('DATABASE','db_teste');
    define('USER', 'root');
    define('PASS', '');

    try{
        $pdo = new PDO('mysql:host='.HOST.';dbname='.DATABASE.';port=3306',USER, PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch (Exception $e){
        echo '<h3>Ocorreu um erro ao conectar. Contate o Administrador da Rede.</h3>';
    }

    $sql = $pdo->prepare('SELECT * FROM clientes');
    $sql->execute();
    $clientes = $sql->fetchAll();
    foreach ($clientes as $key => $value) {
        echo $value['nome'];
        echo('<hr>');
    }

?>