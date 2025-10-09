<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Disciplina</title>
</head>
<body>
    <h1>Cadastro de Disciplina</h1>

    <form action="disciplina_consulta.php">

        <p>
            Informe o nome da disciplina: <br>
            <input type="text" name="disciplina">
        </p>

        <p>
            Escolha o curso: <br>
            <input type="radio" name="curso" value="Info"> Técnico em Informática para Internet <br>
            <input type="radio" name="curso" value="Qui"> Técnico em Química <br>
            <input type="radio" name="curso" value="LCHS"> Técnico em Línguagems de Ciências Humanas e Sociais <br>
            <input type="radio" name="curso" value="DS"> Técnico em Desenvolvimento de Sistema <br>
        </p>

        <p>
            <input type="submit" value="Cadastrar Disciplina" name="Enviar">
        </p>

    </form>

</body>
</html>