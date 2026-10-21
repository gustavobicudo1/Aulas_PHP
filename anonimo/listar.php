<?php
include "conexao.php";
$sql = "SELECT * FROM tb_produtos";
$resultados = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista produtos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Lista_Produtos</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Produto</th>
            <th>Categoria</th>
            <th>Preço</th>
            <th>Quantidade</th>
        </tr>
        <?php while($produto = $resultados->fetch(PDO::FETCH_ASSOC)){ ?>
        <tr>
            <td><?php echo $produto["id_produto"]?></td>
            <td><?php echo $produto["nome"]?></td>
            <td><?php echo $produto["categoria"]?></td>
            <td><?php echo $produto["preco"]?></td>
            <td><?php echo $produto["qtd"]?></td>
        </tr>
        <?php } ?>
    </table>
    <button type="submit"><a href="interface.html">Voltar</a></button>
</body>
</html>