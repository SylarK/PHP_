<?php

    if (isset($_POST['acao_contact'])){
        $emailcontato = $_POST['email_contact'];
        if(filter_var($emailcontato, FILTER_VALIDATE_EMAIL)){

            $nome = $_POST['nome'];
            $telefone = $_POST['telefone'];
            $mensagem = $_POST['mensagem'];
            $assunto = 'Nova mensagem no site';
            $corpo = 'Nome: '.$nome.'<hr>Telefone: '.$telefone.'<hr>Mensagem: '.$mensagem;  


            $info = ['subject' => $assunto, 'body' => $corpo ];

            
            $mailcontact = new Email('mail.amadodev.com', 'contato@amadodev.com', 'ZYP@T+RTw.g[', 'Lucas');
            $mailcontact->addAdress('contato@amadodev.com', 'Lucas');
            $mailcontact->formatarEmail($info);

            if($mailcontact->enviarEmail()){
                echo '<script>alert("Email enviado!")</script>';
            } else {
                echo '<script>alert("Algo deu errado!")</script>';
            }
        } else {
            echo '<script>alert("Você precisa digitar um e-mail válido!")</script>';
        }

    }

?>

<div id='map'>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3826.8011029490326!2d-51.11347068554287!3d-16.434924843411846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTbCsDI2JzA1LjgiUyA1McKwMDYnNDAuNiJX!5e0!3m2!1spt-BR!2sbr!4v1597766516822!5m2!1spt-BR!2sbr" width="100%" height="280px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

    <div class='contato-container'>
        <div class='center'>
            <form method='post' action=''>
                <input type='text' name='nome' placeholder='Nome...' required>
                <div></div>
                <input type='text' name='email_contact' placeholder='Email...' required>
                <div></div>
                <input type='text' name='telefone' placeholder='Telefone...' required>
                <div></div>
                <textarea name='mensagem' placeholder='Sua mensagem...' required></textarea>
                <div></div>
                <input type='submit' name='acao_contact' value='Enviar'> 
            </form>
        </div>
    </div>

</div>

