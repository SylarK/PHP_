<!-- Chamando classe Email -->
<?php
    include('../config.php');
    $data = [];            
    

    $mail = new Email('mail.amadodev.com', 'contato@amadodev.com', 'Lucas');
    $mail->addAdress('contato@amadodev.com', 'Lucas');
    $info = ['subject' => 'Novo e-mail cadastrado no site!', 'body' => $email];
    $mail->formatarEmail($info);
    if($mail->enviarEmail()){
        $data['sucesso'] = true;
    } else {
        $data['erro'] = true;
    }
             
    die(json_encode($data));

?>
<!-- end -->