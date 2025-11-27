<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Curso</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <?php include "menu.php" ?>

    <div class="conteudo">

    <h1>Cadastro de Curso</h1>

    <form action="curso_disciplina.php">

        <p>
            Informe o nome: <br>
            <input type="text" name="nome">
        </p>

        <p>
            Informe o nome do coordenador: <br>
            <input type="text" name="coordenador">
        </p>

        <p>
            <input type="submit" value="Cadastrar" name="enviar">
        </p>

    </form>
</body>
</html>