<?php

    //uma classe criada para ser herdada
    abstract class Movimentos{

        public function andar(){
            echo 'Andando';
        }
        public function parar(){
            echo 'Parado';
        }
        public function Correr(){
            echo 'Correr';
        }
        public function Pular(){
            echo 'Pular';
        }

        //todas as classes que herdam esta classe deverá ter este método declarado
        abstract function abilidade();

    }

    class Personagem extends Movimentos{

        public $nome;
        public $idade;
        public $peso;

        //declarando função abstrata
        public function abilidade(){
            echo '<hr>';
            echo 'Lanças de água';
            echo '<hr>';
        }

        static function msg(){
            echo 'I\'m not a NPC';
        }

        //chamando método estático dentro de outra função
        public function say(){

            //Personagem::msg();
            self::msg();

        }



    }

        $marvin = new Personagem;
        $marvin->nome = 'Marvin';
        $marvin->idade = 29;
        $marvin->peso = 80;

        $marvin->andar();
        $marvin->abilidade();
        $marvin->say();

?>