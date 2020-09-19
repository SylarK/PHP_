<?php 

    /*
    mkdir - Criar diretorio
    rmdir - Remover diretório
    is_dir - Verifica se diretório existe
    */

    if($handle = opendir('pasta')){
         while(false !== ($file = readdir($handle))){
             echo "$file\n";
             echo'<br />';
         }
    }

    closedir($handle);

    

?>