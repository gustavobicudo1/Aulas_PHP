<?php
include "conexao.php";
$nome = $_POST["nome"];
$categoria = $_POST["categoria"];
$preco = $_POST["preco"];
$qnt = $_POST["quantidade"];

$sql = "INSERT INTO tb_produtos(nome_produto,qnt,preco,categoria) VALUES 
('$nome','$qnt','$preco','$categoria')";
if($conexao->query($sql)){
    echo "Produto enviado com sucesso";
}else{
    echo "erro";
}
?>