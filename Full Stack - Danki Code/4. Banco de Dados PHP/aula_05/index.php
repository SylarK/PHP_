<?php

    $pdo = new PDO('mysql:host=localhost;port=3306;dbname=modulo_8', 'root', '');

    $sql = $pdo->prepare("SELECT * FROM posts");

    $sql->execute();

    $info = $sql->fetchAll();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

    <?php

    /*    echo '<pre>';
        print_r($info);
        echo '</pre>';
    */

    foreach ($info as $key => $value) {
        
        echo 'Titulo: '.$value['titulo'];
        echo '<br>';
        echo 'Texto: '.$value['conteudo'];
        echo '<hr>';


    }

    ?>
    
</body>
</html>