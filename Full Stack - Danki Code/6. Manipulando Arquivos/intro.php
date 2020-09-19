<?php 

    //Verificar se o arquivo existe
    //file_exists('file.txt'){

    //$content = "Novo conteúdo criado através do php\r Outra linha";
    //file_put_contents('file.txt', $content);
    //Ler o que tenho no arquivo
    //$content = file_get_contents('file.txt');
    //echo nl2br($content);

    /*for($i = 0; $i < 100; $i++){
        $conteudo = 'Meu conteúdo do arquivo' .$i;
        file_put_contents('file'.$i.'.txt',$conteudo);
    }*/
    
    //deletando
    for($i = 0; $i < 100; $i++){
       unlink('file'.$i.'.txt');
    }

?>