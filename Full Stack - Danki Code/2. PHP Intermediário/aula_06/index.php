<?php
    //  STRING MANIPULATION

    $content = 'is the place where a person is sent to who committed violent crimes when they were alive. Shinigami are forbidden to go there. One day, prisoners revolt and make their escape to Karakura';

    //  Recortar string
    echo substr($content, 0, 20).'<hr>';

    $var = explode(' ', $content);
    print_r($var);

    $original = implode(' ', $var);
    print('<hr>'.($original).'<hr>');

    //retirar código html
    $content2 = '<h1>Lucas</h1>';
    echo(strip_tags($content2).'<hr>');

    echo htmlentities('<div></div>');

?>