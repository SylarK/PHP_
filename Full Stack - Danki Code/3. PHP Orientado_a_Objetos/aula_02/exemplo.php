<?php

    class Exemplo {

        private $var1;
        public $var2;
        static $var3 = 'Variável estática';
        /*
        private function metodo(){
            echo $this->$var1;
        }
        public function metodo2(){
            echo $this->$var2;
        }
        static function metodo3(){
            echo 'Metodo estático.';
        }*/

        public function setVar1($var1){
            $this->var1 = $var1;
        }

        public function getVar1(){
            return $this->var1;
        }

    }

?>