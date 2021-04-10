<?php 
require_once ('config.php');?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta CEP</title>
    <script src = "front.js"></script>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <form action="." method="post">

           Digite seu CEP: <input type="text" name="cep" placeholder="Ex: 41927555">    
           <input type="submit" id = "submit" value="Consultar">
           Logradouro: <input type="text" name="logradouro" value = "<?php echo ($logradouro ?? ''); ?>">  
           DDD: <input type="text" name="ddd" value="<?php echo ($ddd ?? ''); ?>">   
                        
    </form>
</body>
</html>
