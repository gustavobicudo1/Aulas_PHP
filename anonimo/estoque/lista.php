<?php
include "conexao.php";
$sql = "SELECT * FROM tb_produtos";
$resultado = $conexao->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista dos produtos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Lista de produtos</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome do Produto</th>
            <th>Categoria</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Ação</th>
        </tr>
        <?php while ($produto = $resultado->fetch(PDO::FETCH_ASSOC)) { ?>
        <tr>
            <td><?php echo $produto["id_produto"]; ?></td>
            <td><?php echo $produto["nome_produto"]; ?></td>
            <td><?php echo $produto["categoria"]; ?></td>
            <td><?php echo $produto["preco"]; ?></td>
            <td><?php echo $produto["qnt"]; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $produto["id_produto"]; ?>">Editar</a>
                |
                <a href="exclude.php?id=<?php echo $produto["id_produto"]; ?>">Excluir</a>
            </td>
        </tr>
        <?php } ?>
    </table>
    <button><a href="interface.html">voltar</a></button>
</body>
</html>