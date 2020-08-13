<?php

    //  DIFERENTES SINTAXES

    $nome = 'Lucas';
    if ($nome == 'Lucas'){
        echo('Correct');
    }

    echo('<hr>');

    $nome = 'Soul';
    if ($nome == 'Soul'):
        echo('Correct too');
    endif;

    echo('<hr>');

    $cont = 10;
    while($cont > 0):
        echo($cont.'<br>');
        $cont--;
    endwhile;

?>