<?php
    include('exemplo.php');

    $exemplo = new Exemplo;
    $exemplo2 = new Exemplo;

    // $exemplo->var1 = 'Hello'; 
    $exemplo->var2 = 'Hello, World!';
    $exemplo2->var2 = 2020;
    
    // echo $exemplo->metodo2();

    /*
    echo $exemplo->var2;
    echo '<br>';
    echo $exemplo2->var2;
    echo '<br>';
    Exemplo::$var3 = 'Mudando variável estática';
    echo Exemplo::$var3;
    echo '<br>';
    Exemplo::metodo3();
    */
    echo '<br>';
    $exemplo->setVar1('Hello');
    echo($exemplo->getVar1());
    echo '<br>';
    $exemplo2->setVar1('World!');
    echo($exemplo2->getVar1());



?>