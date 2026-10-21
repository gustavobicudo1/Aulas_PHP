<?php
include "conexao.php";
$nome = $_POST["nome"];
$categoria = $_POST["categoria"];
$preco = $_POST["preco"];
$qnt = $_POST["quantidade"];

$sql = "INSERT INTO tb_produtos(nome,qtd,preco,categoria) VALUES 
('$nome','$qnt','$preco','$categoria')";
$conexao->query($sql);
if($conexao->query($sql)){
    echo "Produto enviado com sucesso";
}else{
    echo "erro";
}
?>