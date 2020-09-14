<?php

    if(isset($_GET['loggout'])){
        Painel::loggout();
        Painel::redirect();
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Controle</title>
    <link rel='stylesheet' href='<?php echo INCLUDE_PATH ?>style/font-awesome.min.css'>
    <link href='<?php INCLUDE_PATH_PAINEL ?>css/styles.css' rel='stylesheet'> 
</head>
<body>
<div class='menu'>
    <div class='menu-wraper'>
        <div class='box-usuario'>
            <?php
                if($_SESSION['img'] == ''){
            ?>
                <div class='avatar-usuario'>
                    <i class='fa fa-user'></i>
                </div>
            <?php } else { ?>
                <div class='imagem-usuario'>
                    <img src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $_SESSION['img']; ?>">
                </div>
            <?php } ?>
            <div class='nome-usuario'>
                <p><?php echo $_SESSION['nome'] ?></p>
                <p><?php echo  pegaCargo($_SESSION['cargo']) ?></p>
            </div>
        </div><!-- end box-usuario -->
        <div class="items-menu">
            <h2>Cadastro</h2>
            <a href="">Cadastrar Depoimento</a>
            <a href="">Cadastrar Serviço</a>
            <h2>Gestão</h2>
            <a href="">Listar Depoimentos</a>
            <a href="">Listar Serviços</a>
            <a href="">Listar Slides</a>
            <h2>Administração do Painel</h2>
            <a href="">Editar Usuário</a>
            <a href="">Adicionar Usuário</a>
            <h2>Configuração Geral</h2>
            <a href="">Editar</a>
        </div><!-- end items-menu -->
    </div><!-- end menu-wraper -->

</div><!-- end menu -->
<header>

    <div class='center'>
        <div class='menu-btn'>
            <i class='fa fa-bars'></i>
        </div><!-- end menu-btn -->
        <div class='loggout'>

            <a href="<?php echo INCLUDE_PATH_PAINEL ?>?loggout"><i class='fa fa-window-close'></i></a>

        </div>
        <div class='clear'></div>
    </div>    


</header> 

<div class='content'>

    <div class='box-content left w100'>

                <h2><i class='fa fa-home'></i> Painel de Controle </h2>

                <div class="box-metricas">
                    <div class="box-metrica-single">
                        <div class="box-metrica-wraper">
                            <h2>Usuários Online</h2>
                            <p>10</p>
                        </div>
                    </div><!-- end metrica-single -->
                    <div class="box-metrica-single">
                        <div class="box-metrica-wraper">
                            <h2>Total de Visitas</h2>
                            <p>100</p>
                        </div>
                    </div><!-- end metrica-single -->
                    <div class="box-metrica-single">
                        <div class="box-metrica-wraper">
                            <h2>Visitas Hoje</h2>
                            <p>8</p>
                        </div>
                    </div><!-- end metrica-single -->
                    <div class='clear'></div>
                </div><!-- end box-metricas -->

    </div><!-- end boxcontent -->

    <!--
    <div class='box-content left w100'>

    </div>
    <div class='box-content left w50'>

    </div><!
    <div class='box-content right w50'>

    </div>
    <div class='clear'></div>
    -->

</div><!-- end content -->
    
    <script src='<?php echo INCLUDE_PATH ?>js/jquery.js'></script>
    <script src='<?php echo INCLUDE_PATH_PAINEL ?>js/main.js'></script>

</body>
</html>