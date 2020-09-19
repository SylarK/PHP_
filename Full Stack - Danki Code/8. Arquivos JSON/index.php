<?php

    $json = '{"a":"Lucas Amado","b":{"0":"Felipe", "1":"Joao"},"c":3,"d":4,"e":5}';

    //var_dump(json_decode($json));
    //var_dump(json_decode($json, true));

    $obj = json_decode($json);
    //Passando o segundo parametro como true consigo o retorno de um array
    $arr = json_decode($json, true);

    //echo $obj->a;
    //echo $arr['a'];
    //echo $arr['b']['0'];

    /*      Transformando um array em json      */
    /*
    $arr = ['nome'=>'Lucas Amado', 'cargo'=>'Desenvolvedor Web'];
    $json = json_encode($arr);
    echo $json;*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
    
        $(function(){
            $.ajax({
                url:'request.php',
                dataType:'json'
            }).done(function(data){
                console.log(data.nome);
            })
        })
    </script>
    
</body>
</html>