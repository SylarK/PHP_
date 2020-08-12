<?php 
    //  LOOPING 

    //FOR
    echo('<h3>FOR</h3>');
    for ($i=0; $i <= 10; $i++) { 
        echo($i.'. Hello World<br>');
    }

    //WHILE
    echo('<br><br><h3>WHILE</h3>');
    $cont = 10;
    while($cont > 0){
        echo("$cont. Hello Dude!<br>");
        $cont--;
    }

    //DO... WHILE
    echo('<br><br><h3>DO WHILE</h3>');
    do {
        echo('Undergrooot<br>');
        $cont--;
    } while ($cont > -5);

?>