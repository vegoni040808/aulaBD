<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Alunos</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<?php include "menu.php" ?>
    

    <div class="conteudo">

    <form action="aluno_cadastro1.php" method="post">
    <h2>Cadastro de Alunos</h2>
        <p>
            Informe o nome do aluno: <br>
            <input type="text" name="alunos">
        </p>

        <p>
            Informe a cidade do do aluno: <br>
            <input type="text" name="cidade">
        </p>

        <p>
            Informe o estado: <br>
            <input type="text" name="estado">
        </p>

        

        <p>
            <input type="submit" value="Cadastrar" name="enviar">
        </p>

    </form>

</body>
</html>