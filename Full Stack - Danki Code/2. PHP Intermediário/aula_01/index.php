<?php
    /*  FOREACH     */

    //1
    $myArray = ['Harry', 'Hermione', 'Ron', 'Snape'];

    foreach ($myArray as $key => $value) {
        echo("Position $key => $value <hr>");
    }

    //2
    $total = count($myArray);

    for($i=0; $i < $total; $i++){

        echo($myArray[$i].'<br>');

    }

?>