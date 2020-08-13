<?php

    //final -> não permite que a classe seja herdada
    final class Filha{

        public function showHello(){
            echo 'Hello World';
        }
        

    }

    class FilhaAdotiva{

        public function showCelebrate(){
            echo 'Uhuuuuuuuul';
        }

        //protected != private
        //private -> somente na própria classe (sem ser herdada)
        protected function showTest(){

            echo 'This is a function test';

        }

        public function polimorfismo(){

            echo 'I will change.';

        }

    }

    class Pai extends FilhaAdotiva{

        public function showBye(){
            echo 'Bye dear';
            echo '<br>';
            $this->showTest();
        }

        public function polimorfismo(){
            //parent::polimorfismo()
            echo 'I changed.';

        }

    }

    $pai = new Pai;
    $filha = new Filha;

    $pai->showBye();
    echo '<br>';
    $filha->showHello();
    echo '<br>';
    $pai->showCelebrate();

?>