    <?php
        include_once("header.php");
      
     
         $name = $_GET["name"];
         #le o conteudo do arquivo em json
         $json =  file_get_contents('exemplo.json');
         #decodifica o JSON para um array associativo
         $config = json_decode($json, true);
        
          $pasta = dir($name."/");
          $diretorio = $name;
          echo getcwd();
          
            #verificacao se o caminho é um diretorio
       if(is_dir($diretorio))
         {  
            #obtem uma lista de arquivos  e diretorios no diretorio
            $arquivos = scandir($diretorio);

            #ja aqui remove os diretorios '.' e '..' da lista
            $arquivos = array_diff($arquivos, array('.', '..'));

            //Bora interar agora a list de arquivos
            //Estou tentando passar tanto a pasta quanto o nome do arquivo para ser aberto
            
            foreach($arquivos as $arquivo){ 
    ?>
            <br>
               <a href="<?php echo $pasta->path.$arquivo ?>">
    <?php
               echo $arquivo;
    ?>
               </a>
            <br>
    <?php
         }
         }else 
         {
                echo "O diretorio nao existe";
         }

 include_once("footer.php");        
    ?>
