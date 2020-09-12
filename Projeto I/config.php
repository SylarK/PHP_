<?php
    session_start();
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

    define('INCLUDE_PATH', 'http://localhost/PHP_/Projeto%20I/');
    define('INCLUDE_PATH_PAINEL', INCLUDE_PATH.'painel/');

    //DB
    define('HOST','localhost');
    define('USER','root');
    define('PASSWORD','');
    define('DATABASE','projeto_01');

    //Funções
    function pegaCargo($cargo){

        $arr = [
            '0' => 'Normal',
            '1' => 'Administrador',
            '2' => 'Sub-Administrador'
        ];

        return $arr[$cargo];

    }

?>