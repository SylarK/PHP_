<?php

class Painel
{
    //ver se está logado utilizando a sessão
    public static function logado(){
        return isset($_SESSION['login']) ? true : false;
    }
}


?>