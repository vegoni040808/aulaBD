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
            $cidade=$_REQUEST['cidade'];
            $estado=$_REQUEST['estado'];

        echo "<br> Nome do aluno:  $alunos" ;
        echo "<br> cidade do do aluno: $cidade ";
        echo "<br> estado do do aluno: $estado ";
        }
    ?> 
</body>
</html>