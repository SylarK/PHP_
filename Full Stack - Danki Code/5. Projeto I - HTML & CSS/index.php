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
</head>
<body>

    <header>
        <div class='center'>
            <div class="logo left"><a href='#'>Logo</a></div>
            <nav class='desktop right'>
                <ul>    
                    <li><a href='<?php echo INCLUDE_PATH; ?>#'>Home</a></li>
                    <li><a href='<?php echo INCLUDE_PATH; ?>sobre'>Sobre</a></li>
                    <li><a href='<?php echo INCLUDE_PATH; ?>servicos'>Blog</a></li>
                    <li><a href='<?php echo INCLUDE_PATH; ?>contato'>Contato</a></li>
                </ul>
            </nav>
            <nav class='mobile right'>
                <div class='mobile-menu'>
                    <i class='fa fa-bars' aria-hidden='true'></i>
                </div>
                <ul>    
                    <li><a href='<?php echo INCLUDE_PATH; ?>#'>Home</a></li>
                    <li><a href='<?php echo INCLUDE_PATH; ?>sobre'>Sobre</a></li>
                    <li><a href='<?php echo INCLUDE_PATH; ?>servicos'>Blog</a></li>
                    <li><a href='<?php echo INCLUDE_PATH; ?>contato'>Contato</a></li>
                </ul>
            </nav>
            <div class='clear'></div>
        </div>
    </header>

    <section class='banner-principal'>
        <div class='overlay'></div>
        <div class="center">
            <form>
                <h2>Digite o seu email: </h2>
                <input type='email' name='email'>
                <input type='submit' name='acao' value='Cadastrar'>
            </form>
        </div>
    </section>

    <section class='quem-somos'>
        <div class="center">                         
            <div class='w50 left'>
                <h2>Lucas Amado</h2>
                <!--<h2>Code Steel</h2>-->
                <p>Sed scelerisque magna pretium auctor sodales. In et viverra metus, nec fermentum ligula. Phasellus quam sapien, fermentum sit amet ullamcorper 
                ut, tempus ac nulla. Aliquam imperdiet, lacus vitae posuere faucibus, nulla lectus posuere quam, non laoreet magna risus condimentum est. 
                Pellentesque purus tortor, cursus eget ante quis, pretium tempor erat. Maecenas dignissim justo at laoreet interdum. 
                Maecenas pharetra id turpis id venenatis. In sit amet leo id tellus dictum hendrerit in non est. Nullam luctus, dolor pulvinar rhoncus laoreet, 
                ante justo dignissim massa, et finibus elit purus sed nisi. Sed in risus nulla.</p>
            </div>

            <div class='w50 left'>
                <img class='right' src='<?php echo INCLUDE_PATH; ?>img/picture.png'>
            </div>   
            <div class='clear'></div> 
        </div>

    </section>

    <section class='especialidades'>
        <div class="center">
            <h2 class='title'></h2>
            <div class="w33 left box-especialidade">
                <h3><i class='fa fa-css3' aria-hidden='true'></i></h3>
                <h4>CSS3</h4>
                <p>Nam lobortis mi id ligula elementum, non euismod nisl gravida. Nulla ac lectus in dui viverra volutpat at eget leo. 
                Mauris vel egestas elit. Cras vel augue mi. In purus augue, pulvinar sit amet lobortis eu, rhoncus et ipsum. 
                Morbi auctor nunc ut ex euismod venenatis. Duis tincidunt ullamcorper ultrices. Pellentesque tempus purus justo, et consequat 
                orci viverra nec. Curabitur porta feugiat sagittis. Pellentesque a porttitor arcu. Duis molestie, justo at hendrerit vehicula, 
                est felis congue mauris, in tempus dui purus quis turpis. Phasellus rhoncus magna at urna aliquam, sit amet dignissim lectus fringilla. 
                Ut ut hendrerit diam. Donec commodo varius malesuada.
                </p>
            </div>
            <div class="w33 left box-especialidade">
                <h3><i class='fa fa-html5' aria-hidden='true'></i></h3>
                <h4>HTML5</h4>
                <p>Nam lobortis mi id ligula elementum, non euismod nisl gravida. Nulla ac lectus in dui viverra volutpat at eget leo. 
                Mauris vel egestas elit. Cras vel augue mi. In purus augue, pulvinar sit amet lobortis eu, rhoncus et ipsum. 
                Morbi auctor nunc ut ex euismod venenatis. Duis tincidunt ullamcorper ultrices. Pellentesque tempus purus justo, et consequat 
                orci viverra nec. Curabitur porta feugiat sagittis. Pellentesque a porttitor arcu. Duis molestie, justo at hendrerit vehicula, 
                est felis congue mauris, in tempus dui purus quis turpis. Phasellus rhoncus magna at urna aliquam, sit amet dignissim lectus fringilla. 
                Ut ut hendrerit diam. Donec commodo varius malesuada.
                </p>
            </div>
            <div class="w33 left box-especialidade">
                <h3><i class='fa fa-gg-circle' aria-hidden='true'></i></h3>
                <h4>JS</h4>
                <p>Nam lobortis mi id ligula elementum, non euismod nisl gravida. Nulla ac lectus in dui viverra volutpat at eget leo. 
                Mauris vel egestas elit. Cras vel augue mi. In purus augue, pulvinar sit amet lobortis eu, rhoncus et ipsum. 
                Morbi auctor nunc ut ex euismod venenatis. Duis tincidunt ullamcorper ultrices. Pellentesque tempus purus justo, et consequat 
                orci viverra nec. Curabitur porta feugiat sagittis. Pellentesque a porttitor arcu. Duis molestie, justo at hendrerit vehicula, 
                est felis congue mauris, in tempus dui purus quis turpis. Phasellus rhoncus magna at urna aliquam, sit amet dignissim lectus fringilla. 
                Ut ut hendrerit diam. Donec commodo varius malesuada.
                </p>
            </div>
            <div class='clear'></div>
        </div>
    </section>
    <section class='extras'>
        <div class="center">

            <div class="w50 left panel-depoimentos">
                <h2 class='title'>Depoimentos</h2>
                <div class="depoimento-single">
                    <p class='depoimentos-descricao'>"Nam lobortis mi id ligula elementum, non euismod nisl gravida. Nulla ac lectus in dui viverra volutpat at eget leo. 
                Mauris vel egestas elit. Cras vel augue mi. In purus augue, pulvinar sit amet lobortis eu, rhoncus et ipsum. 
                Morbi auctor nunc ut ex euismod venenatis. Duis tincidunt ullamcorper ultrices. Pellentesque tempus purus justo, et consequat 
                orci viverra nec."
                    </p>
                    <p class='nome-autor'>Lorem Ipsum</p>
                </div>
                <div class="depoimento-single">
                    <p class='depoimentos-descricao'>"Nam lobortis mi id ligula elementum, non euismod nisl gravida. Nulla ac lectus in dui viverra volutpat at eget leo. 
                Mauris vel egestas elit. Cras vel augue mi. In purus augue, pulvinar sit amet lobortis eu, rhoncus et ipsum. 
                Morbi auctor nunc ut ex euismod venenatis. Duis tincidunt ullamcorper ultrices. Pellentesque tempus purus justo, et consequat 
                orci viverra nec."
                    </p>
                    <p class='nome-autor'>Lorem Ipsum</p>
                </div>
                <div class="depoimento-single">
                    <p class='depoimentos-descricao'>"Nam lobortis mi id ligula elementum, non euismod nisl gravida. Nulla ac lectus in dui viverra volutpat at eget leo. 
                Mauris vel egestas elit. Cras vel augue mi. In purus augue, pulvinar sit amet lobortis eu, rhoncus et ipsum. 
                Morbi auctor nunc ut ex euismod venenatis. Duis tincidunt ullamcorper ultrices. Pellentesque tempus purus justo, et consequat 
                orci viverra nec."
                    </p>
                    <p class='nome-autor'>Lorem Ipsum</p>
                </div>
            </div>
            <div class="w50 left panel-servicos">
                <h2 class='title'>Serviços</h2>
                <div class="servicos">
                    <ul>
                        <li>
                        Nam lobortis mi id ligula elementum, non euismod nisl gravida. Nulla ac lectus in dui viverra volutpat at eget leo. 
                        Mauris vel egestas elit. Cras vel augue mi. In purus augue, pulvinar sit amet lobortis eu, rhoncus et ipsum. 
                        </li>
                        <li>
                        Nam lobortis mi id ligula elementum, non euismod nisl gravida. Nulla ac lectus in dui viverra volutpat at eget leo. 
                        Mauris vel egestas elit. Cras vel augue mi. In purus augue, pulvinar sit amet lobortis eu, rhoncus et ipsum. 
                        </li>
                        <li>
                        Nam lobortis mi id ligula elementum, non euismod nisl gravida. Nulla ac lectus in dui viverra volutpat at eget leo. 
                        Mauris vel egestas elit. Cras vel augue mi. In purus augue, pulvinar sit amet lobortis eu, rhoncus et ipsum. 
                        </li>
                        
                    </ul>
                
                </div>
            </div>
            <div class='clear'></div> 
        
        </div>
    </section>

    <footer>

        <div class="center">
            <p>Todos os direitos reservados.</p>
        </div>

    </footer>

    <script src='<?php echo INCLUDE_PATH; ?>js/jquery.js'></script>
    <script src='<?php echo INCLUDE_PATH; ?>js/scripts.js'></script>
    
</body>
</html>
