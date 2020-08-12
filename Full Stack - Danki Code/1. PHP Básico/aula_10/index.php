<?php 
    /*  OPERATORS   */
    /*
        =   -   atribuição de valor
        ==  -   comparação
        === -   comparação idêntica (mesmo tipo)
        !=  -   diferente
  

    */

    $num1 = 10;
    $num2 = '10';

    if ($num1 == $num2){
        echo('Truee');
    } elseif ($num1 === $num2) {
        echo('Mesmo tipo')
    }

?>