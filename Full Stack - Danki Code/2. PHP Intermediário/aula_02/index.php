<?php
    //  ARRAY MULTIDIMENSIONAL
    
    $myClients = [['Harry', '25', 'Male'], ['Hermione', '22', 'Female']];
    $myItens = array(array('name'=>'Apple', 'price' => '5', 'units' => '5'));

    $cont = count($myClients);

    for ($i=0; $i < $cont; $i++) { 
        
        for ($j=0; $j <= $cont; $j++) { 
            echo $myClients[$i][$j].'<hr>';
        }

    }
    
?>