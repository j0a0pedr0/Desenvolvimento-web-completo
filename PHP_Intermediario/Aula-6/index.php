<?php

    $conteudo = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam facilisis mauris justo, non pretium mauris gravida at. Maecenas bibendum commodo ipsum in eleifend. Duis imperdiet arcu a odio vulputate, et porta urna mollis. Sed sed venenatis lectus. Ut et augue pretium, tincidunt felis eu, consectetur turpis. Nam id lobortis quam. In velit libero, dictum id porttitor id, tempus quis massa. In tortor felis, congue nec pharetra id, pellentesque eget metus. Proin nec leo id lectus ullamcorper volutpat. Morbi nec odio eleifend nulla faucibus consectetur at ac enim. Mauris finibus pulvinar justo. In fermentum eleifend ornare. Cras sodales, justo ac feugiat tempus, lectus erat consectetur quam, eu volutpat augue augue sit amet elit. Sed auctor, ante quis pellentesque consequat, odio purus semper magna, ac mollis nisl tellus at dolor.';

    //Serve para recortar uma String.
    //echo substr($conteudo,0,20);

    $nome = '<h2>Guilherme Cherem Grillo</h2>';

    $nomes = explode(' ',$nome);

    //print_r($nomes);
    $nomes = implode(' ',$nomes);

    echo $nomes;

?>