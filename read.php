<?php 

$sql = "SELECT * FROM notas";

$result = $conn -> query($sql);

if ($result -> num_rows > 0){
    echo "<table border='1'>
        <tr>
            <th> Titulo da nota </th>
            <th> Categoria </th>
            <th> Conteudo </th>
        </tr>";
        while($row = $result -> fetch_assoc()){
            echo "<tr>
                    <td> {$row['titulo_nota']} </td>
                    <td> {$row['categoria_nota']} </td>
                    <td> {$row['conteudo_nota']} </td>
                    <td>
                        <a href='update.php?id={$row['id_nota']}'>Editar</a> |
                        <a href='delete.php?id={$row['id_nota']}'>Excluir</a>
                    </td>
                </tr>";
        }
    echo "</table>";
}else{
    echo "Nenhuma nota encontrada.";
}
$conn -> close();

?>