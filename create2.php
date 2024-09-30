<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo_nota = $_POST['titulo_nota'];
    $categoria_nota = $_POST['categoria_nota'];
    $conteudo_nota = $_POST['conteudo_nota'];

    $sql = "INSERT INTO notas (titulo_nota, categoria_nota, conteudo_nota ) VALUES ('$titulo_nota', '$categoria_nota', '$conteudo_nota' )";

    if ($conn->query($sql) === TRUE) {
        echo "Nova nota salva com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>

<form method="post" action="create2.php">
    Titulo nota <input type="text" name="titulo_nota" required>
    Categoria <input type="text" name="categoria_nota" required> <br>
    <br> Escreva aqui <input type="text" name="conteudo_nota" required> <br>
    <br> <input type="submit" value="Salvar">
</form>

<a href="read.php">Ver as notas.</a>