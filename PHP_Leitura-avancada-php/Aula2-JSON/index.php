<?php 
    /*
    $json = '{"a":1,"b":{"0":"joao","1":"Paulo"},"c":3,"d":4,"e":5}';
    $obj = json_decode($json);
    $arr = json_decode($json, true);
    
    $json = json_encode($arr);
    //echo $obj->a;
    echo $json;*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request</title>
</head>
<body>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript">
        $(function(){
            $.ajax({
                url:'request.php',
                dataType:'json'
            }).done(function(data){
                console.log(data.cidade);
                console.log(data.nome);
            })
        });
    </script>
</body>
</html>