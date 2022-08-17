<?php
/*
    if(is_dir('pasta')){
        echo 'é uma pasta valida';
    }else{
        echo 'não existe ou não é uma pasta';
    }
*/

    //rmdir('pasta');

    if($handle = opendir('pasta')){

        while($file = readdir($handle)) {
            if($file == '.' || $file == '..') {
                continue;
            }

            echo "$file";
            echo '<br />';
        }
        closedir($handle);

    }
?>