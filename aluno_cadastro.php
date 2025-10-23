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
    <h1>Cadastro de Alunos</h1>

    <div class="conteudo">

    <form action="aluno_cadastro.php" method="post">

        <p>
            Informe o nome do aluno: <br>
            <input type="text" name="alunos">
        </p>

        <p>
            Escolha o curso: <br>
            <input type="radio" name="curso" value="Info"> Técnico em Informática para Internet <br>
            <input type="radio" name="curso" value="Qui"> Técnico em Química <br>
            <input type="radio" name="curso" value="LCHS"> Técnico em Línguagems de Ciências Humanas e Sociais <br>
            <input type="radio" name="curso" value="DS"> Técnico em Desenvolvimento de Sistema <br>
        </p>

        

        <p>
            <input type="submit" value="Cadastrar" name="enviar">
        </p>

    </form>

</body>
</html>