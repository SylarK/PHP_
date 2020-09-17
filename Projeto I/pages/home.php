<section class='banner-container'>
    <div class='banner-single'></div>
    <div class='banner-single'></div>
    <div class='banner-single'></div>
        <div class='overlay'></div>
        <div class="center">
           
            <form method='post' action=''>
                <h2>Digite o seu email: </h2>
                <input type='email' name='email' required>
                <input type='submit' name='acao' value='Cadastrar'>
            </form>
        </div>
        <div class='bullets'>

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

        <section class="especialidades">
                <div class="center">
                    <h2 class="title">Especialidades</h2>
                    <div class="w33 left box-especialidade">
                            <h3><i class="<?php echo $infoSite['icone1']; ?>" aria-hidden="true"></i></h3>
                            <h4>CSS3</h4>
                            <p><?php echo $infoSite['descricao1']; ?></p>
                    </div><!--box-especialidade-->
                    <div class="w33 left box-especialidade">
                        <h3><i class="<?php echo $infoSite['icone2']; ?>" aria-hidden="true"></i></h3>
                        <h4>HTML5</h4>
                        <p><?php echo $infoSite['descricao2']; ?></p>
                    </div><!--box-especialidade-->
                    <div class="w33 left box-especialidade">
                        <h3><i class="<?php echo $infoSite['icone3']; ?>" aria-hidden="true"></i></h3>
                        <h4>JavaScript</h4>
                        <p><?php echo $infoSite['descricao3']; ?></p>
                    </div><!--box-especialidade-->
                    
                    <div class="clear"></div>
                </div><!--center-->

        </section><!--especialidades-->

        <section class="extras">

            <div class="center">
                <div id="depoimentos" class="w50 left depoimentos-container">
                    <h2 class="title">Depoimentos dos nossos clientes</h2>
                    <?php
                        $sql = MySql::conectar()->prepare("SELECT * FROM `tb_site.depoimentos` ORDER BY order_id ASC LIMIT 3");
                        $sql->execute();
                        $depoimentos = $sql->fetchAll();
                        foreach ($depoimentos as $key => $value) {
                    ?>
                    <div class="depoimento-single">
                        <p class="depoimento-descricao">"<?php echo $value['depoimento']; ?>"</p>
                        <p class="nome-autor"><?php echo $value['nome']; ?> - <?php echo $value['data']; ?></p>
                    </div><!--depoimento-single-->
                    <?php } ?>
                </div><!--w50-->
                <div id="servicos" class="w50 left servicos-container">
                    <h2 class="title">Serviços</h2>
                    <div class="servicos">
                    <ul>
                        <?php
                        $sql = MySql::conectar()->prepare("SELECT * FROM `tb_site.servicos` ORDER BY order_id ASC LIMIT 3");
                        $sql->execute();
                        $servicos = $sql->fetchAll();
                        foreach ($servicos as $key => $value) {
                        ?>
                        <li><?php echo $value['servico']; ?></li>
                        <?php } ?>
                    </ul>
                    </div><!--servicos-->
                </div><!--w50-->
                <div class="clear"></div>
            </div><!--center-->
        </section><!--extras-->
            <div class='clear'></div> 
        
        </div>
    </section>
