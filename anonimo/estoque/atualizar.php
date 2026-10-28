<?php
include "conexao.php";
$id = $_POST["id"];
$nome = $_POST["nome"];
$categoria = $_POST["categoria"];
$preco = $_POST["preco"];
$qnt = $_POST["quantidade"];
$sql="UPDATE tb_produtos SET nome_produto='$nome', 
categoria='$categoria',
preco='$preco',
qnt='$qnt',
nome_produto='$nome' WHERE id_produto=$id";
if($conexao->query($sql)){
    echo "<br>","Produto alterado com sucesso";
}else{
    echo "<br>","erro";
}
echo '<br><a href="lista.php">voltar</a>';