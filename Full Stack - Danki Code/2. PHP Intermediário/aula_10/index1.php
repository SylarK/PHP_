<?php
    //  COOKIES AND SESSIONS

    session_start();
    setcookie('nome', 'Lucas', time() + (60*2), '/');
    //setcookie('nome', 'Lucas', time() - (60*2), '/');

    echo($_COOKIE['nome']);
    $_SESSION['id'] = 1;

?>