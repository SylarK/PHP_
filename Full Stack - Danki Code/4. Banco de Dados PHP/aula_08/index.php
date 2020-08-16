<?php

/*
    IMPORT, EXPORT -> BACKUP DATABASE
    SEGURANÇA UTILIZANDO O TRY AND CATCH
*/

/*  Definindo as constantes */
define('HOST', 'localhost');
define('DATABASE','modulo_8');
define('USER', 'root');
define('PASS', '');

try{
    $pdo = new PDO('mysql:host='.HOST.';dbname='.DATABASE.';port=3306',USER, PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch (Exception $e){
    echo '<h3>Ocorreu um erro ao conectar. Contate o Administrador da Rede.</h3>';
}

?>