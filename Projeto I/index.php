<?php include('config.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="decription" content="">
    <meta name="keywords" content="key,words,pso">
    <title>Web I</title>
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>style/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <link href='style/styles.css' rel='stylesheet'>
    <link rel='icon' href='<?php INCLUDE_PATH; ?>favicon.svg' type='image/x-icon' />
</head>
<body>
    <base base="<?php echo INCLUDE_PATH; ?>"> 
    <?php
  
        /*Pegar URL*/
        $url = isset($_GET['url']) ? $_GET['url'] : 'home';
        switch ($url) {
            case 'depoimentos':
                echo '<target target="depoimentos"/>';
                break;

            case 'servicos':
                echo '<target target="servicos"/>';
                break;
        }

    ?>

    <?php //new Email() ?>

    <header>
        <div class='center'>
            <div class="logo left"><a href='#'>Logo</a></div>
            <nav class='desktop right'>
                <ul>    
                    <li><a href='<?php echo INCLUDE_PATH; ?>#'>Home</a></li>
                    <li><a href='<?php echo INCLUDE_PATH; ?>depoimentos'>Depoimentos</a></li>
                    <li><a href='<?php echo INCLUDE_PATH; ?>servicos'>Servicos</a></li>
                    <!-- realtime : página a ser carregada -->
                    <li><a realtime = 'contato' href='<?php echo INCLUDE_PATH; ?>contato'>Contato</a></li>
                </ul>
            </nav>
            <nav class='mobile right'>
                <div class='mobile-menu'>
                    <i class='fa fa-bars' aria-hidden='true'></i>
                </div>
                <ul>    
                    <li><a href='<?php echo INCLUDE_PATH; ?>#'>Home</a></li>
                    <li><a href='<?php echo INCLUDE_PATH; ?>depoimentos'>Depoimentos</a></li>
                    <li><a href='<?php echo INCLUDE_PATH; ?>servicos'>servicos</a></li>
                    <!-- realtime : página a ser carregada -->
                    <li><a realtime = 'contato' href='<?php echo INCLUDE_PATH; ?>contato'>Contato</a></li>
                </ul>
            </nav>
            <div class='clear'></div>
        </div>
    </header>

    <div class='container-principal'>
        <?php      
            if(file_exists('pages/'.$url.'.php')){
                include('pages/'.$url.'.php');
                if($url == 'contato'){
                    /*Fixando footer*/
                    $pagina404 = true;
                }
            }else {
                /*Caso a página não exista*/
                if($url!='depoimentos' && $url!='servicos'){
                    
                    $pagina404 = true;
                    include('pages/404.php');
                }else{
                    include('pages/home.php');
                }
            }

        ?>
    </div>


    <footer <?php if(isset($pagina404) && $pagina404 == true) echo 'class="fixed"'?>>

        <div class="center">
            <p>Todos os direitos reservados.</p>
        </div>

    </footer>

    <script src='<?php echo INCLUDE_PATH; ?>js/jquery.js'></script>
    <script src='<?php echo INCLUDE_PATH; ?>js/scripts.js'></script>
    <script src='<?php echo INCLUDE_PATH; ?>js/slider.js'></script>
    <?php

        if($url == 'contato')
        { 
    ?>

    <?php
        }
    ?>
    <!--Animacao especialidades : <script src='<?php //echo INCLUDE_PATH; ?>js/exemplo.js'></script>-->
    <script src='<?php echo INCLUDE_PATH; ?>js/formularios.js'></script>

</body>
</html>
