<?php
include "conexao.php";
$nome = $_POST["nome"];
$categoria = $_POST["categoria"];
$preco = $_POST["preco"];
$qnt = $_POST["quantidade"];
$imagem = null;
if(isset($_FILES["imagem"])&& $_FILES["imagem"]["error"] == UPLOAD_ERR_OK){
    $extensoesPermitidas = ["jpg","jpeg","png","webp"];
    $extensao=strtolower(pathinfo($_FILES["imagem"]["name"],PATHINFO_EXTENSION));
    if("in_array"($extensao, $extensoesPermitidas)){
        die("Formato não permitido");
    }
    if($_FILES["imagem"]["size"]>2*1024*1024);
    die("Tamanho não suportado");
}
$imagem = uniqid("produto_") . "." . $extensao;

move_uploaded_file($_FILES["imagem"]["tmp_name"],"uploads/" . $imagem);
$sql = "INSERT INTO tb_produtos(nome_produto,qnt,preco,categoria,imagem) VALUES 
('$nome','$qnt','$preco','$categoria','$imagem')";
if($conexao->query($sql)){
    echo "Produto enviado com sucesso";
}else{
    echo "erro";
}
?>
