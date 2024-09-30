<?php

include 'db.php';

$id_nota = $_GET['id'];

$sql = "DELETE FROM notas WHERE id_nota=$id_nota";

if ($conn->query($sql) === TRUE) {
    echo "Nota excluída com sucesso";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn -> close();

header ("Location: read.php");
exit();
?>
