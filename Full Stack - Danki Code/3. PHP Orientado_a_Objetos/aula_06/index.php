<?php

    include('Class1.php');

    $teste = new Class1('Lucas', 25);
    echo $teste->getNome();
    echo '<hr>';    
    echo $teste->getIdade();

?>