<?php

    class Constantes{

        const VALOR = 10000;
        
        public function __construct(){
            echo self::VALOR;
        }

    }

    $const = new Constantes;
    echo '<br>';
    echo Constantes::VALOR;
?>