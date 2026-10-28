<?php
include"conexao.php";
$id=$_GET["id"];
echo "ID a ser excluido: ",$id;
$sql="DELETE FROM tb_produtos WHERE id_produto=$id";
if($conexao->query($sql)){
    echo "<br>","Produto excluido com sucesso";
}else{
    echo "<br>","erro";
}
echo '<br><a href="lista.php">voltar</a>';
?>