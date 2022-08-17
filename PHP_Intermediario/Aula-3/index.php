<?php
    //Durma o codigo por x segundos.
    /*
    sleep(3);

    echo 'um';

    sleep(3);

    echo 'dois';

    sleep(3);

    echo 'tres'
    */


    $nome = 'joao';

    if($nome == 'joao'){
        //continuamos o codigo
        echo 'tudo certo';
    }else{
        die('<div style="width:500px;padding:40px;margin:0 auto;text-align:center;background:red;">O script parou de ser executado</div>');
    }

    sleep(3);

    echo 'um';

    sleep(3);

    echo 'dois';

    sleep(3);

    echo 'tres'

?>