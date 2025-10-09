<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Professor</title>
</head>
<body>
    <?php
        if(isset($_REQUEST["Enviar"])){
            $professor=$_REQUEST['professor'];

        echo "<br> Nome do professor:  $professor" ; 
        }
    ?> 
</body>
</html>