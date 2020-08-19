<?php
    /*Criando uma função para criar dinamicamente a nossa classe*/
    $autoload = function($class){
        /*Verificando se a classe adicionada foi a classe Email*/
        if($class == 'Email'){
            // include - require_once
            include('classes/phpmailer/src/Exception.php');
            include('classes/phpmailer/src/PHPMailer.php');
            include('classes/phpmailer/src/SMTP.php');
        }
        include('classes/'.$class.'.php');
    };

    spl_autoload_register($autoload);

    define('INCLUDE_PATH', 'http://localhost:8090/dashboard/PHP_/Projeto%20I/')

?>