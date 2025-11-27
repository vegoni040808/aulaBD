<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso Discipina</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <?php include "menu.php" ?>
    <div class="conteudo">
    <?php
        if(isset($_REQUEST["enviar"])){
            include "conexao.php";
        
            $nome=$_REQUEST["nome"];
            $coordenador=$_REQUEST["coordenador"];
        $sql = "insert into cursos (nome, coordenador) values (:nome, :coordenador)";

            $result = $conexao->prepare($sql);
            $result->bindValue(":nome", $nome);
            $result->bindValue(":coordenador", $coordenador); 
            $result->execute();

        echo "<br> Nome do curso:  $nome" ; 
        echo "<br> Nome do coordenador:  $coordenador" ; 
        }
    ?>
</body>
</html>