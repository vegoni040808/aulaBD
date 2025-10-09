<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disciplina Consutla</title>
</head>
<body>
    <?php
        if(isset($_REQUEST["Enviar"])){
            $disciplina=$_REQUEST['disciplina'];
            $curso=$_REQUEST['curso'];

        echo "<br> Nome da disciplina:  $disciplina" ;
        echo "<br> Curso escolhido: $curso ";
        }
    ?> 
</body>
</html>