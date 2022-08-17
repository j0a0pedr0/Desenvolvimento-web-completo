<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <?php
    /*
        if(isset($_GET['acao'])){
            $nome = @$_GET['nome'];
            $email = @$_GET['email'];
            echo $nome;
            echo '<br />';
            echo $email;
        }
    */
        /*
        if(isset($_POST['acao'])){
            echo $_POST['nome'];
        }
        */
        if(isset($_POST['acao'])){
                foreach($_POST['valor'] as $key => $value){
                    echo $value + $value;
                }
        }
    ?>


    <form method="POST">
        <select name="nome">
            <option value="guilherme">guilherme</option>
            <option value="joao">joão</option>
            <option value="paulo">paulo</option>
            <option value="henrique">henrique</option>
        </select>
        <input type="checkbox" name="valor[]" value="10"/>10
        <input type="checkbox" name="valor[]" value="20"/>20
        <input type="checkbox" name="valor[]" value="30"/>30
        <input type="checkbox" name="valor[]" value="40"/>40
        <input type="submit" name="acao" value="Enviar"/>
    </form>
</body>
</html>