<?php
    // FUNÇÕES NATIVAS E CRIAÇÃO

    function showName($name){
        echo('<h2>Name : '.$name.'<Hr>');
    }

    function sum($num1, $num2){
        echo($num1 + $num2).'<hr>';
    }
    function sub($num1, $num2){
        echo($num1 - $num2).'<hr>';
    }
    function times($num1, $num2){
        echo($num1 * $num2).'<hr>';
    }
    function div($num1, $num2){
        echo($num1 / $num2).'<hr>';
    }

    showName('Lucas');
    sum(5,10);
    sub(5,10);
    times(5,10);
    div(5,10);

?>