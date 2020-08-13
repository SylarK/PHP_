<?php

    class Person{
        //Object
        public $nome = 'Lucas';
        public $idade = 25;
        public $peso = '84 kg';

        public function andar(){
            $this->parar();
            echo 'Em movimento<br>';
        }

        private function parar(){
            echo 'Parado<br>';
        }

        private function correr(){
            echo 'Correndo';
        }
        


    }


    //Instanciar

    $pessoa = new Person;
    $pessoa->andar();
?>