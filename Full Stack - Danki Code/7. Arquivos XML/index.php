<?php 

        //Ler arquivo XML

        //$xml = simplexml_load_file('arquivo.xml');

    /*
    Me retorna um Objeto
    print_r($xml);
    */

    //echo $xml->informacoes1->item->title;

        //Escrever arquivo xml através de um array

    $arr = ['Lucas Amado'=>'nome', 26=>'idade', 'Programador'=>'cargo'];
    $xml = new SimpleXMLElement('<root/>');
    array_walk_recursive($arr, array($xml, 'addChild'));
    file_put_contents('arquivo.xml', $xml->asXML());


?>
