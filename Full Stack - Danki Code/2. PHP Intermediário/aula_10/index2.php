<?php
    session_start();
    //unseat($_SESSION['id']);
    //session_destroy();
    if(isset($_SESSION['id'])){
        echo ($_SESSION['id']);
    }
?>