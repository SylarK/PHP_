<?php

    // FUNCTIONS FOR WORK WITH ARRAYS

    // Array merge - união de arrays
    $array1 = array("color" => "red", 2, 4);
    $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
    $result = array_merge($array1, $array2);
    print_r($result);

    //  Array intersect key

    $arr1 = ['chave1'=>'valor1', 'chave2'=>'chave2'];
    $arr2 = ['chave3'=>'valor3', 'chave1'=>'chave4'];
    
    echo('<hr>');
    print_r(array_intersect_key($arr1, $arr2)); 

    //  Array map
    
    echo('<hr>');
    $names = ['<h2>John</h2>', '<h4>Marker</h4>', '<p>Bob</p>', '<h1>Tekel</h1>'];
    print_r(array_map('strip_tags', $names));



?>