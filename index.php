<?php

$diretorio  = 'arquivo1';
$pasta = dir("arquivo1/");

if(is_dir($diretorio)){
    #teriamos aqui uma lista de arquivos  e diretorios no diretorio
    $arquivos = scandir($diretorio);
    #ja aqui remove os diretorios '.' e '..' da lista
    $arquivos = array_diff($arquivos, array(',', '..'));

    //Bora interar agora a list de arquivos
    //Estou tentando passar tanto a pasta quanto o nome do arquivo para ser aberto
    foreach($arquivos as $arquivo){ ?>
        <a href="<?php echo $pasta->path.$arquivo ?>"><?php
        echo $arquivo;
        ?></a>
        <br>
   <?php
    }
}else {
    echo "O diretorio nao existe";
}


?>