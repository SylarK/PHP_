<?php
    // Interfaces e Implementação

    include('Interface1.php');

    class Teste implements Interface1  {

        public function printOnScreen($par){
            echo "<h1>Hello {$par} !!</h1>";
        }

    }

    $teste = new Teste;
    $teste->printOnScreen('Harry');

?>