<?php

class Painel
{
    //ver se está logado utilizando a sessão
    public static function logado(){
        return isset($_SESSION['login']) ? true : false;
    }

    public static function loggout(){
        session_destroy();
        header('Location: '.INCLUDE_PATH_PAINEL);
    }

}


?>