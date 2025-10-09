<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso Discipina</title>
</head>
<body>
    <?php
        if(isset($_REQUEST["Enviar"])){
            $curso=$_REQUEST['curso'];
            $coordenador=$_REQUEST['coordenador'];

        echo "<br> Nome do curso:  $curso" ; 
        echo "<br> Nome do coordenador:  $coordenador" ; 
        }
    ?>
</body>
</html>