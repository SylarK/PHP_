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

    define('BASE_DIR_PAINEL',__DIR__.'/painel');    

    //DB
    define('HOST','localhost');
    define('USER','root');
    define('PASSWORD','');
    define('DATABASE','projeto_01');

    //Constantes para o painel de controle
	define('NOME_EMPRESA','Inovare');

    //Funções
    function pegaCargo($cargo){

        $arr = [
            '0' => 'Normal',
            '1' => 'Sub-Administrador',
            '2' => 'Administrador'
        ];

        return $arr[$cargo];

    }

    function selecionadoMenu($par){
		/*<i class="fa fa-angle-double-right" aria-hidden="true"></i>*/
		$url = explode('/',@$_GET['url'])[0];
		if($url == $par){
			echo 'class="menu-active"';
		}
    }
    
    function verificaPermissaoMenu($permissao){
		if($_SESSION['cargo'] >= $permissao){
			return;
		}else{
			echo 'style="display:none;"';
		}
	}

	function verificaPermissaoPagina($permissao){
		if($_SESSION['cargo'] >= $permissao){
			return;
		}else{
			include('painel/pages/permissao_negada.php');
			die();
		}
	}

?>