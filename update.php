<?php
    include 'db.php';

    $id_nota = $_GET['id'];

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $titulo_nota = $_POST['titulo_nota'];
        $categoria_nota = $_POST['categoria_nota'];
        $conteudo_nota = $_POST['conteudo_nota'];

        $sql = "UPDATE notas SET titulo_nota='$titulo_nota', categoria_nota='$categoria_nota', conteudo_nota='$conteudo_nota' WHERE id_nota=$id_nota";

        if ($conn->query($sql) === TRUE) {
            echo "Nota atualizada com sucesso";
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }

        $conn ->close();
        header ("Location: read.php");
        exit();
    }

    $sql = "SELECT * FROM notas WHERE id_nota=$id_nota";
    $result = $conn -> query($sql);
    $row = $result -> fetch_assoc();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <form method="POST" action="update.php?id=<?php echo $row['id_nota'];?>">
        Titulo nota <input type="text" name="titulo_nota" required>
        Categoria <input type="text" name="categoria_nota" required> <br>
        <br> Escreva aqui <input type="text" name="conteudo_nota" required> <br>
        <br> <input type="submit" value="Salvar edição da nota">
    </form>
</body>
</html>
