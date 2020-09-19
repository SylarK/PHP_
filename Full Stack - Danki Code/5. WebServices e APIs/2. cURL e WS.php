<?php

    $curl = curl_init();

    curl_setopt($curl, CURLOPT_URL, "http://localhost/PHP_/Full%20Stack%20-%20Danki%20Code/5.%20WebServices%20e%20APIs/request.php");
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query(array('request' => 'nome_return')));

    //Tudo que o servidor me respondeu eu quero que retorne
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    //Execute
    $server_output = curl_exec($curl);

    //Close
    curl_close($curl);


    //echo $server_output; //Me retornou um json

    $resultado = json_decode($server_output);

    echo $resultado->resultado->nome;
    echo '<br>';
    echo $resultado->resultado->idade;


    // echo $resultado->titulo[0];
    // echo '<br>';
    // echo $resultado->conteudo[0];

?>