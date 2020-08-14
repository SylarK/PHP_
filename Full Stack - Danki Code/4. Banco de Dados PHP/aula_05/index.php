<?php

    $pdo = new PDO('mysql:host=localhost;port=3306;dbname=modulo_8', 'root', '');

    /*
    $sql = $pdo->prepare("SELECT * FROM posts");

    $sql->execute();

    $info = $sql->fetchAll();

    /*    echo '<pre>';
        print_r($info);
        echo '</pre>';
    
    CONSULTA SIMPLES
    foreach ($info as $key => $value) {
        
        echo 'Titulo: '.$value['titulo'];
        echo '<br>';
        echo 'Texto: '.$value['conteudo'];
        echo '<hr>';

    }
    */

    /*
    $sql = $pdo->prepare("SELECT * FROM categorias");
    $sql->execute();
    $info = $sql->fetchAll();
    */
    /*
    FOREACH ENCADEADO PARA BUSCAR A CATEGORIA, E DENTRO DE CADA CATEGORIA OS POSTS
    foreach ($info as $key => $value) {
        $categoria_id = $value['id'];
        echo('Exibindo posts de :'.$value['nome']);
        echo('<br>');
        $sql = $pdo->prepare("SELECT * FROM posts WHERE categoria_id = $categoria_id");
        $sql->execute();
        $infoPosts = $sql->fetchAll();
        foreach ($infoPosts as $key => $value) {
            echo 'Titulo: '.$value['titulo'];
            echo '<br>';
            echo 'Texto: '.$value['conteudo'];
            echo '<hr>';
        }
    }
    */

    $sql =  $pdo->prepare("SELECT * FROM `posts` INNER JOIN `categoria` ON `posts`.`categoria_id`=`categoria`.`id`");
    $sql->execute();

    /*https://www.php.net/manual/pt_BR/pdostatement.fetch.php*/
    $info = $sql->fetchAll(PDO::FETCH_ASSOC);
    
    echo '<pre>';
    print_r($info);
    echo '</pre>';




?>



    

