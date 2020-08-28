<?php

    include('../config.php');

    if(Painel::logado() == false){
        include('login.php');   //se não existir a sessão login
    } else {
        include('main.php');    //caso exista
    }


?>