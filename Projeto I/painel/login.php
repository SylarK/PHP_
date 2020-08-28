<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Controle</title>
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>style/font-awesome.min.css">
    <link rel='stylesheet' href='<?php echo INCLUDE_PATH_PAINEL ?>css/styles.css'>
</head>
<body>
    
    <div class="box-login">
        <?php

            if(isset($_POST['acao'])){
                $user = $_POST['user'];
                $password = $_POST['password']; 
                $sql = Mysql::conectar()->prepare("SELECT * FROM `tb_admin.usuarios` WHERE user = ? AND password = ?");
                $sql->execute(array($user, $password));
                if($sql->rowCount() == 1){
                    //Logado
                    $_SESSION['login']      = true;
                    $_SESSION['user']       = $user;
                    $_SESSION['password']   = $password;
                    header('Location: '.INCLUDE_PATH_PAINEL);
                    die();
                }else {
                    //Falhou
                    echo '<div class="error-box"><i class="fa fa-times"> Usuário ou senha inválidos</div>';
                }
            }

        ?>
        <form method='post'>

            <input type="text" name='user' placeholder='Login...' required>
            <input type="password" name='password' placeholder='Password...' required> 
            <input type="submit" name='acao' value='Logar'>

        </form>
    
    </div>

</body>
</html>