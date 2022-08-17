<?php
    if(isset($_POST['request']) && $_POST['request'] == 'name_return'){
        $noticias = array('titulo'=>array('noticia1','noticia2'),'conteudo'=>array('conteudo da noticia 1','conteudo da noticia 2'));
        die(json_encode($noticias));
    }
?>