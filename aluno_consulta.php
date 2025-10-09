<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aluno Consulta</title>
</head>
<body>
    <?php
        if(isset($_REQUEST["Enviar"])){
            $alunos=$_REQUEST['alunos'];
            $curso=$_REQUEST['curso'];

        echo "<br> Nome do aluno:  $alunos" ;
        echo "<br> Curso escolhido: $curso ";
        }
    ?> 
</body>
</html>